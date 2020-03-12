<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : susantokun_helper.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Thursday, 12th March 2020 9:51:10 pm
 * | Last Modified   : Thursday, 12th March 2020 9:51:49 pm
 * |==============================================================|
 */

function rupiah($angka)
{
    $hasil_rupiah = 'Rp '.number_format($angka, 2, ',', '.');

    return $hasil_rupiah;
}
