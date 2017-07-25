<?php echo $this->session->flashdata('notif') ?>
<form method="post" action="<?php echo base_url('panitia/simpan_update') ?>">

<input type="hidden" name="id_anggota" value="<?php echo $dt_anggota->id_anggota?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama" value="<?php echo $dt_anggota->nama_anggota?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Kelas</label>
    <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" placeholder="kelas" value="<?php echo $dt_anggota->kelas?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">No. HP</label>
    <input type="text" name="hp" class="form-control" id="exampleInputEmail1" placeholder="no. hp" value="<?php echo $dt_anggota->no_hp?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Divisi</label>
    <select name="nama_divisi" class="form-control" id="divisi">
      <option value="">Pilih Divisi</option>
      <?php foreach ($dt_role as $r) { ?>
        <option value="<?php echo $r->nama_role?>"><?php echo $r->nama_role ?></option>
      <?php } ?>
    </select>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>

<script >
  $(function(){
    $('#divisi').val('<?php echo $dt_anggota->nama_divisi ?>');
  });
</script>