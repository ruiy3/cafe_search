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
        .reviews {
            text-align: center;
            padding: 20px 0;
        }
        .atomosphere {
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
        .paginate {
            display: flex;
            justify-content: center;
        }
   
    </style>
    <div class='cafes'>
        <div class='cafe'>
            <h2 class='cafe_location'>{{ __('＜場所＞') }}{{ $cafe->cafe_location }}</h2>
            <h2 class='cafe_explain'>{{ __('＜ここがいい！＞') }}{{ $cafe->cafe_explain }}</h2>
        </div>
        <a href="{{ route('review', [ 'cafe' => $cafe->id ]) }}" class="button">{{ __('レビュー') }}</a>
        <div class='atomosphere'>
            <br><a href="{{ route('cafes.category', [ 'cafe' => $cafe->id ]) }}"><<雰囲気の詳細>></a>
        </div>
    </div>
    <div class="reviews">
        <h1>{{ __('<<レビュー>>') }}</h1>
        @foreach ($reviews as $review)
            <p class='review'>{{ $review->user->name }}{{ __('>>')}}{{ $review->review }}</p>
            <p class='category'>{{ __('雰囲気：')}}{{ $review->category->kind }}</p><br>
        @endforeach
    
        <!-- ページネーションリンクを表示 -->
        <div class='paginate'>
        {{ $reviews->links('pagination::default')}}
    </div>
    </div>
    <div class="footer">
        <a href="/cafes" class="button">戻る</a>
    </div>
</x-app-layout>