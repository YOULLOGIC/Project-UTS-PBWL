<?php

require_once "inc/Koneksi.php";
require_once "app/foto.php";

$id = $_GET['id'];

$foto = new App\Foto();
$rows = $foto->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=foto_tampil">Kembali</a>
</div>