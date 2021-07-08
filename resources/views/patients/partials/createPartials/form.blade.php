<form method="POST" action="/patients/add" enctype="multipart/form-data">
@csrf

<!--First Name -->
@include('patients.partials.createPartials.firstNameInput')

<!--Last Name -->
@include('patients.partials.createPartials.lastNameInput')


<!--Email -->
@include('patients.partials.createPartials.emailInput')


<!--Address-->
@include('patients.partials.createPartials.addressInput')

<!--City-->
@include('patients.partials.createPartials.cityInput')


<!--Phone-->
    @include('patients.partials.createPartials.phoneInput')


    <x-button class="ml-4">
        {{ __('Add patient') }}
    </x-button>
</form>
