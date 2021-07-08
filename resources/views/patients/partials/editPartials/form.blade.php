<form method="POST" action="/patients/edit/{{ $patient->id }}" enctype="multipart/form-data">
@csrf
@method('PATCH')

<!--First Name -->
@include('patients.partials.editPartials.firstNameInput')

<!--Last Name -->
@include('patients.partials.editPartials.lastNameInput')


<!--Email -->
@include('patients.partials.editPartials.emailInput')


<!--Address-->
@include('patients.partials.editPartials.addressInput')


<!--City-->
@include('patients.partials.editPartials.cityInput')


<!--Phone-->
    @include('patients.partials.editPartials.phoneInput')


    <x-button class="ml-4">
        {{ __('Edit patient') }}
    </x-button>
</form>
