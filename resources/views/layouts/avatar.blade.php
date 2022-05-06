<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <style>
        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 100px;
            border: 5px black solid;
        }

    </style>

<div class="flex">
    <div class="flex flex-col rounded-md bg-white mt-3 w-52">
        <a class="mx-3 text-center my-5 rounded-lg border-2 w-28" href="/avatars">Avatars</a>
        <a class="mx-3 text-center my-5 rounded-lg border-2 w-28" href="">Images</a>
        <a class="mx-3 text-center my-5 rounded-lg border-2 w-28" href="">Catégories</a>
        <a class="mx-3 text-center my-5 rounded-lg border-2 w-28" href="">Galerie</a>
        <a class="mx-3 text-center my-5 rounded-lg border-2 w-28" href="">Urilisateurs</a>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-20 min-w-full ml-20">
        <table class="w-4/5 text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="mt-11">
                    <th scope="col" class="px-6 py-3">
                        Nom de l'avatar
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Avatar
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Supprimer
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allAvatars as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $item->name }}
                        </th>
                        <td class="px-6 py-4">
                            <img class="avatar" src="{{ asset('storage/' . $item->avatar) }}" alt="">
                        </td>
                        <td class="px-6 py-4">
                            <form action="/delav/{{ $item->id }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="bg-red-500 rounded-md h-10 w-24 text-white">
                                    Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex justify-center mr-56">
            <button type="" class="bg-indigo-500 rounded-md h-10 w-24 text-white mt-11">
                <a href="/createAvatars">Add avatar</a>
            </button>
        </div>
    </div>

</x-app-layout>
