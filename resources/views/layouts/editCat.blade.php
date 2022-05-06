<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <form class="w-full" action="/updateCategorie/{{ $edit->id }}/updateCategorie" method="POST">
        @csrf
        @method('PUT')
        <div class="flex flex-wrap -mx-3 mb-6 max-w-lg">
            <div class="w-full m-auto px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Nom de catégorie :
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-password" type="text" name="categorie" value="{{ $edit->categorie }}">
            </div>
        </div>
        
        <div class="flex justify-center my-5">
            <button type="submit" class="bg-indigo-500 rounded-md h-10 w-24 text-white mt-11">Submit</button>
        </div>
    </form>

</x-app-layout>
