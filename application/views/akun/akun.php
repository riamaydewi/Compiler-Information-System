<h1>Data Akun</h1>


<?php echo $this->session->flashdata('notif') ?>
<a class="btn btn-sm btn-success" href="<?php echo base_url('akun/tambah')?>"> Tambah Data </a>
				
<br>
<table class="table table-bordered" >
	<thead>
	<th> Username </th>
	<th> Password </th>
	<th> ID Divisi </th>
	<th> Aksi</th>
	</thead>
	<tbody>
		<?php foreach ($dt_akun as $anggota){ ?>
			<tr>
				<td>
					<?php echo $anggota->username?>
				</td>
				<td>
					<?php echo $anggota->password?>
				</td>
				<td>
					<?php echo $anggota->id_role?>
				</td>
				<td>
					<a class="btn btn-sm btn-info" href="<?php echo base_url('akun/update/'.$anggota->id_user)?>"> Edit </a>
					<a class="btn btn-sm btn-danger" href="#" onclick="hapus('<?php echo $anggota->id_user?>')"> Delete </a>
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
        <form method="post" action="<?php echo base_url('akun/hapus')?>">
        <input type="text" name="id_user" id="id_delete" >
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
	<?php print_r($dt_akun) ?>
</pre>