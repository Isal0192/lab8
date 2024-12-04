<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['kategori'];
    $password = $_POST['harga_jual'];
    $tanggal_masuk = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $file_gambar = $_FILES['file_gambar'];
    $gambar = null;

    if($file_gambar['error'] == 0){
        $filename = str_replace(' ', '_',$file_gambar['name']);
        $destination = dirname(__FILE__),'/gambar',$filename;
        if(move_uploaded_file($file_gambar['tmp_name'], $destination)){
            $gambar = 'gambar/' ,$filename;
        }
        $sql = 'insert into data_barang(nama, kategori, harga_jual, harga_beli, stok, gambar)';
        $sql .= "value ('{$nama}', '{$kategori}', '{$harga_jual}', '{$harga_beli}', '{$stok}', '{$gambar}')";
        $result = mysqli_query($conn, $sql);
        header('location: index.php');
    }
}
?>