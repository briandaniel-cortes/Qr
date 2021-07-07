
<?php defined('BASEPATH') or exit('No direct script access allowed');

class Perfil extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table = 'socio';
        $this->id = 'id';
    }

    public function vermiperfil($usuario)
    {
       
        
        $query = $this->db->query("SELECT * FROM socio WHERE socio.`socio`='$usuario'");
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return FALSE;
        }
    }
   
}
