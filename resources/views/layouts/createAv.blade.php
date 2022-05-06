<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </x-slot>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="addava" enctype="multipart/form-data">
                @csrf
                <!-- image -->
                <div>
                    <x-label for="name" :value="__("Nom de l'avatar")" />

                    <x-input id="name" class="block mt-1 w-full" type="file" name="avatar" :value="old('name')" required
                        autofocus />
                </div>

                <!-- FirstName -->
                <div class="mt-4">
                    <x-label for="name" :value="__('Name')" />

                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('firstName')" required
                        autofocus />
                </div>

                <div class="flex justify-center mt-10">
                    <x-button type="submit">
                        {{ __('Add') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>
</x-app-layout>
