
<?php defined('BASEPATH') or exit('No direct script access allowed');

class Local extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table = 'locales';
        $this->id = 'id';
    }
    public function localeslista()
    {
        $query = $this->db->query("SELECT * FROM localesvista");

        if($query->num_rows()>0){            
           return $query;            
       }else{
           return false;
       } 
    }
    public function localeslista1($tipo)
    {
        $query = $this->db->query("CALL localesbusqueda($tipo)");
        if($query->num_rows()>0){            
           return $query;            
       }else{
           return false;
       } 
    }
    public function tags()
    {
        $query = $this->db->get("tagbusqueda");
        if($query->num_rows()>0){            
           return $query;            
       }else{
           return false;
       } 
    }
    public function localfetalle($id)
    {
        
        $query = $this->db->query("CALL localdetalle($id)");
        if($query->num_rows()>0){            
           return $query;            
       }else{
           return false;
       } 
    }
}
