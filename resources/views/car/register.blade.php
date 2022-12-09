@extends('app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-gray-300 p-6 rounded-lg ">
            <form action="{{route('register')}}" method="post" >
                @csrf
                <div class="mb-4">
                    <label for="brand" class="sr-only">Brand</label>
                    <input type="text" name="brand" id="brand" placeholder="Brand name"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('brand')}}">

                    @error('brand')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="model" class="sr-only">Model</label>
                    <input type="text" name="model" id="model" placeholder="Model"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('model')}}">
                
                    @error('model')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="license" class="sr-only">License Plate</label>
                    <input type="text" name="license" id="license" placeholder="License plate number"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('license')}}">

                    @error('license')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="engine_capacity" class="sr-only">Engine Capacity</label>
                    <input type="text" name="engine_capacity" id="engine_capacity" placeholder="Your cars fuel capacity"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('engine_capacity')}}">

                    @error('engine_capacity')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>    
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="color" class="sr-only">Color</label>
                    <input type="text" name="color" id="color" placeholder="Color of car"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('color')}}">

                    @error('color')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4
                    py-3 rounded font-medium w-full">
                        Add Car</button>
                </div>
            </form>
        </div>
    </div>
 
@endsection