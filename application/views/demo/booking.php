<?php
$this->load->view('demo/header');?>
<style>
.footer{
	bottom:0px;
}
</style>
  <div class="jumbotron" style="margin-bottom: 70px;">
	<div class="container">
    <h3>Ayo buruan, jangan sampai ketinggalan!</h3>      
  </div>
  </div>
<div class="container">
<?=$this->session->flashdata('pesan')?>
<form action="<?=base_url()?>demo/form/aksi_add" method="POST">
 <div class="row">
   <div class="col-xs-5">
 <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" name="namanya" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input type="text" name="no_hpnya" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number">
  </div>
  <div class="form-group">
			 <label for="exampleInputEmail1">Tentukan Tanggal & Waktu</label>
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' name="tglnya" class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
  </div>
  </div>
  
 <div class="col-xs-5">
   <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="emailnya" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Pilihan Paket</label>
 <select name="paketnya" class="form-control">
 <?php foreach($list as $x):?>
  <option value="<?=$x->id_paket?>"><?=$x->nm_paket?></option>
 <?php endforeach;?>	
</select>
  </div>  
  <div class="form-group">
  <label for="exampleInputEmail1">Jumlah Peserta</label>
 <input type="text" name="jmlpeserta" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Angka">
  </div>  
 </div>
 <div class="lupa" style="margin-top: 105px;">
<a href="http://localhost/mykp/demo/paket" target="blank">Detail Paket</a>
</div>
  </div>
  
<div class="container">
    <div class="row">
   <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker(
				{
					format: 'DD-MM-YYYY HH:mm, dddd'
				}
				);
            });
        </script>
    </div>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php
$this->load->view('demo/footer'); ?>