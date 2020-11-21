<?php include_once("database.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Basic - Software</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <main>
        <div class="bagian-kiri">
            <form action="tambah.php" method="POST">
                <input type="text" name="nama" placeholder="Nama Lengkap" required/>
                <input type="text" name="nim" placeholder="NIM" required/>
                <input type="text" name="asal" placeholder="Asal Kota" required/>
                <button type="submit" name="submit">Kirim</button>
            </form>
        </div>
        <div class="bagian-kanan">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>NIM</th>
                        <th>Asal Kota</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $nomor = 0;
                        $items = mysqli_query($db, "SELECT * FROM mahasiswa");

                        while ($item = mysqli_fetch_assoc($items)) {
                            $nomor++;
                    ?>
                        <tr>
                            <td><?php echo $nomor ?></td>
                            <td><?php echo $item['nama'] ?></td>
                            <td><?php echo $item['nim'] ?></td>
                            <td><?php echo $item['asal'] ?></td>
                            <td><a href="hapus.php?id=<?php echo $item['id'] ?>">Hapus</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>