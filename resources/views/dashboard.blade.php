<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex">
        <div class="flex flex-col rounded-md bg-white mt-3 w-52">
            <a class="mx-3 text-center my-5 rounded-lg border-2 w-28" href="/avatars">Avatars</a>
            <a class="mx-3 text-center my-5 rounded-lg border-2 w-28" href="/images">Images</a>
            <a class="mx-3 text-center my-5 rounded-lg border-2 w-28" href="/categories">Catégories</a>
            <a class="mx-3 text-center my-5 rounded-lg border-2 w-28" href="">Galerie</a>
            <a class="mx-3 text-center my-5 rounded-lg border-2 w-28" href="/users">Urilisateurs</a>
        </div>
    
        <div class="py-12 min-w-full">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
