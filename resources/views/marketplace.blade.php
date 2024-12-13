<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Marketplace') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome to the biggest Car Marketplace of Bangladesh") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <table border="='1">
                            <tr>
                                <td>Brand</td>
                                <td>Model</td>
                                <td>Registration Year</td>
                                <td>Engine Number</td>
                            </tr>
                            @foreach($marketplace as $car)
                            <tr>
                                <td>{{$car->Brand}}</td>
                                <td>{{$car->Model}}</td>
                                <td>{{$car->RegYear}}</td>
                                <td>{{$car->EngineNo}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
    </div>
</x-app-layout>
