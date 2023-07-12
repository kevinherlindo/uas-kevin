<h1>Hisory Tutup Buku</h1>
<table border="1" width="75%">
<tr>
    <td>No</td>
    <td>nama file</td>
    <td>tanggal backup</td>
    <td>id user</td>
</tr>
<?php
$no=0; 
foreach ($history as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->nama_file }}</td>
    <td>{{ $rows->tanggal_backup }}</td>
    <td>{{ $rows->id_user }}</td>
</tr>

<?php
}

?>

</table>