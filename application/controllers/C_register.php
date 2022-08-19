<?php
class C_register extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_perpus');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('login/v_register');
		$this->load->view('footer');
	}

    public function aksi_register()
	{
		$nama_user = $this->input->post('nama_user');
		$NIS = $this->input->post('NIS');
		$jk_user = $this->input->post('jk_user');
		$alamat_user = $this->input->post('alamat_user');
		$telp_user = $this->input->post('telp_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'nama_user' => $nama_user,
			'NIS' => $NIS,
			'jk_user' => $jk_user,
			'alamat_user' => $alamat_user,
			'telp_user' => $telp_user,
			'status_user' => 'aktif',
			'level_user' => 'anggota',
			'username' => $username,
			'password' => $password
		);

		$data = $this->M_perpus->tambah_data('user',$data);
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
		Selamat Anda telah mempunyai akun!! tolong login
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');
        redirect(base_url().'C_login');
	}
}