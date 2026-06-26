<html>
    <head></head>
    <body>
        <form method="post" action="/edit">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $buku->id }}">
            Judul:
            <input type="text" name="jdl" value="{{ $buku->judul }}"><br>

            Pengarang:
            <input type="text" name="pgr" value="{{ $buku->pengarang }}"><br>

            <input type="submit" value="Update Buku">
        </form>
    </body>
</html>
