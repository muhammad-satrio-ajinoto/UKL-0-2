<?php
include '../koneksi.php';
include 'fungsi-transaksi.php';

$buku = ambilBuku($koneksi);
$anggota = ambilAnggota($koneksi);

include '../aset/header.php';

?>

<div class="container">
<div class="row mt-4">
<div class="col-md-8">
<div class="card">
<div class="card-header">
<h3>Form Tambah Peminjaman</h3>
</div>
<div class="card-body">
<form method="post" action="proses-pinjam.php">
<div class="form-group">
<label for="anggota">Nama Anggota</label>
<select name = "id_anggota" class="form-control">
<?php
foreach ($anggota as $a){?>
<option value ="<?=$a['id_anggota']?>"><?=$a['nama']?></option>
<?php }
?>
</select>
</div>

<div class="form-group">
<label for="buku">Judul Buku</label>
<select name = "id_buku" class="form-control">
<?php
foreach ($buku as $a){?>
<option value ="<?=$a['id_buku']?>"><?=$a['judul']?></option>
<?php }
?>
</select>
</div>

<div class="form-group">
<label for="detepicker">Tanggal Pinjam</label>
<input type="date" name="tgl_pinjam" class="form-control">
</div>

<div class="form-group">
<button type="submit" name="btnPinjam" class="btn btn-primarymr-auto">Simpan</button>
</div>
</select>
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