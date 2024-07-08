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
    <span style="float: left;">form pindah group peserta </span>
    <table class="table table-warning   ">
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
            <td>{{$peserta ['id']}}</td>
            <td>{{$peserta ['name']}}</td>
            <td>{{$peserta ['umur']}}</td>
            <td>{{$peserta ['jenis_kelamin']}}</td>
            <td>{{$peserta ['nama_ayah']}}</td>
            <td>{{$peserta ['kode_group']}}</td>
            <td>
                <form action="/proses_pindah_apache/{{$peserta['id']}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="group">Nama Group</label><br>
                    <select id="group" name="kode_group">
                            <option value="">Pilih Group</option>
                            @foreach ($groupsparta as $gs )
                            <option value="{{$gs}}">Sparta {{substr($gs, -1)}}</option>
                            @endforeach
                            @foreach ($groupninja as $gn )
                            <option value="{{$gn}}">Ninja {{substr($gn, -1)}}</option>
                            @endforeach
                            @foreach ($groupapache as $ga )
                            <option value="{{$ga}}">Apache {{substr($ga, -1)}}</option>
                            @endforeach
                            @foreach ($groupmusketeer as $gm )
                            <option value="{{$gm}}">Musketeer {{substr($gm, -1)}}</option>
                            @endforeach
                    </select>
                    <input type="hidden" name="house" value="apache">
                    <input type="submit" value="submit">
                </form>
            </td>
          </tr>
    </table>
    <div>
        <a href="/hasil-apache" class="btn btn-warning">Kembali Kehalaman Group Apache</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

