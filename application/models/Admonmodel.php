
<?php defined('BASEPATH') or exit('No direct script access allowed');

class Admonmodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table = 'promociones';
        $this->id = 'id';
    }
  
    public function update($id,$data = array())
    {
        if (!empty($data)) {
            $this->db->where($this->id, $id);

            $this->db->update($this->table, $data);
        }
        return false;
    }
    public function delete($id)
    {
            $this->db->where('id', $id);
            $this->db->delete($this->table);
        return false;
    }
    public function Promociones()
    {
        $query = $this->db->query("CALL mostrartodaslaspromociones()");
        if($query->num_rows()>0){            
           return $query;            
       }else{
           return false;
       } 
    }
    
}
