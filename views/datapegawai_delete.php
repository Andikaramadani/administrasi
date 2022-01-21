<?php
//membuat query untuk hapus data
$sql="DELETE FROM datapegawai WHERE idpegawai ='".$_GET['idpegawai']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=datapegawai&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=arsip&actions=tampil');</scripr>";
}

