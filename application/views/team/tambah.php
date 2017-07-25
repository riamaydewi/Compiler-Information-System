<?php echo $this->session->flashdata('notif') ?>
<form method="post" action="<?php echo base_url('team/simpan') ?>">

  <div class="form-group">
    <label for="exampleInputEmail1">Team</label>
    <input type="text" name="team" class="form-control" id="exampleInputEmail1" placeholder="Nama Team">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>