<?php
$has_complete_nilai = true;
$nilai_akhir = (0.4 * $nilai['nilai_tugas']) + (0.3 * $nilai['nilai_uts']) + (0.3 * $nilai['nilai_uas']);
$id_sgm = $this->uri->segment($this->uri->total_segments());
?>
<div class="bg-green-200 h-full py-3">
    <div class="container">
        <div class="container">
            <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="text-center pb-4">
            <p class="text-6xl font-bold tracking-wide uppercase text-gray-700"><?= $nilai['nama_mapel']; ?></p>
            <p class="text-base font-medium text-gray-600 uppercase block tracking-wide">Guru Pengampu: <?= $nilai['nama_guru']; ?></p>
        </div>
        <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 840px;">
            <div class="row mb-6">
                <div class="col-md-12">
                    <div class="text-center">
                        <p class="block text-2xl uppercase tracking-wide text-md text-gray-600 font-bold md:text-center mb-1 md:mb-0">Nilai Akhir:</p>
                        <p class="font-semibold tracking-wide text-xl block md:text-center">
                            <?php
                            if ($has_complete_nilai) :
                                echo $nilai_akhir;
                            else :
                                echo "-";
                            endif;
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-4 mt-3">
                    <div class="text-center">
                        <p class="block text-2xl uppercase tracking-wide text-md text-gray-600 font-bold md:text-center mb-1 md:mb-0">Nilai Tugas: </p>
                        <p class="text-xs text-gray-600">40%</p>
                        <p class="font-semibold tracking-wide text-xl mt-2 block md:text-center">
                            <?php
                            if ($nilai['nilai_tugas'] == NULL) :
                                echo "-";
                                $has_complete_nilai = false;
                            else :
                                echo $nilai['nilai_tugas'];
                            endif;
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="text-center">
                        <p class="block text-2xl uppercase tracking-wide text-md text-gray-600 font-bold md:text-center mb-1 md:mb-0">Nilai UTS:</p>
                        <p class="text-xs text-gray-600">30%</p>
                        <p class="font-semibold tracking-wide text-xl mt-2 block md:text-center">
                            <?php
                            if ($nilai['nilai_uts'] == NULL) :
                                echo "-";
                                $has_complete_nilai = false;
                            else :
                                echo $nilai['nilai_uts'];
                            endif;
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="text-center">
                        <p class="block text-2xl uppercase tracking-wide text-md text-gray-600 font-bold md:text-center mb-1 md:mb-0">Nilai UAS:</p>
                        <p class="text-xs text-gray-600">30%</p>
                        <p class="font-semibold tracking-wide text-xl mt-2 block md:text-center">
                            <?php
                            if ($nilai['nilai_uas'] == NULL) :
                                echo "-";
                                $has_complete_nilai = false;
                            else :
                                echo $nilai['nilai_uas'];
                            endif;
                            ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex justify-end pt-3">
                <a href="<?= base_url('siswa/peninjauan_nilai/') . $id_sgm ?>" class="a-btn shadow bg-yellow-500 hover:bg-yellow-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Tinjau Nilai Kamu</a>
            </div>
        </div>
    </div>
</div>