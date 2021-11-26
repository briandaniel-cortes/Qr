
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
    public function perfil($id)
    {
        $query = $this->db->query("CALL perfil($id)");
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
    public function perfil2($id)
    {
        $query = $this->db->query("CALL perfilAdmon($id)");
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
    public function registrarLocal($data){
 
        $this->db->insert("locales",$data);
    }
    public function registrarImagen($data){
     
        $this->db->insert("fotos",$data);
    }
    public function getTiposdelocal(){
        $this->db->select("*");
        $this->db->from("tipolocal");
        $resul=$this->db->get();
        return $resul->result();
    }
    public function getUsuario(){
        $this->db->select("DISTINCT(usuario.nombre),socio.id");
        $this->db->from("locales");
        $this->db->join('socio', 'locales.socio = socio.id');
        $this->db->join('usuario', 'usuario.id=socio.usuario');
        $resul=$this->db->get();
        return $resul->result();
    }
    public function getEstado(){
        $this->db->select("id,estado");
        $this->db->from("estados");
        $resul=$this->db->get();
        return $resul->result();
    }
    public function getMunicipio($idEstado){
        $this->db->select("municipios.id,municipios.municipio");
        $this->db->from("estados_municipios");
        $this->db->join('municipios', 'municipios.id = estados_municipios.municipios_id');
        $this->db->where('estados_municipios.estados_id',$idEstado);
        $resul=$this->db->get();
        return $resul->result();
    }
    public function getMunicipioEstado($localEstado,$localMunicipio){
        $this->db->select("id");
        $this->db->from("estados_municipios");
        $this->db->where('estados_id',$localEstado);
        $this->db->where('municipios_id',$localMunicipio);
        $resul=$this->db->get();
        return $resul->result();
    }
    //SELECT DISTINCT(usuario.`nombre`), socio.`id` FROM locales INNER JOIN socio ON locales.`socio` = socio.`id` INNER JOIN usuario ON usuario.`id`=socio.`usuario`;
    
}
