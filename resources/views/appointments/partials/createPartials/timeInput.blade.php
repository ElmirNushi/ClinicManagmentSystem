<div class="mt-4">
    <x-label for="time" :value="__('Time')"/>

    <x-input id="time" class="block mt-1 w-full"
             type="time"
             name="time"
             required/>
    @error('time')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
