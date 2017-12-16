<?php $this->load->view('admin/header'); ?>
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
  <form class="form-horizontal" role="form" action="<?=base_url()?>admin/tbh_hrg" method="POST">
    <fieldset>
      <legend>Pengaturan Harga</legend>
	  <?=$this->session->flashdata('pesan')?>
<div class="col-md-6">
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">Nama Paket</label>
        <div class="col-sm-9">
   <input type="text" class="form-control" name="nm_paket" placeholder="Nama Paket">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">Harga Paket</label>
        <div class="col-sm-9">
    <div class="input-group">
      <div class="input-group-addon">Rp.</div>
      <input type="text" class="form-control" name="hrg_paket" placeholder="Nominal">
    </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="expiry-month">ID Paket</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">
<?php
//DIY build validation options dropdown (make it made simple original by wawan beneran)
$a='';$b='';$c='';$d='';$e='';$f='';$g='';$h='';$i='';$j='';
foreach($list as $x):
	if ($x->id_paket == 1) 	{$a=1;}
	if ($x->id_paket == 2) 	{$b=2;}
	if ($x->id_paket == 3) 	{$c=3;}
	if ($x->id_paket == 4) 	{$d=4;}
	if ($x->id_paket == 5) 	{$e=5;}
	if ($x->id_paket == 6) 	{$f=6;}
	if ($x->id_paket == 7) 	{$g=7;}
	if ($x->id_paket == 8) 	{$h=8;}
	if ($x->id_paket == 9) 	{$i=9;}
	if ($x->id_paket == 10)	{$j=10;}
endforeach;	
?>	
              <select class="form-control col-sm-2" name="id_paket" id="headNo">
                <option disabled="disabled" selected="selected">ID</option>	
                <option value="1" <?php if ($a == 1) {echo "disabled='disabled'";}?>>1</option>
                <option value="2" <?php if ($b == 2) {echo "disabled='disabled'";}?>>2</option>
                <option value="3" <?php if ($c == 3) {echo "disabled='disabled'";}?>>3</option>
                <option value="4" <?php if ($d == 4) {echo "disabled='disabled'";}?>>4</option>
                <option value="5" <?php if ($e == 5) {echo "disabled='disabled'";}?>>5</option>
                <option value="6" <?php if ($f == 6) {echo "disabled='disabled'";}?>>6</option>
                <option value="7" <?php if ($g == 7) {echo "disabled='disabled'";}?>>7</option>
                <option value="8" <?php if ($h == 8) {echo "disabled='disabled'";}?>>8</option>
                <option value="9" <?php if ($i == 9) {echo "disabled='disabled'";}?>>9</option>
                <option value="10" <?php if ($j == 10) {echo "disabled='disabled'";}?>>10</option>
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
<?php
$template = array(
        'table_open'            => '<table border="1" cellpadding="4" cellspacing="0" class="table table-bordered table table-hover" id="myTable">',
		'table_close'           => '</table>'
);
$this->table->set_template($template);

$this->table->set_heading(
'ID.',
'Nama Paket',
'Harga Paket',
'Edit',
'Hapus'
);

if(empty($list)){ //jika data kosong kita tampilkan pesan
	echo "
	    <tr>
        <td colspan='3'>Data tidak ada</td>
		</tr>	
	";
}else{
	foreach($list as $rowdata): //-- menampilkan data dari query dengan looping
	$this->table->add_row(
    $rowdata->id_paket,
	$rowdata->nm_paket,
	$rowdata->harga,
	'<a href="'.base_url().'admin/edit_hrg/'. $rowdata->id_paket .'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>',
    '<a href="'.base_url().'admin/del_hrg/'. $rowdata->id_paket .'" class="btn btn-danger btn-sm" onclick="return confirm("Anda Yakin menghapus data ini?")"><i class="glyphicon glyphicon-trash"></i></a>'
	);
	endforeach;	
	echo $this->table->generate();
}
?>
	</div>
	</fieldset>
  </form>
</div>
</body>


