@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="header-back">
                        <h2>Mechanic</h2>
                        <a href="{{route('m_index')}}" class="close"><span class="sr-only">Close</span></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="posts-list">
                        <div class="content">
                            <h5>{{$mechanic->name}}</h5>
                            <h5>{{$mechanic->surname}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection