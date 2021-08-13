<?php 

include('connection.php');

$id = $_GET['id'];

$query = mysqli_query($connect, "SELECT * FROM karyawan WHERE id='$id' LIMIT 1");

$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>
<html>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $result[0]['id']; ?>">
        <table>
            <tr>
                <td><label>Nama</label></td>
                <td><input type="text" name="nama" value="<?= $result[0]['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" id="" cols="30" rows="10"><?= $result[0]['alamat']; ?></textarea></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="text" name="umur" value="<?= $result[0]['umur']; ?>"></td>
            </tr>
            <tr>
                <td>Jeni Kelamin</td>
                <td>
                    <select name="jenis_kelamin" id="">
                        <option value="Pria" <?= ($result[0]['jenis_kelamin'] == 'Pria') ? 'selected' : ''; ?>>Pria</option>
                        <option value="Wanita" <?= ($result[0]['jenis_kelamin'] == 'Wanita') ? 'selected' : ''; ?>>Wanita</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="tambah">Edit</button></td>
            </tr>
        </table>
    </form>
</html>