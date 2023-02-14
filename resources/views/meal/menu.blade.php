<x-app-layout>
    <div class="w-9/12 mx-auto">
        <div class="grid grid-cols-1 py-6 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-2">
            @foreach ($AllMeals as $meal)
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg object-cover w-full aspect-square "
                            src="{{ asset("storage/images/$meal->image") }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $meal->name }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $meal->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
