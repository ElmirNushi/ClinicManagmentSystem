<div class="bg-white border-b border-gray-200">
    <div style="margin: auto; width: auto; padding: 20px;">
        <form method="GET" action="/diagnostic/history" enctype="multipart/form-data">
            <p class="block font-medium text-sm text-gray-700 ml-14">
                If you want to see the patient diagnosing history select the patient and click show history:
            </p>
            <div class="mb-5 ml-14">
                <select class="form-control"
                        name="patient_id"
                        id="patient_id">
                    @foreach ($patients as $patient)
                        <option
                            value="{{ $patient->id }}">{{ $patient->first_name }} {{ $patient->last_name }}
                        </option>
                    @endforeach
                    @error('patient_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </select>
            </div>
            <div>
                <x-button class="ml-14">
                    {{ __('Show history') }}
                </x-button>
            </div>
        </form>

    </div>
</div>
