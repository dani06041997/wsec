<?php
class Berita extends ci_controller
{
function __construct()
{
parent::__construct();
$this->load->model('model_berita');
$this->load->helper('text'); // memanggil helper text
$this->load->library(array('form_validation','pagination'));
		
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

}