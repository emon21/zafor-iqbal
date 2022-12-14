<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container bg-indigo-900 mx-auto">
        <h2 class="text-center text-gray-700">All Information</h2>
    </div>

    <div class="container mx-auto">
        <div class="bg-slate-500 p-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque possimus ullam quaerat aliquam ad accusamus alias sint tempore, voluptate iste repellat unde neque quasi incidunt maiores expedita repellendus laboriosam. Enim!
        </div>
    </div>
</x-app-layout>
