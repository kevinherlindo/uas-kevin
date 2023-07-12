<h1>Master data Kelompok</h1>
<a href="{{ asset('kelompok/tambah')  }}">Tambah Data</a>
<table class="table bg-white rounded shadow-sm table-hover">
<thead>
 <tr style="background:black;color:white">
    <td scope="col">No</td>
    <td scope="col">Nama Kelompok</td>
    <td scope="col">Jenis Kelompok</td>
    <td scope="col">Keterangan</td>
    <td scope="col">Aksi</td>
 </tr>
</thead>
<tbody>   
<?php 
$no=0;
foreach ($kelompok as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->nama_kelompok }}</td>
    <td>{{ $rows->jenis_kelompok }}</td>
    <td>{{ $rows->keterangan_kelompok }}</td>
    <td>
        <a href="{{ asset('kelompok/edit/'.$rows->id ) }}">Edit</a>
        <a href="{{ asset('kelompok/delete/'.$rows->id ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
</tbody>
</table>