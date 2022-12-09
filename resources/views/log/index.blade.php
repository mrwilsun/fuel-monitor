@extends('app')

@section('content')
    @foreach ($logs as $log)
    <table>
        <tr>
            <th>Mileage</th>
            <th>Amount</th>
            <th>Volume</th>
        </tr>
        <tr class="">
            <td class="p-3">{{$log->mileage}}</td>
            <td class="p-3">{{$log->amount_purchased}}</td>
            <td class="p-3">{{$log->volume_purchased}}</td>
            <td class="p-3"><a href="{{route('show_log',['id'=>$log->id])}}">View</a></td>
        </tr>
    </table>
    @endforeach
@endsection