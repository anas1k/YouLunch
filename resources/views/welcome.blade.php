<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>YouLunch - Menu</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <a href="{{ url('meal/menu') }}"
                    class="text-sm px-8 text-gray-700 dark:text-gray-500 underline">Meals</a>
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="w-full max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <strong class="font-extrabold text-white text-6xl">You Lunch </strong>
            </div>

            <div class=" mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

                <div class=" relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-white dark:text-black">
                        <thead class="text-xs text-white uppercase dark:text-black">
                            <tr>
                                <th scope="col-2" class="px-6 py-3 font-bold text-black dark:bg-gray-300">
                                    Day
                                </th>
                                <th scope="col-2" class="px-6 py-3 font-bold bg-gray-50 dark:bg-gray-400">
                                    Monday
                                </th>
                                <th scope="col" class="px-6 py-3 font-bold text-white">
                                    Tuesday
                                </th>
                                <th scope="col" class="px-6 py-3 font-bold bg-gray-50 dark:bg-gray-400">
                                    Wednesday
                                </th>
                                <th scope="col" class="px-6 py-3 font-bold text-white">
                                    Thursday
                                </th>
                                <th scope="col" class="px-6 py-3 font-bold bg-gray-50 dark:bg-gray-400">
                                    Friday
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 text-white dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4  font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-black dark:bg-gray-300">
                                    Starter
                                </th>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-400">
                                    @foreach ($Starters as $meal)
                                        {!! $meal->day == 'Monday' ? $meal->name . '<br>' : '' !!}
                                    @endforeach
                                </th>
                                <td class="px-6 py-4 ">
                                    @foreach ($Starters as $meal)
                                        {!! $meal->day == 'Tuesday' ? $meal->name . '<br>' : '' !!}
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-400">
                                    @foreach ($Starters as $meal)
                                        {!! $meal->day == 'Wednesday' ? $meal->name . '<br>' : '' !!}
                                    @endforeach
                                </td>
                                <td class="px-6 py-4">
                                    @foreach ($Starters as $meal)
                                        {!! $meal->day == 'Thursday' ? $meal->name . '<br>' : '' !!}
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 dark:bg-gray-400">
                                    @foreach ($Starters as $meal)
                                        {!! $meal->day == 'Friday' ? $meal->name . '<br>' : '' !!}
                                    @endforeach
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 text-white dark:border-gray-700">

                                <th scope="row"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-black dark:bg-gray-300">
                                    Main
                                </th>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-400">
                                    @foreach ($Mains as $meal)
                                        {!! $meal->day == 'Monday' ? $meal->name . '<br>' : '' !!}
                                    @endforeach
                                </th>
                                <td class="px-6 py-4">
                                    @foreach ($Mains as $meal)
                                        {!! $meal->day == 'Tuesday' ? $meal->name . '<br>' : '' !!}
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-400">
                                    @foreach ($Mains as $meal)
                                        {!! $meal->day == 'Wednesday' ? $meal->name . '<br>' : '' !!}
                                    @endforeach
                                </td>
                                <td class="px-6 py-4">
                                    @foreach ($Mains as $meal)
                                        {!! $meal->day == 'Thursday' ? $meal->name . '<br>' : '' !!}
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 dark:bg-gray-400">
                                    @foreach ($Mains as $meal)
                                        {!! $meal->day == 'Friday' ? $meal->name . '<br>' : '' !!}
                                    @endforeach
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 text-white dark:border-gray-700">

                                <th scope="row"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-black dark:bg-gray-300">
                                    Dessert
                                </th>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-400">
                                    @foreach ($Desserts as $meal)
                                        {!! $meal->day == 'Monday' ? $meal->name . '<br>' : '' !!}
                                    @endforeach
                                </th>
                                <td class="px-6 py-4">
                                    @foreach ($Desserts as $meal)
                                        {!! $meal->day == 'Tuesday' ? $meal->name . '<br>' : '' !!}
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-400">
                                    @foreach ($Desserts as $meal)
                                        {!! $meal->day == 'Wednesday' ? $meal->name . '<br>' : '' !!}
                                    @endforeach
                                </td>
                                <td class="px-6 py-4">
                                    @foreach ($Desserts as $meal)
                                        {!! $meal->day == 'Thursday' ? $meal->name . '<br>' : '' !!}
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 dark:bg-gray-400">
                                    @foreach ($Desserts as $meal)
                                        {!! $meal->day == 'Friday' ? $meal->name . '<br>' : '' !!}
                                    @endforeach
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
