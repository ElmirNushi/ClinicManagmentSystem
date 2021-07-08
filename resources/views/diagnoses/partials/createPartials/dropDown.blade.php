<select class="form-control"
        name="patient_id"
        id="patient_id">
    @foreach ($patients as $patient)
        <option
            value="{{ $patient->id }}">{{ $patient->first_name }} {{ $patient->last_name }}
        </option>
    @endforeach
    @error('type')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</select>
