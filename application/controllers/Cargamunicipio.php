<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargamunicipio extends CI_Controller {

	public function Municipios()
	{
       // $idEstado = $this->input->post('idEstado');
     /*  $idEstado = 1;
        
        if($idEstado){
                $this->load->model('Socio');
                $municipio = $this->Socio->getMunicipio($idEstado);
                echo '<option value="0">Municipio</option>';
                foreach($municipio as $fila){
                    echo '<option value="'. $fila->id .'">'. $fila->municipio .'</option>';
                }

        } else {
            echo '<option value="0">Municipio</option>';
        }*/
        $valor1="todo mi amor";
        $valor2="mi princesa hermosa";

        $localMunicipio=1;
        $localEstado=1;
        $this->load->model('Socio');
        $municipio = $this->Socio->getMunicipioEstado($localEstado,$localMunicipio);
        foreach($municipio as $fila){
            $id= $fila->id;
        }
        echo $id;
        echo $agustina= $valor1 .' a Agustina '. $valor2;
	}

    
}