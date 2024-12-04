<?php
include("koneksi.php");

$sql = "select * from data_barang";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Data Barang</title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Dta Barang</h1>
            <div class="main">
                <table>
                    <tr>
                        <th>gambar</th>
                        <th>id</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Harga Jual</th>
                        <th>Harga berhasil</th>
                        <th>Stok</th>
                        
                    </tr>
                    <?php if($result):?>
                    <?php while($row = mysqli_fetch_assoc($result)):?>
                        <tr>
                            <td><img src="images/<?= $row['gambar']?>" alt="" width="100"></td>
                            <td><?= $row['id_barang']?></td>
                            <td><?= $row['nama']?></td>
                            <td><?= $row['kategori']?></td>
                            <td>Rp.<?= $row['harga_beli']?></td>
                            <td>Rp.<?= $row['harga_jual']?></td>
                            <td><?= $row['stok']?></td>
                            
                        </tr>
                    <?php endwhile; else:?>
                        <tr>
                            <td colspan="7">Data Tidak Ditemukan</td>
                        </tr>
                    <?php endif;?>
                </table>
            </div>

        </div>