<?php

include "libs/koneksi.php";

// Mendapatkan Nilai
switch($_GET["mode"]){
    case "ipk":
        try {
            $sql = "SELECT * FROM nilai WHERE nim = '".$_GET["nim"]."' AND semester = '".$_GET["semester"]."'";
            $cmd = $conn->prepare($sql);
            $cmd->execute();
            echo  json_encode($cmd->fetch());
        } catch(Exception $err){
            echo  json_encode([]);
        }
        break;
    case "nilai":
        try {
            $sql = "SELECT * FROM nilai WHERE nim = '".$_GET["nim"]."'";
            $cmd = $conn->prepare($sql);
            $cmd->execute();
            echo  json_encode($cmd->fetch());
        } catch(Exception $err){
            echo  json_encode([]);
        }
        break;
    default:
        echo  json_encode([]);
}