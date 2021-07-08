<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"/>
<div class="container">
    <div class="row">

        <p class="text-xl">Editing appointment
            for {{ $appointment->patient->first_name }} {{ $appointment->patient->last_name }}</p>

        @include('appointments.partials.editPartials.form')
    </div>
</div>
