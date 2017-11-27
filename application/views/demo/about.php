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
if(empty($array_emp)){ 
  echo "<h1>#404: Belum Ada Artikel Tentang About!!</h1>";
}else{
  foreach($array_emp as $d):
  echo '<div>';
  echo '<h1>'.$d->judul.'</h1>';
  echo '</div>';
  echo '<p class="lead">';
  echo $d->isi;
  echo '</p>';
  endforeach;	
}
?>
</main>
<?php $this->load->view('demo/footer'); ?>