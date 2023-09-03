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
        .home {
            text-align: center;
            padding: 20px 0;
        }
        .home-button {
            padding: 12px 24px;
            font-size: 16px;
            background-color: #dcdcdc;
            color: Black;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }
        .paginate {
            display: flex;
            justify-content: center;
        }
   
    </style>
    <div class='cafes'>
        @foreach ($cafes as $cafe)
            <div class='cafe'>
                <a href='/cafes/{{ $cafe->id }}'><h2 class='cafe_name'>{{ __('＜cafe名＞') }}{{ $cafe->cafe_name }}</h2></a>
                {{--<p class='cafe_location'>{{ __('＜場所＞') }}{{ $cafe->cafe_location }}</p>
                <p class='cafe_explain'>{{ __('＜ここがいい！＞') }}{{ $cafe->cafe_explain }}</p>
                <a href='/cafes/review'><p class='cafe_'>{{ __('(レビューする)') }}</p></a>--}}
            </div>
        @endforeach
    </div>
    <div class='home'>
        <a type=button href="{{ route('index') }}" class="home-button">Home</a>
    </div>
    <div class='paginate'>
        {{ $cafes->links('pagination::default')}}
    </div>
</x-app-layout>