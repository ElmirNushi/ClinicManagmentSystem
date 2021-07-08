<form method="POST" action="/diagnostic/add" enctype="multipart/form-data">
    @csrf


    <p class="block font-medium text-sm text-gray-700">Select Patient: </p>

    <!--DropDown -->
    @include('diagnoses.partials.createPartials.dropDown')

<!--Type of disease -->
    @include('diagnoses.partials.createPartials.typeInput')


<!--Diagnose -->
    @include('diagnoses.partials.createPartials.diagnoseInput')

    @include('diagnoses.partials.createPartials.therapyInput')

    <x-button class="ml-4">
        {{ __('Add diagnose') }}
    </x-button>
</form>
