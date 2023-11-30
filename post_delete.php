<?php

require_once "inc/Koneksi.php";
require_once "app/post.php";

$id = $_GET['id'];

$pos = new App\Post();
$rows = $pos->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=pos_tampil">Kembali</a>
</div>