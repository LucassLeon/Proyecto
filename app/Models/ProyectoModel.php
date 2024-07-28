<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectoModel extends Model
{
    use HasFactory;
    private $id;
    private $nombre;
    private $fecha;
    private $estado;
    private $responsable;
    private $monto;

    public function __construct($id = null,$nombre = null,$fecha=null, $estado = null, $responsable = null, $monto = null)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->fecha = $fecha;
        $this->estado = $estado;
        $this->responsable = $responsable;
        $this->monto = $monto;

    }

//MUTADORES

    public function setId($id){
        $this->id = $id;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    public function setResponsable($responsable){
        $this->responsable = $responsable;
    }
    public function setMonto($monto){
        $this->monto = $monto;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }

//ACCESADORES

    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getResponsable(){
        return $this->responsable;
    }
    public function getFecha(){
        return $this->fecha;
    }

    public function getMonto(){
        return $this->monto;
    }
    public function getEstado(){
        return $this->estado;
    }


}    