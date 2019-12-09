<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="<?php echo base_url('mahasiswa/update_Mhs/').$mhs->id?>" method="post">
            <table>
            <tr>
            <td>Nim</td>
            <td>:</td>
            <td><input type="text" name="nim" placeholder="nim" value="<?= $mhs->nim ?>"></td>
            </tr>
            
            <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="nama" value="<?= $mhs->nama ?>"></td>
            </tr>

            <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" placeholder="kelas"  value="<?= $mhs->kelas ?>"></td>
            </tr>

            <tr>
            <td><input type="submit" name="submit" value="Update"></td>
            <td><input type="submit" name="cancel" value="Batal"></td>
            
            </tr>
            
            </form>
            </table>

</body>
</html>