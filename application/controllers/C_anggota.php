<?php

/**
 * 
 */
class C_anggota extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "sudah_login")
 		{
 			redirect(base_url().'C_login?alert=belum_login');
 		}
 		$this->load->model('M_perpus');
	}

	public function index()
	{
		$data['kategori'] = $this->M_perpus->ambil_data('kategori')->result();
		$this->load->view('header');
		$this->load->view('anggota/v_dashboard_user',$data);
		$this->load->view('footer');
	}

	public function data_kategori_buku($id_kategori)
	{
		$data['kategori'] = $this->M_perpus->cari_data('id_kategori',$id_kategori,'kategori')->row();
		$data['buku'] = $this->M_perpus->data_kategori_buku($id_kategori)->result();
		$this->load->view('header');
		$this->load->view('anggota/v_data_kategori_buku',$data);
		$this->load->view('footer');

	}

	public function cari()
	{
		$keyword = $this->input->get('keyword');
		$data['buku'] = $this->M_perpus->get_keyword_buku($keyword);
		$this->load->view('header');
		$this->load->view('anggota/v_data_kategori_buku',$data);
		$this->load->view('footer');
	}
}