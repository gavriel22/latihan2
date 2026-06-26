<html>
    <head></head>
    <body>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Aksi</th>
            </tr>
                @foreach ($buku as $b)
                <tr>
                    <td>{{ $b->id }}</td>
                    <td>{{ $b->judul }}</td>
                    <td>{{ $b->pengarang }}</td>

                    <td>
                        <a href="/update?id={{ $b->id }}">Ubah</a>
                        <a href="/delete?id={{ $b->id }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
        </table>
    </body>
</html>
