<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex flex-col gap-2">
                    <h1 class="font-bold mb-2 text-xl text-center">Mis Notificaciones</h1>
                        @forelse ($notificaciones as $notificacion)
                            <div class="flex justify-between border p-4">
                                <div>
                                    <p>Tienes un nuevo candidato en:
                                        <span class="font-bold">{{$notificacion->data['nombre_vacante']}}</span>
                                    </p>
                                    <p >
                                        {{$notificacion->created_at->diffForHumans()}}
                                    </p>
                                </div>
                                <div>
                                    <a href="https://www.google.com" target="_blank" class="font-bold text-indigo-600 text-sm uppercase">
                                        Ver Candidatos
                                    </a>
                                </div>
                            </div>
                        @empty
                            <p class="text-center">No hay notificaciones nuevas</p>
                        @endforelse

                </div>
            </div>
        </div>
    </div>
</x-app-layout>