<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends CI_Controller
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
		$this->load->helper('url');
	}

	public function index()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['sliderpublico'] = $this->Sliderpublico->verislider();
		$this->load->view('Componentes/Headerd', $data);
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
		$this->load->view('Componentes/Headerd', $data);
		$this->load->view('Visitas/nosotros');
		$this->load->view('Componentes/Footer');
	}
	public function socio()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Socios" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$this->load->view('Componentes/Headerd', $data);
		$this->load->view('Visitas/socio');
		$this->load->view('Componentes/Footer');
	}
	public function sesocio()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Socios" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$this->load->view('Componentes/Headerd', $data);
		$this->load->view('Visitas/usuario/seunsocio');
		$this->load->view('Componentes/Footer');
	}
	public function promociones()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Promociones" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['Promociones'] = $this->Promociones->Promociones();
		$this->load->view('Componentes/Headerd', $data);
		$this->load->view('Visitas/promo');
		$this->load->view('Componentes/Footer');
	}
	public function tienda()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Tienda" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['Promociones'] = $this->Promociones->Promociones();
		$this->load->view('Componentes/Headerd', $data);
		$this->load->view('Visitas/promo');
		$this->load->view('Componentes/Footer');
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
			$this->load->view('Componentes/Headerd', $data);
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
				}else{
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
		$this->load->view('Componentes/Headerd', $data);
		$this->load->view('Visitas/usuario/Local');
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
		$this->load->view('Componentes/Headerd', $data);
		$this->load->view('Visitas/usuario/localdetalles');
		$this->load->view('Componentes/Footer');
	}



	public function contactanos()
	{
		$this->load->view('Visitas/municipios');
	}
}
