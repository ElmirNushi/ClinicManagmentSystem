<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
                      rel="stylesheet"/>
                <div class="p-6 bg-red-500 border-b border-gray-200">
                    <h1 class="text-l font-bold" style="color: white; font-size: 20px;"> Welcome
                        back, {{ auth()->user()->name }} ! </h1>
                </div>

                <hr/>
                <hr/>
                <hr/>
                <hr/>
                <hr/>

                <h2 class="mt-5 ml-5" style="font-size: 20px; font-family: Bahnschrift">Patient Info: </h2>
                <div class="p-6 bg-white border-b border-gray-200 flex">
                    <i class="fa fa-user-o mr-2 mb-2" aria-hidden="true"
                       style="font-size: 30px; color: #5ea4f3;"></i>
                    <h1 style="font-size: 16px;" class="mt-1"> Current Total Patients: </h1>
                    <p class="p-1" style="font-size: 16px; font-weight: bolder; "> {{ $patientCount }} </p>

                    <div style="margin-left: 200px;" class="flex">
                        <i class="fa fa-user-o mr-2 mb-2" aria-hidden="true"
                           style="font-size: 30px; color: blue;"></i>
                        <h1 style="font-size: 16px; " class="mt-1"> Patients added today: </h1>
                        <p class="p-1"
                           style="font-size: 16px; font-weight: bolder; "> {{ $patientsAddedToday }} </p>
                    </div>

                    <div style="margin-left: 200px;" class="flex">
                        <i class="fa fa-user-o mr-2 mb-2" aria-hidden="true"
                           style="font-size: 30px; color: red;"></i>
                        <h1 style="font-size: 16px; " class="mt-1"> Patients added this month: </h1>
                        <p class="p-1" style="font-size: 16px; font-weight: bolder; "> {{ $patientsAddedThisMonth}} </p>
                    </div>
                </div>

                <h2 class="mt-5 ml-5" style="font-size: 20px; font-family: Bahnschrift">Diagnoses Info: </h2>
                <div class="p-6 bg-white border-b border-gray-200 flex">
                    <i class="fa fa-tasks mr-2 mb-2" aria-hidden="true"
                       style="font-size: 30px; color: red;"></i>
                    <h1 style="font-size: 16px; " class="mt-1"> Current Total Diagnoses: </h1>
                    <p class="p-1" style="font-size: 16px; font-weight: bolder"> {{ $diagnosesCount }} </p>

                    <div style="margin-left: 180px;" class="flex">
                        <i class="fa fa-tasks mr-2 mb-2" aria-hidden="true"
                           style="font-size: 30px; color: blue;"></i>
                        <h1 style="font-size: 16px; " class="mt-1"> Diagnoses added today: </h1>
                        <p class="p-1" style="font-size: 16px; font-weight: bolder; "> {{ $diagnosesAddedToday }} </p>
                    </div>

                    <div style="margin-left: 180px;" class="flex">
                        <i class="fa fa-tasks mr-2 mb-2" aria-hidden="true"
                           style="font-size: 30px; color: green;"></i>
                        <h1 style="font-size: 16px; " class="mt-1"> Diagnoses added this month: </h1>
                        <p class="p-1"
                           style="font-size: 16px; font-weight: bolder; "> {{ $diagnosesAddedThisMonth }} </p>
                    </div>
                </div>

                <h2 class="mt-5 ml-5" style="font-size: 20px; font-family: Bahnschrift">Appointment Info: </h2>

                <div class="p-6 bg-white border-b border-gray-200 flex">
                    <i class="fa fa-clock-o mr-2 mb-2" aria-hidden="true"
                       style="font-size: 30px; color: green;"></i>
                    <h1 style="font-size: 16px;" class="mt-1"> Current Total Appointments: </h1>
                    <p class="p-1" style="font-size: 16px; font-weight: bolder"> {{ $appointmentCount }} </p>

                    <div style="margin-left: 160px;" class="flex">
                        <i class="fa fa-clock-o mr-2 mb-2" aria-hidden="true"
                           style="font-size: 30px; color: red;"></i>
                        <h1 style="font-size: 16px; " class="mt-1"> Appointments scheduled for today: </h1>
                        <p class="p-1" style="font-size: 16px; font-weight: bolder; "> {{ $appointmentsForToday }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
