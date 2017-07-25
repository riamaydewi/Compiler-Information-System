<h1> Laporan Pengeluaran</h1>

<table class="table table-bordered" >
	<thead>
	<th> Divisi </th>
	<th> Tanggal </th>
	<th> Nama </th>
	<th> Kriteria </th>
	<th> Jumlah </th>
	<th> Keterangan </th>
	</thead>

	
	<tbody>
		<?php foreach ($dt_keluar as $l){ ?>
		<tr>
			
				<td>
					<?php echo $l->nama_role ?>
				</td>
				<td>
					<?php echo $l->tanggal ?>
				</td>
				<td>
					<?php echo $l->nama_anggota ?>
				</td>
				<td>
					<?php echo $l->kriteria_pengeluaran ?>
				</td>
				<td>
					<?php echo $l->jumlah ?>
				</td>
				<td>
					<?php echo $l->keterangan ?>
				</td>

		</tr>
		<?php } ?>
	</tbody>
</table>
