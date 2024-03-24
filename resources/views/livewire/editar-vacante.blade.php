<form class="md:w-1/2 space-y-5" wire:submit.prevent="editarVacante">
    <div>
        <x-input-label for='titulo' :value='__("Titulo vacantes")'/>

        <x-text-input id="titulo" class="block mt-1 w-full" type='text' wire:model='titulo' :value="old('titulo')" placeholder="Titulo Vacante"/>

        @error('titulo')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror

    </div>

    <div>
        <x-input-label for='salario' :value='__("Salario Mensual")'/>

        <select
        id="salario"
        wire:model="salario"
        class="rounded-md shadow-sm text-slate-700"
    >   
        <option value="">-- Seleccione --</option>
        @foreach ($salarios as $salario )
            <option value="{{$salario->id}}">{{$salario->salario}}</option>
        @endforeach
    </select>
    @error('salario')
    <livewire:mostrar-alerta :message="$message"/>
    @enderror
    </div>

    <div>
        <x-input-label for='categoria' :value='__("Categoria")'/>

        <select
        id="categoria"
        wire:model="categoria"
        class="rounded-md shadow-sm text-slate-700"
    >   
    <option value="">-- Seleccione --</option>
    @foreach ($categorias as $categoria) )
    <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
@endforeach
    </select>
    @error('categoria')
    <livewire:mostrar-alerta :message="$message"/>
    @enderror
    </div>

    <div>
        <x-input-label for='empresa' :value='__("Empresa")'/>

        <x-text-input id="empresa" class="block mt-1 w-full" type='text' wire:model="empresa" placeholder="Empresa: ej, Netflix, Uber, Spotify"/>

        @error('empresa')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>

    <div>
        <x-input-label for='ultimo_dia' :value='__("Último día para postularse")'/>

        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type='date' wire:model="ultimo_dia"  placeholder="Ultimo dia"/>
        @error('ultimo_dia')
        <livewire:mostrar-alerta :message="$message"/>
         @enderror
    </div>

    <div>
        <x-input-label for='descripcion' :value='__("Descripcion del puesto")'/>

        <textarea id="descripcion" class="block mt-1 w-full text-slate-700" type='text' wire:model="descripcion"  placeholder="Descripcion"></textarea>

            @error('descripcion')
            <livewire:mostrar-alerta :message="$message"/>
            @enderror
        </div>
        <div class="my-5 w-80">
            <x-input-label :value="__('Imagen Actual')"/>
            <img src="{{asset('storage/vacantes/'.$imagen)}}" alt="{{'Imagen Vacante '.$titulo}}">
        </div>
    <div>
        <x-input-label for='imagen' :value='__("Actualizar imagen")'/>

        <input id="imagen_nueva" class="block mt-1 w-full" wire:model="imagen_nueva" type='file' accept="image/*" />

        <div class="my-5 w-96">
            @if($imagen_nueva)
                Imagen Nueva:
                <img src="{{ $imagen_nueva->temporaryUrl() }}" alt="Imagen vacante" >
            @endif
        </div>
        @error('imagen_nueva')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>     
    
    <x-primary-button>
        Crear vacante
    </x-primary-button>

</form>
