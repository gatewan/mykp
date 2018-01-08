<?php
$this->load->view('demo/header'); ?>
<style>
p {
    margin: 0 0 10px;
    font-size: 17px;
	}
</style>
<div class="container">
<br />
<br />
<br />   
  </div>
  </div>
<!-- Begin page content -->
	<main role="main" class="container">
<div class="mt-3">
<?php
if(empty($isi)){ 
  echo "<h1>#404: Belum Ada Artikel Tentang About!!</h1><br />";
  echo "<h2>#405: Tidak Di ijinkan >1 Artikel Tentang About!!</h2>";
}else{
  foreach($isi as $d):
  echo "<div class='container' id='artikel' style='margin-bottom:100px; width:600px;'>";
  echo '<div>';
  echo '<h1>'.$d->judul.'</h1>';
  echo '</div>';
  echo '<p class="lead">';
  echo $d->isi;
  echo '</p>';
  echo br(1);
  echo "<ul class='nav nav-pills' role='tablist'>";
  echo '<li><a href="#" style="padding:0px;"><span class="label label-info">'.$d->label.'</span></a></li>';
  echo '<li><a href="#" style="padding:0px;"><span class="label label-default">Date: '.$d->waktu.'</span></a></li>';
  echo "</ul>";
  echo "</div>";
  endforeach;	
}
?>
</main>
<?php $this->load->view('demo/footer'); ?>