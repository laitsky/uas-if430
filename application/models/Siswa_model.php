<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model {
    public function get_data_siswa($id_user)
    {
        return $this->db->get_where('siswa', ['id_user' => $id_user])->row_array();
    }

    public function req_ganti_data()
    {
        $data = [
            'id_siswa' => $this->input->post('id'),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'telp' => htmlspecialchars($this->input->post('telepon', true)),
            'tahun_masuk' => htmlspecialchars($this->input->post('tahun_masuk', true)),
            'is_read' => 0,
            'is_accepted' => 0
        ];

        $this->db->insert('pengajuan_data_profil_siswa', $data);
    }
}