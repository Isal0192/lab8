# lab8
praktikum web 8 dan 9

>##1. membuat database
![image](https://github.com/user-attachments/assets/4c68b20a-2ff1-4cc4-8077-14fd5f0e35b8)
>##2. membuat koneksi
![image](https://github.com/user-attachments/assets/7784e4f3-ebec-4f24-9bf0-b94ef43eb029)
>##3. membuat halaman index
![image](https://github.com/user-attachments/assets/4fe6aab0-b8c0-4e43-afcd-3e639d97e48a)
>untuk menampilkan databases kita perlu menarik file koneksi.php yang sudah di buat dengan menambahkan include:
><!-- untuk mengambil koneksi -->
            <?php
            include("koneksi.php");

            $sql = 'SELECT * FROM data_barang';
            $result = mysqli_query($conn, $sql);
            ?>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
                <td><img src="gambar/<?= $row['gambar'];?>" alt="<?= $row['nama'];?>"></td>
                <td><?= $row['nama'];?></td>
                <td><?= $row['kategori'];?></td>
                <td><?= $row['harga_jual'];?></td>
                <td><?= $row['harga_beli'];?></td>
                <td><?= $row['stok'];?></td>
                <td><?= $row['id_barang'];?></td>
            </tr>
            <?php endwhile; else: ?>
            <tr>
                <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
>##4. update
![image](https://github.com/user-attachments/assets/74f05f68-7c20-4124-abb8-7f32ebeee183)
>dengan menambahkan kode:

              <?php
               error_reporting(E_ALL);
               include_once 'koneksi.php';
               
               if (isset($_POST['submit'])) {
                   $nama = $_POST['nama'];
                   $kategori = $_POST['kategori'];
                   $harga_jual = $_POST['harga_jual'];
                   $harga_beli = $_POST['harga_beli'];
                   $stok = $_POST['stok'];
                   $file_gambar = $_FILES['file_gambar'];
                   $gambar = null;
               
                   if ($file_gambar['error'] == 0) {
                       $filename = str_replace(' ', '_', $file_gambar['name']);
                       $destination = dirname(__FILE__) . '/gambar/' . $filename;
                       if (move_uploaded_file($file_gambar['tmp_name'], $destination)) {
                           $gambar = 'gambar/' . $filename;
                       }
                   }
               
                   $sql = 'INSERT INTO data_barang (nama, kategori, harga_jual, harga_beli, stok, gambar) ';
                   $sql .= "VALUE ('{$nama}', '{$kategori}', '{$harga_jual}', '{$harga_beli}', '{$stok}', '{$gambar}')";
                   $result = mysqli_query($conn, $sql);
                   header('location: index.php');
               }
               ?>
>##5. menghapus tabel barang
    
     <?php
     include_once 'koneksi.php';
     $id = $_GET['id'];
     $sql = "DELETE FROM data_barang WHERE id_barang = '{$id}'";
     $result = mysqli_query($conn, $sql);
     header('location: index.php');
     ?>
