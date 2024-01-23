<?php

class m_alternatif_2 extends CI_model
{
       public function getAlternatif()
       {
              $query = $this->db->get('alternatif_rsm');
              return $query->result_array();

       }
       public function alternatif_id($id)
       {
              return $this->db->get_where('alternatif_rsm', ['id' => $id])->row_array();
       }
       public function hapusAlternatif($id)
       {
              $this->db->where('id', $id);
              $this->db->delete('alternatif_rsm');
       }
       public function getCountAlternatif()
       {
              $query = $this->db->count_all('alternatif_rsm');
              return $query;
       }
}