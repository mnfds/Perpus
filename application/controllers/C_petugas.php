<?php

/**
 * 
 */
class C_petugas extends CI_Controller
{
	//dwina
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "sudah_login")
 		{
 			redirect(base_url().'C_login?alert=belum_login');
 		}
 		$this->load->model('M_perpus');
	}

	//dwina
	public function index()
	{
		$data['user'] = $this->M_perpus->ambil_data('user')->row();
		$data['kategori'] = $this->M_perpus->ambil_data('kategori')->result();
		$this->load->view('header');
		$this->load->view('petugas/v_dashboard_user',$data);
		$this->load->view('footer');
	}

	//dwina
	public function data_user()
	{
		$data['user'] = $this->M_perpus->ambil_data('user')->result();
		$this->load->view('header');
		$this->load->view('petugas/v_data_user',$data);
		$this->load->view('footer');
	}

	//nazar
	public function tambah_user()
	{
		$this->load->view('header');
		$this->load->view('petugas/v_tambah_user');
		$this->load->view('footer');
	}

	//nazar
	public function aksi_tambah_user()
	{
		$nama_user = $this->input->post('nama_user');
		$NIS = $this->input->post('NIS');
		$jk_user = $this->input->post('jk_user');
		$alamat_user = $this->input->post('alamat_user');
		$telp_user = $this->input->post('telp_user');
		$status_user = $this->input->post('status_user');
		$level_user = $this->input->post('level_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'nama_user' => $nama_user,
			'NIS' => $NIS,
			'jk_user' => $jk_user,
			'alamat_user' => $alamat_user,
			'telp_user' => $telp_user,
			'status_user' => $status_user,
			'level_user' => $level_user,
			'username' => $username,
			'password' => $password
		);

		$data = $this->M_perpus->tambah_data('user',$data);
		redirect(base_url().'C_petugas/data_user');
	}

	//dwina
	public function edit_user($id_user)
	{
		$data['user'] = $this->M_perpus->cari_data('id_user',$id_user,'user')->row();
		$this->load->view('header');
		$this->load->view('petugas/v_edit_user',$data);
		$this->load->view('footer');
	}

	//dwina
	public function aksi_edit_user()
	{
		$id_user = $this->input->post('id_user');

		$nama_user = $this->input->post('nama_user');
		$jk_user = $this->input->post('jk_user');
		$alamat_user = $this->input->post('alamat_user');
		$telp_user = $this->input->post('telp_user');
		$status_user = $this->input->post('status_user');
		$level_user = $this->input->post('level_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'nama_user' => $nama_user,
			'jk_user' => $jk_user,
			'alamat_user' => $alamat_user,
			'telp_user' => $telp_user,
			'status_user' => $status_user,
			'level_user' => $level_user,
			'username' => $username,
			'password' => $password
		);

		$data = $this->M_perpus->edit_data('id_user',$id_user,'user',$data);
		redirect(base_url().'C_petugas/data_user');
	}

	public function hapus_user($id){
		$this->M_perpus->hapusUser($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('C_petugas/data_user');
	}

	//sarah
	public function data_buku()
	{
		$data['buku'] = $this->M_perpus->data_buku()->result();
		$this->load->view('header');
		$this->load->view('petugas/v_data_buku',$data);
		$this->load->view('footer');
	}

	//nazar
	public function tambah_buku()
	{
		$data['kategori'] = $this->M_perpus->ambil_data('kategori')->result();
		$this->load->view('header');
		$this->load->view('petugas/v_tambah_buku',$data);
		$this->load->view('footer');
	}

	//nazar
	public function aksi_tambah_buku()
	{
		$id_kategori = $this->input->post('id_kategori');
		$judul_buku = $this->input->post('judul_buku');
		$penulis_buku = $this->input->post('penulis_buku');
		$penerbit_buku = $this->input->post('penerbit_buku');
		$jumlah_buku = $this->input->post('jumlah_buku');

		$data = array(
			'id_kategori' => $id_kategori,
			'judul_buku' => $judul_buku,
			'penulis_buku' => $penulis_buku,
			'penerbit_buku' => $penerbit_buku,
			'jumlah_buku' => $jumlah_buku
		);

		$data = $this->M_perpus->tambah_data('buku',$data);
		redirect(base_url().'C_petugas/data_buku');
	}

	//sarah
	public function edit_buku($id_buku)
	{
		$data['buku'] = $this->M_perpus->cari_buku($id_buku)->row();
		$data['kategori'] = $this->M_perpus->ambil_data('kategori')->result();
		$this->load->view('header');
		$this->load->view('petugas/v_edit_buku',$data);
		$this->load->view('footer');
	}

	//sarah
	public function aksi_edit_buku()
	{
		$id_buku = $this->input->post('id_buku');

		$id_kategori = $this->input->post('id_kategori');
		$judul_buku = $this->input->post('judul_buku');
		$penulis_buku = $this->input->post('penulis_buku');
		$penerbit_buku = $this->input->post('penerbit_buku');
		$jumlah_buku = $this->input->post('jumlah_buku');

		$data = array(
			'id_kategori' => $id_kategori,
			'judul_buku' => $judul_buku,
			'penulis_buku' => $penulis_buku,
			'penerbit_buku' => $penerbit_buku,
			'jumlah_buku' => $jumlah_buku
		);

		$data = $this->M_perpus->edit_data('id_buku',$id_buku,'buku',$data);
		redirect(base_url().'C_petugas/data_buku');
	}

	public function hapusBuku($id){
		$this->M_perpus->hapusBuku($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('C_petugas/data_buku');
	}

	//tika
	public function peminjaman()
	{
		$data['buku'] = $this->M_perpus->data_buku()->result();
		$data['user'] = $this->M_perpus->cari_data('level_user','anggota','user')->result();
		$this->load->view('header');
		$this->load->view('petugas/v_peminjaman',$data);
		$this->load->view('footer');
	}

	//tika
	public function aksi_peminjaman()
	{
		$id_petugas = $this->input->post('id_petugas');
		$id_anggota = $this->input->post('id_anggota');
		$id_buku = $this->input->post('id_buku');
		$tanggal_pinjam = $this->input->post('tanggal_pinjam');
		$tanggal_tempo = $this->input->post('tanggal_tempo');
		$status = 'belum';
		$data = array(
    		'id_petugas' => $id_petugas,
    		'id_anggota' => $id_anggota,
    		'id_buku' => $id_buku,
    		'tanggal_pinjam' => $tanggal_pinjam,
    		'tanggal_tempo' => $tanggal_tempo,
    		'status' => $status
    	);

    	$nilai = $this->M_perpus->cari_data('id_buku',$id_buku,'buku')->row();
    	$jumlah = $nilai->jumlah_buku;
    	$hasil_buku = $jumlah-1;
    	$ubah = array(
    		'jumlah_buku' => $hasil_buku
    	);

        $this->M_perpus->aksi_tambah('transaksi',$data);
        $this->M_perpus->aksi_edit('id_buku',$id_buku,'buku',$ubah);
        redirect('C_petugas/pengembalian');
	}

	//tika
	public function pengembalian()
	{
		$data['transaksi'] = $this->M_perpus->data_pengembalian('status','belum')->result();
		$this->load->view('header');
		$this->load->view('petugas/v_pengembalian',$data);
		$this->load->view('footer');
	}

	//tika
	public function aksi_pengembalian($kode_transaksi)
	{
		$tanggal_kembali = date('Y-m-d');
		$today = time();
		$nilai = $this->M_perpus->cari_data('kode_transaksi',$kode_transaksi,'transaksi')->row();
		$tgl_tempo = strtotime($nilai->tanggal_tempo);
        $perbedaan = $today - $tgl_tempo;
        $hasil = floor($perbedaan / (60 * 60 * 24));
        if ($hasil > 0) {
          $tenggat = $hasil;
        }else{
          $tenggat = 0;
        }

        $data = array(
        	'tanggal_kembali' => $tanggal_kembali,
        	'tenggat' => $tenggat,
        	'status' => 'selesai'
        );

        $id_buku = $nilai->id_buku;
        $cari_buku = $this->M_perpus->cari_data('id_buku',$id_buku,'buku')->row();
        $jumlah = $cari_buku->jumlah_buku;
    	$hasil_buku = $jumlah+1;
    	$ubah = array(
    		'jumlah_buku' => $hasil_buku
    	);

        $this->M_perpus->aksi_edit('kode_transaksi',$kode_transaksi,'transaksi',$data);
        $this->M_perpus->aksi_edit('id_buku',$id_buku,'buku',$ubah);
        redirect('C_petugas/arsip');
	}

	//daus
	public function arsip()
	{
		$data['transaksi'] = $this->M_perpus->data_pengembalian('status','selesai')->result();
		$this->load->view('header');
		$this->load->view('petugas/v_arsip',$data);
		$this->load->view('footer');
	}

	public function cari_user()
	{
		$keyword = $this->input->get('keyword');
		$data['user'] = $this->M_perpus->get_keyword_user($keyword);
		$this->load->view('header');
		$this->load->view('petugas/v_data_user',$data);
		$this->load->view('footer');
	}

	public function cari_buku()
	{
		$keyword = $this->input->get('keyword');
		$data['buku'] = $this->M_perpus->get_keyword_buku($keyword);
		$this->load->view('header');
		$this->load->view('petugas/v_data_buku',$data);
		$this->load->view('footer');
	}
}