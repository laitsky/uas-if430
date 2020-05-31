<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function tambah_guru()
    {
        $email = $this->input->post('email');
        $data_tbl_user = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role_id' => 2
        ];

        $this->db->insert('user', $data_tbl_user);
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        $data_tbl_guru = [
            'id_user' => $user['id'],
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'telp' => htmlspecialchars($this->input->post('telepon', true))
        ];

        $this->db->insert('guru', $data_tbl_guru);
    }

    public function tambah_siswa()
    {
        $email = $this->input->post('email');
        $data_tbl_user = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role_id' => 3
        ];

        $this->db->insert('user', $data_tbl_user);
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        $data_tbl_siswa = [
            'id_user' => $user['id'],
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'telp' => htmlspecialchars($this->input->post('telepon', true)),
            'tahun_masuk' => htmlspecialchars($this->input->post('tahun_masuk', true))
        ];

        $this->db->insert('siswa', $data_tbl_siswa);
    }

    public function get_daftar_guru()
    {
        return $this->db->get('guru')->result_array();
    }

    public function get_daftar_siswa()
    {
        return $this->db->get('siswa')->result_array();
    }

    public function get_guru_by_id($id_guru)
    {
        return $this->db->get_where('guru', ['id_guru' => $id_guru])->row_array();
    }

    public function get_siswa_by_id($id_siswa)
    {
        return $this->db->get_where('siswa', ['id_siswa' => $id_siswa])->row_array();
    }

    public function update_guru()
    {
        $id = $this->input->post('id');
        $id_user = $this->db->get_where('guru', ['id_guru' => $id])->row_array()['id_user'];
        $nama = htmlspecialchars($this->input->post('nama', true));
        $email = htmlspecialchars($this->input->post('email', true));

        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'telp' => htmlspecialchars($this->input->post('telepon', true))
        ];

        $this->db->update('guru', $data, ['id_guru' => $id]);
        $this->db->update('user', ['nama' => $nama, 'email' => $email], ['id' => $id_user]);
    }

    public function delete_guru($id_guru)
    {
        $this->db->select('id_user');
        $id_user = $this->db->get_where('guru', ['id_guru' => $id_guru])->row_array()['id_user'];
        $this->db->delete('guru', ['id_guru' => $id_guru]);
        $this->db->delete('user', ['id' => $id_user]);
        $this->db->delete('guru_mapel', ['id_guru' => $id_guru]);
        $this->db->delete('pengajuan_data_profil_guru', ['id_guru' => $id_guru]);
        $q1 = "DELETE FROM siswa_guru_mapel
                WHERE id_guru_mapel IN (SELECT guru_mapel.id_guru_mapel
                                        FROM guru_mapel
                                        WHERE guru_mapel.id_guru = $id_guru)";
        $q2 = "DELETE FROM peninjauan_nilai
                WHERE id_guru_mapel IN (SELECT guru_mapel.id_guru_mapel
                                        FROM guru_mapel
                                        WHERE guru_mapel.id_guru = $id_guru)";
        $this->db->query($q1);
        $this->db->query($q2);
    }

    public function update_siswa()
    {
        $id = $this->input->post('id');
        $id_user = $this->db->get_where('siswa', ['id_siswa' => $id])->row_array()['id_user'];
        $nama = htmlspecialchars($this->input->post('nama', true));
        $email = htmlspecialchars($this->input->post('email', true));
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'telp' => htmlspecialchars($this->input->post('telepon', true)),
            'tahun_masuk' => htmlspecialchars($this->input->post('tahun_masuk', true))
        ];

        $this->db->update('siswa', $data, ['id_siswa' => $id]);
        $this->db->update('user', ['nama' => $nama, 'email' => $email], ['id' => $id_user]);
    }

    public function delete_siswa($id_siswa)
    {
        $this->db->select('id_user');
        $id_user = $this->db->get_where('siswa', ['id_siswa' => $id_siswa])->row_array()['id_user'];
        $this->db->delete('siswa', ['id_siswa' => $id_siswa]);
        $this->db->delete('user', ['id' => $id_user]);
        $this->db->delete('pengajuan_data_profil_siswa', ['id_siswa' => $id_siswa]);
        $this->db->delete('siswa_guru_mapel', ['id_siswa' => $id_siswa]);
        $this->db->delete('peninjauan_nilai', ['id_siswa' => $id_siswa]);
    }

    /* PDP adalah tabel pengajuan_data_profil_* */

    public function get_pdp_list()
    {
        $q = "SELECT `guru`.`nama`, `pdpg`.`id`, `pdpg`.`tanggal_pengajuan`, `pdpg`.`is_read`, `pdpg`.`is_accepted`, 'Guru' as role
                FROM `guru`
                INNER JOIN `pengajuan_data_profil_guru` AS `pdpg`
                ON `guru`.`id_guru` = `pdpg`.`id_guru`
                UNION ALL
                SELECT `siswa`.`nama`, `pdps`.`id`, `pdps`.`tanggal_pengajuan`, `pdps`.`is_read`, `pdps`.`is_accepted`, 'Siswa' as role
                FROM `siswa`
                INNER JOIN `pengajuan_data_profil_siswa` AS `pdps`
                ON `siswa`.`id_siswa` = `pdps`.`id_siswa`
                ORDER BY `tanggal_pengajuan` DESC";

        return $this->db->query($q)->result_array();
    }

    public function get_pdp_unread_count()
    {
        $q = "SELECT COUNT(*) AS `unread_count`
                FROM (
                    SELECT `is_read` FROM `pengajuan_data_profil_guru`
                    UNION ALL
                    SELECT `is_read` FROM `pengajuan_data_profil_siswa`
                ) AS pdp
                WHERE `is_read` = 0";

        return $this->db->query($q)->row_array();
    }

    public function get_pdp_uc_by_role($tbl_name)
    {
        $q = "SELECT COUNT(`is_read`) AS unread_count
        FROM " . $tbl_name .
            " WHERE `is_read`=0";

        return $this->db->query($q)->row_array();
    }

    public function get_detail_pdpg($pdp_id)
    {
        $q = "SELECT `pdpg`.*, `user`.`id` as `id_user`
                FROM `pengajuan_data_profil_guru` as `pdpg`, `user`, `guru`
                WHERE `pdpg`.`id_guru` = `guru`.`id_guru`
                AND `guru`.`id_user` = `user`.id
                AND `pdpg`.`id` = $pdp_id";

        return $this->db->query($q)->row_array();
    }

    public function get_detail_pdps($pdp_id)
    {
        $q = "SELECT `pdps`.*, `user`.`id` as `id_user`
                FROM `pengajuan_data_profil_siswa` as `pdps`, `user`, `siswa`
                WHERE `pdps`.`id_siswa` = `siswa`.`id_siswa`
                AND `siswa`.`id_user` = `user`.id
                AND `pdps`.`id` = $pdp_id";

        return $this->db->query($q)->row_array();
    }

    public function get_pdp_count()
    {
        $q = "SELECT (SELECT COUNT(*)
                        FROM pengajuan_data_profil_guru) +
                        (SELECT COUNT(*)
                        FROM pengajuan_data_profil_siswa)
                        AS pdp_total_count";

        return $this->db->query($q)->row_array()['pdp_total_count'];
    }
    public function terima_pdpg()
    {
        $id_guru = $this->input->post('id_guru');
        $id_pdpg = $this->input->post('id_pdpg');
        $id_user = $this->input->post('id_user');

        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'telp' => htmlspecialchars($this->input->post('telepon', true))
        ];

        $data_tbl_user = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true))
        ];

        $this->db->update('guru', $data, ['id_guru' => $id_guru]);
        $this->db->update('user', $data_tbl_user, ['id' => $id_user]);

        $status = [
            'is_read' => 1,
            'is_accepted' => 1
        ];

        $this->db->update('pengajuan_data_profil_guru', $status, ['id' => $id_pdpg]);
    }

    public function terima_pdps()
    {
        $id_siswa = $this->input->post('id_siswa');
        $id_pdps = $this->input->post('id_pdps');
        $id_user = $this->input->post('id_user');

        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'telp' => htmlspecialchars($this->input->post('telepon', true)),
            'tahun_masuk' => htmlspecialchars($this->input->post('tahun_masuk', true))
        ];

        $data_tbl_user = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true))
        ];

        $this->db->update('siswa', $data, ['id_siswa' => $id_siswa]);
        $this->db->update('user', $data_tbl_user, ['id' => $id_user]);

        $status = [
            'is_read' => 1,
            'is_accepted' => 1
        ];

        $this->db->update('pengajuan_data_profil_siswa', $status, ['id' => $id_pdps]);
    }

    public function cari_siswa($keyword, $sort = "ASC")
    {
        $q = "SELECT id_siswa, nama 
                FROM siswa 
                WHERE nama LIKE '%$keyword%'
                ORDER BY nama $sort";

        return $this->db->query($q)->result_array();
    }

    public function get_guru_count()
    {
        return $this->db->count_all('guru');
    }

    public function get_siswa_count()
    {
        return $this->db->count_all('siswa');
    }

    public function get_mapel_guru_count()
    {
        return $this->db->count_all('guru_mapel');
    }

    public function get_mapel_count()
    {
        return $this->db->count_all('mata_pelajaran');
    }
}
