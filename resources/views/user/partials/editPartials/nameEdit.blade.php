<div class="mt-4">
    <x-label for="name" :value="__('Name')"/>

    <x-input id="name" class="block mt-1 w-full"
             type="text"
             name="name"
             value="{{ $user->name }}"
    />
    @error('name')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
