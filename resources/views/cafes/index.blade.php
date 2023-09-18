<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cafe') }}
        </h2>
    </x-slot>
    <style>
        .cafe {
            text-align: center;
            padding: 20px 0;
        }
        .paginate {
            display: flex;
            justify-content: center;
        }
   
    </style>
    <div class='cafes'>
        @foreach ($cafes as $cafe)
            <div class='cafe'>
                <a href="{{ route('cafes.cafe', [ 'cafe' => $cafe->id ]) }}"><h2 class='cafe_name'>{{ __('＜cafe名＞') }}{{ $cafe->cafe_name }}</h2></a>
            </div>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $cafes->links('pagination::default')}}
    </div>
</x-app-layout>