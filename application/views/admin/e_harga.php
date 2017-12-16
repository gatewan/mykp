<?php $this->load->view('admin/header'); 

foreach($old as $x):
	$id = $x->id_paket;
	$nm = $x->nm_paket;
	$hrg = $x->harga;
endforeach;

?>
<style>
#sidebar-wrapper,#wrapper {
    -webkit-transition: none;
    -moz-transition: none;
    -o-transition: none;
    transition: none;
}

</style>
<body>
<div class="container">
  <form class="form-horizontal" role="form" action="<?=base_url()?>admin/update_hrg" method="POST">
    <fieldset>
      <legend>Pengaturan Harga</legend>
	  <?=$this->session->flashdata('pesan')?>
<div class="col-md-6">
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">Nama Paket</label>
        <div class="col-sm-9">
   <input type="text" class="form-control" name="nm_paket" placeholder="Nama Paket" value="<?=$nm?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">Harga Paket</label>
        <div class="col-sm-9">
    <div class="input-group">
      <div class="input-group-addon">Rp.</div>
      <input type="text" class="form-control" name="hrg_paket" placeholder="Nominal" value="<?=$hrg?>">
    </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="expiry-month">ID Paket</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">
              <select class="form-control col-sm-2" name="id_paket">
                <option readonly="readonly" selected="selected"><?=$id?></option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
	  </div>
    <div class="col-md-6">
	Silakan edit...
	</div>
	</fieldset>
  </form>
</div>
</body>


