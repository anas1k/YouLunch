<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true"
    class="bg-gray-900 bg-opacity-50 h-full fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 md:h-full">
    <div class=" relative w-full h-full max-w-md md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-hide="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Meal</h3>
                <form class="space-y-6" action="{{ route('meals.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="relative">
                        <div class="relative">
                            <input type="text" name="name" id="name"
                                class=" @error('name') border-red-500 dark:border-red-500 @enderror block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-600 rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 peer"
                                placeholder=" " value="{{ old('name') }}" />
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
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
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
                                <option value="Starter">Starter</option>
                                <option value="Main">Main</option>
                                <option value="Dessert">Dessert</option>
                            </select>
                        </div>
                        @error('type')
                            <div class="text-sm mt-0 text-red-600 dark:text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="relative">
                        <div class="relative">
                            <Textarea name="description" id="description" rows="3"
                                class="@error('description') border-red-500 dark:border-red-500  @enderror block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-600 rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 peer"></Textarea>

                            <label for="description"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300   top-2 z-10 origin-[0] bg-gray-50 dark:bg-gray-600 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                Description
                            </label>
                        </div>
                        @error('description')
                            <div class="text-sm mt-0 text-red-600 dark:text-red-600">{{ $message }}</div>
                        @enderror
                    </div>


                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Add Meal
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
