<div class="mt-4">
    <x-label for="last_name" :value="__('Last Name')"/>

    <x-input id="last_name" class="block mt-1 w-full"
             type="text"
             name="last_name"
             value="{{ $patient->last_name }}"
             required/>
    @error('last_name')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
