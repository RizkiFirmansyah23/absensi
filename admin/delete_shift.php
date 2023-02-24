<?php
include "../config/koneksi.php";
///PERINTAH SQL UNTUK MENGHAPUS DATA DARI TABEL TB_SHIFT
    $id = $_GET['id'];
    $delete = $connect->query("DELETE FROM tb_shift WHERE id = '$id'");

    if($delete){
        header('location:index.php?page=data-shift');
    }
?>