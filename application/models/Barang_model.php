<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : Barang_model.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Thursday, 12th March 2020 9:33:56 pm
 * | Last Modified   : Thursday, 12th March 2020 9:54:24 pm
 * |==============================================================|
 */

class Barang_model extends CI_Model{

  private $table = 'tbl_goods';
  private $id = 'tbl_goods.id';

  function get_all()
  {
    $this->db->select('*');
    $this->db->from($this->table);
    $query = $this->db->get();
    return $query->result();
  }

}
