<div>

    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        @forelse($vacantes as $vacante)
        <div class="p-6 text-gray-900 dark:text-gray-100 flex md:items-center justify-between max-md:flex-col">
            <div class="leading-10">
                <a href="#" class="text-xl font-bold">{{$vacante->titulo}}</a>
                <p class="dark:text-slate-300 font-bold">{{$vacante->empresa}}</p>
                <p class="text-sm font-bold dark:text-slate-400">Ultimo dia: {{$vacante->ultimo_dia->format('d/m/Y')}}</p>
            </div>
            
            <div class="flex max-md:flex-col gap-3 mt-2 items-stretch max-md:w-full text-center">
                <a href=""
                class="bg-slate-800 dark:bg-slate-100 dark:text-slate-800 p-1 font-bold rounded uppercase text-xs"
                >Candidatos</a>
                <a href="{{route('vacantes.edit', $vacante->id)}}"
                class="bg-teal-600 p-1 text-white font-bold rounded uppercase text-xs"
                >Editar</a>
                <a href=""
                class="bg-red-800 text-white font-bold rounded p-1 uppercase text-xs"
                >Eliminar</a>
            </div>
        </div>
        
        @empty
        <p class="text-center">No hay vacantes para mostrar</p>
        @endforelse
        
    </div>
    <div class=" mt-10">
        {{$vacantes->links()}}
    </div>
</div>