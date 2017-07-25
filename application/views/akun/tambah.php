<?php echo $this->session->flashdata('notif') ?>
<form method="post" action="<?php echo base_url('akun/simpan') ?>">

  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="text" name="password" class="form-control" id="exampleInputEmail1" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">ID Divisi</label>
    <select name="divisi" class="form-control">
    <option value=""> Daftar ID : 1(Inti) 2(Acara) 3(Dekorasi) 4(Pubdok) 5(Konsumsi)</option>
      <?php foreach ($dt_role as $r ) { ?>
       <option value="<?php echo $r->id_role ?>"><?php echo $r->id_role ?></option>
      <?php } ?>
    </select>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>