<?php

class m_bobot_kriteria extends CI_model
{
       public function getC1_kapmesin()
       {
              $query = $this->db->get('c1_kapmesin');
              return $query->result_array();

       }
       public function getC2_kappenumpang()
       {
              $query = $this->db->get('c2_kappenumpang');
              return $query->result_array();

       }
       public function getC3_thpembuatan()
       {
              $query = $this->db->get('c3_thpembuatan');
              return $query->result_array();

       }
       public function getC4_harga()
       {
              $query = $this->db->get('c4_harga');
              return $query->result_array();

       }
       public function getC5_transmisi()
       {
              $query = $this->db->get('c5_transmisi');
              return $query->result_array();

       }
       public function getC6_pajak()
       {
              $query = $this->db->get('c6_pajak');
              return $query->result_array();

       }

       public function tambahBobotKriteria()
       {
              $data = [
                     "sub_kriteria" => $this->input->post('sub_kriteria', true),
                     "bobot" => $this->input->post('bobot', true),
              ];
              $this->db->insert('bobot_kriteria', $data);
       }

       public function bobotKriteria_id($id)
       {
              return $this->db->get_where('bobot_kriteria', ['id' => $id])->row_array();
       }

       public function hapusBobotKriteria($id)
       {
              $this->db->where('id', $id);
              $this->db->delete('bobot_kriteria');
       }
}