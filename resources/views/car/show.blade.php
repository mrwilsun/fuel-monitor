@extends('app')

@section('content')
    <div>
        {{$car->id}}
        {{$car->brand}}
        {{$car->model}}
        {{$car->license_plate}}
    </div>
@endsection