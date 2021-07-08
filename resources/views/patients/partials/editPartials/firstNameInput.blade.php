<div class="mt-4">
    <x-label for="first_name" :value="__('First Name')"/>

    <x-input id="first_name" class="block mt-1 w-full"
             type="text"
             name="first_name"
             value="{{ $patient->first_name }}"
             required/>
    @error('first_name')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
