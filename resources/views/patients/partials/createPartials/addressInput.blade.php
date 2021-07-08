<div class="mt-4">
    <x-label for="address" :value="__('Address')"/>

    <x-input id="address" class="block mt-1 w-full"
             type="text"
             name="address" required/>
    @error('address')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
