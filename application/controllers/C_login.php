<?php
class C_login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_perpus');
	}

	public function index()
	{
		$data['title'] = 'login Page';
		$this->load->view('header', $data);
		$this->load->view('login/v_login');
		$this->load->view('footer');
	}

	public function register()
	{
		$this->load->view('header');
		$this->load->view('login/v_register');
		$this->load->view('footer');
	}
	
	public function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => $password,
			'status_user' => 'aktif'
		);

		$cek = $this->M_perpus->cek_login('user',$where)->num_rows();

		if ($cek == 1) {
			$data = $this->M_perpus->cek_login('user',$where)->row();
			$data_user = array(
				'id_user' => $data->id_user,
				'username' => $data->username,
				'password' => $data->password,
				'nama_user' => $data->nama_user,
				'NIS' => $data->NIS,
				'jk_user' => $data->jk_user,
				'alamat_user' => $data->alamat_user,
				'telp_user' => $data->telp_user,
				'foto_user' => $data->foto_user,
				'status_user' => $data->status_user,
				'level_user' => $data->level_user,
				'status' => 'sudah_login'
			);
			
			$this->session->set_userdata($data_user);
			$this->session->set_flashdata('login','<div class="alert alert-primary alert-dismissible fade show" role="alert"><p class="text-center">Selamat Anda telah login</P>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	 		</div>');

			if ($data->level_user == 'petugas') {
				redirect(base_url().'C_petugas');
			}else if($data->level_user == 'anggota'){
				redirect(base_url().'C_anggota');
			}else{
				redirect(base_url().'C_login');
			}	
		}else {
			$this->session->set_flashdata('salah','<div class="alert alert-danger alert-dismissible fade 		show" role="alert"><p class="text-center">Email dan Password salah</P>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	 			</div>');
				redirect(base_url().'C_login');
			redirect(base_url().'C_login');
		}
	}

	public function logout()
 	{
		
 		$this->session->sess_destroy(); 
		 $this->session->set_flashdata('logout','<div class="alert alert-danger alert-dismissible fade 		show" role="alert"><p class="text-center">Anda Telah Logout</P>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		 </div>');
 		redirect('C_login?alert=logout');
 	}
}