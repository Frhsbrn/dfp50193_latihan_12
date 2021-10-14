<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borang Pendaftaran</title>
</head>
<body>
    <h1>Borang Pendaftaran</h1>

    <form action="simpan.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat"></textarea>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <select name="negeri">
                        <option value=""></option>
                        <option value="09">Perlis</option>
                        <option value="02">Kedah</option>
                        <option value="08">Perak</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>
                    <label>
                        <input type="checkbox" name="membaca" value="Membaca">Membaca
                    </label>
                    <label>
                        <input type="checkbox" name="melancong" value="Melancong">Melancong
                    </label>
                    <label>
                        <input type="checkbox" name="berenang" value="Berenang">Berenang
                    </label>
                </td>
            </tr>
            <tr>
                <td>Jantina</td>
                <td>
                    <label>
                        <input type="radio" name="jantina" value="Lelaki">Lelaki
                    </label>
                    <label>
                        <input type="radio" name="jantina" value="Wanita">Wanita
                    </label>
                </td>
            </tr>
        </table>
        <button type="submit">SIMPAN</button>
    </form>
</body>
</html>