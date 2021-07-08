@if(isset($stylesheet_link))
    <style>
        {{file_get_contents($stylesheet_link)}}
    </style>
@endif


<div class="mt-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

                <p class="text-2xl font-bold mb-5" style="font-size: 25px">Diagnose History
                    for {{ $patient->first_name }} {{ $patient->last_name }}</p>
                @if($patient->diagnoses->count())
                    @foreach($patient->diagnoses as $diagnose)
                        <hr class="mb-2"/>
                        <div class="card mb-5">
                            <p class="block text-gray-500" style="font-size: 12px">
                                Diagnose created: {{ $diagnose->created_at->diffForHumans() }}</p>
                            <p class="text-xl mb-4 title">Diagnose:</p>
                            <p class="block font-medium text-gray-900 text-l">{{ $diagnose->Diagnose }}</p>
                            <p class="text-xl mb-4 title">Disease Type:</p>
                            <p class="block font-medium text-gray-900 text-l">{{ $diagnose->Type }}</p>
                            <p class="text-xl mb-4 title">Therapy:</p>
                            <p class="block font-medium text-gray-900 text-l">{{ $diagnose->Therapy }}</p>
                        </div>
                        <hr class="mb-2"/>

                    @endforeach
                @else
                    <p>There are no diagnoses for this patient yet!</p>
                @endif

            </div>
        </div>
    </div>
</div>
