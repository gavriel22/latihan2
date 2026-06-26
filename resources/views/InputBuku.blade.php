<html>
    <head></head>
    <body>
        <form method="post" action="/create">
            {{ csrf_field() }}
            Judul:
            <input type="text" name="jdl"><br>

            Pengarang:
            <input type="text" name="pgr"><br>

            <input type="submit" value="Tambah Buku">
        </form>
    </body>
</html>
