<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectoModel extends Model
{
    use HasFactory;
    private $id;
    private $nombre;
    private $activo;

    public function __construct()
    {

    }

//MUTADORES

    public function setId($_n){
        $this->id = $_n;
    }

    public function setNombre($_n){
        $this->nombre = $_n;
    }
    
    public function setActivo($_n){
        $this->activo = $_n;
    }

//ACCESADORES

    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getActivo(){
        return $this->activo;
    }

}    