<?php

include '../koneksi.php';
include '../aset/header.php';

include 'fungsi-transaksi.php';
$id_pinjam = $_GET['id_pinjam'];

$pinjam = ambilPeminjaman($koneksi, $id_pinjam);

?>

<div class="container">
<div class="row mt-4">
<div class="col md-8">
<div class="card">
<div class="card-header">
<h3>Edit Peminjaman</h3>
</div>
<div class="card-body">
<form method="post" action="proses-edit.php">

<div class="form-group">
<label for="anggota">Nama Anggota</label>
<input type="text" value="<?=$pinjam['nama']?>"class="form-group"disable>
<div class="form-group">
<label for="buku">Judul Buku</label>
<input type="text" value="<?=$pinjam['judul']?>"class="form-control"disable>
</div>

<div class="form-group">
<label for="datepicker">Tanggal Kembali</label>
<input type="date" name="tgl_kembali"value"<?=$pinjam['tgl_kembali']?>"class="form-control">
</div>

<?php
?>

<div class="form-group">
<input type="hidden" name="id_pinjam" value="<?=$id_pinjam?>">
<button type="submit" name="btnPinjam"class="btn btn-primary">Simpan</button>
</div>

</form>
</div>

</div>
</div>
</div>
</div>

<?php
include '../aset/footer.php';

?>