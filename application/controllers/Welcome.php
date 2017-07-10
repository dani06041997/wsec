<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
	{
		parent::__construct();
		$this->load->model('usermodel_alumni');
		$this->load->model('usermodel_anggota');
		$this->load->model('usermodel_anggota20');
		$this->load->model('usermodel_buku');
		$this->load->model('usermodel_jadwal_pelatihan');
		$this->load->model('usermodel_lomba');
		$this->load->model('usermodel_prestasi');
		$this->load->model('usermodel_devisi');
		$this->load->model('usermodel_gproker');
		$this->load->model('usermodel_gpelatihan');
		$this->load->model('usermodel_gproyek');
		$this->load->model('usermodel_gumum');
		$this->load->model('usermodel_so');
		//$this->load->model('usermodel_gallery');
		$this->load->model('model_berita');
		$this->load->model('contact_m');	
		$this->load->helper('text'); // memanggil helper text
		$this->load->model('login_m');
		$this->load->library(array('form_validation','pagination'));
		$this->load->helper('url');
	}
	 
	public function index()
	{
		$this->load->view('wsec');
	}

	function login(){
		$data['alert'] = 'off';
		$this->load->view('login/login', $data);
	}
	function proses_login(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$check = $this->login_m->check_login($username, $password);
		
		if ($check) {
			redirect('welcome/admin_alumni');
		} else {
			$data['alert'] = 'on';
			$data['alert_msg'] = '';
			$this->load->view('login/login', $data);
		}
		
	}
	
	//public function logout(){
		//$this->session->unset_userdata(array('username' =>''));
		// $this->session->sess_destroy();
		
		//redirect ('welcome/login')
	//}
	
	
	
	/*  admin_pengaturan */
		
	function admin_pengaturan(){
		$data['partials']['header'] = $this->load->view('admin/header', null, true);
		$data['pengaturan'] = $this->usermodel_pengaturan->all();
		$this->load->view('admin/admin_pengaturan',$data);
	}
	
	public function add_admin_pengaturan()
	{
		$data = array(
		'username'=>$this->input->post('username'),
		'password'=>$this->input->post('password')
		);
		$this->usermodel_pengaturan->add($data);
		redirect('welcome/admin_pengaturan');
	}
	
	public function update_admin_pengaturan()
	{
		$id = $this->input->post('id');
		
		$data = array(
		'username'=>$this->input->post('username'),
		'password'=>$this->input->post('password')
		);
		$this->usermodel_pengaturan->edit($id,$data);
		redirect('welcome/admin_pengaturan');

		
	}
	
	public function delete_admin_pengaturan(){
		$id = $this->uri->segment(3);

		$this->usermodel_pengaturan->delete($id);
		redirect('welcome/admin_pengaturan');
		
	}
	
	
	/*  admin_alumni */
		
	function admin_alumni(){
		$data['partials']['header'] = $this->load->view('admin/header', null, true);
		$data['alumni'] = $this->usermodel_alumni->all();
		$this->load->view('admin/admin_alumni',$data);
	}
	
	public function add_admin_alumni()
	{
		$data = array(
		'nama'=>$this->input->post('nama'),
		'alamat'=>$this->input->post('alamat'),
		'thn_lulus'=>$this->input->post('thn_lulus'),
		'pekerjaan'=>$this->input->post('pekerjaan'),
		'no_telp'=>$this->input->post('no_telp')
		);
		$this->usermodel_alumni->add($data);
		redirect('welcome/admin_alumni');
	}
	
	public function update_admin_alumni()
	{
		$id = $this->input->post('id');
		
		$data = array(
		'nama'=>$this->input->post('nama'),
		'alamat'=>$this->input->post('alamat'),
		'thn_lulus'=>$this->input->post('thn_lulus'),
		'pekerjaan'=>$this->input->post('pekerjaan'),
		'no_telp'=>$this->input->post('no_telp')
		);
		$this->usermodel_alumni->edit($id,$data);
		redirect('welcome/admin_alumni');

		
	}
	
	public function delete_admin_alumni(){
		$id = $this->uri->segment(3);

		$this->usermodel_alumni->delete($id);
		redirect('welcome/admin_alumni');
		
	}
	
	/*  admin_anggota */
	
	
	#Tampilan Utama / Command Read / Tampil Data
	function admin_anggota(){
		$data['partials']['header'] = $this->load->view('admin/header', null, true);
		$data['anggota'] = $this->usermodel_anggota->all();
		$this->load->view('admin/admin_anggota',$data);
	}
	
	
	#Command Insert
	public function add_admin_anggota()
	{
		$data = array(
		'nim'=>$this->input->post('nim'),
		'nama_ang'=>$this->input->post('nama_ang'),
		'prodi'=>$this->input->post('prodi'),
		'no_telp'=>$this->input->post('no_telp'),

		);
		$this->usermodel_anggota->add($data);
		redirect('welcome/admin_anggota'); #kembali ke tampilan list data
	}
	
	
	#Command Update
	public function update_admin_anggota()
	{
		$id = $this->input->post('id');
		
		$data = array(
		'nim'=>$this->input->post('nim'),
		'nama_ang'=>$this->input->post('nama_ang'),
		'prodi'=>$this->input->post('prodi'),
		'no_telp'=>$this->input->post('no_telp'),

		);
		$this->usermodel_anggota->edit($id,$data);
		redirect('welcome/admin_anggota');

		
	}
	
	#Command Delete
	public function delete_admin_anggota(){
		$id = $this->uri->segment(3);

		$this->usermodel_anggota->delete($id);
		redirect('welcome/admin_anggota');
		
	}
	
	
	
	#Tampilan Utama / Command Read / Tampil Data
	function admin_anggota20(){
		$data['partials']['header'] = $this->load->view('admin/header', null, true);
		$data['anggota20'] = $this->usermodel_anggota20->all();
		$this->load->view('admin/admin_anggota20',$data);
	}
	
	
	#Command Insert
	public function add_admin_anggota20()
	{
		$data = array(
		'nim'=>$this->input->post('nim'),
		'nama_ang'=>$this->input->post('nama_ang'),
		'prodi'=>$this->input->post('prodi'),
		'no_telp'=>$this->input->post('no_telp')
		);
		$this->usermodel_anggota20->add($data);
		redirect('welcome/admin_anggota20'); #kembali ke tampilan list data
	}
	
	
	#Command Update
	public function update_admin_anggota20()
	{
		$id = $this->input->post('id');
		
		$data = array(
		'nim'=>$this->input->post('nim'),
		'nama_ang'=>$this->input->post('nama_ang'),
		'prodi'=>$this->input->post('prodi'),
		'no_telp'=>$this->input->post('no_telp')
		);
		$this->usermodel_anggota20->edit($id,$data);
		redirect('welcome/admin_anggota20');

		
	}
	
	#Command Delete
	public function delete_admin_anggota20(){
		$id = $this->uri->segment(3);

		$this->usermodel_anggota20->delete($id);
		redirect('welcome/admin_anggota20');
		
	}
	
	
	/*  admin_buku */
		
	function admin_buku(){
		$data['partials']['header'] = $this->load->view('admin/header', null, true);
		$data['buku'] = $this->usermodel_buku->all();
		$this->load->view('admin/admin_buku',$data);
	}
	
	public function add_admin_buku()
	{
		$data = array(
		'nama_bk'=>$this->input->post('nama_bk'),
		'jenis_bk'=>$this->input->post('jenis_bk'),
		'stok'=>$this->input->post('stok'),
		);
		$this->usermodel_buku->add($data);
		redirect('welcome/admin_buku');
	}
	
	public function update_admin_buku()
	{
		$id = $this->input->post('id');
		
		$data = array(
		'nama_bk'=>$this->input->post('nama_bk'),
		'jenis_bk'=>$this->input->post('jenis_bk'),
		'stok'=>$this->input->post('stok'),
		);
		$this->usermodel_buku->edit($id,$data);
		redirect('welcome/admin_buku');

		
	}
	
	public function delete_admin_buku(){
		$id = $this->uri->segment(3);

		$this->usermodel_buku->delete($id);
		redirect('welcome/admin_buku');
		
	}
	
	/*  admin_jadwal_pelatihan */
		
	function admin_jadwal_pelatihan(){
		$data['partials']['header'] = $this->load->view('admin/header', null, true);
		$data['jadwal_pelatihan'] = $this->usermodel_jadwal_pelatihan->all();
		$this->load->view('admin/admin_jadwal_pelatihan',$data);
	}
	
	public function add_admin_jadwal_pelatihan()
	{
		$data = array(
		'prodi'=>$this->input->post('prodi'),
		'materi'=>$this->input->post('materi'),
		'jam'=>$this->input->post('jam'),
		'hari'=>$this->input->post('hari'),
		);
		$this->usermodel_jadwal_pelatihan->add($data);
		redirect('welcome/admin_jadwal_pelatihan');
	}
	
	public function update_admin_jadwal_pelatihan()
	{
		$id = $this->input->post('id');
		
		$data = array(
		'prodi'=>$this->input->post('prodi'),
		'materi'=>$this->input->post('materi'),
		'jam'=>$this->input->post('jam'),
		'hari'=>$this->input->post('hari'),
		);
		$this->usermodel_jadwal_pelatihan->edit($id,$data);
		redirect('welcome/admin_jadwal_pelatihan');

		
	}
	
	public function delete_admin_jadwal_pelatihan(){
		$id = $this->uri->segment(3);

		$this->usermodel_jadwal_pelatihan->delete($id);
		redirect('welcome/admin_jadwal_pelatihan');
		
	}








	

	/*  admin_lomba */
		
	function admin_lomba(){
		$data['partials']['header'] = $this->load->view('admin/header', null, true);
		$data['lomba'] = $this->usermodel_lomba->all();
		$this->load->view('admin/admin_lomba',$data);
	}
	
	public function add_admin_lomba()
	{        
		$data = array(
		'nama'=>$this->input->post('nama'),
		'email'=>$this->input->post('email'),
		'contact_person'=>$this->input->post('contact_person'),
		);
		$this->usermodel_lomba->add($data);
		redirect('welcome/admin_lomba');
	}
	
	public function update_admin_lomba()
	{
		$id = $this->input->post('id');
		
		$data = array(
		'nama'=>$this->input->post('nama'),
		'email'=>$this->input->post('email'),
		'contact_person'=>$this->input->post('contact_person'),
		);
		$this->usermodel_lomba->edit($id,$data);
		redirect('welcome/admin_lomba');

		
	}
	
	public function delete_admin_lomba(){
		$id = $this->uri->segment(3);

		$this->usermodel_lomba->delete($id);
		redirect('welcome/admin_lomba');
		
	}
	
	
	/*  admin_prestasi */
		
	function admin_prestasi(){
		$data['partials']['header'] = $this->load->view('admin/header', null, true);
		$data['prestasi'] = $this->usermodel_prestasi->all();
		$this->load->view('admin/admin_prestasi',$data);
	}
	
	public function add_admin_prestasi()
	{        
		$data = array(
		'nama_prestasi'=>$this->input->post('nama_prestasi'),
		'tgl_prestasi'=>$this->input->post('tgl_prestasi'),
		'tingkat_prestasi'=>$this->input->post('tingkat_prestasi'),
		);
		$this->usermodel_prestasi->add($data);
		redirect('welcome/admin_prestasi');
	}
	
	public function update_admin_prestasi()
	{
		$id = $this->input->post('id');
		
		$data = array(
		'nama_prestasi'=>$this->input->post('nama_prestasi'),
		'tgl_prestasi'=>$this->input->post('tgl_prestasi'),
		'tingkat_prestasi'=>$this->input->post('tingkat_prestasi'),
		);
		$this->usermodel_prestasi->edit($id,$data);
		redirect('welcome/admin_prestasi');

		
	}
	
	public function delete_admin_prestasi(){
		$id = $this->uri->segment(3);

		$this->usermodel_prestasi->delete($id);
		redirect('welcome/admin_prestasi');
		
	}
	
	
	/** ADMIN devisi*/
	
	function admin_devisi(){
		$data['partials']['header'] = $this->load->view('admin/header', null, true);
		$data['devisi'] = $this->usermodel_devisi->all();
		$this->load->view('admin/admin_devisi',$data);

				
	}
	
	public function add_admin_devisi()
	{
		
		$this->form_validation->set_rules('nama_devisi', 'nama_devisi', 'required');
		
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
		if ($this->form_validation->run() == FALSE)
		{
		
		$this->load->view('admin/admin_devisi');
		} else {
				/*start upload gambar*/
				$new_file_name = rand(100000,999999); 
				$config['upload_path']          = './library/images/devisi/';
                $config['allowed_types']        = 'jpg|png';
				$config['file_name'] 			= $new_file_name;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
					echo $this->upload->display_errors();
                }
                else
                {
					/*end upload gambar*/
					/*start save ke database*/
                    $data = array(			
				
					'nama_devisi'=>$this->input->post('nama_devisi'),
					'gambar'=>$new_file_name.'.jpg'
					);
					$this->usermodel_devisi->add($data);
					/*end save ke database*/
					redirect('welcome/admin_devisi');
                }
		} 
	}
	
	public function update_admin_devisi()
	{
		$id = $this->input->post('id');
		
		$this->form_validation->set_rules('nama_devisi', 'nama_devisi', 'required');
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
		if ($this->form_validation->run() == FALSE)
		{
		
		$this->load->view('admin/admin_devisi');
		} else {
		$new_file_name = rand(100000,999999); 
				$config['upload_path']          = './library/images/devisi/';
                $config['allowed_types']        = 'jpg|png';
				$config['file_name'] 			= $new_file_name;
		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar');
		$data = array(			

		'nama_devisi'=>$this->input->post('nama_devisi'),
		'gambar'=>$new_file_name.".jpg"
		);
		$this->usermodel_devisi->edit($id,$data);
		redirect('welcome/admin_devisi');
		}
	}
	
	public function delete_admin_devisi(){
		$id = $this->uri->segment(3);

		$this->usermodel_devisi->delete($id);
		redirect('welcome/admin_devisi');
		
	}

	public function menu_alumni()
	{
		$data['alumni'] = $this->usermodel_alumni->all();
		$this->load->view('menu/menu_alumni',$data);
	}
	
	
	/** ADMIN gproker*/
	
	function admin_gproker(){
		$data['partials']['header'] = $this->load->view('admin/header', null, true);
		$data['gproker'] = $this->usermodel_gproker->all();
		$this->load->view('admin/admin_gproker',$data);

				
	}
	
	public function add_admin_gproker()
	{
		
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
		if ($this->form_validation->run() == FALSE)
		{
		
		$this->load->view('admin/admin_gproker');
		} else {
				/*start upload gambar*/
				$new_file_name = rand(100000,999999); 
				$config['upload_path']          = './library/images/gproker/';
                $config['allowed_types']        = 'jpg|png';
				$config['file_name'] 			= $new_file_name;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
					echo $this->upload->display_errors();
                }
                else
                {
					/*end upload gambar*/
					/*start save ke database*/
                    $data = array(			
				
					'keterangan'=>$this->input->post('keterangan'),
					'gambar'=>$new_file_name.'.jpg'
					);
					$this->usermodel_gproker->add($data);
					/*end save ke database*/
					redirect('welcome/admin_gproker');
                }
		} 
	}
	
	public function update_admin_gproker()
	{
		$id = $this->input->post('id');
		
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
		if ($this->form_validation->run() == FALSE)
		{
		
		$this->load->view('admin/admin_gproker');
		} else {
		$new_file_name = rand(100000,999999); 
				$config['upload_path']          = './library/images/gproker/';
                $config['allowed_types']        = 'jpg|png';
				$config['file_name'] 			= $new_file_name;
		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar');
		$data = array(			

		'keterangan'=>$this->input->post('keterangan'),
		'gambar'=>$new_file_name.".jpg"
		);
		$this->usermodel_gproker->edit($id,$data);
		redirect('welcome/admin_gproker');
		}
	}
	
	public function delete_admin_gproker(){
		$id = $this->uri->segment(3);

		$this->usermodel_gproker->delete($id);
		redirect('welcome/admin_gproker');
		
	}
	
	public function menu_gproker()
	{
			$per_page = abs($this->input->get('per_page'));
		$limit = 8;
		$tot = $this->usermodel_gproker->all();
		$data['gproker'] = $this->usermodel_gproker->limit($limit, $per_page);

		$pagination['page_query_string'] = true;
		$pagination['base_url'] = site_url().'/welcome/menu_gproker?';
		$pagination['total_rows'] = $tot->num_rows();
		$pagination['per_page'] = $limit;
		$pagination['uri_segment'] = $per_page;
		$pagination['num_links'] = 2;

		$pagination['full_tag_open'] = '<ul class="pagination">';
		$pagination['full_tag_close'] = '</ul>';

		$pagination['first_link'] = 'First';
		$pagination['first_tag_open'] = '<li class="prev page">';
		$pagination['first_tag_close'] = '</li>';

		$pagination['last_link'] = 'Last';
		$pagination['last_tag_open'] = '<li class="next page">';
		$pagination['last_tag_close'] = '</li>';

		$pagination['next_link'] = 'Next';
		$pagination['next_tag_open'] = '<li class="next page">';
		$pagination['next_tag_close'] = '</li>';

		$pagination['prev_link'] = 'Previous';
		$pagination['prev_tag_open'] = '<li class="prev page">';
		$pagination['prev_tag_close'] = '</li>';

		$pagination['cur_tag_open'] = '<li class="active"><a href="">';
		$pagination['cur_tag_close'] = '</a></li>';

		$pagination['num_tag_open'] = '<li class="page">';
		$pagination['num_tag_close'] = '</li>';

		$this->pagination->initialize($pagination);
		$this->load->view('menu/menu_gproker',$data);
	}
	
	
	/** ADMIN gpelatihan*/
	
	function admin_gpelatihan(){
		$data['partials']['header'] = $this->load->view('admin/header', null, true);
		$data['gpelatihan'] = $this->usermodel_gpelatihan->all();
		$this->load->view('admin/admin_gpelatihan',$data);

				
	}
	
	public function add_admin_gpelatihan()
	{
		
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
		if ($this->form_validation->run() == FALSE)
		{
		
		$this->load->view('admin/admin_gpelatihan');
		} else {
				/*start upload gambar*/
				$new_file_name = rand(100000,999999); 
				$config['upload_path']          = './library/images/gpelatihan/';
                $config['allowed_types']        = 'jpg|png';
				$config['file_name'] 			= $new_file_name;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
					echo $this->upload->display_errors();
                }
                else
                {
					/*end upload gambar*/
					/*start save ke database*/
                    $data = array(			
				
					'keterangan'=>$this->input->post('keterangan'),
					'gambar'=>$new_file_name.'.jpg'
					);
					$this->usermodel_gpelatihan->add($data);
					/*end save ke database*/
					redirect('welcome/admin_gpelatihan');
                }
		} 
	}
	
	public function update_admin_gpelatihan()
	{
		$id = $this->input->post('id');
		
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
		if ($this->form_validation->run() == FALSE)
		{
		
		$this->load->view('admin/admin_gpelatihan');
		} else {
		$new_file_name = rand(100000,999999); 
				$config['upload_path']          = './library/images/gpelatihan/';
                $config['allowed_types']        = 'jpg|png';
				$config['file_name'] 			= $new_file_name;
		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar');
		$data = array(			

		'keterangan'=>$this->input->post('keterangan'),
		'gambar'=>$new_file_name.".jpg"
		);
		$this->usermodel_gpelatihan->edit($id,$data);
		redirect('welcome/admin_gpelatihan');
		}
	}
	
	public function delete_admin_gpelatihan(){
		$id = $this->uri->segment(3);

		$this->usermodel_gpelatihan->delete($id);
		redirect('welcome/admin_gpelatihan');
		
	}
	
	public function menu_gpelatihan()
	{
			$per_page = abs($this->input->get('per_page'));
		$limit = 8;
		$tot = $this->usermodel_gpelatihan->all();
		$data['gpelatihan'] = $this->usermodel_gpelatihan->limit($limit, $per_page);

		$pagination['page_query_string'] = true;
		$pagination['base_url'] = site_url().'/welcome/menu_gpelatihan?';
		$pagination['total_rows'] = $tot->num_rows();
		$pagination['per_page'] = $limit;
		$pagination['uri_segment'] = $per_page;
		$pagination['num_links'] = 2;

		$pagination['full_tag_open'] = '<ul class="pagination">';
		$pagination['full_tag_close'] = '</ul>';

		$pagination['first_link'] = 'First';
		$pagination['first_tag_open'] = '<li class="prev page">';
		$pagination['first_tag_close'] = '</li>';

		$pagination['last_link'] = 'Last';
		$pagination['last_tag_open'] = '<li class="next page">';
		$pagination['last_tag_close'] = '</li>';

		$pagination['next_link'] = 'Next';
		$pagination['next_tag_open'] = '<li class="next page">';
		$pagination['next_tag_close'] = '</li>';

		$pagination['prev_link'] = 'Previous';
		$pagination['prev_tag_open'] = '<li class="prev page">';
		$pagination['prev_tag_close'] = '</li>';

		$pagination['cur_tag_open'] = '<li class="active"><a href="">';
		$pagination['cur_tag_close'] = '</a></li>';

		$pagination['num_tag_open'] = '<li class="page">';
		$pagination['num_tag_close'] = '</li>';

		$this->pagination->initialize($pagination);
		$this->load->view('menu/menu_gpelatihan',$data);
	}
	
	/** ADMIN gproyek*/
	
	function admin_gproyek(){
		$data['partials']['header'] = $this->load->view('admin/header', null, true);
		$data['gproyek'] = $this->usermodel_gproyek->all();
		$this->load->view('admin/admin_gproyek',$data);

				
	}
	
	public function add_admin_gproyek()
	{
		
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
		if ($this->form_validation->run() == FALSE)
		{
		
		$this->load->view('admin/admin_gproyek');
		} else {
				/*start upload gambar*/
				$new_file_name = rand(100000,999999); 
				$config['upload_path']          = './library/images/gproyek/';
                $config['allowed_types']        = 'jpg|png';
				$config['file_name'] 			= $new_file_name;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
					echo $this->upload->display_errors();
                }
                else
                {
					/*end upload gambar*/
					/*start save ke database*/
                    $data = array(			
				
					'keterangan'=>$this->input->post('keterangan'),
					'gambar'=>$new_file_name.'.jpg'
					);
					$this->usermodel_gproyek->add($data);
					/*end save ke database*/
					redirect('welcome/admin_gproyek');
                }
		} 
	}
	
	public function update_admin_gproyek()
	{
		$id = $this->input->post('id');
		
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
		if ($this->form_validation->run() == FALSE)
		{
		
		$this->load->view('admin/admin_gproyek');
		} else {
		$new_file_name = rand(100000,999999); 
				$config['upload_path']          = './library/images/gproyek/';
                $config['allowed_types']        = 'jpg|png';
				$config['file_name'] 			= $new_file_name;
		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar');
		$data = array(			

		'keterangan'=>$this->input->post('keterangan'),
		'gambar'=>$new_file_name.".jpg"
		);
		$this->usermodel_gproyek->edit($id,$data);
		redirect('welcome/admin_gproyek');
		}
	}
	
	public function delete_admin_gproyek(){
		$id = $this->uri->segment(3);

		$this->usermodel_gproyek->delete($id);
		redirect('welcome/admin_gproyek');
		
	}
	
	public function menu_gproyek()
	{
			$per_page = abs($this->input->get('per_page'));
		$limit = 8;
		$tot = $this->usermodel_gproyek->all();
		$data['gproyek'] = $this->usermodel_gproyek->limit($limit, $per_page);

		$pagination['page_query_string'] = true;
		$pagination['base_url'] = site_url().'/welcome/menu_gproyek?';
		$pagination['total_rows'] = $tot->num_rows();
		$pagination['per_page'] = $limit;
		$pagination['uri_segment'] = $per_page;
		$pagination['num_links'] = 2;

		$pagination['full_tag_open'] = '<ul class="pagination">';
		$pagination['full_tag_close'] = '</ul>';

		$pagination['first_link'] = 'First';
		$pagination['first_tag_open'] = '<li class="prev page">';
		$pagination['first_tag_close'] = '</li>';

		$pagination['last_link'] = 'Last';
		$pagination['last_tag_open'] = '<li class="next page">';
		$pagination['last_tag_close'] = '</li>';

		$pagination['next_link'] = 'Next';
		$pagination['next_tag_open'] = '<li class="next page">';
		$pagination['next_tag_close'] = '</li>';

		$pagination['prev_link'] = 'Previous';
		$pagination['prev_tag_open'] = '<li class="prev page">';
		$pagination['prev_tag_close'] = '</li>';

		$pagination['cur_tag_open'] = '<li class="active"><a href="">';
		$pagination['cur_tag_close'] = '</a></li>';

		$pagination['num_tag_open'] = '<li class="page">';
		$pagination['num_tag_close'] = '</li>';

		$this->pagination->initialize($pagination);
		$this->load->view('menu/menu_gproyek',$data);
	}
	
	/** ADMIN gumum*/
	
	function admin_gumum(){
		$data['partials']['header'] = $this->load->view('admin/header', null, true);
		$data['gumum'] = $this->usermodel_gumum->all();
		$this->load->view('admin/admin_gumum',$data);

				
	}
	
	public function add_admin_gumum()
	{
		
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
		if ($this->form_validation->run() == FALSE)
		{
		
		$this->load->view('admin/admin_gumum');
		} else {
				/*start upload gambar*/
				$new_file_name = rand(100000,999999); 
				$config['upload_path']          = './library/images/gumum/';
                $config['allowed_types']        = 'jpg|png';
				$config['file_name'] 			= $new_file_name;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
					echo $this->upload->display_errors();
                }
                else
                {
					/*end upload gambar*/
					/*start save ke database*/
                    $data = array(			
				
					'keterangan'=>$this->input->post('keterangan'),
					'gambar'=>$new_file_name.'.jpg'
					);
					$this->usermodel_gumum->add($data);
					/*end save ke database*/
					redirect('welcome/admin_gumum');
                }
		} 
	}
	
	public function update_admin_gumum()
	{
		$id = $this->input->post('id');
		
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
		if ($this->form_validation->run() == FALSE)
		{
		
		$this->load->view('admin/admin_gumum');
		} else {
		$new_file_name = rand(100000,999999); 
				$config['upload_path']          = './library/images/gumum/';
                $config['allowed_types']        = 'jpg|png';
				$config['file_name'] 			= $new_file_name;
		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar');
		$data = array(			

		'keterangan'=>$this->input->post('keterangan'),
		'gambar'=>$new_file_name.".jpg"
		);
		$this->usermodel_gumum->edit($id,$data);
		redirect('welcome/admin_gumum');
		}
	}
	
	public function delete_admin_gumum(){
		$id = $this->uri->segment(3);

		$this->usermodel_gumum->delete($id);
		redirect('welcome/admin_gumum');
		
	}
	
	public function menu_gumum()
	{
			$per_page = abs($this->input->get('per_page'));
		$limit = 8;
		$tot = $this->usermodel_gumum->all();
		$data['gumum'] = $this->usermodel_gumum->limit($limit, $per_page);

		$pagination['page_query_string'] = true;
		$pagination['base_url'] = site_url().'/welcome/menu_gumum?';
		$pagination['total_rows'] = $tot->num_rows();
		$pagination['per_page'] = $limit;
		$pagination['uri_segment'] = $per_page;
		$pagination['num_links'] = 2;

		$pagination['full_tag_open'] = '<ul class="pagination">';
		$pagination['full_tag_close'] = '</ul>';

		$pagination['first_link'] = 'First';
		$pagination['first_tag_open'] = '<li class="prev page">';
		$pagination['first_tag_close'] = '</li>';

		$pagination['last_link'] = 'Last';
		$pagination['last_tag_open'] = '<li class="next page">';
		$pagination['last_tag_close'] = '</li>';

		$pagination['next_link'] = 'Next';
		$pagination['next_tag_open'] = '<li class="next page">';
		$pagination['next_tag_close'] = '</li>';

		$pagination['prev_link'] = 'Previous';
		$pagination['prev_tag_open'] = '<li class="prev page">';
		$pagination['prev_tag_close'] = '</li>';

		$pagination['cur_tag_open'] = '<li class="active"><a href="">';
		$pagination['cur_tag_close'] = '</a></li>';

		$pagination['num_tag_open'] = '<li class="page">';
		$pagination['num_tag_close'] = '</li>';

		$this->pagination->initialize($pagination);
		$this->load->view('menu/menu_gumum',$data);
	}
	
	
	
	
	/** ADMIN so*/
	
	function admin_so(){
		$data['partials']['header'] = $this->load->view('admin/header', null, true);
		$data['so'] = $this->usermodel_so->all();
		$this->load->view('admin/admin_so',$data);

				
	}
	
	public function add_admin_so()
	{
		
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
		if ($this->form_validation->run() == FALSE)
		{
		
		$this->load->view('admin/admin_so');
		} else {
				/*start upload gambar*/
				$new_file_name = rand(100000,999999); 
				$config['upload_path']          = './library/images/so/';
                $config['allowed_types']        = 'jpg|png';
				$config['file_name'] 			= $new_file_name;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
					echo $this->upload->display_errors();
                }
                else
                {
					/*end upload gambar*/
					/*start save ke database*/
                    $data = array(			
				
					'judul'=>$this->input->post('judul'),
					'keterangan'=>$this->input->post('keterangan'),
					'gambar'=>$new_file_name.'.jpg'
					);
					$this->usermodel_so->add($data);
					/*end save ke database*/
					redirect('welcome/admin_so');
                }
		} 
	}
	
	public function update_admin_so()
	{
		$id = $this->input->post('id');
		
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
		if ($this->form_validation->run() == FALSE)
		{
		
		$this->load->view('admin/admin_so');
		} else {
		$new_file_name = rand(100000,999999); 
				$config['upload_path']          = './library/images/so/';
                $config['allowed_types']        = 'jpg|png';
				$config['file_name'] 			= $new_file_name;
		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar');
		$data = array(			

		'judul'=>$this->input->post('judul'),
		'keterangan'=>$this->input->post('keterangan'),
		'gambar'=>$new_file_name.".jpg"
		);
		$this->usermodel_so->edit($id,$data);
		redirect('welcome/admin_so');
		}
	}
	
	public function delete_admin_so(){
		$id = $this->uri->segment(3);

		$this->usermodel_so->delete($id);
		redirect('welcome/admin_so');
		
	}
	
	public function menu_so()
	{
			$per_page = abs($this->input->get('per_page'));
		$limit = 1;
		$tot = $this->usermodel_so->all();
		$data['so'] = $this->usermodel_so->limit($limit, $per_page);

		$pagination['page_query_string'] = true;
		$pagination['base_url'] = site_url().'/welcome/menu_so?';
		$pagination['total_rows'] = $tot->num_rows();
		$pagination['per_page'] = $limit;
		$pagination['uri_segment'] = $per_page;
		$pagination['num_links'] = 0;

		$pagination['full_tag_open'] = '<ul class="pagination">';
		$pagination['full_tag_close'] = '</ul>';

		$pagination['first_link'] = 'First';
		$pagination['first_tag_open'] = '<li class="prev page">';
		$pagination['first_tag_close'] = '</li>';

		$pagination['last_link'] = 'Last';
		$pagination['last_tag_open'] = '<li class="next page">';
		$pagination['last_tag_close'] = '</li>';

		$pagination['next_link'] = 'Next';
		$pagination['next_tag_open'] = '<li class="next page">';
		$pagination['next_tag_close'] = '</li>';

		$pagination['prev_link'] = 'Previous';
		$pagination['prev_tag_open'] = '<li class="prev page">';
		$pagination['prev_tag_close'] = '</li>';

		$pagination['cur_tag_open'] = '<li class="active"><a href="">';
		$pagination['cur_tag_close'] = '</a></li>';

		$pagination['num_tag_open'] = '<li class="page">';
		$pagination['num_tag_close'] = '</li>';

		$this->pagination->initialize($pagination);
		$this->load->view('menu/menu_so',$data);
	}
	
		
	
	/*  admin_jadwal_pelatihan */
		
	function menu_pelatihan(){
		$data['jadwal_pelatihan'] = $this->usermodel_jadwal_pelatihan->all();
		$this->load->view('menu/menu_pelatihan',$data);
	}
	
	function menu_workshop(){
		$this->load->view('menu/menu_workshop');			
	}
	
	function menu_pendaftaran(){
		$this->load->view('menu/menu_pendaftaran');			
	}
	
	
	function menu_dinasti19(){
		$data['anggota'] = $this->usermodel_anggota->all();
		$this->load->view('menu/menu_dinasti19',$data);
	}
	
	
	function menu_dinasti20(){
		$data['anggota20'] = $this->usermodel_anggota20->all();
		$this->load->view('menu/menu_dinasti20',$data);
	}
	
	
	
	
	
	function menu_berita()
	{
	$per_page = abs($this->input->get('per_page'));
		$limit = 8;
		$tot = $this->model_berita->all();
		$data['berita'] = $this->model_berita->limit($limit, $per_page);

		$pagination['page_query_string'] = true;
		$pagination['base_url'] = site_url().'/berita/menu_berita?';
		$pagination['total_rows'] = $tot->num_rows();
		$pagination['per_page'] = $limit;
		$pagination['uri_segment'] = $per_page;
		$pagination['num_links'] = 2;

		$pagination['full_tag_open'] = '<ul class="pagination">';
		$pagination['full_tag_close'] = '</ul>';

		$pagination['first_link'] = '<<';
		$pagination['first_tag_open'] = '<li class="prev page">';
		$pagination['first_tag_close'] = '</li>';

		$pagination['last_link'] = '>>';
		$pagination['last_tag_open'] = '<li class="next page">';
		$pagination['last_tag_close'] = '</li>';

		$pagination['next_link'] = '>';
		$pagination['next_tag_open'] = '<li class="next page">';
		$pagination['next_tag_close'] = '</li>';

		$pagination['prev_link'] = '<';
		$pagination['prev_tag_open'] = '<li class="prev page">';
		$pagination['prev_tag_close'] = '</li>';

		$pagination['cur_tag_open'] = '<li class="active"><a href="">';
		$pagination['cur_tag_close'] = '</a></li>';

		$pagination['num_tag_open'] = '<li class="page">';
		$pagination['num_tag_close'] = '</li>';

		$this->pagination->initialize($pagination);
		$data['data']=$this->model_berita->tampil();
		$this->load->view('menu/menu_berita',$data);
		}

	function menu_berita_next()
	{
		$per_page = abs($this->input->get('per_page'));
		$limit = 8;
		$tot = $this->model_berita->all();
		$data['berita'] = $this->model_berita->limit($limit, $per_page);
	
		
		$id=$this->uri->segment(3);
		$data['data']=$this->model_berita->per_id($id);
		$this->load->view('menu/menu_berita_next',$data);
	}
	

	function admin_berita(){
		$data['partials']['header'] = $this->load->view('admin/header', null, true);
		$data['berita'] = $this->model_berita->all();
		$this->load->view('admin/admin_berita',$data);
	}
	
	public function add_admin_berita()
	{
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required');
		$this->form_validation->set_rules('isi', 'isi', 'required');
		
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
		if ($this->form_validation->run() == FALSE)
		{
		
		$this->load->view('admin/admin_berita');
		} else {
				/*start upload gambar*/
				$new_file_name = rand(100000,999999); 
				$config['upload_path']          = './library/images/berita/';
                $config['allowed_types']        = 'jpg|png';
				$config['file_name'] 			= $new_file_name;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
					echo $this->upload->display_errors();
                }
                else
                {
					/*end upload gambar*/
					/*start save ke database*/
                    $data = array(			
				
					'judul'=>$this->input->post('judul'),
					'tanggal'=>$this->input->post('tanggal'),
					'isi'=>$this->input->post('isi'),
					'gambar'=>$new_file_name.'.jpg'
					);
					$this->model_berita->add($data);
					/*end save ke database*/
					redirect('berita/admin_berita');
                }
		} 
	}
	
	public function update_admin_berita()
	{
		$id = $this->input->post('id');
		
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required');
		$this->form_validation->set_rules('isi', 'isi', 'required');
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
		if ($this->form_validation->run() == FALSE)
		{
		
		$this->load->view('admin/admin_berita');
		} else {
		$new_file_name = rand(100000,999999); 
				$config['upload_path']          = './library/images/berita/';
                $config['allowed_types']        = 'jpg|png';
				$config['file_name'] 			= $new_file_name;
		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar');
		$data = array(			

		'judul'=>$this->input->post('judul'),
		'tanggal'=>$this->input->post('tanggal'),
		'isi'=>$this->input->post('isi'),
		'gambar'=>$new_file_name.".jpg"
		);
		$this->model_berita->edit($id,$data);
		redirect('berita/admin_berita');
		}

		
	}
	
	public function delete_admin_berita(){
		$id = $this->uri->segment(3);

		$this->model_berita->delete($id);
		redirect('berita/admin_berita');
		
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
?>