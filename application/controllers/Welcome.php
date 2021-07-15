<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Webci3_Model');
		$this->load->model('Polygon_Model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('pages/index');
		$this->load->view('template/foot');
	}
	public function map2()
	{
		$data['lokasi'] = $this->Webci3_Model-> getloc();
		$data['polygon'] = $this->Polygon_Model-> getpolygon();
		$this->load->view('template/head');
		$this->load->view('pages/index');
		$this->load->view('template/foot2',$data);
	}
	public function form()
	{
		$this->form_validation->set_rules('nama_lokasi', 'nama_lokasi', 'required');
		$this->form_validation->set_rules('lat', 'lat', 'required');
		$this->form_validation->set_rules('lng', 'lng', 'required');

			if($this->form_validation->run()==false){
			$data['lokasi'] = $this->Webci3_Model-> getloc();
			$this->load->view('template/head');
			$this->load->view('pages/form');
			$this->load->view('template/foot');
				}else{
				$this->Webci3_Model->tambahDatalokasi();
				redirect('Welcome/form');
			}

		
	}
	public function form2()
	{
		$this->form_validation->set_rules('nama_polygon', 'nama_polygon', 'required');
		$this->form_validation->set_rules('cord', 'cord', 'required');

			if($this->form_validation->run()==false){
			$data['polygon'] = $this->Polygon_Model-> getpolygon();
			$this->load->view('template/head');
			$this->load->view('pages/form2');
			$this->load->view('template/foot');
				}else{
				$this->Polygon_Model->tambahDatapolygon();
				redirect('Welcome/form2');
			}

		
	}
	public function table()
	{
		$this->load->view('template/head');
		$this->load->view('pages/table',$data);
		$this->load->view('template/foot');
	}
	public function table2()
	{
		$this->load->view('template/head');
		$this->load->view('pages/table2');
		$this->load->view('template/foot');
	}
	
}
