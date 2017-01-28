<?php
class Ccpp extends CI_Controller {

	
	public function index(){
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('ccpp/index', $data);
	}

	function contacto(){
		$page = 'contacto';
		if ( ! file_exists(APPPATH.'views/ccpp/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('base/header', $data);
		$this->load->view('ccpp/'.$page);
		$this->load->view('base/footer');
	}

	function nosotros(){
		$page = 'nosotros';
		if ( ! file_exists(APPPATH.'views/ccpp/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('base/header', $data);
		$this->load->view('ccpp/'.$page);
		$this->load->view('base/footer');
	}

	function servicios(){
		$page = 'servicios';
		if ( ! file_exists(APPPATH.'views/ccpp/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('base/header', $data);
		$this->load->view('ccpp/'.$page);
		$this->load->view('base/footer');
	}

	

	function galeria(){
		$page = 'galeria';
		if ( ! file_exists(APPPATH.'views/ccpp/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('base/header', $data);
		$this->load->view('ccpp/'.$page);
		$this->load->view('base/footer');
	}

	function codes(){
		$page = 'codes';
		if ( ! file_exists(APPPATH.'views/ccpp/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('base/header', $data);
		$this->load->view('ccpp/'.$page);
		$this->load->view('base/footer');
	}
}