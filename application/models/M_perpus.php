<?php
/**
 * 
 */
class M_perpus extends CI_Model
{
	public function cek_login($table,$data)
	{
		return $this->db->get_where($table,$data);
	}

	public function ambil_data($table)
	{
		return $this->db->get($table);
	}

	public function tambah_data($table,$data)
	{
		return $this->db->insert($table,$data);
	}

	public function aksi_tambah($table,$data)
	{
		return $this->db->insert($table,$data);
	}

	public function aksi_edit($where,$id,$table,$data)
	{
		return $this->db->where($where,$id)->update($table,$data);
	}

	public function edit_data($where,$id,$table,$data)
	{
		return $this->db->where($where,$id)->update($table,$data);
	}

	public function cari_data($where,$id,$table)
	{
		return $this->db->where($where, $id)->get($table);
	}

	public function data_buku()
	{
		$this->db->select('*');
        $this->db->from('buku');
        $this->db->join('kategori','kategori.id_kategori = buku.id_kategori');
        $query = $this->db->get();
        return $query;
	}

	public function cari_buku($id)
	{
		$this->db->select('*');
        $this->db->from('buku');
        $this->db->join('kategori','kategori.id_kategori = buku.id_kategori');
        $this->db->where('id_buku',$id);
        $query = $this->db->get();
        return $query;
	} 

	public function hapusBuku($id){
        $this->db->where('id_buku', $id);
        $this->db->delete('buku');
	}

	public function hapusUser($id){
        $this->db->where('id_user', $id);
        $this->db->delete('user');
	}

	public function cari_user($ket)
	{
		$this->db->select('*');
        $this->db->from('user');
        $this->db->where('level_user',$ket);
        $query = $this->db->get();
        return $query;
	}

	public function data_pengembalian($kolom,$ket)
	{
		$this->db->select('*');
        $this->db->from('transaksi');
        // $this->db->join('user','transaksi.id_petugas = user.id_user');             
        $this->db->join('user','transaksi.id_anggota = user.id_user');             
        $this->db->join('buku','transaksi.id_buku = buku.id_buku'); 
        $this->db->join('kategori','buku.id_kategori = kategori.id_kategori'); 
		$this->db->where($kolom, $ket);
        $query = $this->db->get();
        return $query;
	}

	public function data_kategori_buku($id_kategori)
	{
		$this->db->select('*');
        $this->db->from('buku');
        $this->db->join('kategori','kategori.id_kategori = buku.id_kategori');
        $this->db->where('kategori.id_kategori',$id_kategori);
        $query = $this->db->get();
        return $query;
	}

	public function get_keyword_buku($keyword)
	{
		$this->db->select('*');
		$this->db->from('buku');
		$this->db->like('id_buku',$keyword);
		$this->db->or_like('id_kategori',$keyword);
		$this->db->or_like('judul_buku',$keyword);
		$this->db->or_like('penulis_buku',$keyword);
		$this->db->or_like('penerbit_buku',$keyword);
		return $this->db->get()->result();
	}

	public function get_keyword_user($keyword)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->like('username',$keyword);
		$this->db->or_like('id_user',$keyword);
		$this->db->or_like('password',$keyword);
		$this->db->or_like('nama_user',$keyword);
		$this->db->or_like('jk_user',$keyword);
		$this->db->or_like('alamat_user',$keyword);
		$this->db->or_like('telp_user',$keyword);
		$this->db->or_like('status_user',$keyword);
		$this->db->or_like('level_user',$keyword);
		return $this->db->get()->result();
	}
}