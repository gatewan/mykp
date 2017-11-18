<?php $this->load->view('admin/header'); ?>

<link href="<?=base_url()?>assets/css/upload.css" rel="stylesheet">
<script type="text/javascript" src="<?=base_url()?>assets/js/upload.js"></script>
<div class="container">

      <div class="panel panel-default">
        <div class="panel-heading"><strong>Upload Files</strong> <small>Bootstrap files upload</small></div>
        <div class="panel-body">

          <!-- Standar Form -->
          <h4>Select files from your computer</h4>
<?php echo $error;?>
<?php echo form_open_multipart('admin/do_upload');?>
            <div class="form-inline">
              <div class="form-group">
                <input type="file" name="userfile" id="js-upload-files" multiple>
              </div>
              <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
            </div>
          </form>

          <!-- Drop Zone -->
          <h4>Or drag and drop files below</h4>
          <div class="upload-drop-zone" id="drop-zone">
  
<!-- Show All Image in uploads -->
<?php 
$dir = './uploads/thumbs'; // Your Path to folder
$map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */

foreach ($map as $k)
	  {?>
     <img src="<?php echo base_url($dir)."/".$k;?>" alt="">
<?php }
          
?> 
</div>
          </div>

        </div>
      </div>
    </div> <!-- /container -->
