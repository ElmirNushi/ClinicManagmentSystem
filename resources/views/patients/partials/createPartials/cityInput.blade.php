<div class="mt-4">
    <x-label for="city" :value="__('City')"/>

    <x-input id="city" class="block mt-1 w-full"
             type="text"
             name="city" required/>
    @error('city')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
