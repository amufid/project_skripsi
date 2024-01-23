<?php

class m_kriteria extends CI_model
{
       public function getKriteria()
       {
              return $this->db->get('kriteria')->result();
       }
       public function get_kriteria()
       {
              $query = $this->db->get('kriteria');
              return $query->result_array();
       }
       public function tambahKriteria()
       {
              $data = [
                     "nama_kriteria" => $this->input->post('nama_kriteria', true),
                     "atribut" => $this->input->post('atribut', true),
                     "bobot" => $this->input->post('bobot', true),
              ];
              $this->db->insert('kriteria', $data);
       }
       public function kriteria_id($id)
       {
              return $this->db->get_where('kriteria', ['id' => $id])->row_array();
       }
       public function update_kriteria($kriteria_id, $data)
       {
              $this->db->where('id', $kriteria_id);
              $this->db->update('kriteria', $data);
       }
       public function updateData($data)
       {
              // Update data di database
              foreach ($data as $item) {
                     $this->db->where('id', $item['id']);
                     $this->db->update('kriteria', $item);
              }
       }
       public function hapusKriteria($id)
       {
              $this->db->where('id', $id);
              $this->db->delete('kriteria');
       }
       public function getCountKriteria()
       {
              $query = $this->db->count_all('kriteria');
              return $query;
       }
}