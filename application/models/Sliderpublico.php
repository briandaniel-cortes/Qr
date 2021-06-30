
<?php defined('BASEPATH') or exit('No direct script access allowed');

class Sliderpublico extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table = 'sliderpublico';
        $this->id = 'id';
    }
    public function verislider()
    {
        $query = $this->db->get($this->table);

        if($query->num_rows()>0){            
           return $query;            
       }else{
           return false;
       } 
    }
}
