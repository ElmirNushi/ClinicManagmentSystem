<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="{{ asset('css/diagnoses/index.css') }}">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
              rel="stylesheet"/>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Diagnosing History') }}

        </h2>
    </x-slot>

    <style>
        .tooltip .tooltiptext {
            visibility: hidden;
            width: 150px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 4px;
            padding: 1px 0;

            /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
        }
    </style>

    <x-flash/>
    <div class="mt-5">
        <a href="/diagnostic/history/{{ $patient->id }}/downloadPdf">
            <div class="">
                <i class="fa fa-file-pdf-o tooltip" style="font-size: 22px; margin-left: 375px; ">
                    <span class="tooltiptext" style="font-family: Bahnschrift; font-size: 15px; padding: 3px">Download as PDF</span>
                </i>
            </div>

        </a>
        <div>
    @include('diagnoses.partials.diagnoses', compact($patient))
</x-app-layout>
