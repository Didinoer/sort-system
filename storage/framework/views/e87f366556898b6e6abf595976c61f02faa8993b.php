

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <title>hasil</title>
</head>
<body>

    <div class="text-center">
        <h1>
            Musketeer House
        </h1>
    </div>

    <div class="text-center col-lg-8 mx-auto" >
        <a href="/eksport-musketeer">
            <button class="btn btn-primary" > Export to excel </button>
        </a>
    </div>

    <div class="col-lg-8  mx-auto mt-4 mb-4">
        <input type="search" name="search" id="search" placeholder="masukan nama" class="form-control ">
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div id="search_list"></div>
        </div>
    </div>

    <div class="row justify-content-center" id="all_list">
        <div class="col-lg-8">
            <table class="table table-success" id="dataTable">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Nama </th>
                        <th> Umur </th>
                        <th> Jenis kelamin</th>
                        <th>Nama ayah</th>
                        <th>Kode group</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item ['id']); ?></td>
                        <td><?php echo e($item ['name']); ?></td>
                        <td><?php echo e($item ['umur']); ?></td>
                        <td><?php echo e($item ['jenis_kelamin']); ?></td>
                        <td><?php echo e($item['nama_ayah']); ?></td>
                        <td><?php echo e($item ['kode_group']); ?></td>
                        <td><a class="btn btn-xs btn-primary btn-flat btn-sm" href="pindah_musketeer/<?php echo e($item -> id); ?>">Pindah Group</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            

            <div>
                <a href="/peserta" class="btn btn-warning">Kembali kehalaman utama</a>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

   <script>
        // Initialize DataTables
        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
    </script>
    </body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/sort-system/app-name/resources/views/hasil_musketeer.blade.php ENDPATH**/ ?>