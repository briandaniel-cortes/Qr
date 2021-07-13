<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Socios extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Sliderpublico');
		$this->load->model('Promociones');
		$this->load->model('EstadosMunicipios');
		$this->load->model('Usuario');
		$this->load->model('Sexo');
		$this->load->model('Socio');
		$this->load->model('Local');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->library('ftp');
	}

	public function index()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['sliderpublico'] = $this->Sliderpublico->verislider();
		$this->load->view('Componentes/Headersocio', $data);
		$this->load->view('Visitas/usuario/InicioUsuario');
		$this->load->view('Componentes/Footer');
	}
	public function nosotros()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Nosotros" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['sliderpublico'] = $this->Sliderpublico->verislider();
		$this->load->view('Componentes/Headersocio', $data);
		$this->load->view('Visitas/nosotros');
		$this->load->view('Componentes/Footer');
	}
	public function socio()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Socios" => "/qrtour/public",
		);
		$id = $this->session->id;
		$data['breadcrumb'] = $breadcrumb;
		$data['vermislocales'] = $this->Socio->vermislocales($id);
		$this->load->view('Componentes/Headersocio', $data);
		$this->load->view('Visitas/Socios/localvista');
		$this->load->view('Visitas/Socios/comosubir');
		$this->load->view('Componentes/Footer');
	}
	public function sesocio()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Socios" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$this->load->view('Componentes/Headersocio', $data);
		$this->load->view('Visitas/usuario/seunsocio');
		$this->load->view('Componentes/Footer');
	}
	public function promociones()
	{
		$id = $this->session->id;
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Promociones" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['Promociones'] = $this->Socio->vermispromociones($id);
		$this->load->view('Componentes/Headersocio', $data);

		$this->load->view('Visitas/Socios/mispromos');
		$this->load->view('Componentes/Footer');
	}
	public function editarpromociones()
	{
		$id =  strip_tags($this->input->post('localid'));

		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Promociones" => "/qrtour/public",
			"Editar" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;

		$data['promo'] = $this->Promociones->verunapromacion($id);

		$this->load->view('Componentes/Headersocio', $data);
		$this->load->view('Visitas/Socios/editarpromociones');
		$this->load->view('Componentes/Footer');
	}
	public function editpromo()
	{
		$ids = strip_tags($this->input->post('local'));

		$query = $this->db->query("SELECT * FROM locales WHERE locales.`id`= $ids");
		$row = $query->row();
		$capeta = $row->nombrelocal;
		$file = $_FILES['userfile']['name'];
		$config['upload_path'] = 'assets/Imagenes/locales/' . $capeta;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 4000;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('userfile')) {
			$files = strip_tags($this->input->post('recuperado'));
			$userData = array(
				'promo' => strip_tags($this->input->post('promo')),
				'descripcion' => strip_tags($this->input->post('descripcion')),
				'fechainicio' => strip_tags($this->input->post('fechainicio')),
				'fechafinal' => strip_tags($this->input->post('fechafinal')),
				'locale' => $ids,
				'preciofijo' => strip_tags($this->input->post('preciofijo')),
				'preciodescuento' => strip_tags($this->input->post('preciodescuento')),
				'fotopromo' => $files
			);
			$idpromo = strip_tags($this->input->post('idpromo'));
			$update = $this->Promociones->update($idpromo, $userData);
			if ($update) {
				redirect('./Socios/promociones');
			} else {
				redirect('./Socios/promociones');
			}
		} else {

			$files = $capeta . '/' . $file;


			$userData = array(
				'promo' => strip_tags($this->input->post('promo')),
				'descripcion' => strip_tags($this->input->post('descripcion')),
				'fechainicio' => strip_tags($this->input->post('fechainicio')),
				'fechafinal' => strip_tags($this->input->post('fechafinal')),
				'locale' => $ids,
				'preciofijo' => strip_tags($this->input->post('preciofijo')),
				'preciodescuento' => strip_tags($this->input->post('preciodescuento')),
				'fotopromo' => $files
			);
			$idpromo = strip_tags($this->input->post('idpromo'));
			$update = $this->Promociones->update($idpromo, $userData);
			if ($update) {
				redirect('./Socios/promociones');
			} else {
				redirect('./Socios/promociones');
			}
		}
	}
	public function eliminarpromo()
	{

		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Promociones" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$idpromo = strip_tags($this->input->post('idpromo'));
		$promo = $this->Promociones->delete($idpromo);
		if ($promo) {
	
			redirect('./Socios/promociones');	
		} else {
			$id = $this->session->id;
			$breadcrumb         = array(
				"Inicio" => "/qrtour/public",
				"Promociones" => "/qrtour/public",
			);
			$data['breadcrumb'] = $breadcrumb;
			$data['Promociones'] = $this->Socio->vermispromociones($id);
			$this->load->view('Componentes/Headersocio', $data);
			$this->load->view('Visitas/Socios/eliminarpromocion');
			$this->load->view('Visitas/Socios/mispromos');
			$this->load->view('Componentes/Footer');
		}
	}
	public function agregarpromociones()
	{
		$id = $this->session->id;
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Promociones" => "/qrtour/public",
			"Agregar" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;

		$data['promo'] = $this->Socio->verlcoalesdelosocios($id);
		$this->load->view('Componentes/Headersocio', $data);
		$this->load->view('Visitas/Socios/agregarpromocion');
		$this->load->view('Componentes/Footer');
	}
	public function miperfil()
	{
		$id = $this->session->id;
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Promociones" => "/qrtour/public",
			"Agregar" => "/qrtour/public",
		);
		
		$data['breadcrumb'] = $breadcrumb;
		$data['socio'] = $this->Socio->perfil($id);
		$this->load->view('Componentes/Headersocio', $data);
		$this->load->view('Visitas/Socios/miperfil');
		$this->load->view('Componentes/Footer');
	}
	public function registrarpromo()
	{
		$id = strip_tags($this->input->post('locale'));

		$query = $this->db->query("SELECT * FROM locales WHERE locales.`id`=$id");
		$row = $query->row();
		$capeta = $row->nombrelocal;
		$target_dir = "./assets/Imagenes/locales/" . $capeta;
		if (!file_exists($target_dir)) {
			mkdir($target_dir, 0777, TRUE);
		}
		$file = $_FILES['userfile']['name'];
		$config['upload_path']          = 'assets/Imagenes/locales/' . $capeta;
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 4000;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('Visitas/Socios/prueba', $error);
		} else {
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('Visitas/Socios/prueba', $data);

			$userData = array(
				'promo' => strip_tags($this->input->post('promo')),
				'descripcion' => strip_tags($this->input->post('descripcion')),
				'fechainicio' => strip_tags($this->input->post('fechainicio')),
				'fechafinal' => strip_tags($this->input->post('fechafinal')),
				'locale' => strip_tags($this->input->post('locale')),
				'preciofijo' => strip_tags($this->input->post('preciofijo')),
				'preciodescuento' => strip_tags($this->input->post('preciodescuento')),
				'fotopromo' => $capeta . '/' . $file
			);
			echo $file;
			$insert = $this->Promociones->insert($userData);
			if ($insert) {
				redirect('./Socios/promociones');
			} else {
				redirect('./Socios/promociones');
			}
		}
	}

	public function registrasocio()
	{

		$ocupacion = strip_tags($this->input->post('ocupacion'));
		$ocupacion2 =  strip_tags($this->input->post('direccion'));
		$buscandoproverbiosjiji = $this->Usuario->nadadegroserias($ocupacion);
		$buscandoprover = $this->Usuario->nadadegroserias($ocupacion2);
		if ($buscandoproverbiosjiji || $buscandoprover) {
			$breadcrumb         = array(
				"Inicio" => "/qrtour/public",
				"Socios" => "/qrtour/public",
			);
			$data['breadcrumb'] = $breadcrumb;
			$this->load->view('Componentes/Headersocio', $data);
			$this->load->view('Visitas/usuario/alertano.php');
			$this->load->view('Componentes/Footer');
		} else {
			$id = $this->session->id;
			$userData = array(
				'usuario' => $id,
				'direccion' => strip_tags($this->input->post('direccion')),
				'aos' => 00,
				'edad' => strip_tags($this->input->post('edad')),
				'ocupacion' => strip_tags($this->input->post('ocupacion'))
			);

			$correo = strip_tags($this->input->post('correo'));
			$Contrasena = strip_tags($this->input->post('contrasena'));

			$existeusuario = $this->Usuario->validarentrada($correo, $Contrasena);
			if ($existeusuario) {
				$insert = $this->Socio->insert($userData);
				if ($insert) {
					$query = $this->db->query("UPDATE usuario SET tipo = 2 WHERE `id` = $id;");
					$this->session->sess_destroy();
					redirect('/Welcome');
				} else {
					redirect('/Usuarios/sesocio	');
				}
			} else {

				$this->load->view('Visitas/alertalogin2');
			}
		}
	}


	public function Locales($tipo = 0)
	{

		$breadcrumb = array(
			"Inicio" => "/qrtour/public",
			"Locales" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['tags'] = $this->Local->tags();
		if (empty($tipo)) {
			$data['localeslista'] = $this->Local->localeslista();
		} else {
			$data['localeslista'] = $this->Local->localeslista1($tipo);
		}
		$this->load->view('Componentes/Headersocio', $data);
		$this->load->view('Visitas/Local');
		$this->load->view('Componentes/Footer');
	}

	public function Detallelocal($id)
	{


		$breadcrumb = array(
			"Inicio" => "/qrtour/public",
			"Locales" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['tags'] = $this->Local->tags();
		$data['localfetalle'] = $this->Local->localfetalle($id);
		$this->load->view('Componentes/Headersocio', $data);
		$this->load->view('Visitas/localdetalles');
		$this->load->view('Componentes/Footer');
	}

	function logout()
    {

        $this->session->sess_destroy();
        redirect('../');
    }

	public function contactanos()
	{
		$breadcrumb = array(
			"Inicio" => "/qrtour/public",
			"Contactanos" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$this->load->view('Componentes/Headersocio', $data);
		$this->load->view('Componentes/contact');
		$this->load->view('Componentes/estilos');
		$this->load->view('Componentes/Footer');
	}
}
