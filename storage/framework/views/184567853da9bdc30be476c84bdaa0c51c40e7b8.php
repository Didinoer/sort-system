<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>hasil</title>
</head>
<body>
    <span style="float: left;">Form pindah group peserta </span>
    <table class="table table-info">
        <tr>
            <th> No </th>
            <th> Nama </th>
            <th> Umur </th>
            <th> Jenis kelamin</th>
            <th>Nama ayah</th>
            <th> Kode group</th>
            <th>Pindah ke</th>
        </tr>
        <tr>
            <td><?php echo e($peserta ['id']); ?></td>
            <td><?php echo e($peserta ['name']); ?></td>
            <td><?php echo e($peserta ['umur']); ?></td>
            <td><?php echo e($peserta ['jenis_kelamin']); ?></td>
            <td><?php echo e($peserta ['nama_ayah']); ?></td>
            <td><?php echo e($peserta ['kode_group']); ?></td>
            <td>
                <form action="/proses_pindah_ninja/<?php echo e($peserta['id']); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <label for="group">Nama Group</label><br>
                    <select id="group" name="kode_group">
                            <option value="">pilih group</option>
                            <?php $__currentLoopData = $groupsparta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($gs); ?>">Sparta <?php echo e(substr($gs, -1)); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $groupninja; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($gn); ?>">Ninja <?php echo e(substr($gn, -1)); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $groupapache; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($ga); ?>">Apache <?php echo e(substr($ga, -1)); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $groupmusketeer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($gm); ?>">Musketeer <?php echo e(substr($gm, -1)); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <input type="hidden" name="house" value="ninja">
                    <input type="submit" value="submit">
                </form>
            </td>
          </tr>
    </table>
    <div>
        <a href="/hasil-ninja" class="btn btn-warning">Kembali Kehalaman Group Ninja</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/sort-system/app-name/resources/views/pindah-ninja.blade.php ENDPATH**/ ?>