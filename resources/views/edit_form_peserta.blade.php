<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>form edit</title>
</head>
<body>
    <div class="mt-5 col-8 m-auto">
        <span style="float: left;">Form Edit Data Peserta lifecamp</span>
        <span style="float: right;"><a href="/peserta" class="btn btn-primary">Kembali</a></span>
        <div style="clear: both;"></div>
        <form action="/peserta-edit-process/{{$data['id']}}" method="put" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3" >
                <label for="NAMA">Nama</label>
                <input class="form-control" name="name" placeholder="name" value="{{$data['name']}}">
            </div>
            <div class="mb-3" >
                <label for="NAMA">Nomor Telephone</label>
                <input class="form-control" type="number" name="nomor_telephone" placeholder="nomor_telephone" value="{{$data['nomor_telephone']}}">
            </div>
            <div class="mb-3" >
                <label for="NAMA">Email</label>
                <input class="form-control" type="email" name="email" placeholder="email" value="{{$data['email']}}">
            </div>
            <div class="mb-3" >
                <label for="NAMA">Tanggal Lahir</label>
                <input class="form-control" type="date" name="tanggal_lahir" placeholder="tanggal_lahir" value="{{$data['tanggal_lahir']}}">
            </div>
            <div class="mb-3" >
                <label for="NAMA">Umur</label>
                {{-- <input class="form-control" name="umur" placeholder="umur" value="{{$data['umur']}}"> --}}
                <select class="form-control" id="umur" name="umur">
                    <option value="{{$data['umur']}}">{{$data['umur']}}</option>
                    <!-- Buat option untuk setiap umur dari 1 hingga 100 -->
                    <?php
                    for ($i = 1; $i <= 100; $i++) {
                        echo "<option value=\"$i\">$i</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3" >
                <label for="NAMA">Jenis Kelamin</label>
                {{-- <input class="form-control" name="jenis_kelamin" placeholder="jenis_kelamin" value="{{$data['jenis_kelamin']}}"> --}}
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="{{$data['jenis_kelamin']}}">{{$data['jenis_kelamin']}}</option>
                    <option value="l">Laki-laki</option>
                    <option value="p">Perempuan</option>
                </select>
            </div>
            <div class="mb-3" >
                <label for="NAMA">Ukuran kaos</label>
                {{-- <input class="form-control" name="ukuran_kaos" placeholder="ukuran_kaos" value="{{$data['ukuran_kaos']}}"> --}}
                <select class="form-control" id="ukuran_kaos" name="ukuran_kaos">
                    <option value="{{$data['ukuran_kaos']}}">{{$data['ukuran_kaos']}}</option>
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                    <option value="xxl">XXL</option>
                </select>
            </div>
            <div class="mb-3" >
                <label for="NAMA">Vegetarian</label>
                <input class="form-control" name="vegetarian" placeholder="vegetarian" value="{{$data['vegetarian']}}">
                {{-- <select class="form-control" id="vegetarian" name="vegetarian">
                    <option value="{{$data['vegetarian']}}">{{$data['vegetarian']}}</option>
                    <option value="N">N</option>
                    <option value="Y">Y</option>
                </select> --}}
            </div>
            <div class="mb-3" >
                <label for="NAMA">Alergi</label>
                <input class="form-control" name="alergi" placeholder="alergi" value="{{$data['alergi']}}">
            </div>
            <div class="mb-3" >
                <label for="NAMA">Nama Sekolah</label>
                <input class="form-control" name="nama_sekolah" placeholder="nama_sekolah" value="{{$data['nama_sekolah']}}">
            </div>
            <div class="mb-3" >
                <label for="NAMA">Alamat Kota</label>
                <input class="form-control" name="alamat_kota" placeholder="alamat_kota" value="{{$data['alamat_kota']}}">
            </div>
            <div class="mb-3" >
                <label for="NAMA">Provinsi</label>
                <input class="form-control" name="provinsi" placeholder="provinsi" value="{{$data['provinsi']}}">
            </div>
            <div class="mb-3" >
                <label for="NAMA">Nama Ayah</label>
                <input class="form-control" name="nama_ayah" placeholder="nama_ayah" value="{{$data['nama_ayah']}}">
            </div>
            <div class="mb-3" >
                <label for="NAMA">Nomor Hp Ayah</label>
                <input class="form-control" name="no_hp_ayah" placeholder="no_hp_ayah" value="{{$data['no_hp_ayah']}}">
            </div>
            <div class="mb-3" >
                <label for="NAMA">Email Ayah</label>
                <input class="form-control" name="email_ayah" placeholder="email_ayah" value="{{$data['email_ayah']}}">
            </div>
            <div class="mb-3" >
                <label for="NAMA">Pekerjaan Ayah</label>
                <input class="form-control" name="pekerjaan_ayah" placeholder="pekerjaan_ayah" value="{{$data['pekerjaan_ayah']}}">
            </div>
            <div class="mb-3" >
                <label for="NAMA">Nama Ibu</label>
                <input class="form-control" name="nama_ibu" placeholder="nama_ibu" value="{{$data['nama_ibu']}}">
            </div>
            <div class="mb-3" >
                <label for="NAMA">Nomor Hp Ibu</label>
                <input class="form-control" name="no_hp_ibu" placeholder="no_hp_ibu" value="{{$data['no_hp_ibu']}}">
            </div>
            <div class="mb-3" >
                <label for="NAMA">Email Ibu</label>
                <input class="form-control" name="email_ibu" placeholder="email_ibu" value="{{$data['email_ibu']}}">
            </div>
            <div class="mb-3" >
                <label for="NAMA">Pekerjaan Ibu</label>
                <input class="form-control" name="pekerjaan_ibu" placeholder="pekerjaan_ibu" value="{{$data['pekerjaan_ibu']}}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
