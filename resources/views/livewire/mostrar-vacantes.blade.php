<div>

    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        @forelse($vacantes as $vacante)
        <div class="p-6 text-gray-900 dark:text-gray-100 flex md:items-center justify-between max-md:flex-col">
            <div class="leading-10">
                <a href="{{route('vacantes.show', $vacante->id)}}" class="text-xl font-bold">{{$vacante->titulo}}</a>
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
                <button
                class="bg-red-800 text-white font-bold rounded p-1 uppercase text-xs" wire:click="dispatch('delete', { vacanteId: {{ $vacante->id }}})"
                >Eliminar</button>
            </div>
        </div>
        
        @empty
        <p class="text-center">No hay vacantes para mostrar</p>
        @endforelse
        
    </div>
    <div class=" mt-10">
        {{$vacantes->links()}}
    </div>
    @push('scripts')
        
        <script>
            document.addEventListener('DOMContentLoaded', function(){
                
                @this.on('delete', vacanteId => {
                    Swal.fire({
                        title: "¿Deseas Eliminar está vacante?",
                        text: "Una vez eliminada no podras recuperarla!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Si, Eliminar!",
                        cancelButtonText: "Cancelar"
                    }).then((result) => {
                        if(result.isConfirmed){
                            @this.call('deleteVacante', vacanteId);
                            Swal.fire({
                                title: 'Se eliminó la Vacante',
                                text: 'Eliminado correctamente',
                                icon: 'success'
                            });
                            }
                        })
                    })
                });
        </script>
     @endpush
</div>