<div class="mt-4">
    <x-label for="type" :value="__('Type of disease')"/>

    <x-input id="type" class="block mt-1 w-full"
             type="text"
             name="type"
             placeholder="Write the type of the disease..."
             required/>
    @error('type')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
