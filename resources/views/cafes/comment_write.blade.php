<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('<Cafe>') }}{{ $cafe->cafe_name }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="{{ asset('css/comment_write_styles.css') }}">
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