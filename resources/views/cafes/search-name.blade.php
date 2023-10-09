<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('～カフェ名検索～') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="{{ asset('css/search_name_styles.css') }}">
    <div class='search'>
            <form action="{{ route('cafes.name-search-results') }}" method="GET">
            <input type="text" name="query" placeholder="検索キーワード">
            <button type="submit">検索</button>
        </form>
    </div>
</x-app-layout>