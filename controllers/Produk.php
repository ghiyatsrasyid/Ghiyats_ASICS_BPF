<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
        $this->load->model('Produk_model'); 
	}

	public function index()
	{
		$data['judul'] = "Halaman Produk";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->Produk_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("produk/vw_produk", $data);
        $this->load->view("layout/footer");
	}

    public function tambah()
	{	
		$data['judul'] = "Halaman Tambah Produk";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->Produk_model->get();

		$this->form_validation->set_rules('nama', 'Nama', 'required', [
			'required' => 'Nama Produk Wajib di isi'
		]);
		$this->form_validation->set_rules('status', 'Status', 'required', [
			'required' => 'Status Wajib di isi'
		]);
		$this->form_validation->set_rules('stok', 'Stok', 'required|integer', [
			'required' => 'Stok Produk Wajib di isi',
			'integer' => 'Stok Produk harus Angka'
		]);
		$this->form_validation->set_rules('harga', 'Harga', 'required|integer', [
			'required' => 'Harga Produk Wajib di isi',
			'integer' => 'Harga Produk harus Angka'
		]);
		$this->form_validation->set_rules('kategori', 'Kategori', 'required', [
			'required' => 'Kategori Wajib di isi'
		]);
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
			'required' => 'Keterangan Wajib di isi'
		]);

		if($this->form_validation->run()==false){
			$this->load->view("layout/header", $data);
			$this->load->view("produk/vw_tambah_produk", $data);
			$this->load->view("layout/footer");
		}
		else{
			$data = [
				'nama' => $this->input->post('nama'),
				'status' => $this->input->post('status'),
				'stok' => $this->input->post('stok'),
				'harga' => $this->input->post('harga'),
				'kategori' => $this->input->post('kategori'),
				'keterangan' => $this->input->post('keterangan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if($upload_image){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/produk/';
				$this->load->library('upload', $config);
				if($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				}
				else{
					echo $this->upload->display_errors();
				}
			}
			$this->Produk_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success"
			role="alert">Data Produk Berhasil Ditambah!</div>');
			redirect('Produk');
		}
	}

	public function edit($id)
	{
		$data['judul'] = "Halaman Edit Produk";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->Produk_model->getById($id);

		$this->form_validation->set_rules('nama', 'Nama', 'required', [
			'required' => 'Nama Produk Wajib di isi'
		]);
		$this->form_validation->set_rules('status', 'status', 'required', [
			'required' => 'Status Produk Wajib di isi'
		]);
		$this->form_validation->set_rules('stok', 'Stok', 'required|integer', [
			'required' => 'Stok Produk Wajib di isi',
			'integer' => 'Stok Produk harus Angka'
		]);
		$this->form_validation->set_rules('harga', 'Harga', 'required|integer', [
			'required' => 'Harga Produk Wajib di isi',
			'integer' => 'Harga Produk harus Angka'
		]);
		$this->form_validation->set_rules('kategori', 'Kategori', 'required', [
			'required' => 'Kategori Wajib di isi'
		]);
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
			'required' => 'Keterangan Wajib di isi'
		]);

		if($this->form_validation->run()==false){
			$this->load->view("layout/header", $data);
			$this->load->view("produk/vw_ubah_produk", $data);
			$this->load->view("layout/footer");
		}
		else{
			$data = [
				'nama' => $this->input->post('nama'),
				'status' => $this->input->post('status'),
				'stok' => $this->input->post('stok'),
				'harga' => $this->input->post('harga'),
				'kategori' => $this->input->post('kategori'),
				'keterangan' => $this->input->post('keterangan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/produk/';
				$this->load->library('upload', $config);
				if($this->upload->do_upload('gambar')) {
					$old_image = $data['produk']['gambar'];
					if($old_image != 'default.jpg') {
						unlink(FCPATH.'assets/img/produk/'.$old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				}
				else{
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->post('id');
			$this->Produk_model->update(['id' => $id], $data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Berhasil Diubah!</div>');
			redirect('Produk');
		}
	}

    public function hapus($id){
		$this->Produk_model->delete($id);
		$error = $this->db->error();
 		if ($error['code'] != 0) {
 			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon 
			fas fa-info-circle"></i>Data Produk tidak dapat dihapus (sudah berelasi)!</div>');
 		}
		else {
 			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i 
			class="icon fas fa-check-circle"></i>Data Produk Berhasil Dihapus!</div>');
 		}
		redirect('Produk');
	}
}