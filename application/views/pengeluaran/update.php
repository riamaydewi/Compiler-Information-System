<?php echo $this->session->flashdata('notif') ?>
<form method="post" action="<?php echo base_url('pengeluaran/simpan_update') ?>">
<div class="form-group">
     <input type="hidden" name="id_pengeluaran" value="<?php echo $dt_pengeluaran->id_pengeluaran?>">
    <label for="exampleInputEmail1">Tanggal</label>
    <input type="text" name="tanggal" class="form-control dp" id="exampleInputEmail1" placeholder="Tanggal" value="<?php echo $dt_pengeluaran->tanggal?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nama Anggota</label>
    <select name="nama_anggota" class="form-control" id="nama">
      <option value="">Pilih Nama</option>
      <?php foreach ($dt_anggota as $a) { ?>
        <option value="<?php echo $a->nama_anggota?>"><?php echo $a->nama_anggota ?></option>
      <?php } ?>
    </select>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Kriteria</label>
    <select name="kriteria_pengeluaran" class="form-control" id="kriteria">
    <option value=""> Pilih Kriteria </option>
      <?php foreach ($dt_kriteria as $k ) { ?>
       <option value="<?php echo $k->nama_pengeluaran ?>"><?php echo $k->nama_pengeluaran ?></option>
      <?php } ?>
    </select>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Keterangan</label>
    <textarea row="3" name="keterangan" class="form-control" id="exampleInputEmail1" placeholder="Keterangan"><?php echo $dt_pengeluaran->keterangan?></textarea>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Jumlah</label>
    <input type="text" name="jumlah" class="form-control" id="exampleInputEmail1" placeholder="Jumlah" value="<?php echo $dt_pengeluaran->jumlah ?>">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>

<script >
  $(function(){
    $('#kriteria').val('<?php echo $dt_pengeluaran->kriteria_pengeluaran ?>');
  });
  $(function(){
    $('#nama').val('<?php echo $dt_pengeluaran->nama_anggota ?>');
  });
</script>