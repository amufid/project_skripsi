<?php

class m_user extends CI_model
{
       public function getDataUser($email, $password)
       {
              // Query ke database untuk mencari user berdasarkan email dan password
              $this->db->where('email', $email);
              $this->db->where('password', $password);
              $query = $this->db->get('user');

              if ($query->num_rows() == 1) {
                     // Jika user ditemukan, kembalikan data user
                     return $query->row();
              } else {
                     // Jika user tidak ditemukan, kembalikan false
                     return false;
              }
       }
       public function tambahDataUser()
       {
              $data = [
                     "nama" => $this->input->post('nama', true),
                     "email" => $this->input->post('email', true),
                     "foto" => $this->input->post('foto', true),
                     "password" => $this->input->post('password', true)
              ];
              $this->db->insert('user', $data);
       }

       public function user_id($id)
       {
              return $this->db->get_where('user', ['id' => $id])->row_array();
       }

       public function detail_user($id)
       {
              $query = $this->db->get_where('user', array('id' => $id))->row();
              return $query;
       }

       public function updateUser($id, $data)
       {
              $this->db->where('id', $id);
              $this->db->update('user', $data);
       }
       public function getCountUser()
       {
              $query = $this->db->count_all('user');
              return $query;
       }
}