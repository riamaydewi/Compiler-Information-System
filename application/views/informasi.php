<h1>Jadwal Pertandingan</h1>

<?php echo $this->session->flashdata('notif') ?>

<a class="btn btn-sm btn-success" href="<?php echo base_url('informasi/tambah')?>"> Tambah Data </a>
				
<br>
			
<br>

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
	<th> Aksi </th>
	
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

				<td>
					<a class="btn btn-sm btn-info" href="<?php echo base_url('informasi/update/'.$pertandingan->id_hasil)?>"> Edit </a>
					<a class="btn btn-sm btn-danger" href="#" onclick="hapus('<?php echo $pertandingan->id_hasil?>')"> Delete </a>
				</td>
				


			</tr>
		<?php } ?>
	</tbody>
</table>


<div class="modal fade" tabindex="-1" role="dialog" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
        <form method="post" action="<?php echo base_url('informasi/hapus')?>">
        <input type="text" name="id_hasil" id="id_delete" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Delete</button>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
	function hapus(id){
		$('#modal_delete').modal('show');
		$('#id_delete').val(id);
	}
</script>

<pre>
	<?php print_r($dt_pertandingan) ?>
</pre>