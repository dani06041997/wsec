<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contact_m');	
	}

	public function lihat($contact) {
		if (empty($contact) || !file_exists(APPPATH . "views/menu/{$contact}.php")) {
			redirect('contact');
		} else {
			$data = $this->contact_m->{$contact}();

			$this->load->view("menu/{$contact}", compact('data'));
		}
		// var_dump($this->fasilitas_m->{$fasilitas}());
	}
	
	public function contact_ajax($contact)
	{
		if (empty($contact) || !file_exists(APPPATH . "views/menu/{$contact}.php")) {
			error_404();
		} else {
			$data = $this->contact_m->{$contact}($this->input->post('id'));
			// var_dump($data);
			printf('<h3>%s</h3><p><img src="%s" width="200" height="150" ></p><p>Alamat : <br>%s</p><p>Kode Pos : <br>%s</p><p>Telp. : <br>%s</p>',
				$data->nama,
				base_url("assets2/img-contact/workshop.jpg"),
				$data->alamat,
				$data->kode_pos,
				$data->telepon
			);
		}
	}
	
}