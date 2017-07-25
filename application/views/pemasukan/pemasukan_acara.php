<h1>Data Pemasukan</h1>
<?php echo $this->session->flashdata('notif') ?>
<a class="btn btn-sm btn-success" href="<?php echo base_url('pemasukan/tambah/')?>"> Tambah Data </a>
				
<br>

<table class="table table-bordered" >
	<thead>
	<th> Tanggal </th>
	<th> Nama Anggota </th>
	<th> Kriteria </th>
	<th> Keterangan </th>
	<th> Jumlah </th> 
	<th>Aksi</th>
	</thead>
	<tbody>
		<?php foreach ($dt_pemasukan as $pemasukan){ ?>
			<tr>
				<td>
					<?php echo $pemasukan->tanggal?>
				</td>
				<td>
					<?php echo $pemasukan->nama_anggota?>
				</td>
				<td>
					<?php echo $pemasukan->kriteria_pemasukan?>
				</td>
				<td>
					<?php echo $pemasukan->keterangan?>
				</td>
				<td>
					<?php echo $pemasukan->jumlah?>
				</td>

				<td>
					<a class="btn btn-sm btn-info" href="<?php echo base_url('pemasukan/update/'.$pemasukan->id_pemasukan)?>"> Edit </a>
					<a class="btn btn-sm btn-danger" href="#" onclick="hapus('<?php echo $pemasukan->id_pemasukan?>')"> Delete </a>
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
        <form method="post" action="<?php echo base_url('pemasukan/hapus')?>">
        <input type="text" name="id_pemasukan" id="id_delete" >
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

