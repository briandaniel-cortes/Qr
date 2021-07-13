<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Sliderpublico');
		$this->load->model('Promociones');
		$this->load->model('EstadosMunicipios');
		$this->load->model('Usuario');
		$this->load->model('Sexo');
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
		$this->load->view('Componentes/Header', $data);
		$this->load->view('Visitas/Inicio');
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
		$this->load->view('Componentes/Header', $data);
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
		$this->load->view('Componentes/Header', $data);
		$this->load->view('Visitas/socio');
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
		$this->load->view('Componentes/Header', $data);
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
		$this->load->view('Componentes/Header', $data);
		$this->load->view('Visitas/promo');
		$this->load->view('Componentes/Footer');
	}
	public function login()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Login" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['Promociones'] = $this->Promociones->Promociones();
		$data['estados'] = $this->EstadosMunicipios->estados();
		$data['sexo'] = $this->Sexo->sexo();
		$data['estadosmunicipios'] = $this->EstadosMunicipios->estadosmunicipios();
		$this->load->view('Componentes/Header', $data);
		$this->load->view('Visitas/login');
		$this->load->view('Componentes/Footer');
	}
	public function registro()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Registro" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['Promociones'] = $this->Promociones->Promociones();
		$this->load->view('Componentes/Header', $data);
		$this->load->view('Visitas/login');
		$this->load->view('Componentes/Footer');
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
		$this->load->view('Componentes/Header', $data);
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
		$this->load->view('Componentes/Header', $data);
		$this->load->view('Visitas/localdetalles');
		$this->load->view('Componentes/Footer');
	}
	public function registrar()
	{
		$dia = strip_tags($this->input->post('dia'));
		$mes = strip_tags($this->input->post('mes'));
		$ao = strip_tags($this->input->post('ao'));
		$fecha = $dia . $mes . $ao;
		$nulo = "no ahi foto aun";
		$userData = array(
			'nombre' => strip_tags($this->input->post('nombre')),
			'apellidopaterno' => strip_tags($this->input->post('apellidopaterno')),
			'apellidomaterno' => strip_tags($this->input->post('apellidomaterno')),
			'fechanacimiento' => $fecha,
			'telefono' => strip_tags($this->input->post('telefono')),
			'correo' => strip_tags($this->input->post('correo')),
			'sexo' => strip_tags($this->input->post('sexo')),
			'tipo' => 1,
			'foto' => $nulo,
			'contrasena' => strip_tags($this->input->post('contra')),
		);

		$correo = strip_tags($this->input->post('correo'));
		$existeusuario = $this->Usuario->validarcorreo($correo);
		if ($existeusuario) {
			$breadcrumb         = array(
				"Inicio" => "/qrtour/public",
				"Login" => "/qrtour/public",
			);
			$data['breadcrumb'] = $breadcrumb;
			$data['Promociones'] = $this->Promociones->Promociones();
			$data['estados'] = $this->EstadosMunicipios->estados();
			$data['sexo'] = $this->Sexo->sexo();
			$data['estadosmunicipios'] = $this->EstadosMunicipios->estadosmunicipios();
			$this->load->view('Componentes/Header', $data);
			$this->load->view('Visitas/login');
			$this->load->view('Visitas/alertalogin');
			$this->load->view('Componentes/Footer');
		} else {
			$insert = $this->Usuario->insert($userData);
			redirect('/welcome/milogin');
		}
	}
	public function milogin()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
			"Login" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$this->load->view('Componentes/Header', $data);
		$this->load->view('Visitas/milogin');
		$this->load->view('Componentes/Footer');
	}

	public function logeando()
	{
		$correo = strip_tags($this->input->post('correo'));
		$Contrasena = strip_tags($this->input->post('contra'));
		$existeusuario = $this->Usuario->validarentrada($correo, $Contrasena);

		if ($existeusuario) {
			$query = $this->db->query("CALL usuarioentra('$correo')");
			$row = $query->row();
			if ($row->tipo == "usuario") {
				$arraydata = array(
					'id'  => $row->id,
					'nombre'  => $row->nombre,
					'apellidopaterno'  => $row->apellidopaterno,
					'apellidomaterno'  => $row->apellidomaterno,
					'fechanacimiento'  => $row->fechanacimiento,
					'telefono'  => $row->telefono,
					'correo'  => $row->correo,
					'contrasena'  => $row->contrasena,
					'foto'  => $row->foto,
					'tipo'  => $row->tipo,
					'sexo'  => $row->sexo
				);
				$this->session->set_userdata($arraydata);
				redirect('/Usuarios');
			} elseif ($row->tipo == "socio") {
				$arraydata = array(
					'id'  => $row->id,
					'nombre'  => $row->nombre,
					'apellidopaterno'  => $row->apellidopaterno,
					'apellidomaterno'  => $row->apellidomaterno,
					'fechanacimiento'  => $row->fechanacimiento,
					'telefono'  => $row->telefono,
					'correo'  => $row->correo,
					'contrasena'  => $row->contrasena,
					'foto'  => $row->foto,
					'tipo'  => $row->tipo,
					'sexo'  => $row->sexo
				);
				$this->session->set_userdata($arraydata);
				redirect('/Socios');
			} elseif ($row->tipo == "admin") {
				$arraydata = array(
					'id'  => $row->id,
					'nombre'  => $row->nombre,
					'apellidopaterno'  => $row->apellidopaterno,
					'apellidomaterno'  => $row->apellidomaterno,
					'fechanacimiento'  => $row->fechanacimiento,
					'telefono'  => $row->telefono,
					'correo'  => $row->correo,
					'contrasena'  => $row->contrasena,
					'foto'  => $row->foto,
					'tipo'  => $row->tipo,
					'sexo'  => $row->sexo
				);
				$this->session->set_userdata($arraydata);
				redirect('/Admon');
			}
		} else {
			$breadcrumb         = array(
				"Inicio" => "/qrtour/public",
				"Login" => "/qrtour/public",
			);
			$data['breadcrumb'] = $breadcrumb;
			$this->load->view('Componentes/Header', $data);
			$this->load->view('Visitas/milogin');
			$this->load->view('Visitas/alertalogin2');
			$this->load->view('Componentes/Footer');
		}
	}
	public function contactanos()
	{
		$this->load->view('Visitas/municipios');
	}
}
