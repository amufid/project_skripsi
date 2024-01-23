<?php

function kodeOlxOtomatis()
{

       $ci = get_instance();
       $query = "SELECT max(kode) as maxKode FROM data_alternatif";
       $data = $ci->db->query($query)->row_array();
       $kode = $data['maxKode'];
       $noUrut = (int) substr($kode, 1, 3);
       $noUrut++;
       $char = "A";
       $kodeBaru = $char . sprintf("%02s", $noUrut);
       return $kodeBaru;
}

function kodeRsmOtomatis()
{

       $ci = get_instance();
       $query = "SELECT max(kode) as maxKode FROM alternatif_rsm";
       $data = $ci->db->query($query)->row_array();
       $kode = $data['maxKode'];
       $noUrut = (int) substr($kode, 1, 3);
       $noUrut++;
       $char = "A";
       $kodeBaru = $char . sprintf("%02s", $noUrut);
       return $kodeBaru;
}