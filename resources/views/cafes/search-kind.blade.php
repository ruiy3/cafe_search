<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cafe_Atomosphere_Search') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="{{ asset('css/search_kind_styles.css') }}">
    <div class='search'>
            <form action="{{ route('cafes.kind-search-results') }}" method="GET">
            <input type="text" name="query" placeholder="検索キーワード">
            <button type="submit">検索</button>
        </form>
    </div>
</x-app-layout>