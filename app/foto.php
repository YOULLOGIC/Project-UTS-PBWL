<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Foto extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_foto";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $foto_name = $_POST['foto_name'];
        $foto_text = $_POST['foto_text'];
        $foto_id_post = $_POST['foto_id_post'];
        $foto_date = $_POST['foto_date'];
        $foto_title = $_POST['foto_title'];

        $sql = "INSERT INTO tb_foto (foto_name, foto_text, foto_id_post, foto_date, foto_title) VALUES (:foto_name, :foto_text, :foto_id_post, :foto_date, :foto_title)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":foto_name", $foto_name);
        $stmt->bindParam(":foto_text", $foto_text);
        $stmt->bindParam(":foto_id_post", $foto_id_post);
        $stmt->bindParam(":foto_date", $foto_date);
        $stmt->bindParam(":foto_title", $foto_title);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_foto WHERE foto_id=:foto_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":foto_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $foto_name = $_POST['foto_name'];
        $foto_text = $_POST['foto_text'];
        $foto_id_post = $_POST['foto_id_post'];
        $foto_date = $_POST['foto_date'];
        $foto_title = $_POST['foto_title'];
        $foto_id = $_POST['foto_id'];

        $sql = "UPDATE tb_foto SET foto_name=:foto_name, foto_text=:foto_text, foto_id_post=:foto_id_post, foto_date=:foto_date, foto_title=:foto_title WHERE foto_id=:foto_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":foto_name", $foto_name);
        $stmt->bindParam(":foto_text", $foto_text);
        $stmt->bindParam(":foto_id_post", $foto_id_post);
        $stmt->bindParam(":foto_date", $foto_date);
        $stmt->bindParam(":foto_title", $foto_title);
        $stmt->bindParam(":foto_id", $foto_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_foto WHERE foto_id=:foto_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":foto_id", $id);
        $stmt->execute();

    }

}