<form method="POST" action="/appointments/create" enctype="multipart/form-data">
@csrf


<!--Dropdown -->
@include('appointments.partials.createPartials.dropDownMenu')

<!--Time of the appointment -->
@include('appointments.partials.createPartials.timeInput')


<!--Date of the appointment -->
@include('appointments.partials.createPartials.dateInput')


<!--Reason of the appointment -->
    @include('appointments.partials.createPartials.reasonInput')


    <x-button class="ml-4">
        {{ __('Add appointment') }}
    </x-button>
</form>
