<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();
		$this->load->model('Saran_model'); 
        $this->load->model('Keranjang_model'); 
	}

	public function index()
	{
		is_logged_in();
        $data['judul'] = "Kotak Saran";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['saran'] = $this->Saran_model->get();
		$data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view("layout/header", $data);
        $this->load->view("saran/vw_saran", $data);
        $this->load->view("layout/footer", $data);
	}

    public function tambah(){
        is_logged_in2();
        $data['judul'] = "Kritik & Saran";

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jlh'] = $this->Keranjang_model->jumlah();
		$this->form_validation->set_rules('kotak_saran', 'kotak_saran', 'required', [
			'required' => 'Kotak Saran Wajib di isi'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("saran/vw_tambah_saran", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'kotak_saran' => $this->input->post('kotak_saran'),
			];
			$this->Saran_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kritik & Saran Terkirim !</div>');
			redirect('Saran');
		}
    }
	public function hapus($id){
		$this->Saran_model->delete($id);
		redirect('Saran');
	}
}