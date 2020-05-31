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

    public function get_mapel_by_id($id_mapel)
    {
        return $this->db->get_where('mata_pelajaran', ['id_mapel' => $id_mapel])->row_array();
    }

    public function tambah_mapel()
    {
        $nama_mapel = htmlspecialchars($this->input->post('nama_mapel', true));
        $chk_duplicate_query = "SELECT nama_mapel
                                    FROM mata_pelajaran
                                    WHERE nama_mapel = '$nama_mapel'";
        $has_duplicate = $this->db->query($chk_duplicate_query)->num_rows();

        if ($has_duplicate != 0) {
            $this->session->set_flashdata('message', '<div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert"><p class="font-bold">Perhatian</p><p>Mata pelajaran sudah ada!</p></div>');
            redirect('admin/tambah_mapel');
            exit();
        }
        $this->db->insert('mata_pelajaran', ['nama_mapel' => $nama_mapel]);
    }

    public function sunting_mapel()
    {
        $id_mapel = $this->input->post('id_mapel');
        $nama_mapel = htmlspecialchars($this->input->post('nama_mapel', true));

        $this->db->update('mata_pelajaran', ['nama_mapel' => $nama_mapel], ['id_mapel' => $id_mapel]);
    }

    public function get_all_mapel()
    {
        $q = "SELECT mata_pelajaran.id_mapel, guru.nama AS pengampu,  CONCAT(mata_pelajaran.nama_mapel, ' ', guru_mapel.kode_kelas) as nama_kelas, guru_mapel.id_guru_mapel
                FROM guru_mapel, guru, mata_pelajaran
                WHERE guru_mapel.id_guru = guru.id_guru
                AND guru_mapel.id_mapel = mata_pelajaran.id_mapel";

        return $this->db->query($q)->result_array();
    }

    public function get_guru_mapel()
    {
        $q = "SELECT guru_mapel.id_guru_mapel, guru.nama,  CONCAT(nama_mapel, ' ', kode_kelas) AS nama_mapel
                FROM guru_mapel, guru, mata_pelajaran
                WHERE guru_mapel.id_guru = guru.id_guru
                AND guru_mapel.id_mapel = mata_pelajaran.id_mapel
                ORDER BY guru_mapel.id_guru_mapel";

        return $this->db->query($q)->result_array();
    }

    public function get_siswa_mapel($id_siswa)
    {
        $q = "SELECT guru.nama AS pengampu, siswa_guru_mapel.id_guru_mapel, CONCAT(nama_mapel, ' ', kode_kelas) AS nama_mapel
                FROM siswa_guru_mapel, guru_mapel, mata_pelajaran, guru
                WHERE siswa_guru_mapel.id_guru_mapel = guru_mapel.id_guru_mapel
                AND guru_mapel.id_mapel = mata_pelajaran.id_mapel
                AND guru_mapel.id_guru = guru.id_guru
                AND id_siswa = " . $id_siswa;

        return $this->db->query($q)->result_array();
    }

    public function get_detail_mapel($id_guru_mapel)
    {
        $q = "SELECT s.nama AS nama_siswa
                FROM siswa_guru_mapel AS sgm
                INNER JOIN siswa AS s ON sgm.id_siswa = s.id_siswa
                INNER JOIN guru_mapel AS gm ON sgm.id_guru_mapel = gm.id_guru_mapel
                WHERE gm.id_guru_mapel = $id_guru_mapel
                ORDER BY s.nama";

        return $this->db->query($q)->result_array();
    }

    public function get_guru_mapel_by_id($id_guru_mapel) 
    {
        $q = "SELECT guru.nama, CONCAT(nama_mapel, ' ', kode_kelas) AS nama_kelas
                FROM guru_mapel
                INNER JOIN guru ON guru.id_guru = guru_mapel.id_guru
                INNER JOIN mata_pelajaran ON mata_pelajaran.id_mapel = guru_mapel.id_mapel
                WHERE guru_mapel.id_guru_mapel = $id_guru_mapel";

        return $this->db->query($q)->row_array();
    }
    public function tambah_siswa_mapel($id_siswa)
    {
        $mapel = $this->input->post('nama_mapel');
        $chk_duplicate_query = "SELECT `id_siswa`, `id_guru_mapel`
                                    FROM `siswa_guru_mapel`
                                    WHERE `id_siswa` = " . $id_siswa . " AND `id_guru_mapel` = " . $mapel;
        $has_duplicate = $this->db->query($chk_duplicate_query)->num_rows();

        if ($has_duplicate != 0) {
            $this->session->set_flashdata('message', '<div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert"><p class="font-bold">Perhatian</p><p>Siswa ini sudah memilih mapel tersebut!</p></div>');
            redirect('admin/mapel/' . $id_siswa);
            exit();
        }


        $this->db->insert('siswa_guru_mapel', ['id_siswa' => $id_siswa, 'id_guru_mapel' => $mapel]);
    }

    public function lkk($id_mapel) // untuk mengecek kode kelas terakhir yang digunakan saat proses tambah guru mapel.
    {
        $q = "SELECT kode_kelas
                FROM guru_mapel
                WHERE id_mapel = $id_mapel
                ORDER BY kode_kelas DESC LIMIT 1";

        return $this->db->query($q)->row_array();
    }

    public function lkk_count($id_mapel)
    {
        $q = "SELECT kode_kelas
                FROM guru_mapel
                WHERE id_mapel = $id_mapel
                ORDER BY kode_kelas DESC";

        return $this->db->query($q)->num_rows();
    }

    public function tambah_guru_mapel($id_guru)
    {
        $mapel = $this->input->post('nama_mapel');
        $last_kk = ord($this->lkk($mapel)['kode_kelas']); // menentukan kode kelas terakhir yang dipakai jika lkk_count != 0
        $chk_duplicate_query = "SELECT `id_guru`, `id_mapel`
                                    FROM `guru_mapel`
                                    WHERE `id_guru` = " . $id_guru . " AND `id_mapel` = " . $mapel;
        $has_duplicate = $this->db->query($chk_duplicate_query)->num_rows();
        $kode_kelas = ($this->lkk_count($mapel) == 0) ? 'A' : chr($last_kk + 1);

        if ($has_duplicate != 0) {
            $this->session->set_flashdata('message', '<div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert"><p class="font-bold">Perhatian</p><p>Guru ini sudah memilih mapel tersebut!</p></div>');
            redirect('admin/tambah_guru_mapel/' . $id_guru);
            exit();
        }

        $this->db->insert('guru_mapel', ['id_guru' => $id_guru, 'id_mapel' => $mapel, 'kode_kelas' => $kode_kelas]);
    }
}
