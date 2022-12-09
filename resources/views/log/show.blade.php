@extends('app')

@section('content')
<div>
    {{$log->id}}
    {{$log->mileage}}
    {{$log->amount_purchased}}
    {{$log->volume_purchased}}
</div>
@endsection