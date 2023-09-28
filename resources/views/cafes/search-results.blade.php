<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('<Cafes>') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="{{ asset('css/search_results_styles.css') }}">
   <div class="cafes">
        @if(isset($message))
            <p>{{ $message }}</p>
        @else
            @foreach($cafes as $cafe)
                <div class="cafe">
                    <a href="{{ route('cafes.cafe', [ 'cafe' => $cafe->id ]) }}">
                        <h3>{{ __('＜cafe名＞') }}{{ $cafe->cafe_name }}</h3>
                    </a>
                </div>
            @endforeach
        @endif
    </div>
    <div class='paginate'>
        {{ $cafes->links('pagination::default')}}
    </div>
    <div class="footer">
        <a href="/cafes" class="button">戻る</a>
    </div>
</x-app-layout>