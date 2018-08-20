<h3>kategori barang</h3>
<?php
echo anchor ('kategori/post', 'tambah data')
?>
<table border= "1">
	<tr><th>no</th><th>nama kategori</th><th colspan="2">operasi</th></tr>
	<?php
	$no=1;
	foreach ($record->result() as $r)
	{
		echo "<tr>
			<td>$no</td>
			<td>$r->nama_kategori</td>
			<td>".anchor('kategori/edit'.$r->kategori_id,'Edit')."</td>
			<td>".anchor('kategori/delete'.$r->kategori_id,'Delete')."</td>
			<td></td>
			</tr>";
		$no++;
	}
	?>
</table>