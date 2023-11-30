<?php

require_once "inc/Koneksi.php";
require_once "app/foto.php";

$id = $_GET['id'];
$foto = new App\Foto();

$row = $foto->edit($id);
?>

<h2>Edit data transaksi</h2>

<form action="foto_proses.php" method="post">
    <input type="hidden" name="foto_id" value="<?php echo $row['foto_id']; ?>">
    <table>
    <tr>
            <td>NAMA PEMBELI</td>
            <td><input type="text" name="foto_name" value="<?php echo $row['foto_name']; ?>"></td>
        </tr>
        <tr>
            <td>BANYAK PRODUK</td>
            <td><input type="text" name="foto_text" value="<?php echo $row['foto_text']; ?>"></td>
        </tr>
        <tr>
            <td>PEMASUKAN</td>
            <td><input type="text" name="foto_id_post" value="<?php echo $row['foto_id_post']; ?>"></td>
        </tr>
        <tr>
            <td>TANGGAL</td>
            <td><input type="date" name="foto_date" value="<?php echo $row['foto_date']; ?>"></td>
        </tr>
        <tr>
            <td>STATUS</td>
            <td><input type="text" name="foto_title" value="<?php echo $row['foto_title']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>