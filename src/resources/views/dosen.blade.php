<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
    crossorigin="anonymous">

</head>
<body>
<form action="" >
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Menu Halaman
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="absensi">Absensi</a>
    <a class="dropdown-item" href="jadwal">Jadwal</a>
    <a class="dropdown-item" href="kelas">Kelas</a>
    <a class="dropdown-item" href="matakuliah">Matakuliah</a>
    <a class="dropdown-item" href="mahasiswa">Mahasiswa</a>
  </div>
        <div class="container">
        <h2>Form Dosen</h2>
        <hr>
            <div class="form-group">
            <label for="nidn">Nidn</label>
            <input type="text" name="nidn" class="form-control">

            <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control">
            </div>

            <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" class="form-control">
            </div>

            <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control">
            </div>
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nidn</th>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Email</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                @foreach ($dosen as $item)
                <td>{{ $item->nidn }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->telepon }}</td>
                <td>{{ $item->email }}</td>
                    <td> <a href="" class="btn btn-warning btn-block">Rubah</a></td>
                    <td> <a href="" class="btn btn-danger btn-block">Hapus</a></td>
                </tr>
                @endforeach
        </tbody>
    </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>