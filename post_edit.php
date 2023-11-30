<?php

require_once "inc/Koneksi.php";
require_once "app/post.php";

$id = $_GET['id'];
$pos = new App\Post();

$row = $pos->edit($id);
?>

<h2>Edit data penjualan</h2>

<form action="post_proses.php" method="post">
    <input type="hidden" name="post_id" value="<?php echo $row['post_id']; ?>">
    <table>
    <tr>
            <td>NAMA PEMBELI</td>
            <td><input type="text" name="post_name" value="<?php echo $row['post_name']; ?>"></td>
        </tr>
        <tr>
            <td>KATEGORI</td>
            <td><textarea name="post_text" id="" cols="18" rows="1"><?php echo $row['post_text']; ?> </textarea></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="post_id_cat" value="<?php echo $row['post_id_cat']; ?>"></td>
        </tr>
        <tr>
            <td>BANYAK PRODUK</td>
            <td><textarea name="post_user" id="" cols="18" rows="1"><?php echo $row['post_user']; ?>"</textarea></td>
        </tr>
        <tr>
            <td>TANGGAL</td>
            <td><input type="date" name="post_date" value="<?php echo $row['post_date']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>