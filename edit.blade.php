<!-- Tempatkan file kode ini di dalam folder projek-laravel\resources\views\projek -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
</head>
<body>
    <h1>Edit Data Siswa</h1>
        <form action="{{ route('projek.update', $projek->id) }}" method="POST">
            @csrf
            @method('PUT')
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="{{ $projek->nama }}" required>
    
                <label for="kelas">Kelas:</label>
                <input type="text" id="kelas" name="kelas" value="{{ $projek->kelas }}" required>
    
                <label for="jurusan">Jurusan:</label>
                <input type="text" id="jurusan" name="jurusan" value="{{ $projek->jurusan }}" required>
    
                <button type="submit" class="btn btn-md btn-primary">Update</button>
                <a href="{{ route('projek.index') }}">Kembali</a>
        </form>
</body>
</html>
