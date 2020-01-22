<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas Mandiri</title>
</head>
<body>
<form action="satu.php" method="POST">
    <table>
        <tr>
            <td><b>PENGECEKAN BERAT BADAN IDEAL</b></td>
        <tr>
        <tr>
            <td>Nama </td>
            <td>:</td>
            <td><input type="text" name="nama" required=""></td>
        </tr>
        <tr>
            <td>Berat Badan  </td>
            <td>:</td>
            <td><input type="number" name="bb" required=""> kg</td>
        </tr>
        <tr>
            <td>Tinggi Badan  </td>
            <td>:</td>
            <td><input type="number" name="tb" required=""> cm</td>
        </tr>
        <tr>
            <td>Jenis Kelamin  </td>
            <td>:</td>
            <td><input type="radio" name="jk" value="Laki-laki" required=""> Laki-laki
            <input type="radio" name="jk" value="Perempuan" required=""> Perempuan</td>
        </tr>
    </table>
    <br>
    <input type="submit" name="submit" value="CEK">
</form>
    <?php 
    
    ?>
</body>
</html>