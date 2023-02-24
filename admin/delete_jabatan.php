<?php
include "../config/koneksi.php";
session_start();
///PERINTAH SQL UNTUK MENGHAPUS DATA DARI TABEL TB_JABATAN
    $id = $_GET['id'];
    $delete = $connect->query("DELETE FROM tb_jabatan WHERE id = '$id'");

    if($delete){
        header('location:index.php?page=data-jabatan');
    }
     
?>