@extends('home')

@section('title')
SUPER FUN
@endsection

@section('fun')
@include('kitkas.bu')


@if($abc == 'keturi')
<h1>Labai gerai</h1>
@else
<h1>Nelabai gerai</h1>
@endif


@forelse($mas as $value)
<h2>{{$value}}</h2>
@empty
<h2>nikeo nera</h2>
@endforelse


@foreach($mas as $value)
<h2>{{$value}}</h2>
@endforeach
@endsection