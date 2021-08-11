<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- First Name -->
            <div>
                <x-label for="emp_id" :value="__('Emp ID')" />
                <x-input id="emp_id" class="block mt-1 w-full" type="text" name="emp_id" :value="old('emp_id')" required autofocus />
            </div>
            
            <!-- First Name -->
            <div class="mt-4">
                <x-label for="name" :value="__('First Name')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Last Name -->
            <div  class="mt-4">
                <x-label for="lname" :value="__('Last Name')" />
                <x-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')" required autofocus />
            </div>

            <!-- Middle Name -->
            <div  class="mt-4">
                <x-label for="mname" :value="__('Middle Name')" />
                <x-input id="mname" class="block mt-1 w-full" type="text" name="mname" :value="old('mname')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Select Option Rol type -->
            <div class="mt-4">
                <x-label for="role_id" value="{{ __('Register as:') }}" />
                <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="1">Super Admin</option>
                    <option value="administrator">Administrator</option>
                    <option value="emp">Employee</option>
                    <option value="admin-ahris">AHRIS (Administrator)</option>
                    <option value="admin-access">AHRIS (Access Manager)</option>
                    <option value="admin-benefits">AHRIS (Benefit Manager )</option>
                    <option value="6">DSB (Administrator)</option>
                    <option value="7">DSB (Creator)</option>
                    <option value="8">DSB (Reports)</option>
                </select>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
