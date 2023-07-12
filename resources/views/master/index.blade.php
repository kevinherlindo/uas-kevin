<h1>Akuntansi Master</h1>
<table border="1" width="75%">
<tr>
    <td>No</td>
    <td>Nama</td>
    <td>Nomor Perkiraan</td>
    <td>Kelompok</td>
    <td>Tipe</td>
</tr>
<?php
$no=0; 
foreach ($master as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->nama_perkiraan }}</td>
    <td>{{ $rows->nomor_perkiraan }}</td>
    <td>{{ $rows->kelompok }}</td>
    <td>{{ $rows->tipe }}</td>
</tr>

<?php
}

?>

</table>