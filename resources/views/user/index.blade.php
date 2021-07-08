<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="{{ asset('css/style/style.css') }}">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    <x-flash/>

    @include('user.partials.indexPartials.body');
</x-app-layout>
