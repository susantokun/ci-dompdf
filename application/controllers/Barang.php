<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : Barang.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Thursday, 12th March 2020 9:33:56 pm
 * | Last Modified   : Thursday, 12th March 2020 9:54:10 pm
 * |==============================================================|
 */

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
