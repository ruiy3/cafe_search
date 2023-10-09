<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('<Cafe>') }}{{ $cafe->cafe_name }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="{{ asset('css/review_styles.css') }}">
    <div class='create'>
        <form action="{{ route('review.store', [ 'cafe' => $cafe->id ]) }}" method="POST">
            @csrf
            <input type="hidden" name="review[user_id]" value="{{ Auth::user()->id }}">
            <input type="hidden" name="review[cafe_id]" value="{{ $cafe->id }}">
            <div class="review">
                <h2>-レビュー-</h2>
                <textarea name="review[review]" placeholder="コメント"></textarea>
            </div>
            
            <div class="category">
                <h2>-雰囲気-</h2>
                <select name="review[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->kind }}</option>
                    @endforeach
                </select>
                <div class='atomosphere'>
                    <a href="{{ route('cafes.category', [ 'cafe' => $cafe->id ]) }}" class="button">{{ __('雰囲気の詳細') }}</a>
                </div>
            </div>
            <input type="submit" class="button" value="投稿"/>
        </form>
        <div class="footer">
            <a href="/cafes/{{ $cafe->id }}" class="button">戻る</a>
        </div>
    </div>
</x-app-layout>