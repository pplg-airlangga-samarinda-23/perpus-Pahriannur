

<h1>Data Buku</h1>
<a href="create.php">Tambah</a>
<table>
    <thead>
        <th>No</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Stok</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php $no=0; foreach ($books as $book) : ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$book['judul'] ?></td>
                <td><?=$book['pengaranag'] ?></td>
                <td><?=$book['stok'] ?></td>
                <td>
                    <a href="edit.php?id=<?$book['id'] ?>">edit</a>
                    <a href="hapus.php?id=<?$book['id'] ?>">hapus</a>
                </td>
            </tr>
            <?php endforeach ?>
    </tbody>
</table>

<?php 
include __DIR__. '/../koneksi.php';

$sql = "SELECT * FROM buku";
$books = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);

?>