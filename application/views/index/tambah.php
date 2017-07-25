<?php echo $this->session->flashdata('notif') ?>
<form method="post" action="<?php echo base_url('panitia/simpan') ?>">

  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Kelas</label>
    <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" placeholder="kelas">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">No. HP</label>
    <input type="text" name="hp" class="form-control" id="exampleInputEmail1" placeholder="no. hp">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Divisi</label>
    <select name="nama_divisi" class="form-control">
      <option value="">Pilih Divisi</option>
      <?php foreach ($dt_role as $r) { ?>
        <option value="<?php echo $r->nama_role?>"><?php echo $r->nama_role ?></option>
      <?php } ?>
    </select>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>