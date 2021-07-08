<form method="POST" action="/appointments/edit/{{ $appointment->id }}"
      enctype="multipart/form-data">
@csrf
@method('PATCH')

<!--Time of the appointment -->
@include('appointments.partials.editPartials.timeInput')

<!--Date of the appointment -->
@include('appointments.partials.editPartials.dateInput')


<!--Reason of the appointment -->
    @include('appointments.partials.editPartials.reasonInput')

    <x-button class="ml-4">
        {{ __('Edit appointment') }}
    </x-button>

</form>
