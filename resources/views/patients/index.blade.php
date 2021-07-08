<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="{{ asset('css/style/style.css') }}">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Patients') }}
        </h2>
    </x-slot>
    <x-flash/>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    @include('patients.partials.indexPartials.bodyHeader')

                <hr/>
                <hr/>
                <hr/>
                <hr/>
                <hr/>

                @include('patients.partials.indexPartials.searchBar')

                @include('patients.partials.indexPartials.table')

            </div>
        </div>
    </div>
</x-app-layout>
