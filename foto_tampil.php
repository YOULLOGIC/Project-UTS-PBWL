<?php

require_once "inc/Koneksi.php";
require_once "app/foto.php";

$foto = new App\Foto();
$rows = $foto->tampil();

?>

<h2>Data transaksi</h2>

<a href="index.php?hal=foto_input" class="btn">tambah data transaksi</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA PEMBELI</th>
        <th>BANYAK PRODUK</th>
        <th>PEMASUKAN</th>
        <th>DATE</th>
        <th>STATUS</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['foto_id']; ?></td>
        <td><?php echo $row['foto_name']; ?></td>
        <td><?php echo $row['foto_text']; ?></td>
        <td><?php echo $row['foto_id_post']; ?></td>
        <td><?php echo $row['foto_date']; ?></td>
        <td><?php echo $row['foto_title']; ?></td>
        <td><a href="index.php?hal=foto_edit&id=<?php echo $row['foto_id']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=foto_delete&id=<?php echo $row['foto_id']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
