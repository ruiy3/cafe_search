<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('<Cafe>') }}{{ $cafe->cafe_name }}
        </h2>
    </x-slot>
    <style>
        .create {
            text-align: center;
            padding: 40px 0;
        }
        .footer {
            text-align: center;
            padding: 50px 0;
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
    <div class='create'>
        <form action="{{ route('comment.store', [ 'cafe' => $cafe->id, 'review' => $review->id ]) }}" method="POST">
            @csrf
            <input type="hidden" name="review_id" value="{{ $review->id }}">
            <textarea name="comment" rows="4" cols="50"></textarea><br>
            <input type="submit" class="button" value="コメント投稿"/>
        </form>
        <div class="footer">
            <a href="/cafes/{{ $cafe->id }}" class="button">戻る</a>
        </div>
    </div>
</x-app-layout>