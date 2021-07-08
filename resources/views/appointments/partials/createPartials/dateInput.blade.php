<div class="mt-4">
    <x-label for="date" :value="__('Date')"/>

    <x-input id="date" class="block mt-1 w-full"
             type="date"
             name="date"
             required/>
    @error('date')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
