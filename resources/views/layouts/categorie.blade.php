<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 mt-14 h-24">
            @foreach ($allCategorie as $user)
                <div class="flex flex-col items-center justify-center dark:bg-gray-800 text-white p-4 shadow rounded-lg">
                    <h2 class="mt-4 font-bold text-xl">{{ $user->categorie }}</h2>
                    <div class="flex justify-center my-5">
                        <button type="" class="bg-indigo-500 rounded-md h-10 w-28 text-white mt-11">
                            <a href="/editCategorie/{{$user->id}}/editCategorie">Edit Catégorie</a>
                        </button>
                    </div>
                </div>
            @endforeach
            <div class="ml-3 my-5">
                <button type="" class="bg-indigo-500 rounded-md h-10 w-28 text-white mt-11">
                    <a href="/createCategorie">Creer catégorie</a>
                </button>
            </div>
        </div>
    </div>




</x-app-layout>
