<?php
include "../config/koneksi.php";
///PERINTAH SQL UNTUK MENGHAPUS DATA DARI TABEL TB_KARYAWAN
    $id = $_GET['id'];
    $delete = $connect->query("DELETE FROM tb_karyawan WHERE id = '$id'");

    if($delete){
        header('location:index.php?page=data-karyawan');
    }
?>