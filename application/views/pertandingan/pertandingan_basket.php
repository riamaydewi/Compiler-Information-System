<h1>Pertandingan Basket</h1>


<table class="table table-bordered" >
	<thead>
	<th> Tanggal </th>
	<th> Jam </th>
	<th> Tempat </th>
	<th> Team_A </th>
	<th> Team_B </th> 
	<th> Score_A </th>
	<th> Score_B </th>
	<th> Hasil Pertandingan </th>
	<th> Jenis Pertandingan </th>
	
	</thead>
	<tbody>
		<?php foreach ($dt_pertandingan as $pertandingan){ ?>
			<tr>
				<td>
					<?php echo $pertandingan->tanggal?>
				</td>
				<td>
					<?php echo $pertandingan->jam?>
				</td>
				<td>
					<?php echo $pertandingan->tempat?>
				</td>
				<td>
					<?php echo $pertandingan->team_1?>
				</td>
				<td>
					<?php echo $pertandingan->team_2?>
				</td>
				<td>
					<?php echo $pertandingan->score_1?>
				</td>
				<td>
					<?php echo $pertandingan->score_2?>
				</td>
				<td>
					<?php echo $pertandingan->hasil?>
				</td>
				<td>
					<?php echo $pertandingan->pertandingan?>
				</td>


				


			</tr>
		<?php } ?>
	</tbody>
</table>
