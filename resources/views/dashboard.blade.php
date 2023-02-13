<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Meals') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end mb-4">
                <!-- Modal toggle -->
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                    class="content-end text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    Add Meal
                </button>
            </div>


            <x-modal-meal />

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                Type
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($AllMeals as $meal)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="h-9 w-9 rounded-md" src="{{ asset("images/$meal->image") }}"
                                        alt="Image">
                                </th>

                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $meal->name }}
                                </th>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <p class="truncate max-w-sm">{{ $meal->description }}</p>

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $meal->day }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $meal->type }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right">

                                    <a href="{{ url("meals/$meal->id/edit") }}"
                                        class="px-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>


                                    <form action="{{ url("meals/$meal->id") }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" placeholder="Delete"
                                            class="px-3 font-medium text-red-600 dark:text-red-500 hover:underline">
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
