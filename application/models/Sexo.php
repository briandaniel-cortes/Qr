
<?php defined('BASEPATH') or exit('No direct script access allowed');

class Sexo extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table = 'Sexo';
        $this->id = 'id';
    }
    public function sexo()
    {
        $query = $this->db->get($this->table);

        if($query->num_rows()>0){            
           return $query;            
       }else{
           return false;
       } 
    }

}
