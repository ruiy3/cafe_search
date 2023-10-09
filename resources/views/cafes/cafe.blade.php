<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('<Cafe>') }}{{ $cafe->cafe_name }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="{{ asset('css/cafe_styles.css') }}">
    <div class='cafes'>
        <div class='cafe'>
            <h2 class='cafe_explain'>{{ $cafe->cafe_explain }}</h2>
        </div>
        <a href="{{ route('review', [ 'cafe' => $cafe->id ]) }}" class="button">{{ __('レビューを書く') }}</a>
        <div class='atomosphere'>
            <br><a href="{{ route('cafes.category', [ 'cafe' => $cafe->id ]) }}" class="button">{{ __('雰囲気の詳細') }}</a>
        </div>
    <h1 class="fancy-text">{{ __('<<レビュー>>') }}</h1>
    </div>
    <div class="custom-grid">
        @foreach ($reviews as $review)
            <div class="reviews">
            <a href="{{ route('comment.write', [ 'cafe' => $cafe->id, 'review' => $review->id ]) }}"><p class='review'>{{ $review->user->name }}{{ __('>>')}}{{ $review->review }}</p></a><br>
            <p class='category'>{{ __('雰囲気：')}}{{ $review->category->kind }}</p><br>
            @foreach ($comments as $comment)
                @if ($comment->review_id == $review->id)
                    <a href="{{ route('cafes.comment', [ 'cafe' => $cafe->id, 'review' => $review->id ]) }}" class="comment"><p>{{ __('コメントを見る') }}</p></a>
                    @break  <!-- 条件が満たされたらループを抜ける -->
                @endif
            @endforeach
            </div>
        @endforeach
    </div>
    <!-- ページネーションリンクを表示 -->
    <div class='paginate'>
        {{ $reviews->links('pagination::default')}}
    </div>
    <div class="footer">
        <a href="/cafes" class="button">戻る</a>
    </div>
</x-app-layout>