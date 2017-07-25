<?php echo $this->session->flashdata('notif') ?>
<form method="post" action="<?php echo base_url('pemasukan/simpan') ?>">
<div class="form-group">
    <label for="exampleInputEmail1">Tanggal</label>
    <input type="text" name="tanggal" class="form-control dp" id="exampleInputEmail1" placeholder="Tanggal">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nama Anggota</label>
    <select name="nama_anggota" class="form-control">
      <option value="">Pilih Nama</option>
      <?php foreach ($dt_anggota as $a) { ?>
        <option value="<?php echo $a->nama_anggota?>"><?php echo $a->nama_anggota ?></option>
      <?php } ?>
    </select>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Kriteria</label>
    <select name="kriteria_pemasukan" class="form-control">
    <option value=""> Pilih Kriteria </option>
      <?php foreach ($dt_kriteria as $k ) { ?>
       <option value="<?php echo $k->kriteria_pemasukan ?>"><?php echo $k->kriteria_pemasukan ?></option>
      <?php } ?>
    </select>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Keterangan</label>
    <textarea row="3" name="keterangan" class="form-control" id="exampleInputEmail1" placeholder="Keterangan"> </textarea>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Jumlah</label>
    <input type="text" name="jumlah" class="form-control" id="exampleInputEmail1" placeholder="Jumlah">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>