<x-app-layout>
{{--    <x-slot name="header">--}}
{{--    </x-slot>--}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
                        ¡Estás logeado!
                    </h5>
                    <p class="text-sm font-normal text-gray-500 dark:text-gray-400">¿Qué deseas hacer?</p>
                    <ul class="my-4 space-y-3">
                        <li>
                            <a href="{{route('tickets.create')}}" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                <span class="flex-1 ml-3 whitespace-nowrap">Abrir nuevo ticket</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('tickets.index')}}" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                <span class="flex-1 ml-3 whitespace-nowrap">Ver mis tickets</span>
                            </a>
                        </li>
                        @if(auth()->user()->admin)
                        <li>
                            <a href="{{route('tickets.showAll')}}" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                <span class="flex-1 ml-3 whitespace-nowrap">Ver todos los tickets</span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
        </div>
    </div>
</x-app-layout>
