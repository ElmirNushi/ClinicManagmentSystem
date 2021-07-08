<div class="mb-5 ml-2 mt-5 bg-white border-b border-gray-200">
    <h5 class="card-title text-uppercase ml-3">Search for a
        patient: </h5>
    <div class="flex">
        <div class="relative flex lg:inline-flex items-center rounded-xl mb-5 ml-3">
            <form method="GET" action="/patients">
                @if (request('patient'))
                    <input type="hidden" name="patient" value="{{ request('patient') }}">
                @endif
                <x-input class="block mt-1 w-full"
                         type="text"
                         name="search"
                         placeholder="Find a patient..."
                         value="{{ request('search') }}"
                />
            </form>
        </div>
    </div>
    <h5 class="card-title text-uppercase ml-3" style="font-size: 20px">Patients: </h5>
</div>

