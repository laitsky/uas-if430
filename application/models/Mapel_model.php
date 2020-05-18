<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapel_model extends CI_Model
{

    /*  perbedaan antara fungsi get_mapel_list() dengan
     *  get_all_mapel() adalah get_mapel_list() menge-return
     *  daftar mata pelajaran MURNI tanpa kaitan dengan guru yang mengajar,
     *  sedangkan get_all_mapel meng-return daftar mata pelajaran dengan 
     *  guru pengampunya.                                                */  


    public function get_mapel_list()
    {
        return $this->db->get('mata_pelajaran')->result_array();
    }

    public function get_all_mapel()
    {
        $q = "SELECT mata_pelajaran.id_mapel, guru.nama AS pengampu,  mata_pelajaran.nama_mapel, guru_mapel.id_guru_mapel
                FROM guru_mapel, guru, mata_pelajaran
                WHERE guru_mapel.id_guru = guru.id_guru
                AND guru_mapel.id_mapel = mata_pelajaran.id_mapel";

        return $this->db->query($q)->result_array();
    }

    public function get_guru_mapel()
    {
        $q = "SELECT guru_mapel.id_guru_mapel, guru.nama,  mata_pelajaran.nama_mapel
                FROM guru_mapel, guru, mata_pelajaran
                WHERE guru_mapel.id_guru = guru.id_guru
                AND guru_mapel.id_mapel = mata_pelajaran.id_mapel
                ORDER BY guru_mapel.id_guru_mapel";

        return $this->db->query($q)->result_array();
    }

    public function get_siswa_mapel($id_siswa)
    {
        $q = "SELECT guru.nama AS pengampu, siswa_guru_mapel.id_guru_mapel, mata_pelajaran.nama_mapel
                FROM siswa_guru_mapel, guru_mapel, mata_pelajaran, guru
                WHERE siswa_guru_mapel.id_guru_mapel = guru_mapel.id_guru_mapel
                AND guru_mapel.id_mapel = mata_pelajaran.id_mapel
                AND guru_mapel.id_guru = guru.id_guru
                AND id_siswa = " . $id_siswa;

        return $this->db->query($q)->result_array();
    }

    public function get_detail_mapel($id_guru_mapel)
    {
        $q = "SELECT s.nama AS nama_siswa, g.nama AS nama_guru, m.nama_mapel
                FROM siswa_guru_mapel AS sgm
                INNER JOIN siswa AS s ON sgm.id_siswa = s.id_siswa
                INNER JOIN guru_mapel AS gm ON sgm.id_guru_mapel = gm.id_guru_mapel
                INNER JOIN guru AS g ON gm.id_guru = g.id_guru
                INNER JOIN mata_pelajaran AS m ON gm.id_mapel = m.id_mapel
                WHERE gm.id_guru_mapel = " . $id_guru_mapel;

        return $this->db->query($q)->result_array();
    }

    public function tambah_siswa_mapel($id_siswa) 
    {
        $mapel = $this->input->post('nama_mapel');
        $chk_duplicate_query = "SELECT `id_siswa`, `id_guru_mapel`
                                    FROM `siswa_guru_mapel`
                                    WHERE `id_siswa` = " . $id_siswa . " AND `id_guru_mapel` = " . $mapel;
        $has_duplicate = $this->db->query($chk_duplicate_query)->num_rows();

        if ($has_duplicate != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Siswa ini sudah memilih mapel tersebut!</div>');
            redirect('admin/mapel/' . $id_siswa);
            exit();
        }


        $this->db->insert('siswa_guru_mapel', ['id_siswa' => $id_siswa, 'id_guru_mapel' => $mapel]);
    }

    public function tambah_guru_mapel($id_guru)
    {
        $mapel = $this->input->post('nama_mapel');
        $chk_duplicate_query = "SELECT `id_guru`, `id_mapel`
                                    FROM `guru_mapel`
                                    WHERE `id_guru` = " . $id_guru . " AND `id_mapel` = " . $mapel;
        $has_duplicate = $this->db->query($chk_duplicate_query)->num_rows();

        if ($has_duplicate != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Guru ini sudah memilih mapel tersebut!</div>');
            redirect('admin/tambah_guru_mapel/' . $id_guru);
            exit();
        }

        $this->db->insert('guru_mapel', ['id_guru' => $id_guru, 'id_mapel' => $mapel]);
    }
}
