<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('<Cafe>') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="{{ asset('css/comment_styles.css') }}">
    <div class="show_comments">
        <div class="reviews">
        <h1>{{ __('<<レビュー>>') }}</h1><br>
        <a href="{{ route('comment.write', [ 'cafe' => $cafe->id, 'review' => $review->id ]) }}"><p class='review'>{{ $review->user->name }}{{ __('>>')}}{{ $review->review }}</p></a>
        <p class='category'>{{ __('雰囲気：')}}{{ $review->category->kind }}</p>
        </div>
        <div class="comments">
        <h1>{{ __('<<コメント>>') }}</h1><br>
        @foreach ($comments as $comment)
            <p class='comment'>{{ $review->user->name }}{{ __('>>')}}{{ $comment->comment }}</p>
        @endforeach
        </div>
    </div>
    <div class="footer">
        <a href="{{ route('cafes.cafe', [ 'cafe' => $cafe->id ]) }}" class="button">戻る</a>
    </div>
</x-app-layout>