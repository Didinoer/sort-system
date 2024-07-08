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
                            <li class="list-group-item">Nama : {{ $data->name }}</li>
                            <li class="list-group-item">Nomor Telephone : {{ $data->nomor_telephone }}</li>
                            <li class="list-group-item">Email : {{ $data->email }}</li>
                            <li class="list-group-item">Tanggal Lahir : {{ $data->tanggal_lahir }}</li>
                            <li class="list-group-item">Umur : {{ $data->umur }}</li>
                            <li class="list-group-item">Jenis Kelamin: {{ $data->jenis_kelamin }}</li>
                            <li class="list-group-item">Ukuran Kaos: {{ $data->ukuran_kaos }}</li>
                            <li class="list-group-item">Vegetarian : {{ $data->vegetarian }}</li>
                            <li class="list-group-item">Alergi : {{ $data->alergi }}</li>
                            <li class="list-group-item">Nama Sekolah : {{ $data->nama_sekolah }}</li>
                            <li class="list-group-item">Alamat Kota : {{ $data->alamat_kota }}</li>
                            <li class="list-group-item">Provinsi : {{ $data->provinsi }}</li>
                            <li class="list-group-item">Nama Ayah : {{ $data->nama_ayah }}</li>
                            <li class="list-group-item">Nomor Hp Ayah : {{ $data->no_hp_ayah }}</li>
                            <li class="list-group-item">Email Ayah : {{ $data->email_ayah }}</li>
                            <li class="list-group-item">Pekerjaan Ayah : {{ $data->pekerjaan_ayah }}</li>
                            <li class="list-group-item">Nama Ibu : {{ $data->nama_ibu }}</li>
                            <li class="list-group-item">Nomor Hp Ibu : {{ $data->no_hp_ibu }}</li>
                            <li class="list-group-item">Email Ibu : {{ $data->email_ibu }}</li>
                            <li class="list-group-item">Pekerjaan Ibu : {{ $data->pekerjaan_ibu }}</li>
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
