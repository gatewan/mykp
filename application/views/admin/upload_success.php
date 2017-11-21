<?php
$this->load->view('admin/header');
?>

<link href="<?=base_url()?>assets/css/upload.css" rel="stylesheet">
<div class="container">
      <div class="panel panel-default">
        <div class="panel-heading"><strong>Upload Files</strong> <small>Bootstrap files upload</small></div>
        <div class="panel-body">

          <!-- Standar Form -->
          <h4>Select files from your computer</h4>
<?php echo form_open_multipart('admin/do_upload');?>
            <div class="form-inline">
              <div class="form-group">
                <input type="file" name="userfile" id="js-upload-files" multiple>
              </div>
			  <div class="form-group">
                <input type="text" name="textket" class="form-control" id="js-upload-files" placeholder="Keterangan Gambar" style="width:500px; margin-right: 20px;">
              </div>
              <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
            </div>
          </form>

          <!-- Drop Zone -->
          <h4>Or drag and drop files below</h4>
<?php 
$src_img = $upload_data['full_path'];
$thumb = $upload_data['file_path'].'thumbs/'.$upload_data['file_name'];
echo thumb($src_img, 200, 100, $thumb); // outputs image_thumb.jpg 
?> 
          <div class="upload-drop-zone" id="drop-zone">

<!-- Show Last Image in uploads -->
<img src="<?=base_url()?>uploads/thumbs/<?=thumb($src_img, 200, 100, $thumb);?>">

		</div>

          <!-- Upload Finished -->
          <div class="js-upload-finished">
            <h3>Processed files</h3>
<div class="list-group-item list-group-item-success">
              <a href="#"class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>Status Upload :</a>
			  <ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>
</div>
          </div>
        </div>
<!-- Thumbnails -->
      </div>
    </div> <!-- /container -->
<script type="text/javascript" src="<?=base_url()?>assets/js/upload.js"></script>
