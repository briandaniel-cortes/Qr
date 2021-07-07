
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

   
}
