<?php $this->load->view('admin/header'); 
foreach($isi as $showdata):
   $id=$showdata->id_artikel;
   $jud=$showdata->judul;
   $cat=$showdata->label;
   $isi=$showdata->isi;
endforeach;
?>
<!-- include summernote css/js-->
<link href="<?=base_url()?>bower_components/summernote/dist/summernote.css" rel="stylesheet">
<script src="<?=base_url()?>bower_components/summernote/dist/summernote.js"></script>
<body>
<div class="container">
<div class="panel panel-default">
<?=$this->session->flashdata('pesan')?>
<div class="panel-heading"><strong>Panel Artikel</strong> <small>Selamat menulis</small></div>
<div class="panel-body">
  <center><h1><?=$title?></h1></center>
<hr style="border: solid; border-bottom: 4px solid #e3e3e3;">
<div class="well">
<form action="<?=base_url()?>admin/form/aksi_edit" method="POST">

<div class="form-group">
    <label for="exampleInputEmail1">ID</label>
	 <input type="text" name="ide" class="form-control" readonly="readonly" value="<?=$id?>" />
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Judul</label>
	<input name="title" type="text" class="form-control" value="<?=$jud?>" />
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Label</label>
	<input name="category" type="text" class="form-control" value="<?=$cat?>" />
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Konten</label>
<textarea name="content" id="summernote"><?=$isi?></textarea>
<script>
$(document).ready(function() {
$('#summernote').summernote({
		maximumImageFileSize: 1572864, // 1.5MB
        placeholder: 'Hallo gan!, selamat menulis...',
        tabsize: 2,
        height: 236
      });  
var markupStr = $('#summernote').summernote('code');
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