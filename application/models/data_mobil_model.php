<?php

class data_mobil_model extends CI_model
{
       public function getDataMobil()
       {
              $query = $this->db->get('data_mobil');
              return $query->result_array();
       }
       public function getMobil($limit, $start)
       {
              $query = $this->db->get('data_mobil', $limit, $start);
              return $query;
       }
       public function mobil_id($id)
       {
              return $this->db->get_where('data_mobil', ['id' => $id])->row_array();
       }
       public function tambahDataMobil()
       {
              $data = [
                     "merk" => $this->input->post('merk', true),
                     "nama" => $this->input->post('nama', true),
                     "tahun_pembuatan" => $this->input->post('tahun_pembuatan', true),
                     "tanggal_masuk" => $this->input->post('tanggal_masuk', true),
                     "harga" => $this->input->post('harga', true),
                     "jumlah" => $this->input->post('jumlah', true)
              ];
              $this->db->insert('data_mobil', $data);
       }
       public function updateDataMobil($id, $data)
       {
              $this->db->where('id', $id);
              $this->db->update('data_mobil', $data);
       }

       public function hapusDataMobil($id)
       {
              $this->db->where('id', $id);
              $this->db->delete('data_mobil');
       }
}