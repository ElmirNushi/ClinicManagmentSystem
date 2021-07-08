<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Diagnosing') }}
        </h2>
    </x-slot>
    <x-flash/>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                @include('diagnoses.partials.indexPartials.bodyHeader')

                <div>
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">

                                @include('diagnoses.partials.createPartials.form')

                            </div>
                        </div>
                    </div>
                </div>

                @include('diagnoses.partials.indexPartials.showHistory')

            </div>
        </div>
    </div>

</x-app-layout>
