<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Login_m extends CI_Model {
	private $polinema_wsec;

	public function __construct()
	{
		parent::__construct();
		$this->polinema_wsec = $this->load->database('polinema_wsec', true);
	}
	
	public function check_login($username, $password) {
		
		$this->polinema_wsec->select('*');
		$this->polinema_wsec->from('login');
		$this->polinema_wsec->where('username',$username);
		$this->polinema_wsec->where('password',$password);
		$this->polinema_wsec->limit(1);
		
		$query = $this->polinema_wsec->get();
		if($query->num_rows() == 1)
		{
			$result = $query->result();
			return $result;
		} else {
			return false;
		}
	}
	
	
}