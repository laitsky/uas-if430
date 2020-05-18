<?php

function auth_guard() 
{
    $ci = get_instance();

    if (!($ci->session->userdata('user_id'))) {
        $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kamu harus login terlebih dahulu!</div>');
        redirect('auth');
    }
}

function admin_guard()
{
    $ci = get_instance();

    if ($ci->session->userdata('role_id') == 2) {
        redirect('guru');
    } elseif ($ci->session->userdata('role_id') == 3) {
        redirect('siswa');
    }
}

function guru_guard()
{
    $ci = get_instance();

    if ($ci->session->userdata('role_id') == 1) {
        redirect('admin');
    } elseif ($ci->session->userdata('role_id') == 3) {
        redirect('siswa');
    }
}

function siswa_guard()
{
    $ci = get_instance();

    if ($ci->session->userdata('role_id') == 1) {
        redirect('admin');
    } elseif ($ci->session->userdata('role_id') == 2) {
        redirect('guru');
    }
}