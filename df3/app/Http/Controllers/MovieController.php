<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Tag;
use Illuminate\Http\Request;
use Image;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('movie.index', [
            'movies' => Movie::orderBy('updated_at', 'desc')->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movie.create', [
            'tags' => Tag::orderBy('title')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'title' => 'required|min:3',
                'price' => 'required|numeric',
                'photo.*' => 'sometimes|required|mimes:jpg|max:5000',
            ],
            //vertimas i lietuviu (no needed tbh)
            [
                'title.required' => 'Nera pavadinimo',
                'title.min' => 'Pavadinimas turi buti ilgesnis nei 3 raides',
                'price.required' => 'Nera kainos',
                'price.numeric' => 'kaina turi buti skaiciai',
                'photo.required' => 'Nera nuotraukos',
            ],
        );


        Movie::create([
            'title' => $request->title,
            'price' => $request->price,
        ])->addImages($request->file('photo'))->addTags($request->tag);

        return redirect()->route('m_index')->with('ok', 'New movie created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view(
            'movie.show',
            [
                'movie' => $movie,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view(
            'movie.edit',
            [
                'movie' => $movie,
                'tags' => Tag::orderBy('title')->get(),
                'checkedTags' => $movie->getPivot->pluck('tag_id')->all(),
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate(
            [
                'title' => 'required|min:3',
                'price' => 'required|numeric',
                'photo.*' => 'sometimes|required|mimes:jpg|max:5000',
            ]
        );



        $movie->update([
            'title' => $request->title,
            'price' => $request->price,
        ]);
        $movie->removeImages($request->delete_photo)->addImages($request->file('photo'));
        $title = $movie->title;


        return redirect()->route('m_index')->with('ok', $title . ' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {

        if ($movie->getPhotos()->count()) {
            $delIds = $movie->getPhotos()->pluck('id')->all();
            $movie->removeImages($delIds);
        }

        $title = $movie->title;
        $movie->delete();
        return redirect()->route('m_index')->with('ok', $title . ' deleted');
    }
}
