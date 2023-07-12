<h1>Ubah Data Kelompok</h1>
<form action="{{ asset('kelompok/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id" value="<?php echo $kelompok->id ?>">
Nama Kelompok<input type="text" name="nama_kelompok" value="<?php echo $kelompok->nama_kelompok ?>"><br>
Jenis Kelompok <input type="text" name="jenis_kelompok" value="<?php echo $kelompok->jenis_kelompok ?>"><br>
Keterangan <input type="text" name="keterangan_kelompok" value="<?php echo $kelompok->keterangan_kelompok ?>"><br>
<input type="submit" value="Simpan">
</form>     