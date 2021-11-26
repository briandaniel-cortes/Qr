
<?php defined('BASEPATH') or exit('No direct script access allowed');

class Monumento extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table = 'monumentos';
        $this->id = 'id';
    }
    public function insert($data = array())
    {
        if (!empty($data)) {

            // Insert member data 
            $insert = $this->db->insert($this->table, $data);

            // Return the status 
            return $insert ? $this->db->insert_id() : false;
        }
        return false;
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
    public function tagsver($id)
    {
        $query = $this->db->query("SELECT * FROM monumentos WHERE monumentos.`id`=$id");
        if($query->num_rows()>0){            
           return $query;            
       }else{
           return false;
       } 
    }
    public function monumentos()
    {
        $query = $this->db->get($this->table);

        if($query->num_rows()>0){            
           return $query;            
       }else{
           return false;
       } 
    }
}
