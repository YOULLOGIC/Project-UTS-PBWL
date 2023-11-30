<?php

require_once "inc/Koneksi.php";
require_once "app/post.php";

$pos = new App\Post();

if (isset($_POST['btn_simpan'])) {
    $pos->simpan();
    header("location:index.php?hal=post_tampil");
}

if (isset($_POST['btn_update'])) {
    $pos->update();
    header("location:index.php?hal=post_tampil");
}