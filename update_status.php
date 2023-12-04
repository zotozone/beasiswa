<?php

include "libs/koneksi.php";

try {
    $sql = "UPDATE beasiswa SET status = ".$_GET["status"]." WHERE id = '".$_GET["id"]."'";
    $conn->exec($sql);

    header("location:data_beasiswa.php?pesan=Data berhasil diupdate !");

} catch(Exception $err){
    header("location:data_beasiswa.php?pesan=Data Gagal di Update !");
}