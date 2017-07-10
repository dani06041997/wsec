<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact_m extends CI_Model {
	private $polinema_wsec;

	public function __construct()
	{
		parent::__construct();
		$this->polinema_wsec = $this->load->database('polinema_wsec', true);
	}

	public function contact($id = null)
	{
		if ($id === null) {
			return $this->polinema_wsec->get('contact')->result();
		} else {
			return $this->polinema_wsec->where('id', $id)->get('contact')->row();
		}
	}
	
}