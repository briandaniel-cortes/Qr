
<?php defined('BASEPATH') or exit('No direct script access allowed');

class Promociones extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table = 'promociones';
        $this->id = 'id';
    }
    public function Promociones()
    {
        $query = $this->db->get($this->table);

        if($query->num_rows()>0){            
           return $query;            
       }else{
           return false;
       } 
    }
}
