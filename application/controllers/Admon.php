<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admon extends CI_Controller
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
		$this->load->model('Reserva');

		$this->load->model('Monumento');

		$this->load->model('Tag');
		$this->load->model('Admonmodel');
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
		$this->load->view('Componentes/Headeradmon', $data);
		$this->load->view('Adiminstrador/InicioAdiminstrador');
		$this->load->view('Componentes/Footer');
	}
	public function usuarios()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['Usuario'] = $this->Usuario->UsuariosVista();
		$this->load->view('Componentes/Headeradmon', $data);
		$this->load->view('Adiminstrador/Usuario_lista');
		$this->load->view('Componentes/Footer');
	}

	public function EliminarUsuario()
	{


		$idpromo = strip_tags($this->input->post('idpromo'));
		$promo = $this->Usuario->delete($idpromo);
		if ($promo) {

			redirect('./Socios/promociones');
		} else {
			$id = $this->session->id;
			$breadcrumb         = array(
				"Inicio" => "/qrtour/public",
			);
			$data['breadcrumb'] = $breadcrumb;
			$data['Usuario'] = $this->Usuario->UsuariosVista();
			$this->load->view('Componentes/Headeradmon', $data);
			$this->load->view('Visitas/Socios/eliminarpromocion');
			$this->load->view('Adiminstrador/Usuario_lista');
			$this->load->view('Componentes/Footer');
		}
	}

	public function locales()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['locales'] = $this->Admonmodel->localesvista2();
		$this->load->view('Componentes/Headeradmon', $data);
		$this->load->view('Adiminstrador/locales_lista');
		$this->load->view('Componentes/Footer');
	}
	public function promociones()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['Promociones'] = $this->Admonmodel->Promociones();
		$this->load->view('Componentes/Headeradmon', $data);
		$this->load->view('Adiminstrador/promociones_lista');
		$this->load->view('Componentes/Footer');
	}
	public function socios()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['sliderpublico'] = $this->Sliderpublico->verislider();
		$this->load->view('Componentes/Headeradmon', $data);
		$this->load->view('Visitas/usuario/InicioUsuario');
		$this->load->view('Componentes/Footer');
	}
	public function sliderpublico()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['sliderpublico'] = $this->Sliderpublico->verislider();
		$this->load->view('Componentes/Headeradmon', $data);
		$this->load->view('Visitas/usuario/InicioUsuario');
		$this->load->view('Componentes/Footer');
	}
	public function tags()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['tag'] = $this->Tag->tags();
		$this->load->view('Componentes/Headeradmon', $data);
		$this->load->view('Adiminstrador/tag_list');
		$this->load->view('Componentes/Footer');
	}
	public function editartag()
	{
		$ids = strip_tags($this->input->post('localid'));
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['tag'] = $this->Tag->tagsver($ids);
		$this->load->view('Componentes/Headeradmon', $data);
		$this->load->view('Adiminstrador/tag_actualizar');
		$this->load->view('Componentes/Footer');
	}
	public function updatetag()
	{
		$id = strip_tags($this->input->post('id'));

		$userData = array(
			'tag' => strip_tags($this->input->post('tag'))
		);
		$insert = $this->Tag->update($id, $userData);

		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['tag'] = $this->Tag->tags();
		$this->load->view('Componentes/Headeradmon', $data);
		$this->load->view('Adiminstrador/tag_list');
		$this->load->view('Componentes/Footer');
	}
	public function Eliminartag()
	{


		$idpromo = strip_tags($this->input->post('idpromo'));
		$promo = $this->Tag->delete($idpromo);
		if ($promo) {

			redirect('./Admon/tags');
		} else {
			$id = $this->session->id;
			$breadcrumb         = array(
				"Inicio" => "/qrtour/public",
			);
			$data['breadcrumb'] = $breadcrumb;
			$data['Usuario'] = $this->Usuario->UsuariosVista();
			$this->load->view('Componentes/Headeradmon', $data);
			$this->load->view('Visitas/Socios/eliminarpromocion');
			$this->load->view('Adiminstrador/tag_list');
			$this->load->view('Componentes/Footer');
		}
	}
	public function reserva()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['reservas'] = $this->Reserva->Reservas();
		$this->load->view('Componentes/Headeradmon', $data);
		$this->load->view('Adiminstrador/Reservas_list');
		$this->load->view('Componentes/Footer');
	}
	public function reservaeditar()
	{
		$ids = strip_tags($this->input->post('localid'));
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['tag'] = $this->Reserva->tagsver($ids);
		$this->load->view('Componentes/Headeradmon', $data);
		$this->load->view('Adiminstrador/reserva_editar');
		$this->load->view('Componentes/Footer');
	}
	public function updatereserva()
	{
		$id = strip_tags($this->input->post('id'));

		$userData = array(
			'Fecha' => strip_tags($this->input->post('tag'))
		);
		$insert = $this->Reserva->update($id, $userData);

		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['reservas'] = $this->Reserva->Reservas();
		$this->load->view('Componentes/Headeradmon', $data);
		$this->load->view('Adiminstrador/Reservas_list');
		$this->load->view('Componentes/Footer');
	}
	public function Eliminarreserva()
	{


		$idpromo = strip_tags($this->input->post('idpromo'));
		$promo = $this->Reserva->delete($idpromo);
		if ($promo) {

			redirect('./Admon/tags');
		} else {
			$id = $this->session->id;
			$breadcrumb         = array(
				"Inicio" => "/qrtour/public",
			);
			$data['breadcrumb'] = $breadcrumb;
			$data['reservas'] = $this->Reserva->Reservas();
			$this->load->view('Componentes/Headeradmon', $data);
			$this->load->view('Visitas/Socios/eliminarpromocion');
			$this->load->view('Adiminstrador/Reservas_list');
			$this->load->view('Componentes/Footer');
		}
	}
	public function monumentos()
	{
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['monumentos'] = $this->Monumento->monumentos();
		$this->load->view('Componentes/Headeradmon', $data);
		$this->load->view('Adiminstrador/monumentos_lista');
		$this->load->view('Componentes/Footer');
	}
	public function monumentosagregar()
	{
		$ids = strip_tags($this->input->post('localid'));
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		
		$this->load->view('Componentes/Headeradmon', $data);
		$this->load->view('Adiminstrador/agregar_monumenos');
		$this->load->view('Componentes/Footer');
	}
	public function agregamonumento()
	{
		$file = $_FILES['userfile']['name'];
		$config['upload_path'] = 'assets/Imagenes/monumentos/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 4000;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('userfile')) {
			redirect('./Admon/monumentos');
		} else {
			$userData = array(
				'titulo' => strip_tags($this->input->post('titulo')),
				'descripcion' => strip_tags($this->input->post('descripcion')),
				'foto' => $file,
				'codigo' => strip_tags($this->input->post('codigo'))
			);
			$idpromo = strip_tags($this->input->post('id'));
			$update = $this->Monumento->insert($userData);
			if ($update) {
				redirect('./Admon/monumentos');
			} else {
				redirect('./Admon/monumentos');
			}
		}

	}
	public function monumentoseditar()
	{
		$ids = strip_tags($this->input->post('localid'));
		$breadcrumb         = array(
			"Inicio" => "/qrtour/public",
		);
		$data['breadcrumb'] = $breadcrumb;
		$data['tag'] = $this->Monumento->tagsver($ids);
		$this->load->view('Componentes/Headeradmon', $data);
		$this->load->view('Adiminstrador/actualizar_monumentos');
		$this->load->view('Componentes/Footer');
	}
	public function updatemonumentos()
	{
		$file = $_FILES['userfile']['name'];
		$config['upload_path'] = 'assets/Imagenes/monumentos/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 4000;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('userfile')) {
			$files = strip_tags($this->input->post('recuperado'));
			$userData = array(
				'titulo' => strip_tags($this->input->post('titulo')),
				'descripcion' => strip_tags($this->input->post('descripcion')),
				'foto' => $files,
				'codigo' => strip_tags($this->input->post('codigo')),
			);
			$idpromo = strip_tags($this->input->post('id'));
			$update = $this->Monumento->update($idpromo, $userData);
			if ($update) {
				redirect('./Admon/monumentos');
			} else {
				redirect('./Admon/monumentos');
			}
		} else {

			$files =  $file;


			$userData = array(
				'titulo' => strip_tags($this->input->post('titulo')),
				'descripcion' => strip_tags($this->input->post('descripcion')),
				'foto' => $files,
				'codigo' => strip_tags($this->input->post('codigo')),
			);
			$idpromo = strip_tags($this->input->post('id'));
			$update = $this->Monumento->update($idpromo, $userData);
			if ($update) {
				redirect('./Admon/monumentos');
			} else {
				redirect('./Admon/monumentos');
			}
		}
	}
	public function Eliminarmonumentos()
	{


		$idpromo = strip_tags($this->input->post('idpromo'));
		$promo = $this->Monumento->delete($idpromo);
		if ($promo) {

			redirect('./Admon/tags');
		} else {
			$id = $this->session->id;
			$breadcrumb         = array(
				"Inicio" => "/qrtour/public",
			);
			$data['breadcrumb'] = $breadcrumb;
			$data['monumentos'] = $this->Monumento->monumentos();
			$this->load->view('Componentes/Headeradmon', $data);
			$this->load->view('Visitas/Socios/eliminarpromocion');
			$this->load->view('Adiminstrador/Reservas_list');
			$this->load->view('Componentes/Footer');
		}
	}
}
