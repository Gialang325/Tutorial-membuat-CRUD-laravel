<!-- Tempatkan file kode ini di dalam folder projek-laravel\resources\views\projek -->
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>
    <form action="{{ route('projek.store') }}" method="POST">
        @csrf
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" required>

            <label for="jurusan">Jurusan:</label>
            <input type="text" id="jurusan" name="jurusan" required>

            <button type="submit">Simpan</button>
            <a href="{{ route('projek.index') }}">Kembali</a>
    </form>
</body>
</html>

