<?php

include "libs/koneksi.php";
include "libs/generatstring.php";

//  Simpan Data
try {

    if($_FILES["syarat"]["name"]!=""){
        $file = "syarat_".StrRandom().".pdf";
        $loc_upload = "syarat/".basename($file);
        $type = strtolower(pathinfo($_FILES["syarat"]["name"],PATHINFO_EXTENSION));

        // Validasi
        if($type!="pdf"){
            header("location:index.php?pesan=Maaf jenis file salah !");
            exit;
        }

        if($_FILES["syarat"]["size"]>1500000){
            header("location:index.php?pesan=Maaf Ukruan file maximal 1,5 mb !");
            exit;
        }

        // Proses Upload
        if(!move_uploaded_file($_FILES["syarat"]["tmp_name"], $loc_upload)){
            //  Jika tidak berhasil upload
            // Redirect ke Form Daftar
            header("location:index.php?pesan=Data gagal disimpan , karena file gagal di upload");
            exit;
        }
    }


    // Proses Simpan
    $sql = "INSERT INTO beasiswa (tgl,nim,nama,email,telp,semester,ipk,jenis,syarat,status) VALUES (:tgl,:nim,:nama,:email,:telp,:semester,:ipk,:jenis,:syarat,:status)";
    $cmd = $conn->prepare($sql);

    $cmd->bindParam(':tgl',$tgl);
    $cmd->bindParam(':nim',$nim);
    $cmd->bindParam(':nama',$nama);
    $cmd->bindParam(':email',$email);
    $cmd->bindParam(':telp',$telp);
    $cmd->bindParam(':semester',$semester);
    $cmd->bindParam(':ipk',$ipk);
    $cmd->bindParam(':jenis',$jenis);
    $cmd->bindParam(':syarat',$syarat);
    $cmd->bindParam(':status',$status);

    $tgl = date("Y-m-d");
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $telp = $_POST["telp"];
    $semester = $_POST["semester"];
    $ipk = $_POST["ipk"];
    $jenis = $_POST["jenis"];
    $syarat =$file;
    $status = 0;

    $cmd->execute();

    header("location:data_beasiswa.php?pesan=Data berhasil disimpan !");
} catch(PDOException $err){
    echo $err->getMessage();
    header("location:index.php?pesan=Data gagal disimpan !");
}