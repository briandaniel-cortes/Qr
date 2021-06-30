
<?php defined('BASEPATH') or exit('No direct script access allowed');

class EstadosMunicipios extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table = 'estados';
        $this->table2 = 'estadosmunicipios';
        $this->id = 'id';
    }
    public function estados()
    {
        $query = $this->db->get($this->table);

        if($query->num_rows()>0){            
           return $query;            
       }else{
           return false;
       } 
    }
    public function estadosmunicipios()
    {
        $query = $this->db->get($this->table2);

        if($query->num_rows()>0){            
           return $query;            
       }else{
           return false;
       } 
    }
}
