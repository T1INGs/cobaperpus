<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <a href="/buku/tambah">Tambah Buku</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>ISBN</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($bukuku as $b): ?>
        <tr>
            <td><?= esc($b['judul']) ?></td>
            <td><?= esc($b['pengarang']) ?></td>
            <td><?= esc($b['penerbit']) ?></td>
            <td><?= esc($b['tahun_terbit']) ?></td>
            <td><?= esc($b['isbn']) ?></td>
            <td>
                <a href="/buku/edit/<?= $b['id'] ?>">Edit</a> | 
                <a href="/buku/hapus/<?= $b['id'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
