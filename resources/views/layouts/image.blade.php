<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <form method="POST" action="addima" enctype="multipart/form-data">
        @csrf

        <div class="flex justify-center">
            <div class="mb-3 w-96">
                <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700">Choisir une image :</label>
                <input name="src"
                    class="form-control block w-full px-2 py-1 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="formFileSm" type="file">
                <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700">Choisir un nom pour l'image
                    :</label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name" type="text" name="name">
                <div class="mb-3 xl:w-96 mt-3">
                    <select name="categorie_id"
                        class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        aria-label="Default select example">
                        <option selected>Choisir une catégorie</option>
                        <option value="1">One</option>
                    </select>
                </div>
                <div class="flex justify-center mt-10">
                    <x-button type="submit">
                        {{ __('Add') }}
                    </x-button>
                </div>
            </div>
        </div>

    </form>

</x-app-layout>
