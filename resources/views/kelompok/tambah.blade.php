<h1>Tambah Data Kelompok</h1>
<form action="{{ asset('kelompok/tambah_proses') }}" method="POST">
@csrf
Nama Kelompok<input type="text" name="nama_kelompok"><br>
Jenis Kelompok<input type="text" name="jenis_kelompok"><br>
Keterangan<input type="text" name="keterangan_kelompok"><br>
<input type="submit" value="Simpan">
</form>     