<?php
$this->load->view('demo/header'); ?>
<style>
p {
    margin: 0 0 10px;
    font-size: 17px;
	}
.footer{
	bottom:0px;
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
if(empty($array_emp)){ 
  echo "<h1>#404: Belum Ada Artikel Tentang About!!</h1><br />";
  echo "<h2>#405: Tidak Di ijinkan >1 Artikel Tentang About!!</h2>";
}else{
  foreach($array_emp as $d):
  echo "<div class='container' id='artikel' style='margin-bottom:100px; width:1000px;'>";
  echo '<div>';
  echo '<h1>'.$d->judul.'</h1>';
  echo '</div>';
  echo '<p class="lead">';
  echo $d->isi;
  echo '</p>';
  echo "</div>";  
  endforeach;	
}
?>
</main>
<?php $this->load->view('demo/footer'); ?>