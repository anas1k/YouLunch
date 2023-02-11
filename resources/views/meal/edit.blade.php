<x-app-layout>
    {{-- @dd($meal) --}}
    <x-slot name="title">{{ $meal->name }}</x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Meals') }}
        </h2>
    </x-slot>
    {{-- pass title to layout --}}
    @section('title', 'Meals')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Update Meal</h3>
                <form class="space-y-6" action="{{ route('meals.update', $meal->id) }}" method="POST"
                    enctype="multipart/form-data" x-data="{ name: '{{ $meal->name }}' }">
                    @csrf
                    @method('PUT')
                    <div class="relative">
                        <div class="relative">
                            <input type="text" name="name" id="name"
                                class=" @error('name') border-red-500 dark:border-red-500 @enderror block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-600 rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 peer"
                                placeholder=" " value="{{ old('name', $meal->name) }}" />
                            <label for="name"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-gray-50 dark:bg-gray-600 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                Name
                            </label>

                        </div>
                        @error('name')
                            <div class="text-sm mt-0 text-red-600 dark:text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="relative">
                        <div class="relative">
                            <label for="day"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
                                option</label>
                            <select id="day" name="day"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Choose a Day</option>
                                <option value="Monday" {{ 'Monday' == $meal->day ? 'selected' : '' }}>
                                    Monday
                                </option>
                                <option value="Tuesday" {{ 'Tuesday' == $meal->day ? 'selected' : '' }}>Tuesday</option>
                                <option value="Wednesday" {{ 'Wednesday' == $meal->day ? 'selected' : '' }}>Wednesday
                                </option>
                                <option value="Thursday" {{ 'Thursday' == $meal->day ? 'selected' : '' }}>Thursday
                                </option>
                                <option value="Friday" {{ 'Friday' == $meal->day ? 'selected' : '' }}>Friday</option>
                            </select>
                        </div>
                        @error('day')
                            <div class="text-sm mt-0 text-red-600 dark:text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="relative">
                        <div class="relative">
                            <label for="type"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
                                option</label>
                            <select id="type" name="type"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Choose a Type</option>
                                <option value="Starter"{{ 'Starter' == $meal->type ? 'selected' : '' }}>Starter
                                </option>
                                <option value="Main"{{ 'Main' == $meal->type ? 'selected' : '' }}>Main</option>
                                <option value="Dessert"{{ 'Dessert' == $meal->type ? 'selected' : '' }}>Dessert
                                </option>
                            </select>
                        </div>
                        @error('type')
                            <div class="text-sm mt-0 text-red-600 dark:text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="relative">
                        <div class="relative">
                            <Textarea name="description" id="description" rows="3"
                                class="@error('description') border-red-500 dark:border-red-500  @enderror block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-600 rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 peer">{{ $meal->description }}</Textarea>

                            <label for="description"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300   top-2 z-10 origin-[0] bg-gray-50 dark:bg-gray-600 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                Description
                            </label>
                        </div>
                        @error('description')
                            <div class="text-sm mt-0 text-red-600 dark:text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <button
                        type="submit"class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
