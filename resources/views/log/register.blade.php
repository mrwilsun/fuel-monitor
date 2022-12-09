@extends('app')

@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-gray-300 p-6 rounded-lg ">
        <form action="{{route('register_log')}}" method="post" >
            @csrf
            <div class="mb-4">
                <label for="car" class="sr-only">Brand</label>
                <select name="car" id="car" placeholder="Select a car"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg" >
                    @foreach ($cars as $car)
                    <option value="{{$car->id}}">
                        {{$car->license_plate}}
                        {{$car->brand}}
                        {{$car->model}}
                        {{$car->color}}
                    </option>     
                    @endforeach
            
                </select>
                @error('car')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="mileage" class="sr-only">Mileage</label>
                <input type="number" name="mileage" id="mileage" placeholder="Mileage"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('mileage')}}">
            
                @error('mileage')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="amount" class="sr-only">Money</label>
                <input type="number" name="amount" id="amount" placeholder="Amount of fuel purchased"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('amount_purchased')}}"
                min="1.00" step="0.01">

                @error('amount_purchased')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="volume" class="sr-only">Money</label>
                <input type="number" name="volume" id="volume" placeholder="Volume of fuel purchased"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('volume_purchased')}}">

                @error('volume_purchased')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4
                py-3 rounded font-medium w-full">
                    Add Log</button>
            </div>
        </form>
    </div>
</div>
@endsection