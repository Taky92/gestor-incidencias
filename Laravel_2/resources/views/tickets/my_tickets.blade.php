<x-app-layout>
    <div class="p-12 border">
        <h3>Mis Tickets</h3>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="col" class="px-6 py-4 ">Categoría</th>
                    <th scope="col" class="px-6 py-4">Título</th>
                    <th scope="col" class="px-6 py-4">Estado</th>
                    <th scope="col" class="px-6 py-4">Última actualización</th>
                    <th scope="col" class="px-6 py-4"></th>

                </thead>
                <tbody>
                @foreach($tickets as $ticket)
                    <tr class="bg-white  border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">{{$ticket->category}}</td>
                        <td class="px-6 py-4 font-semibold text-purple-600">
                            {{$ticket->title}}
                        </td>
                        <td class="px-6 py-4">@if($ticket->status)
                                Abierto
                            @else
                                Cerrado
                            @endif
                        </td>
                        <td class="px-6 py-4">{{$ticket->updated_at}}</td>
                        <td class="px-6 py-4">
                            <a href="{{route('tickets.show', $ticket->id)}}">
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" style="padding:8px 40px;margin-top:25px;">
                                        Ver detalles
                                </button>
                            </a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
