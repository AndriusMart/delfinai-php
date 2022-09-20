<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use App\Models\Mechanic;
use Illuminate\Http\Request;
use Image;

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trucks = Truck::all();
        $mechanics = Mechanic::orderBy('surname', 'asc')->get();

        return view('truck.index', [
            'trucks' => $trucks,
            'mechanics' => $mechanics
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mechanics = Mechanic::orderBy('name')->orderBy('surname', 'desc')->get();
        //$mechanics = $mechanics->sortBy('name'); // paciam lara negerai, nebent duombazeje negalima

        return view('truck.create', [
            'mechanics' => $mechanics
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
        $truck = new Truck;

        if ($request->file('photo')) {

            $photo = $request->file('photo');
            $ext = $photo->getClientOriginalExtension();
            $name = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
            $file = $name . '-' . rand(100000, 999999) . '.' . $ext;
            $Image = Image::make($photo)->pixelate(12);
            $Image->save(public_path() . '/trucks/' . $file);
            // $photo->move(public_path().'/trucks', $file);
            $truck->photo = asset('/trucks') . '/' . $file;
        }


        $truck->maker = $request->maker;
        $truck->plate = $request->plate;
        $truck->make_year = $request->make_year;
        $truck->mechanic_notices = $request->mechanic_notices;
        $truck->mechanic_id = $request->mechanic_id;
        $truck->save();
        return redirect()->route('t_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function show(Truck $truck)
    {
        return view('truck.show', ['truck' => $truck]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function edit(Truck $truck)
    {
        $mechanics = Mechanic::all();
        return view('truck.edit', [
            'mechanics' => $mechanics,
            'truck' => $truck,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Truck $truck)
    {
        $truck->maker = $request->maker;
        $truck->plate = $request->plate;
        $truck->make_year = $request->make_year;
        $truck->mechanic_notices = $request->mechanic_notices;
        $truck->mechanic_id = $request->mechanic_id;

    
        if($request->delete_photo){
            unlink(public_path().'/trucks/' .pathinfo($truck->photo, PATHINFO_FILENAME).'.'.pathinfo($truck->photo, PATHINFO_EXTENSION));
            $truck->photo = null;
        }
        if ($request->file('photo')) {
            if($truck->photo){
                unlink(public_path().'/trucks/' .pathinfo($truck->photo, PATHINFO_FILENAME).'.'.pathinfo($truck->photo, PATHINFO_EXTENSION));
            }
            $photo = $request->file('photo');
            $ext = $photo->getClientOriginalExtension();
            $name = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
            $file = $name . '-' . rand(100000, 999999) . '.' . $ext;
            $Image = Image::make($photo)->pixelate(12);
            $Image->save(public_path() . '/trucks/' . $file);
            // $photo->move(public_path().'/trucks', $file);
            $truck->photo = asset('/trucks') . '/' . $file;
        }


        $truck->save();
        return redirect()->route('t_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function destroy(Truck $truck)
    {
        if($truck->photo){
            unlink(public_path().'/trucks/' .pathinfo($truck->photo, PATHINFO_FILENAME).'.'.pathinfo($truck->photo, PATHINFO_EXTENSION));
        }

        $truck->delete();
        return redirect()->route('t_index');
    }
}