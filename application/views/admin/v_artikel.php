<?php $this->load->view('admin/header'); ?>
<!-- include summernote css/js-->
<link href="<?=base_url()?>bower_components/summernote/dist/summernote.css" rel="stylesheet">
<script src="<?=base_url()?>bower_components/summernote/dist/summernote.js"></script>
<style>
#myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 2px;
    z-index: 99;
    border: solid;
    border-style: outset;
    background-color: #0fb312;
    color: white;
    cursor: pointer;
    padding: 7px;
    border-radius: 9px;
}

#myBtn:hover {
  background-color: #555;
}
textarea.sembunyi {
    border: none;
	background-color: #f5f5f5;
}
</style>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<div class="container">
<div class="panel panel-default">
<?=$this->session->flashdata('pesan')?>
<div class="panel-heading"><strong>Panel Artikel</strong> <small>Selamat menulis</small></div>
<div class="panel-body">
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
<textarea name="content" class="sembunyi" id="summernote"></textarea>
<script>
$(document).ready(function() {
var markupStr = $('#summernote').summernote('code');
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
<hr style="border: solid; border-bottom: 4px solid #e3e3e3;">
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

</div>
</div>
</div>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</body>