<div class="mt-4">
    <x-label for="diagnose" :value="__('Diagnose')"/>
    <textarea
        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
        id="diagnose"
        name="diagnose"
        placeholder="Write The Diagnose..."></textarea>
    @error('diagnose')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
