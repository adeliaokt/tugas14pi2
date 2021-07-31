<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penjualan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PenjualanModel');
        $this->load->model('PelangganModel');
    }
    public function index()
    {

        $data['allpenjualan'] = $this->PenjualanModel->get_all_data_penjualan();
        $data['allpelanggan'] = $this->PelangganModel->get_all_data_pelanggan();
        $data['title'] = "Daftar penjualan";

        $this->load->view('templates/header', $data);
        $this->load->view('penjualan/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['title'] = "Tambah penjualan";

        $this->load->view('templates/header', $data);
        $this->load->view('penjualan/create', $data);
        $this->load->view('templates/footer');
    }

    public function simpanpenjualan()
    {
        $penjualan_id = time();
        $data = [
            'penjualan_id' => $penjualan_id,
            'pelanggan_id' => $this->input->post('pelanggan_id'),
            'tgl_penjualan' => $this->input->post('tgl_penjualan'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $this->db->insert('penjualan', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data penjualan sudah ditambahkan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('penjualandetail/proses/' . $penjualan_id);
    }

    public function detail($penjualan_id)
    {
        $data['title'] = "Detail penjualan";
        $data['penjualan'] = $this->db->get_where('penjualan', ['penjualan_id' => $penjualan_id])->row_array();
        $data['penjualandetail'] = $this->PenjualanModel->get_detail_penjualan($penjualan_id);

        $this->load->view('templates/header', $data);
        $this->load->view('penjualan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function editpenjualan()
    {

        $this->db->set('tgl_penjualan', $this->input->post('tgl_penjualan'));
        $this->db->set('pelanggan_id', $this->input->post('pelanggan_id'));
        $this->db->set('keterangan', $this->input->post('keterangan'));
        $this->db->update('penjualan');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data penjualan sudah di edit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('penjualan');
    }

    public function hapus($penjualan_id)
    {

        $this->db->where('penjualan_id', $penjualan_id);
        $this->db->delete('penjualan');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data penjualan sudah dihapus.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('penjualan');
    }
}
