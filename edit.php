<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>
    <form method="post" action="/buku/update/<?= $buku['id'] ?>">
        Judul: <input type="text" name="judul" value="<?= esc($buku['judul']) ?>"><br>
        Pengarang: <input type="text" name="pengarang" value="<?= esc($buku['pengarang']) ?>"><br>
        Penerbit: <input type="text" name="penerbit" value="<?= esc($buku['penerbit']) ?>"><br>
        Tahun Terbit: <input type="text" name="tahun_terbit" value="<?= esc($buku['tahun_terbit']) ?>"><br>
        ISBN: <input type="text" name="isbn" value="<?= esc($buku['isbn']) ?>"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
