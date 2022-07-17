<?php
defined('BASEPATH') or exit('NO DIRECT ACCESS SCRIPT ALLOWED');

use Dompdf\Dompdf;

class Penjualan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Produk_model');
        $this->load->model('Penjualan_model');
        $this->load->model('User_model');
        $this->load->model('Detail_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Penjualan";
        $data['penjualan'] = $this->Penjualan_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/header', $data);
        $this->load->view('penjualan/vw_penjualan', $data);
        $this->load->view('layout/footer');
    }
    
    public function detail($id)
    {
        $data['judul'] = "Halaman Detail penjualan";
        $data['detail'] = $this->Detail_model->getById($id);
        $data['penjualan'] = $this->Penjualan_model->getByIdP($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("penjualan/vw_detail_penjualan", $data);
            $this->load->view("layout/footer");
        } else {
            $status = $this->input->post('status');
            $nojual = $this->input->post('no_penjualan');
            $this->Penjualan_model->updatestatus($status, $nojual);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Berhasil DiUbah!</div>');
            redirect('Penjualan');
        }
    }

    public function export()
    {
        $dompdf = new Dompdf();
        $this->data['all_jual'] = $this->Penjualan_model->get();
        $this->data['title'] = 'Laporan Data Penjualan';
        $this->data['no'] = 1;
        $dompdf->setPaper('A4', 'Landscape');
        $html = $this->load->view('penjualan/report', $this->data, true);
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream('Laporan Data Penjualan Tanggal ' . date('d F Y'), array("Attachment" => false));
    }

    public function excel()
    {
        $this->data['all_jual'] = $this->Penjualan_model->get();

        require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getProperties()->setCreator("ASICS STORE");
        $object->getProperties()->setLastModifiedBy("ASICS STORE");
        $object->getProperties()->setTitle("Laporan Penjualan");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1','NO');
        $object->getActiveSheet()->setCellValue('B1','NO PENJUALAN');
        $object->getActiveSheet()->setCellValue('C1','PELANGGAN');
        $object->getActiveSheet()->setCellValue('D1','TAGGAL PENJUALAN');
        $object->getActiveSheet()->setCellValue('E1','TOTAL');

        $baris = 2;
        $no = 1;

        foreach ($all_jual as $p){
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $p->no_penjualan);
            $object->getActiveSheet()->setCellValue('C'.$baris, $p->nama);
            $object->getActiveSheet()->setCellValue('D'.$baris, $p->tanggal);
            $object->getActiveSheet()->setCellValue('E'.$baris, $p->total_bayar);

            $baris++;
        }
        $filename = "Laporan_Penjualan".'.xlsx';
        $object->getActiveSheet()->setTitle("Laporan Penjualan");
        header('Content-Type: application/
            vnd.openxmlformats-officedocument.spreadsheettml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename. '"');
        header('Cache-Control: max-age=0');

        $writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }
}