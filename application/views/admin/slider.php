<?php $this->load->view('admin/header'); ?>

<link href="<?=base_url()?>assets/css/upload.css" rel="stylesheet">
<script type="text/javascript" src="<?=base_url()?>assets/js/upload.js"></script>
<div class="container">
      <div class="panel panel-default">
        <div class="panel-heading"><strong>Upload Files</strong> <small>mykp files upload</small></div>
        <div class="panel-body">
		<?=$this->session->flashdata('pesan')?>
          <!-- Standar Form -->
          <h4>Select files from your computer</h4>
<!--?php echo $error;? DISABLE ERROR MESSAGE-->
<?php echo form_open_multipart('admin/do_upload');?>
            <div class="form-inline">
              <div class="form-group">
                <input type="file" name="userfile" id="js-upload-files" multiple>
              </div>
			  <div class="form-group">
                <input type="text" name="textket" class="form-control" id="js-upload-files" placeholder="Keterangan Gambar" style="width:500px; margin-right: 20px;">
              </div>
              <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload Gambar</button>
            </div>
          </form>

          <!-- Drop Zone -->
          <hr>
<?php
$template = array(
        'table_open'            => '<table border="1" cellpadding="4" cellspacing="0" class="table table-bordered table table-hover">',
        'table_close'           => '</table>'
);
$this->table->set_template($template);

$this->table->set_heading(
'ID',
'Keterangan File',
'Tipe File',
'Gambar File',
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
    $rowdata->id,
	$rowdata->ket_gbr,
	$rowdata->tipe_gbr,
	'<img src="'.base_url().'/uploads/thumbs/'.$rowdata->nm_gbr .'"></td>',
	'<a href="'.base_url().'admin/edit_gb/'. $rowdata->id .'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>',
    '<a href="'.base_url().'admin/hapus_gb/'. $rowdata->id .'" class="btn btn-danger btn-sm" onclick="return confirm("Anda Yakin menghapus data ini?")"><i class="glyphicon glyphicon-trash"></i></a>'
	);
	endforeach;	
	echo $this->table->generate();
}

?>
          </div>
        </div>
      </div>
    </div> <!-- /container -->

	