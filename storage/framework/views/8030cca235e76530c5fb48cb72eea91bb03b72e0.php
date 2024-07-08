<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>detail peserta</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                            <span style="float: left;">Detail Peserta lifecamp</span>
                            <span style="float: right;"><a href="/peserta" class="btn btn-primary">Kembali</a></span>
                            <div style="clear: both;"></div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Nama : <?php echo e($data->name); ?></li>
                            <li class="list-group-item">Nomor Telephone : <?php echo e($data->nomor_telephone); ?></li>
                            <li class="list-group-item">Email : <?php echo e($data->email); ?></li>
                            <li class="list-group-item">Tanggal Lahir : <?php echo e($data->tanggal_lahir); ?></li>
                            <li class="list-group-item">Umur : <?php echo e($data->umur); ?></li>
                            <li class="list-group-item">Jenis Kelamin: <?php echo e($data->jenis_kelamin); ?></li>
                            <li class="list-group-item">Ukuran Kaos: <?php echo e($data->ukuran_kaos); ?></li>
                            <li class="list-group-item">Vegetarian : <?php echo e($data->vegetarian); ?></li>
                            <li class="list-group-item">Alergi : <?php echo e($data->alergi); ?></li>
                            <li class="list-group-item">Nama Sekolah : <?php echo e($data->nama_sekolah); ?></li>
                            <li class="list-group-item">Alamat Kota : <?php echo e($data->alamat_kota); ?></li>
                            <li class="list-group-item">Provinsi : <?php echo e($data->provinsi); ?></li>
                            <li class="list-group-item">Nama Ayah : <?php echo e($data->nama_ayah); ?></li>
                            <li class="list-group-item">Nomor Hp Ayah : <?php echo e($data->no_hp_ayah); ?></li>
                            <li class="list-group-item">Email Ayah : <?php echo e($data->email_ayah); ?></li>
                            <li class="list-group-item">Pekerjaan Ayah : <?php echo e($data->pekerjaan_ayah); ?></li>
                            <li class="list-group-item">Nama Ibu : <?php echo e($data->nama_ibu); ?></li>
                            <li class="list-group-item">Nomor Hp Ibu : <?php echo e($data->no_hp_ibu); ?></li>
                            <li class="list-group-item">Email Ibu : <?php echo e($data->email_ibu); ?></li>
                            <li class="list-group-item">Pekerjaan Ibu : <?php echo e($data->pekerjaan_ibu); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/sort-system 2/app-name/resources/views/detail_peserta.blade.php ENDPATH**/ ?>