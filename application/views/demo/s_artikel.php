<?php
$this->load->view('demo/header'); 
foreach($isi as $showdata):
   $id=$showdata->id_artikel;
   $jud=$showdata->judul;
   $cat=$showdata->label;
   $isi=$showdata->isi;
   $wkt=$showdata->waktu;
endforeach;
?>
<style>
p {
    margin: 0 0 10px;
    font-size: 17px;
}
</style>
<?php echo br(3);?> 
<!-- Begin page content -->
<?php
if(empty($isi)){ 
  echo "<center><h1>#404: Belum Ada Artikel Tentang About!!</h1></center>";
}else{
  echo "<div class='container'>";
  echo heading($jud,1);
  echo $isi;
  echo br(1);
  echo "<ul class='nav nav-pills' role='tablist'>";
  echo '<li><a href="#" style="padding:0px;"><span class="label label-info">'.$cat.'</span></a></li>';
  echo '<li><a href="#" style="padding:0px;"><span class="label label-default">Date: '.$wkt.'</span></a></li>';
  echo "</ul>";
  echo "</div>";
}
?>

<?php $this->load->view('demo/footer'); ?>