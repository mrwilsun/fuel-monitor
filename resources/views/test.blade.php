@extends('app')

@section('content')
{{-- Hero section --}}
<section id="hero">
    {{-- Flex Container --}}
    <div class="container flex flex-col-reverse px-4 mx-auto 
    mt-10 space-y-12 md:space-y-0 md:flex-row">
        {{-- Whats different --}}
        <div class="flex flex-col space-y-12 md:w-1/2">
            <h2 class="max-w-md text4xl font-bold text-center md:text-left">
                What's different about Manage?
            </h2>
            <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Labore, neque! Unde atque asperiores ad expedita ipsa vero vel, 
                cupiditate perspiciatis sapiente velit est illum eaque nam rerum sint, voluptatem aperiam!
            </p>
        </div>
        {{-- Numbered List --}}
        <div class="flex flex-col space-y-8 md:w-1/2">
            {{-- List Item 1 --}}
            <div class="flex flex-col space-y-3 md:space-y-0 
            md:space-x-6 md:flex-row">
            {{-- Heading --}}
            <div class="rounded-l-full bg-brightRedSupLight 
            md:bg-transparent">
                <div class="flex items-center space-x-2">
                    <div class="px-4 py-2 text-white rounded-full 
                    md:py-1 bg-brightRed">
                        01
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
</section>

@endsection