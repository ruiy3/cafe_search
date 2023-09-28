<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cafe') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="{{ asset('css/index_styles.css') }}">
    <div class='cafes'>
        @foreach ($cafes as $cafe)
            <div class='cafe'>
                <a href="{{ route('cafes.cafe', [ 'cafe' => $cafe->id ]) }}"><h2 class='cafe_name'>{{ __('＜cafe名＞') }}{{ $cafe->cafe_name }}</h2></a>
            </div>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $cafes->links('pagination::default')}}
    </div>
</x-app-layout>