<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title?></title>
</head>
<body>
<div class="row">
<div class="col-md 6 ofset-3">
<h1><?= $title?></h1>
    <p><a href="<?php echo base_url('mahasiswa/tambah_Data')?>">TambahData </a></p>
    <table border='2' cellspacing='2'>
    <tr>
        <td>No</td>
        <td>Nim</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Keterangan</td>
    </tr>
        <tbody>
        <?php $no = 1; foreach ($mhs as $m){  //---> mengambil dari data mahasiswa Controller
            ?>

            <tr>
                <td> <?= $no; ?></td>
                <td> <?= $m->nim; ?></td>
                <td> <?= $m->nama; ?></td>
                <td> <?= $m->kelas; ?></td>
                <td><a href="mahasiswa/update_Data/<?php echo($m->id)?>">Update</a> <a href="mahasiswa/hapus_Mhs/<?php echo($m->id)?>">Hapus</a></td>
             
            </tr>
            <?php ++$no;
        }?>
        
        </tbody>
        </table>
        </div>
</div>


        <script src="https://code.jquery.com"></script>
        <script src="https://startbootstrap.com/"></script>
        <script src="https://cdnjs.cloudfare.com/ajax"></script>
        <script src="https://stackpath.bootsrapcdn.com"></script>
</body>
</html>