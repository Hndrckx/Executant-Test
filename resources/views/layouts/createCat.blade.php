<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md mt-10 m-auto">
        <form method="POST" action="addcat" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-6">
                <input name="categorie" type="text"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-paddingborder border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7" placeholder="Nom de la catégorie">
            </div>
            
            <button type="submit" class=" w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
            Create
        </button>
        </form>
    </div>

</x-app-layout>
