<?php
$has_complete_nilai = true;
$nilai_akhir = (0.4 * $nilai['nilai_tugas']) + (0.3 * $nilai['nilai_uts']) + (0.3 * $nilai['nilai_uas']);
$id_sgm = $this->uri->segment($this->uri->total_segments());
?>
<div class="container">
    <?= $this->session->flashdata('message'); ?>
    <h1>Nilai Kamu</h1>
    <h3>Mata Pelajaran: <?= $nilai['nama_mapel']; ?></h3>
    <h3>Guru Pengampu: <?= $nilai['nama_guru']; ?></h3>
    <hr>
    <div class="row pb-5">
        <div class="col-md-4">
            <div class="text-center">
                <h4>Nilai Tugas:</h4>
                <?php
                if ($nilai['nilai_tugas'] == NULL) :
                    echo "-";
                    $has_complete_nilai = false;
                else :
                    echo $nilai['nilai_tugas'];
                endif;
                ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center">
                <h4>Nilai Tugas:</h4>
                <?php
                if ($nilai['nilai_uts'] == NULL) :
                    echo "-";
                    $has_complete_nilai = false;
                else :
                    echo $nilai['nilai_uts'];
                endif;
                ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center">
                <h4>Nilai Tugas:</h4>
                <?php
                if ($nilai['nilai_uas'] == NULL) :
                    echo "-";
                    $has_complete_nilai = false;
                else :
                    echo $nilai['nilai_uas'];
                endif;
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <h4>Nilai Akhir:</h4>
                <?php
                if ($has_complete_nilai) :
                    echo $nilai_akhir;
                else :
                    echo "-";
                endif;
                ?>
            </div>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-md-12 text-center">
            <a href="<?= base_url('siswa/peninjauan_nilai/') . $id_sgm ?>" class="btn btn-primary">Tinjau Nilai Kamu</a>
        </div>
    </div>
</div>