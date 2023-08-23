<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cafe') }}
        </h2>
    </x-slot>
    <style>
        .cafe {
            text-align: center;
            padding: 20px 0;
        }
    </style>
    <div class='cafes'>
        @foreach ($cafes as $cafe)
            <div class='cafe'>
                <h2 class='cafe_name'>{{ __('＜cafe名＞') }}{{$cafe->cafe_name }}</h2>
                <p class='cafe_location'>{{ __('＜場所＞') }}{{ $cafe->cafe_location }}</p>
                <p class='cafe_explain'>{{ __('＜ここがいい！＞') }}{{ $cafe->cafe_explain }}</p>
            </div>
        @endforeach
    </div>
    
</x-app-layout>