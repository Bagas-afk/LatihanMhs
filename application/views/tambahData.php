<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="<?php echo('insertMhs')?>" method="post">
            <table>
            <tr>
            <td>Nim</td>
            <td>:</td>
            <td><input type="text" name="nim" placeholder="nim"></td>
            </tr>
            
            <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="nama"></td>
            </tr>

            <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" placeholder="kelas"></td>
            </tr>

            <tr>
            <td><input type="submit" name="submit" value="Simpan"></td>
            </tr>
            
            </form>
            </table>

</body>
</html>