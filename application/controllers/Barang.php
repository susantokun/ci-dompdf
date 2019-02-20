<?php
#===================================================|
# Please DO NOT modify this information :			      |
#---------------------------------------------------|
# @Author 		: Susantokun
# @Date 		  : 2018-12-18T11:49:28+07:00
# @Email 		  : susantokun.com@gmail.com
# @Project 		: CodeIgniter
# @Filename 	: Barang.php
# @Instagram 	: susantokun
# @Website 		: http://www.susantokun.com
# @Youtube 		: http://youtube.com/susantokun
# @Last modified time: 2018-12-18T17:14:11+07:00
#===================================================|

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Barang_model');
  }

  function index()
  {
    $data['dataBarang'] = $this->Barang_model->get_all();
    $this->load->view('barang/barang_list', $data);
  }

  function cetak_barang()
  {
    $data['dataBarang'] = $this->Barang_model->get_all();
    $this->load->library('pdf');
    $this->pdf->setPaper('A4','potrait');
    $this->pdf->filename = "barang";
    $this->pdf->load_view('cetak/barang',$data);
  }

}
