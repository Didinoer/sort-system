{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <table class="table table-success">
                <tr>
                    <th> No </th>
                    <th> Nama </th>
                    <th> Umur </th>
                    <th> Jenis kelamin</th>
                    <th>Nama ayah</th>
                    <th>Kode group</th>
                    <th>Action</th>
                </tr>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item ['id']}}</td>
                    <td>{{$item ['name']}}</td>
                    <td>{{$item ['umur']}}</td>
                    <td>{{$item ['jenis_kelamin']}}</td>
                    <td>{{$item['nama_ayah']}}</td>
                    <td>{{$item ['kode_group']}}</td>
                    <td><a class="btn btn-xs btn-primary btn-flat btn-sm" href="pindah_musketeer/{{$item -> id}}">Pindah Group</a></td>
                </tr>
            @endforeach
            </table>
            <div>
                {{$data -> links()}}
            </div>

            <div>
                <a href="/peserta" class="btn btn-warning">Kembali kehalaman utama</a>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
             $('#search').on('keyup', function (e) {
                 var query = $(this).val();
                 if (query.length >= 1) {
                 $.ajax({
                         url:"search_musketeer",
                         type:"GET",
                         data:{'search_musketeer':query},
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html> --}}
{{--
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

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <table  id="dataTable" class="table table-success">
                <tr>
                    <th> No </th>
                    <th> group name</th>
                    <th> daftar peserta </th>
                </tr>
              @foreach ($data as $item)
                  <tr>
                    <td>{{$loop -> iteration}}</td>
                    <td>{{$item -> group_name}}</td>
                    <td>
                        <table >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nama Ayah</th>
                                    <th>Kode Group</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($item -> peserta_musketeer as $items)
                                <tr>
                                    <td>{{ $loop -> index+1 }}</td>
                                    <td>{{ $items['name'] }}</td>
                                    <td>{{ $items['umur'] }}</td>
                                    <td>{{ $items['jenis_kelamin'] }}</td>
                                    <td>{{ $items['nama_ayah'] }}</td>
                                    <td>{{ $items['kode_group'] }}</td>
                                    <td><a class="btn btn-xs btn-primary btn-flat btn-sm" href="pindah_musketeer/{{ $items->id }}">Pindah Group</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </td>
            @endforeach
            </table>
            <div>
                <a href="/peserta" class="btn btn-warning">Kembali kehalaman utama</a>
            </div>
        </div>
    </div>
            <div>
                {{$data -> links()}}
            </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

   <script>

        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
    </script>
    </body>
</html> --}}

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
    <h1>Musketeer House</h1>
</div>

<div class="text-center col-lg-8 mx-auto mb-4">
    <a href="/hasil-sparta">
        <button class="btn btn-danger">Halaman Sparta</button>
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
    <a href="/eksport-musketeer">
        <button class="btn btn-dark">Export to Excel</button>
    </a>
</div>

<div class="row justify-content-center">
    <div class="col-lg-12">
        <table class="table table-success table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Group Name</th>
                    <th>Daftar Peserta</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->group_name}}</td>
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
                                    @foreach ($item->peserta_musketeer as $participant)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $participant['name'] }}</td>
                                            <td>{{ $participant['umur'] }}</td>
                                            <td>{{ $participant['jenis_kelamin'] }}</td>
                                            <td>{{ $participant['nama_ayah'] }}</td>
                                            <td>{{ $participant['nama_ibu'] }}</td>
                                            <td>{{ $participant['ukuran_kaos'] }}</td>
                                            <td>{{ $participant['kode_group'] }}</td>
                                            <td><a class="btn btn-sm btn-primary" href="pindah_musketeer/{{ $participant->id }}">Pindah Group</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </td>
                    </tr>
                @endforeach
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
