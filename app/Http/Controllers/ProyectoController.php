<?php

namespace App\Http\Controllers;

use App\Models\ProyectoModel;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    private $proyectos = [];
    private $ufService;
    public function __construct(){
        $proyecto1= new ProyectoModel(1,'Proyecto 01', '23/05/2024', 'Activo', 'Juanito Perez', '2.450.003');
        $proyecto2= new ProyectoModel(2,'Proyecto 02', '13/06/2024', 'Pausado', 'Pedro Martinez', '1.400.000');
        $proyecto3= new ProyectoModel(3,'Proyecto 03', '26/11/2022', 'Terminado', 'Armando Perez', '3.450.000');

        $this->proyectos = [$proyecto1, $proyecto2, $proyecto3,];
    }
    public function getProyectos()
    {
        return $this->proyectos;
    }
    public function store($_nuevoProyecto){
        $nuevo = new ProyectoModel();
        $nuevo->setId($_nuevoProyecto['id']);
        $nuevo->setNombre($_nuevoProyecto['nombre']);
        $nuevo->setFecha($_nuevoProyecto['fecha']);
        $nuevo->setEstado($_nuevoProyecto['estado']);
        $nuevo->setResponsable($_nuevoProyecto['responsable']);
        $nuevo->setMonto($_nuevoProyecto['monto']);
    
        $this->proyectos[] = $nuevo;
    
        return "Has añadido un nuevo proyecto con éxito";
    }

    public function update($_updateProyecto){

        foreach ($this -> proyectos as $proyecto){
            if ($proyecto->getId() == $_updateProyecto['id'])
            {
                $proyecto->setNombre($_updateProyecto['nombre']);
                $proyecto->setFecha($_updateProyecto['fecha']);
                $proyecto->setEstado($_updateProyecto['estado']);
                $proyecto->setResponsable($_updateProyecto['responsable']);
                $proyecto->setMonto($_updateProyecto['monto']);
                
                return "Proyecto actualizado";
            }

        }
        return "Proyecto no encontrado";
    }

    public function delete($_id){
        foreach ($this->proyectos as $key=> $proyecto){
            if($proyecto->getId() == $_id){
                unset($this->proyectos[$key]);
                
                $this->proyectos = array_values($this->proyectos);
                
                return "Proyecto {$_id} eliminado";

            }

        }
        return "No se encontro el proyecto buscado";
    }

    public function obtenerValorUf() {
        $valorUf = $this->ufService->obtenerValorUf();
        return response()->json(['valor_uf' => $valorUf]);
    }

}
