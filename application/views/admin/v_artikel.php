<?php $this->load->view('admin/header'); ?>
<!-- include summernote css/js-->
<link href="<?=base_url()?>bower_components/summernote/dist/summernote.css" rel="stylesheet">
<script src="<?=base_url()?>bower_components/summernote/dist/summernote.js"></script>
<body>
<div class="container">
<div class="panel panel-default">
<?=$this->session->flashdata('pesan')?>
<div class="panel-heading"><strong>Panel Artikel</strong> <small>Selamat menulis</small></div>
<div class="panel-body">
<?php
$template = array(
        'table_open'            => '<table border="1" cellpadding="4" cellspacing="0" class="table table-bordered table table-hover">',
        'table_close'           => '</table>'
);
$this->table->set_template($template);

$this->table->set_heading(
'ID.',
'Judul',
'Label',
'Tanggal & Waktu',
'Detail',
'Edit',
'Hapus'
);

if(empty($query)){ //jika data kosong kita tampilkan pesan
	echo "
	    <tr>
        <td colspan='3'>Data tidak ada</td>
		</tr>	
	";
}else{
	foreach($query as $rowdata): //-- menampilkan data dari query dengan looping
	$this->table->add_row(
    $rowdata->id_artikel,
	$rowdata->judul,
	$rowdata->label,
	$rowdata->waktu,
	'<a href="'.base_url().'demo/detail/'. $rowdata->id_artikel .'" class="btn btn-warning btn-sm" target="_blank"><i class="glyphicon glyphicon-search"></i></a>',
	'<a href="'.base_url().'admin/form/edit/'. $rowdata->id_artikel .'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>',
    '<a href="'.base_url().'admin/hapus_artikel/'. $rowdata->id_artikel .'" class="btn btn-danger btn-sm" onclick="return confirm("Anda Yakin menghapus data ini?")"><i class="glyphicon glyphicon-trash"></i></a>'
	);
	endforeach;	
	echo $this->table->generate();
}

?>
<hr style="border: solid; border-bottom: 4px solid #e3e3e3;">
<div class="well">
<form action="<?=base_url()?>admin/form/aksi_add" method="POST">
<div class="form-group">
    <label for="exampleInputEmail1">Judul</label>
	<input name="title" type="text" class="form-control" placeholder="Judul?" />
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Label</label>
	<input name="category" type="text" class="form-control" placeholder="Label?" />
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Konten</label>
<textarea name="content" id="summernote"></textarea>
<script>
$(document).ready(function() {
 $('#summernote').summernote({
        placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 150
      });
});
</script>
  </div>
  <button type="submit" class="btn">Submit</button>
</form>
</div>
</div>
</div>
</div>
</body>