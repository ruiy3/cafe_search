<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('<Cafe>') }}{{ $cafe->cafe_name }}
        </h2>
    </x-slot>
    <style>
        .cafe {
            text-align: center;
            padding: 20px 0;
        }
        .cafes {
            text-align: center;
            padding: 20px 0;
        }
        .footer {
            text-align: center;
            padding: 20px 0;
        }
        .create {
            text-align: center;
            padding: 20px 0;
        }
        .review {
            text-align: center;
            padding: 20px 0;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #888;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
        }
        .button:hover {
            background-color: #555;
        }
    </style>
    <div class='cafes'>
        <div class='cafe'>
            <h2 class='cafe_location'>{{ __('＜場所＞') }}{{ $cafe->cafe_location }}</h2>
            <h2 class='cafe_explain'>{{ __('＜ここがいい！＞') }}{{ $cafe->cafe_explain }}</h2>
        </div>
        <a href="{{ route('review', [ 'cafe' => $cafe->id ]) }}" class="button">{{ __('レビュー') }}</a>
    </div>
    <div class="review">
        <h1>{{ __('<review>') }}</h1>
        @foreach ($cafe->reviews as $review)
            <p class='cafe_'>{{ $review->user->name }}{{ __('>>')}}{{ $review->review }}</p>
        @endforeach
    </div>
    <div class="footer">
        <a href="/cafes" class="button">戻る</a>
    </div>
</x-app-layout>