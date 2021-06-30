
<?php defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table = 'usuario';
        $this->id = 'id';
    }
    public function validarcorreo($correo)
    {
            $this->db->where('correo', $correo);
            $query = $this->db->get($this->table);
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return FALSE;
            }

    }
    public function nadadegroserias($buscar)
    {
            $this->db->where('groserias', $buscar);
            $query = $this->db->get("groserias");
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return FALSE;
            }

    }
    public function validarentrada($correo,$contrasena)
    {
            $this->db->where('correo', $correo);
            $this->db->where('contrasena', $contrasena);
            $query = $this->db->get($this->table);
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return FALSE;
            }
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
    
}
