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
        .category {
            text-align: center;
            padding: 40px 0;
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
                <br>
                <a href="{{ route('cafes.category', [ 'cafe' => $cafe->id ]) }}"><<雰囲気の詳細>></a>
            </div>
            <input type="submit" class="button" value="投稿"/>
        </form>
        <div class="footer">
            <a href="/cafes/{{ $cafe->id }}" class="button">戻る</a>
        </div>
    </div>
</x-app-layout>