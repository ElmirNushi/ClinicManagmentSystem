<div class="mt-4 mb-4">
    <x-label for="phone" :value="__('Phone Number')"/>

    <x-input id="phone" class="block mt-1 w-full"
             type="text"
             name="phone" required/>
    @error('phone')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
