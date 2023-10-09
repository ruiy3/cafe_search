<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cafes') }}
        </h2>
    </x-slot>

    <div class="cafes">
        <link rel="stylesheet" href="{{ asset('css/index_styles.css') }}">
        <div class="custom-grid">
            @forelse ($cafes as $cafe)
                <div class="custom-box">
                    <div class="cafe">
                        <a href="{{ route('cafes.cafe', ['cafe' => $cafe->id]) }}"><h2 class="text-lg font-semibold text-gray-800">{{ $cafe->cafe_name }}</h2> </a>
                        <p class="text-sm text-gray-600">{{ $cafe->location }}</p>

                        <a href="{{ route('cafes.cafe', ['cafe' => $cafe->id]) }}" class="mt-2 block text-blue-500 hover:underline">{{ $cafe->cafe_location }}</a>
                    </div>
                </div>
            @empty
                <p class="text-gray-600">{{ __('No cafes found.') }}</p>
            @endforelse
        </div>

        <div class="paginate">
            {{ $cafes->links('pagination::default') }}
        </div>
    </div>
</x-app-layout>