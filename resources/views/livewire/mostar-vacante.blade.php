<div class="p-10">
   <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800 dark:text-zinc-200 my-3 capitalize">
            {{$vacante->titulo}}
        </h3>
        <div class="md:grid md:grid-cols-2">
            <p class="font-bold text-sm ppercase my-3 text-slate-700 dark:text-zinc-300">
                Empresa: <span class="font-normal normal-case"> {{$vacante->empresa}}</span>
            </p>
            <p class="font-bold text-sm ppercase my-3 text-slate-700 dark:text-zinc-300">
                Ultimo dia para postularse: <span class="font-normal normal-case">{{$vacante->ultimo_dia->toFormattedDateString()}}</span>
            </p>
            <p class="font-bold text-sm ppercase my-3 text-slate-700 dark:text-zinc-300">
                Categoria: <span class="font-normal normal-case">{{$vacante->categoria->categoria}}</span>
            </p>
            <p class="font-bold text-sm ppercase my-3 text-slate-700 dark:text-zinc-300">
                Salario: <span class="font-normal normal-case">{{$vacante->salario->salario}}</span>
            </p>
        </div>
   </div>

   <div class="md:flex flex-col md:flex-row gap-4">
        <div class="md:w-1/3">
            <img src="{{asset('storage/vacantes/'.$vacante->imagen)}}" alt="{{'Imagen vacante '.$vacante->titulo}}">
        </div>

        <div class="text-slate-700 dark:text-zinc-300 ">
            <h2 class="text-2xl font-bold mb-5 ">
                Descripción del Puesto
            </h2>
            <p class="font-normal normal-case">{{$vacante->descripcion}}</p>
        </div>
   </div>

</div>
