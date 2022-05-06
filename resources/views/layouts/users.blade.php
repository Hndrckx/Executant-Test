<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- component -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 mt-14">

        @foreach ($users as $user)
            <div class="flex flex-col items-center justify-center dark:bg-gray-800 text-white p-4 shadow rounded-lg">
                <div class="inline-flex shadow-lg border border-gray-200 rounded-full overflow-hidden h-40 w-40">
                    @if ($user->avatar_id == null)
                        <img src="{{ asset('storage/basi_avatar.webp') }}" alt="" class="h-full w-full">
                    @else
                        <img src="{{ asset('storage/' . $user->avatar->avatar) }}" alt="" class="h-full w-full">
                    @endif
                </div>

                <h2 class="mt-4 font-bold text-xl">{{ $user->name }}</h2>
                <h6 class="mt-2 text-sm font-medium">{{ $user->firstName }}</h6>
                <div class="flex">
                    <h6 class=" text-sm font-medium mr-10 mt-5">Age: {{ $user->age }} ans</h6>
                    <h6 class=" text-sm font-medium ml-10 mt-5">Email: {{ $user->email }}</h6>
                </div>
                <div class="flex">
                    <h6 class="text-sm font-medium mr-10 mt-5">Role: {{ $user->role->role }}</h6>
                    @if ($user->avatar_id == null)
                        <h6 class="text-sm font-medium ml-10 mt-5">Avatar: Basic Avatar</h6>
                    @else
                        <h6 class="text-sm font-medium ml-10 mt-5">Avatar: {{ $user->avatar->name }}</h6>
                    @endif
                </div>
                <div class="flex justify-center my-5">
                    <button type="" class="bg-indigo-500 rounded-md h-10 w-24 text-white mt-11">
                        <a href="/editUser/{{$user->id}}/editUser">Edit User</a>
                    </button>
                </div>
            </div>

        @endforeach
    </div>




</x-app-layout>
