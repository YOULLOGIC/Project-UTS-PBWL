<?php

require_once "inc/Koneksi.php";
require_once "app/post.php";

$pos = new App\Post();
$rows = $pos->tampil();

?>

<h2>Data Penjualan</h2>

<a href="index.php?hal=post_input" class="btn">tambah data penjualan</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA PEMBELI</th>
        <th>KATEGORI</th>
        <th>HARGA</th>
        <th>BANYAK PRODUK</th>
        <th>TANGGAL</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['post_id']; ?></td>
        <td><?php echo $row['post_name']; ?></td>
        <td><?php echo $row['post_text']; ?></td>
        <td><?php echo $row['post_id_cat']; ?></td>
        <td><?php echo $row['post_user']; ?></td>
        <td><?php echo $row['post_date']; ?></td>
        <td><a href="index.php?hal=post_edit&id=<?php echo $row['post_id']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=post_delete&id=<?php echo $row['post_id']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
