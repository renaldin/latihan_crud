<html>
    <form action="insert.php" method="POST">
        <table>
            <tr>
                <td><label>Nama</label></td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="text" name="umur"></td>
            </tr>
            <tr>
                <td>Jeni Kelamin</td>
                <td>
                    <select name="jenis_kelamin" id="">
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="tambah">Tambah</button></td>
            </tr>
        </table>
    </form>
</html>