<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('BarangModel', 'bm');
	}
	public function index()
	{

		$data['allbarang'] = $this->bm->get_all_data_barang();
		$data['title'] = "Daftar Barang";

		$this->load->view('templates/header', $data);
		$this->load->view('barang/index', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$data['title'] = "Tambah Barang";

		$this->load->view('templates/header', $data);
		$this->load->view('barang/create', $data);
		$this->load->view('templates/footer');
	}

	public function simpanbarang()
	{
		$data = [
			'nama_barang' => $this->input->post('nama_barang'),
			'harga_barang' => $this->input->post('harga_barang'),
			'stok' => $this->input->post('stok'),
			'keterangan' => $this->input->post('keterangan'),
		];
		$this->db->insert('barang', $data);

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Barang sudah ditambahkan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

		redirect('Barang');
	}

	public function edit($barang_id)
	{
		$data['title'] = "Edit Barang";
		$data['barang'] = $this->db->get_where('barang', ['barang_id' => $barang_id])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('barang/edit', $data);
		$this->load->view('templates/footer');
	}

	public function editbarang()
	{

		$this->db->set('nama_barang', $this->input->post('nama_barang'));
		$this->db->set('harga_barang', $this->input->post('harga_barang'));
		$this->db->set('stok', $this->input->post('stok'));
		$this->db->set('keterangan', $this->input->post('keterangan'));
		$this->db->where('barang_id', $this->input->post('barang_id'));
		$this->db->update('barang');

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Barang sudah di edit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

		redirect('Barang');
	}

	public function hapus($barang_id)
	{

		$this->db->where('barang_id', $barang_id);
		$this->db->delete('barang');

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Barang sudah dihapus.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

		redirect('Barang');
	}
}
