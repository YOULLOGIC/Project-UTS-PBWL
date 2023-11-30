<h2>Tambah data pembeli</h2>

<form action="post_proses.php" method="post">
    <table>
        <tr>
            <td>NAMA PEMBELI</td>
            <td><input type="text" name="post_name"></td>
        </tr>
        <tr>
            <td>KATEGORI</td>
            <td><textarea name="post_text" id="" cols="18" rows="1"></textarea></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="post_id_cat"></td>
        </tr>
        <tr>
            <td>BANYAK PRODUK</td>
            <td><textarea name="post_user" id="" cols="18" rows="1"></textarea></td>
        </tr>
        <tr>
            <td>TANGGAL</td>
            <td><input type="date" name="post_date"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>