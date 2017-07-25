<h1>Daftar Panitia 1st Compiler</h1>
				
<br>
<table class="table table-bordered" >
	<thead>
	<th> Nama Anggota </th>
	<th> Kelas </th>
	<th> No. HP </th>
	<th> Divisi </th>
	</thead>
	<tbody>
		<?php foreach ($dt_anggota as $anggota){ ?>
			<tr>
				<td>
					<?php echo $anggota->nama_anggota?>
				</td>
				<td>
					<?php echo $anggota->kelas?>
				</td>
				<td>
					<?php echo $anggota->no_hp?>
				</td>
				<td>
					<?php echo $anggota->nama_divisi?>
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
        <form method="post" action="<?php echo base_url('panitia/hapus')?>">
        <input type="text" name="id_anggota" id="id_delete" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Delete</button>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
