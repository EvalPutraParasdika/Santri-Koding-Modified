<?php

include('koneksi.php');

//get id
$id = $_GET['nuptk'];

$query = "DELETE FROM tbl_guru WHERE nuptk = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>