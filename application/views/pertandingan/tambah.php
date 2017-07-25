<?php echo $this->session->flashdata('notif') ?>

<form method="post" action="<?php echo base_url('informasi/simpan') ?>">
<div class="form-group">
    <label for="exampleInputEmail1">Tanggal</label>
    <input type="text" name="tanggal" class="form-control dp" id="exampleInputEmail1" placeholder="Tanggal">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Jam</label>
    <input type="text" name="jam" class="form-control" id="exampleInputEmail1" placeholder="Jam">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Tempat</label>
    <input type="text" name="tempat" class="form-control" id="exampleInputEmail1" placeholder="Tempat">
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Team_A</label>
    <select name="team_1" class="form-control">
    <option value=""> Pilih Team </option>
      <?php foreach ($dt_team as $t ) { ?>
       <option value="<?php echo $t->team ?>"><?php echo $t->team ?></option>
      <?php } ?>
    </select>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Team_B</label>
    <select name="team_2" class="form-control">
    <option value=""> Pilih Team </option>
      <?php foreach ($dt_team as $t ) { ?>
       <option value="<?php echo $t->team ?>"><?php echo $t->team ?></option>
      <?php } ?>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Score_A</label>
    <input type="text" name="score_1" class="form-control" id="exampleInputEmail1" placeholder="Score Team A">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Score_B</label>
    <input type="text" name="score_2" class="form-control" id="exampleInputEmail1" placeholder="Score Team B">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Hasil</label>
    <input type="text" name="hasil" class="form-control" id="exampleInputEmail1" placeholder="Hasil">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Pertandingan</label>
    <select name="pertandingan" class="form-control">
    <option value=""> Pilih Pertandingan </option>
      <?php foreach ($dt_namapertandingan as $n ) { ?>
       <option value="<?php echo $n->pertandingan ?>"><?php echo $n->pertandingan ?></option>
      <?php } ?>
    </select>
  </div>


  <button type="submit" class="btn btn-default">Submit</button>
</form>