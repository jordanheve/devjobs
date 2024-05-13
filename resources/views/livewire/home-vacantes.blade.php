<div>
    <livewire:filtrar-vacantes />
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl mb-12 dark:text-white">Nuestras Vacantes Disponibles</h3>
            <div class="bg-white dark:bg-slate-600 rounded-lg p-6 shadow-sm">
                @forelse ($vacantes as $vacante)
                    <div class='md:flex md:justify-between md:items-center py-5'>
                        <div class="md:flex-1">
                            <a class="text-3xl font-extrabold dark:text-indigo-300 text-gray-600 capitalize" href="{{route('vacantes.show', $vacante->id)}}">
                                {{$vacante->titulo}}
                            </a>
                            <p class="dark:text-zinc-300">{{$vacante->empresa}}</p>
                            <p class="dark:text-zinc-300 font-semibold text-xs">
                                Ultimo dia para postularse: 
                                <span class="font-normal">
                                    {{$vacante->ultimo_dia->format('d/m/Y')}}
                                </span>
                            </p>
                        </div>
                        <div class="px-2 py-1 bg-indigo-600 text-white hover:bg-indigo-700 rounded-md mt-5 md:mt-0 display:block text-center">
                            <a href="{{route('vacantes.show', $vacante->id)}}">Ver Vacante</a>
                        </div>
                    </div>
                @empty  
                    <p class="p-3 text-center text-sm dark:text-white ">No hay vacantes aun</p>
                @endforelse
            </div>
        </div>
    </div>

</div>
