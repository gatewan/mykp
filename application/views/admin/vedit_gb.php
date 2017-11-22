<?php
$this->load->view('admin/header');
//var_dump ($isi);
   $id=$isi->id;
   $nm=$isi->nm_gbr;
   $ket=$isi->ket_gbr;
?>
<style>
input#disabledInput {
    width: 100px;
    margin-right: 20px;
}
</style>
<link href="<?=base_url()?>assets/css/upload.css" rel="stylesheet">
<div class="container">
      <div class="panel panel-default">
        <div class="panel-heading"><strong>Upload Files</strong> <small>Bootstrap files upload</small></div>
        <div class="panel-body">

          <!-- Standar Form -->
          <h4>Select files from your computer</h4>
<?php echo form_open_multipart('admin/update_gb');?>
            <div class="form-inline">
              <div class="input-group">
			  <div class="input-group-addon">ID : </div>
			  <input type="text" name="idgbr" class="form-control" readonly="readonly" value="<?=$id?>">
              </div>
			  <div class="form-group">
                <input type="text" name="textket" class="form-control" id="js-upload-files" placeholder="Keterangan Gambar" style="width:500px; margin-right: 20px;" value="<?=$ket?>">
              </div>
              <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Update Keterangan</button>
            </div>
          </form>

          <!-- Drop Zone -->
          <h4>Or drag and drop files below</h4>

          <div class="upload-drop-zone" id="drop-zone">

<!-- Show Last Image in uploads -->
<img src="<?=base_url()?>uploads/thumbs/<?=$nm?>">

		</div>

          <!-- Upload Finished -->
        </div>
<!-- Thumbnails -->
      </div>
</div> <!-- /container -->
<script type="text/javascript" src="<?=base_url()?>assets/js/upload.js"></script>
