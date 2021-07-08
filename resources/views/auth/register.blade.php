<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mt-4">
                            <x-label for="category_id" :value="__('Category')"/>

                            <select class="form-control"
                                    name="category_id"
                                    id="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->role }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--Name -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('Name')"/>

                            <x-input id="name" class="block mt-1 w-full"
                                     type="text"
                                     name="name" required/>
                            @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!--Email -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')"/>

                            <x-input id="email" class="block mt-1 w-full"
                                     type="email"
                                     name="email" required/>
                            @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    <!--Photo -->
                        <div class="mt-4">
                            <x-label for="photo" :value="__('Photo')"/>

                            <x-input id="photo" class="block mt-1 w-full"
                                     type="file"
                                     name="photo" required/>
                            @error('photo')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!--Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')"/>

                            <x-input id="password" class="block mt-1 w-full"
                                     type="password"
                                     name="password" required/>
                            @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4 mb-4">
                            <x-label for="password_confirmation" :value="__('Confirm Password')"/>

                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                     type="password"
                                     name="password_confirmation" required/>
                            @error('password_confirmation')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <x-button class="ml-4">
                            {{ __('Create User!') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</x-app-layout>

