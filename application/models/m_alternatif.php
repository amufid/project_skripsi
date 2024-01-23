<?php

class m_alternatif extends CI_model
{
       public function getDataAlternatif()
       {
              $query = $this->db->get('data_alternatif');
              return $query->result_array();

       }
       public function alternatif_id($id)
       {
              return $this->db->get_where('data_alternatif', ['id' => $id])->row_array();
       }
       public function hapusDataAlternatif($id)
       {
              $this->db->where('id', $id);
              $this->db->delete('data_alternatif');
       }
       public function getCountAlternatif()
       {
              $query = $this->db->count_all('data_alternatif');
              return $query;
       }
}