<?php
include '../koneksi.php';
    $sql = "SELECT * FROM buku ORDER BY judul";

    $res = mysqli_query($koneksi, $sql);
    $pinjam = array();

    while ($data = mysqli_fetch_assoc($res)) {
        $pinjam[] = $data;
    }
?>


<?php
include '../aset/header.php';
?>

<div class="container">
    <div class="row at-4">
    <div class="col-md">
            </div>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        <h2 class="card-title"><i class="far fa-edit"></i>Data Buku</h2>
  </div>
  <div class="card-body">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Stok</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <?php
    $no = 1;
    foreach ($pinjam as $p) { ?>
    
    <tr>
        <td scope="row"><?= $no ?></td>
        <td><?=$p['judul']?></th>
        <td><?= $p['pengarang'] ?></td>
        <td><?= $p['stok'] ?></td>
        <td>
            <a href="#" class="badge badge-success">Detail</a>
            <a href="#" class="badge badge-warning">Edit</a>
            <a href="#" class="badge badge-danger">Hapus</a>
            <a href="tambah.php" class="badge badge-primary">Tambah</a>
        </td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>
    
    </div>
</div>

<?php
include '../aset/footer.php';
?>