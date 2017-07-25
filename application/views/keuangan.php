<h1> Laporan Akhir</h1>

<table class="table table-bordered" >
	<thead>
	<th> Total Pemasukan </th>
	<th> Total Pengeluaran </th>
	<th> Sisa uang </th>
	</thead>

	
	<tbody>
		<tr>
			<td>
				<?php echo $dt_jumlah_pemasukan->jumlah ?>
			</td>
			<td>
				<?php echo $dt_jumlah_pengeluaran->jumlah ?>
			</td>
			<td>
				<?php echo $dt_jumlah_pemasukan->jumlah - $dt_jumlah_pengeluaran->jumlah ?>
			</td>
		</tr>
	</tbody>
</table>
