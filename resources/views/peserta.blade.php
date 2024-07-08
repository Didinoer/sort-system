<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Table</title>
</head>
<body>
    @if (Session::has('status-edit'))
    <div class="alert alert-success">
        {{ session('message-edit') }}
    </div>
    @elseif (Session::has('status-sort'))
    <div class="alert alert-success">
        {{ session('message-sort') }}
    </div>
    @elseif (Session::has('status-import'))
    <div class="alert alert-success">
        {{ session('message-import') }}
    </div>
    @endif
    <div class="container-fluid mt-4">
        <div class="col-md-12">
            <div class="text-center" >
                <img height="300" src="{{ asset('images/LOGO-07.png') }}" alt="logo">
                <h2> Sort System 2</h2>
            </div>
        </div>
        <div class="col-lg-8 mx-auto mt-5">
            <form action="/peserta-import" method="post" enctype="multipart/form-data">
                @csrf
                <label for=""> import data excel, dengan format : .xlsx</label> <br> <a href="https://docs.google.com/spreadsheets/d/1_6SQSuv1AwdOA3j5RGDw6kso3Gy3nF6s/edit?usp=drive_link&ouid=114114950391787955445&rtpof=true&sd=true"> (download contoh format untuk import data peserta)</a>
                <div class="input-group mb-3">
                    <input id="fileInput" type="file" name="file" class="form-control">
                    <button id="importButton" type="submit" class="btn btn-primary" disabled>Import</button>
                </div>
            </form>
            <div class="text-center mt-4">
                <a href="/reset" class="btn btn-light d-inline-block" onclick="return confirm('Anda yakin ingin reset proses? anda harus mengulang jika ada perpindahan manual !')">Reset</a>
            </div>
            <div class="text-center mt-4">
                <div class="btn-group d-grid gap-2" role="group" aria-label="Basic example">
                    <a href="/hasil-sparta" class="btn btn-danger d-inline-block">halaman Sparta group</a>
                    <a href="/hasil-ninja" class="btn btn-primary d-inline-block">halaman Ninja group</a>
                    <a href="/hasil-apache" class="btn btn-warning d-inline-block">halaman Apache group</a>
                    <a href="/hasil-musketeer" class="btn btn-success d-inline-block">halaman Musketeer group</a>
                </div>
            </div>
        </div>

        {{-- <form class="col-lg-8 mx-auto mt-5" action="" method="get">
            <div class="input-group mb-3">
                <input type="text" name="keyword" class="form-control" placeholder="Nama peserta">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </div>
        </form> --}}

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
                <table class="table table-primary mx-auto">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Umur</th>
                            <th>Action Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peserta as $item)
                        <tr>
                            <td>{{ $item['id'] }}</td>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['jenis_kelamin'] }}</td>
                            <td>{{ $item['umur'] }}</td>
                            <td><a href="peserta-edit/{{ $item['id'] }}">Edit</a> | <a href="peserta-detail/{{ $item['id'] }}">Detail</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $peserta->links() }}
                <div>
                    <p>Jumlah peserta perempuan = {{ $jumlah_peserta_perempuan }}</p>
                    <p>Jumlah peserta laki = {{ $jumlah_peserta_laki }}</p>
                    <p>Jumlah peserta tidak terdefinisi = {{ $jumlah_peserta_tidak_terdefinisi }}</p>
                    <p>Jumlah peserta total = {{ $jumlah_peserta_total }}</p>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
   $(document).ready(function() {
        $('#search').on('keyup', function (e) {
            var query = $(this).val();
            if (query.length >= 1) {
            $.ajax({
                    url:"search",
                    type:"GET",
                    data:{'search':query},
                    success:function(data){
                        $('#all_list').hide();
                        $('#search_list').html(data);
                    }
             });
            }else{
                $('#all_list').show();
                $('#search_list').empty();

            }
        });
    });
</script>
<script>
    // Ambil elemen input file
    const fileInput = document.getElementById('fileInput');
    // Ambil elemen tombol impor
    const importButton = document.getElementById('importButton');

    // Tambahkan event listener untuk setiap kali ada perubahan pada input file
    fileInput.addEventListener('change', function() {
        // Jika ada file yang dipilih
        if (fileInput.files.length > 0) {
            // Aktifkan tombol impor
            importButton.disabled = false;
        } else {
            // Nonaktifkan tombol impor jika tidak ada file yang dipilih
            importButton.disabled = true;
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

