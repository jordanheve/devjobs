<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Notifications\NuevoCandidato;

class PostularVacante extends Component
{   
    use WithFileUploads;
    public $cv;
    public $vacante;
    protected $rules = [
        'cv' => 'required|mimes:pdf|max:1024',
    ];
    public function render()
    {
        return view('livewire.postular-vacante');
    }   


    public function mount(Vacante $vacante)
    {
        $this->vacante = $vacante;
    }

    public function postular()
    {
        $this->validate();

        //almacenar
        $pdf = $this->cv->store('public/cv');
        $nombre_pdf = str_replace('public/cv/', '', $pdf);

        //crear el candidato 
        $this->vacante->candidatos()->create([
            'user_id' => auth()->user()->id,
            'cv' => $nombre_pdf,
        ]);

        //notificaciones
        $this->vacante->reclutador->notify(new NuevoCandidato($this->vacante->id, $this->vacante->titulo, auth()->user()->id));

        //mostar mensaje
        session()->flash('mensaje','Postulacion enviada correctamente');

    }
}
