
<?php defined('BASEPATH') or exit('No direct script access allowed');

class Socio extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table = 'socio';
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
    public function vermislocales($id)
    {
        $query = $this->db->query("CALL sociolocal($id)");
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
    public function vermispromociones($id)
    {
        $query = $this->db->query("CALL promocionesosicio($id)");
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
    public function verlcoalesdelosocios($id)
    {
        $query = $this->db->query("CALL localesusuariosocio($id)");
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
}
