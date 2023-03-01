<x-app-layout>
    <div class="p-12 border">

        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
            <div class="flex flex-col pb-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Titulo</dt>
                <dd class="text-lg font-semibold">Ticket {{$tickets->id}} - {{$tickets->title}}</dd>
            </div>
            <div class="flex flex-col py-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Mensaje</dt>
                <dd class="text-lg font-semibold">{{$tickets->message}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Categoría</dt>
                <dd class="text-lg font-semibold">{{$tickets->category}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Estado</dt>
                <dd class="text-lg font-semibold">
                    @if($tickets->status)
                        Abierto
                    @else
                        Cerrado
                    @endif
                </dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Creación</dt>
                <dd class="text-lg font-semibold">{{$dateDiff}}</dd>
            </div>
        </dl>
        <a href="{{route('tickets.index')}}">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" style="padding:8px 40px;margin-top:25px;">
                Volver
            </button>
        </a>
    </div>
</x-app-layout>
