<?php

namespace App\Livewire;

use App\Models\Salario;
use App\Models\Vacante;
use Livewire\Component;
use App\Models\Categoria;
use Livewire\WithFileUploads;

class CrearVacante extends Component
{
    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $imagen;
    public $descripcion;

    use WithFileUploads;

    protected $rules = [
        'titulo' =>'required|string|max:255',
        'salario' => 'required',
        'categoria' =>'required',
        'empresa' =>'required',
        'ultimo_dia' =>'required',
        'descripcion'=> 'required',
        'imagen' =>'required|image|max:1024',
    ];

    public function crearVacante(){
        $datos = $this->validate();
        //dd($datos);

        // almacenar imagen
        $imagen = $this->imagen->store('public/vacantes');
        $nombre_imagen = str_replace('public/vacantes/', '', $imagen);
        // crear vacante
        Vacante::create([
            'titulo' => $datos['titulo'],
            'salario_id' => $datos['salario'], 
            'categoria_id' => $datos['categoria'],
            'empresa' => $datos['empresa'],
            'ultimo_dia' => $datos['ultimo_dia'],
            'descripcion' => $datos['descripcion'],
            'imagen' => $nombre_imagen,
            'user_id' => auth()->user()->id,
        ]);

        //crear un mensaje
        session()->flash('mensaje','la vacante se publico correctamente');

        //redireccionar
        return redirect()->route('vacantes.index');
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
