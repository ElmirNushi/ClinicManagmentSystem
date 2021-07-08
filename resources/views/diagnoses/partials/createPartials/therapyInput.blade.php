<div class="mt-4 mb-5">
    <x-label for="therapy" :value="__('Therapy')"/>
    <textarea
        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
        id="therapy"
        name="therapy"
        placeholder="Write The Therapy..."></textarea>
    @error('therapy')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
