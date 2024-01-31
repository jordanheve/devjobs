<form class="md:w-1/2 space-y-5">
    <div>
        <x-label for='titulo' :value='__("Titulo vacantes")'/>

        <x-input id="titulo" class="block mt-1 w-full" type='text'  :value="old('titulo')" placeholder="Titulo Vacante"/>

    </div>

    <div>
        <x-label for='salario' :value='__("Salario Mensual")'/>

        <select
        id="salario"
        name="salario"
        class="rounded-md shadow-som"
    >   
        <option value="">-- Selecciona un rol --</option>
        <option value="1">Developer - Obtener Empleo</option>
        <option value="2">Recruiter - Publicar Empleos</option>
    </select>
        
    </div>

    <div>
        <x-label for='categoria' :value='__("Categoria")'/>

        <select
        id="categoria"
        name="categoria"
        class="rounded-md shadow-som"
    >   
        <option value="">-- Selecciona un rol --</option>
        <option value="1">Developer - Obtener Empleo</option>
        <option value="2">Recruiter - Publicar Empleos</option>
    </select>
        
    </div>

    <div>
        <x-label for='empresa' :value='__("Empresa")'/>

        <x-input id="empresa" class="block mt-1 w-full" type='text'  :value="old('titulo')" placeholder="Empresa: ej, Netflix, Uber, Spotify"/>

    </div>

    <div>
        <x-label for='ultimo_dia' :value='__("Último día para postularse")'/>

        <x-input id="ultimo_dia" class="block mt-1 w-full" type='text'  :value="old('ultimo_dia')" placeholder="Ultimo dia"/>

    </div>

    <div>
        <x-label for='descripcion' :value='__("Descripcion del puesto")'/>

        <textarea id="descripcion" class="block mt-1 w-full" type='text'  :value="old('descripcion')" placeholder="Descripcion"><textarea/>

    </div>

    <div>
        <x-label for='imagen' :value='__("Imagen de la vacante")'/>

        <x-input id="imagen" class="block mt-1 w-full" type='file'  />

    </div>     
    <x-button>
        Crear vacante
    </x-button>

</form>
