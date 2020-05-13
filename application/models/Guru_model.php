<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru_model extends CI_Model {
    public function get_data_guru($id_user)
    {
        return $this->db->get_where('guru', ['id_user' => $id_user])->row_array();
    }
    
    public function req_ganti_data()
    {
        $data = [
            'id_guru' => $this->input->post('id'),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'telp' => htmlspecialchars($this->input->post('telepon', true)),
            'is_read' => 0,
            'is_accepted' => 0
        ];

        $this->db->insert('pengajuan_data_profil_guru', $data);
    }
}