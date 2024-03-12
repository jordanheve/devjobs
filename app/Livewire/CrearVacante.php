<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearVacante extends Component
{
    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $imagen;

    use WithFileUploads;

    protected $rules = [
        'titulo' =>'required|string|max:255',
        'salario' => 'required',
        'categoria' =>'required',
        'empresa' =>'required',
        'ultimo_dia' =>'required',
        'imagen' =>'required|image|max:1024',
    ];

    public function crearVacante(){
        $datos = $this->validate();

    }

    public function render()
    {
        $categorias = Categoria::all();
        $salarios = Salario::all();
        return view('livewire.crear-vacante', [
            'salarios' => $salarios,
            'categorias' => $categorias,
        ]);
    }
}
