<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="{{ asset('css/style/style.css') }}">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Change Password') }}
        </h2>
    </x-slot>
    <x-flash/>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="POST" action="/user/password/change">
                                            @csrf
                                            @method('PATCH')

                                            <div class="mt-4">
                                                <x-label for="current_password" :value="__('Current Password')"/>

                                                <x-input id="current_password" class="block mt-1 w-full"
                                                         type="password"
                                                         name="current_password"
                                                />
                                                @error('current_password')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="mt-4">
                                                <x-label for="password" :value="__('New Password')"/>

                                                <x-input id="password" class="block mt-1 w-full"
                                                         type="password"
                                                         name="password"
                                                />
                                                @error('password')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="mt-4">
                                                <x-label for="password_confirmation"
                                                         :value="__('Confirm the password')"/>

                                                <x-input id="password_confirmation" class="block mt-1 w-full"
                                                         type="password"
                                                         name="password_confirmation"
                                                />
                                                @error('password_confirmation')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group row mb-0 mt-2">
                                                <div class="col-md-8 offset-md-4">
                                                    <x-button>
                                                        Change Password
                                                    </x-button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
