<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    <form method="post" action="/buku/simpan">
        Judul: <input type="text" name="judul"><br>
        Pengarang: <input type="text" name="pengarang"><br>
        Penerbit: <input type="text" name="penerbit"><br>
        Tahun Terbit: <input type="text" name="tahun_terbit"><br>
        ISBN: <input type="text" name="isbn"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
