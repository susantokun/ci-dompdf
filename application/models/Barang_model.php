<?php
#===================================================|
# Please DO NOT modify this information :			      |
#---------------------------------------------------|
# @Author 		: Susantokun
# @Date 		  : 2018-12-18T11:50:39+07:00
# @Email 		  : susantokun.com@gmail.com
# @Project 		: CodeIgniter
# @Filename 	: Barang_model.php
# @Instagram 	: susantokun
# @Website 		: http://www.susantokun.com
# @Youtube 		: http://youtube.com/susantokun
# @Last modified time: 2018-12-21T10:41:48+07:00
#===================================================|

defined('BASEPATH') OR exit('No direct script access allowed');

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
