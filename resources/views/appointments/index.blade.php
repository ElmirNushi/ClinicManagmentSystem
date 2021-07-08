<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="{{ asset('css/appointments/index.css') }}">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Appointments') }}
        </h2>
    </x-slot>
    <x-flash/>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                @include('appointments.partials.indexPartials.bodyHeader')

                @include('appointments.partials.indexPartials.body')

            </div>
        </div>
    </div>
</x-app-layout>
