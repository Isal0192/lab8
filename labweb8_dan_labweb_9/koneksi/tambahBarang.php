<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah Barang</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Barang</h1>
        <div class="main">
            <form action="tambah.php" method="post">
                <div class="input">
                    <label>Nama Barang</label>
                    <input type="text" name="nama">
                </div>
                <div class="input">
                    <label>Kategori</label>
                    <select name="kategori">
                        <option value="Elektronik">Elektronik</option>
                        <option value="Komputer">Komputer</option>
                        <option value="hand phone">hand phone</option>
                    </select>
                </div>
                <div class="input">
                    <label for="">harga jual</label>
                    <input type="number" name="harga_jual">
                </div>
                <div class="input">
                    <label for="">harga beli</label>
                    <input type="number" name="harga_beli">
                </div>
                <div class="input">
                    <label for="">stok</label>
                    <input type="number" name="stok">
                </div>
                <div class="input">
                    <label for="">file gambar</label>
                    <input type="file" name="file_gambar">
                </div>
                <div class="submit">
                    <input type="submit" value="Tambah Barang">
                </div>
            </form>
        </div>
    </div>
</body>
</html>