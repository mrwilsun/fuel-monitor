@extends('app')

@section('content')

	<div>
		<div class="mx-10">
			<table class="min-w-full">
				<thead class="border-b">
					<tr>
						<th scope="col" class="text-left text-sm font-medium text-gray-900 px-6 py-4">#</th>
						<th scope="col" class="text-left text-sm font-medium text-gray-900 px-6 py-4">Brand</th>
						<th scope="col" class="text-left text-sm font-medium text-gray-900 px-6 py-4">Model</th>
						<th scope="col" class="text-left text-sm font-medium text-gray-900 px-6 py-4">License</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($cars as $car)
						<tr class="">
							<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$car->id}}</td>
							<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$car->brand}}</td>
							<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$car->model}}</td>
							<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$car->license_plate}}</td>
							<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
								<a href="{{route('show',['id'=>$car->id])}}" class="">
									<i class="fa-regular fa-phone"></i>
								</a>
							</td>
							<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><a href="">Edit</a></td>
							<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><a href="{{route('delete',['id'=>$car->id])}}">Delete</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection