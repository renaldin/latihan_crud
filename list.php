<?php 

include('connection.php');

$query = mysqli_query($connect, "SELECT * FROM karyawan");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>
    <body>

        <a href="add.php">Tambah Data</a><br><br>

        <form action="search.php" method="GET">
            <input type="text" name="keyword" placeholder="Keyword..."  />
            <button type="submit">Search</button>
        </form>

        <table border="1">
            
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <?php $no = 0; foreach($results as $row) : $no++ ?>
                <td><?= $no; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['umur']; ?></td>
                <td><?= $row['jenis_kelamin']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Apakah anda yakin ?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
