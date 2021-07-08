<div class="mt-4 mb-5">
    <x-label for="email" :value="__('Email')"/>

    <x-input id="email" class="block mt-1 w-full"
             type="email"
             name="email"
             value="{{ old('email') }}
             {{ $user->email }} "
    />
    @error('email')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
