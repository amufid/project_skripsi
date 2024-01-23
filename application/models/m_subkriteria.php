<?php

class m_subkriteria extends CI_model
{
       public function getC1()
       {
              $query = $this->db->get('c1_kapmesin');
              return $query->result_array();
       }
       public function getC2()
       {
              $query = $this->db->get('c2_kappenumpang');
              return $query->result_array();
       }
       public function getC3()
       {
              $query = $this->db->get('c3_thpembuatan');
              return $query->result_array();
       }
       public function getC4()
       {
              $query = $this->db->get('c4_harga');
              return $query->result_array();
       }
       public function getC5()
       {
              $query = $this->db->get('c5_transmisi');
              return $query->result_array();
       }
       public function getC6()
       {
              $query = $this->db->get('c6_pajak');
              return $query->result_array();
       }
       public function hapusC1($id)
       {
              $this->db->where('id', $id);
              $this->db->delete('c1_kapmesin');
       }
       public function hapusC2($id)
       {
              $this->db->where('id', $id);
              $this->db->delete('c2_kappenumpang');
       }
       public function hapusC3($id)
       {
              $this->db->where('id', $id);
              $this->db->delete('c3_thpembuatan');
       }
       public function hapusC4($id)
       {
              $this->db->where('id', $id);
              $this->db->delete('c4_harga');
       }
       public function hapusC5($id)
       {
              $this->db->where('id', $id);
              $this->db->delete('c5_transmisi');
       }
       public function hapusC6($id)
       {
              $this->db->where('id', $id);
              $this->db->delete('c6_pajak');
       }
}