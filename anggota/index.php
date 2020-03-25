<?php
include '../koneksi.php';
    $sql = "SELECT * FROM anggota ORDER BY nama";

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
        <h2 class="card-title"><i class="far fa-edit"></i>Data Anggota</h2>
  </div>
  <div class="card-body">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <?php
    $no = 1;
    foreach ($pinjam as $p) { ?>
    
    <tr>
        <td scope="row"><?= $no ?></td>
        <td><?=$p['nama']?></th>
        <td><?= $p['kelas'] ?></td>
       
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