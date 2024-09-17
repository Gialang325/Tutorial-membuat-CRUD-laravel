<!-- Tempatkan file kode ini di dalam folder projek-laravel\resources\views\projek -->
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Data Siswa</title>
</head>
<body>
    <h1>Daftar Data Siswa</h1>
    <a href="{{ route('projek.create') }}">Tambah Data Siswa</a>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projek as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->kelas }}</td>
                <td>{{ $p->jurusan }}</td>
                <td>
                    <form onsubmit="return confirm('Apakah Anda Yakin ingin menghapus data ini?');" 
                        action="{{ route('projek.destroy', $p->id) }}" method="POST">
                        <a href="{{ route('projek.edit', $p->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
