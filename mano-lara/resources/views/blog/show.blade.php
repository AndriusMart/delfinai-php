@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="header-back">
                        <h2>Post</h2>
                        <form action="{{route('back')}}" method="post">
                            @csrf
                            <button type="submit" class="close"><span class="sr-only">Close</span></button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <div class="posts-list">
                        <div class="content">
                            <h5>{{$blog->title}}</h5>
                            <p>{{$blog->post}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection