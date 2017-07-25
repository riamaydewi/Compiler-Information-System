<?php
$id_role=$this->session->userdata('id_role');

    $id_user = $this->session->userdata('id_user');
    $cek_dashboard = $this->M_dashboard->cek_dashboard($id_user);
        
    $halaman= $cek_dashboard->row()->nama_role;
?>

<!--Left navigation section start-->
<section id="left-navigation">
<!--Left navigation user details start-->
<div class="user-image">
    <img src="assets/images/userimage/80.jpg" alt=""/>
    <div class="user-online-status"><span class="user-status is-online  "></span> </div>
</div>

<!--Left navigation user details end-->

<!--Phone Navigation Menu icon start-->
<div class="phone-nav-box visible-xs">
    <a class="phone-logo" href="index-2.html" title="">
        <h1>Fickle</h1>
    </a>
    <a class="phone-nav-control" href="javascript:void(0)">
        <span class="fa fa-bars"></span>
    </a>
    
</div>
<!--Phone Navigation Menu icon start-->

<!--Left navigation start-->
<ul class="mainNav">
<li>
    <a href="<?php echo base_url('dashboard')?>">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
</li>
<li>
    <a href="#">
        <i class="fa fa-list-alt"></i> <span>Room Divisi</span> 
    </a>
    <ul>
        <li><a href="<?php echo base_url('pemasukan')?>">Laporan Pemasukan</a></li>
        <li><a href="<?php echo base_url('pengeluaran')?>">Laporan Pengeluaran</a></li>
		<li><a href="<?php echo base_url('keuangan')?>">Laporan Keuangan</a></li>
        <?php if ($id_role == '1'){?>
            <li><a href="<?php echo base_url('laporan_divisi')?>">Laporan Divisi</a></li>
        <?php } ?>
    </ul>
</li>

<?php if ($id_role == '4'){?>
<li>
<a href="<?php echo base_url('informasi')?>">
        <i class="fa fa-edit"></i> <span>Edit Informasi</span>
    </a>
</li>
<?php } ?>

<?php if ($id_role == '2'){?>
<li>
<a href="<?php echo base_url('team')?>">
        <i class="fa fa-user"></i> <span>Team</span>
    </a>
</li>
<?php } ?>

<?php if ($id_role == '1'){?>
<li>
<a href="<?php echo base_url('panitia')?>">
        <i class="fa fa-user"></i> <span>Panitia</span>
    </a>
</li>
<li>
<a href="<?php echo base_url('akun')?>">
        <i class="glyphicon glyphicon-phone"></i> <span>Akun</span>
    </a>
</li>

<?php } ?>


</ul>
<!--Left navigation end-->
</section>
<!--Left navigation section end-->

<!--Page main section start-->
<section id="min-wrapper">
    <div id="main-content">
        <div class="container-fluid">
 