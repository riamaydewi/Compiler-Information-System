  <?php echo $this->session->flashdata('notif') ?>
<form method="post" action="<?php echo base_url('informasi/simpan_update') ?>">

<input type="hidden" name="id_hasil" value="<?php echo $dt_pertandingan->id_hasil?>">
<div class="form-group">
    <label for="exampleInputEmail1">Tanggal</label>
   
    <input type="text" name="tanggal" class="form-control dp" id="tanggal" placeholder="Tanggal" value="<?php echo $dt_pertandingan->tanggal?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Jam</label>
    <input type="text" name="jam" class="form-control" id="jam" placeholder="Jam" value="<?php echo $dt_pertandingan->jam?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Jam</label>
    <input type="text" name="tempat" class="form-control" id="tempat" placeholder="tempat" value="<?php echo $dt_pertandingan->tempat?>">
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Team_A</label>
    <select name="team_1" class="form-control" id="team_a">
    <option value=""> Pilih Team_A </option>
      <?php foreach ($dt_team as $t ) { ?>
       <option value="<?php echo $t->team ?>"><?php echo $t->team ?></option>
      <?php } ?>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Team_B</label>
    <select name="team_2" class="form-control" id="team_b">
    <option value=""> Pilih Team_B </option>
      <?php foreach ($dt_team as $t ) { ?>
       <option value="<?php echo $t->team ?>"><?php echo $t->team ?></option>
      <?php } ?>
    </select>
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Score_A</label>
    <select name="score_1" class="form-control" id="score_a">
    <option value=""> Pilih Score_A </option>
      <?php foreach ($dt_score as $s ) { ?>
       <option value="<?php echo $s->score ?>"><?php echo $s->score ?></option>
      <?php } ?>
    </select>
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Score_B</label>
    <select name="score_2" class="form-control" id="score_b">
    <option value=""> Pilih Score_B </option>
      <?php foreach ($dt_score as $s ) { ?>
       <option value="<?php echo $s->score ?>"><?php echo $s->score ?></option>
      <?php } ?>
    </select>
  </div>



  <div class="form-group">
    <label for="exampleInputEmail1">Hasil</label>
    <input type="text" name="hasil" class="form-control" id="hasil" placeholder="Hasil" value="<?php echo $dt_pertandingan->hasil?>">
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Pertandingan</label>
    <select name="pertandingan" class="form-control" id="pertandingan_a">
    <option value=""> Pilih Pertandingan </option>
      <?php foreach ($dt_namapertandingan as $n ) { ?>
       <option value="<?php echo $n->pertandingan ?>"><?php echo $n->pertandingan ?></option>
      <?php } ?>
    </select>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>


<script >
  $(function(){
    $('#team_a').val('<?php echo $dt_pertandingan->team_1 ?>');
    $('#team_b').val('<?php echo $dt_pertandingan->team_2 ?>');
   });
     $(function(){
    
     $('#pertandingan_a').val('<?php echo $dt_pertandingan->pertandingan ?>');
   });

</script>
