@extends('layouts.app')



@section('content')

@extends('layouts.sidebar')




<div class="block mx-auto my-12 p-8 bg-white w-2/3 border border-gray-200 rounded-lg shadow-lg">

<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Juegos en Venta</h2>

        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach($productos as $producto)
            <div class="group relative">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                    <img src="{{ $producto->image }}" alt="{{ $producto->name }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                {{ $producto->name }}
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">{{ $producto->description }}</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">{{ $producto->price }}</p>
                </div>
            </div>
            @endforeach

            <!-- More products... -->
        </div>
    </div>
</div>
</div>
@endsection
