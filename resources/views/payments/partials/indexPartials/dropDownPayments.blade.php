<h2 class="mb-5 font-semibold text-xl text-gray-800 leading-tight">Checkout
</h2>
<hr class="mb-4"/>
<div class="item">
    <div>
        <p class="block font-medium text-sm text-gray-700 item-name">Select
            Patient: </p>
        <select class="form-control"
                name="patient_id"
                id="patient_id">
            @foreach ($patients as $patient)
                <option value="{{ $patient->id }}
                    ">{{ $patient->first_name }} {{ $patient->last_name }}
                </option>
            @endforeach
            @error('patient_id')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </select>
    </div>
</div>
