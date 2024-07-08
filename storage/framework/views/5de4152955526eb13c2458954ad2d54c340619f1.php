










 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
</head>
<body>

<div class="text-center">
    <h1>Sparta House</h1>
</div>

<div class="text-center col-lg-8 mx-auto mb-4">
    <a href="/hasil-sparta">
        <button class="btn btn-danger">Halaman Sparta </button>
    </a>

    <a href="/hasil-ninja">
        <button class="btn btn-primary">Halaman Ninja </button>
    </a>
    <a href="/hasil-apache">
        <button class="btn btn-warning">Halaman Apache</button>
    </a>
    <a href="/hasil-musketeer">
        <button class="btn btn-success">Halaman Musketeer</button>
    </a>
    &nbsp; &nbsp; &nbsp;
    <a href="/eksport-sparta">
        <button class="btn btn-dark">Export to Excel</button>
    </a>
</div>

<div class="row justify-content-center">
    <div class="col-lg-12">
        <table class="table  table-bordered table-danger">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Group Name</th>
                    <th>Daftar Peserta</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->group_name); ?></td>
                        <td>
                            <table class="table table-hover table-bordered" style=" border-color :black;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Umur</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Nama Ayah</th>
                                        <th>Nama Ibu</th>
                                        <th>Ukuran Kaos</th>
                                        <th>Kode Group</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $item->peserta_sparta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->index + 1); ?></td>
                                            <td><?php echo e($participant['name']); ?></td>
                                            <td><?php echo e($participant['umur']); ?></td>
                                            <td><?php echo e($participant['jenis_kelamin']); ?></td>
                                            <td><?php echo e($participant['nama_ayah']); ?></td>
                                            <td><?php echo e($participant['nama_ibu']); ?></td>
                                            <td><?php echo e($participant['ukuran_kaos']); ?></td>
                                            <td><?php echo e($participant['kode_group']); ?></td>
                                            <td><a class="btn btn-sm btn-primary" href="pindah_sparta/<?php echo e($participant->id); ?>">Pindah Group</a></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="text-center mt-4">
            <a href="/peserta" class="btn btn-warning">Kembali ke Halaman Utama</a>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "order": [[0, "asc"]]
        });
    });
</script>

</body>
</html>



<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/sort-system 2/app-name/resources/views/hasil_sparta.blade.php ENDPATH**/ ?>