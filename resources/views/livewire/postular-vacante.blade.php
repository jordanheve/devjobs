<div class="bg-slate-700 p-5 mt-8 flex-col justify-center items-center flex">
    @if (!session()->has('mensaje'))
    <h3 class="text-3xl font-semibold dark:text-zinc-300 mb-4">
        Postularme a esta vacante
    </h3>
    @endif
    <form wire:submit.prevent="postular" class="flex flex-col items-center text-center"
        @if(session()->has('mensaje'))

        <div class="border-dashed border-2 border-teal-500 p-5 text-teal-600 font-bold text-3xl">
            <p>
                {{ session('mensaje') }}
            </p>
        </div>


        @else
        <div class="mb-2">
            <x-input-label class="text-xl" for='cv' :value="__('Curriculum/Hoja de vida (PDF)')"/>
            <x-text-input class="block w-full mt-1" id="cv" type="file" name="cv" wire:model="cv" accept=".pdf"/>
        </div>
        
        @error('cv')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
        
        <x-primary-button class="w-fit mt-2">
            {{ __('Enviar CV') }}
        </x-primary-button>
        @endif
    </form>
</div>
