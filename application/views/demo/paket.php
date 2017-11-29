<?php
$this->load->view('demo/header');?>
  <div class="jumbotron">
	<div class="container">
    <h3>Bootstrap Tutorial</h3>      
  </div>
  </div>
<main role="main" class="container">
<style>
/* Custom page CSS PAKET
-------------------------------------------------- */
/* Not required for template or sticky footer method. */
.thumbnail {
    position: relative;
    padding: 0px;
    margin-bottom: 20px;
}

.thumbnail > h4 {
    padding: 7px 10px 0px 10px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    margin-bottom: 0px;
}
.thumbnail h4 .info {
    position: absolute;
    top: 0px;
    right: 0px;
    font-size: 0.6em;
    padding-left: 15px;
    border-top-right-radius: 3px;
    border-bottom-left-radius: 4px;
    border-radius: 0px;
    border-bottom-left-radius: 5px;
    cursor:  pointer;
}

.thumbnail h4 .info > span {
    margin-right: 10px;   
}

.thumbnail img {
    width: 100%;
}
.thumbnail a.btn {
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
}
.text {
  display: block;
  height: 388px;
  overflow: hidden;
  white-space: pre-wrap;
  text-overflow: ellipsis;
}
img {
    display: block;
    max-width: 100%;
    height: auto;
}
.panel-body {
    padding: 10px;
}
.btn{
	margin-top: 10px;
}
</style>
    <div class="row">
<?php
if(empty($array_emp)){ 
  echo "<h1>#404: Belum Ada Artikel Tentang About!!</h1>";
}else{
  foreach($array_emp as $d):
    echo '       <div class="col-sm-6 col-md-4">';
    echo '        <div class="thumbnail">';
    echo '            <h4>';
    echo             $d->judul;
    echo '            </h4>';
	echo '			<div class="panel-body text">';
    echo 	         $d->isi;
    echo '           </div>';
    echo '           <a href="'.base_url().'demo/detail/'. $d->id_artikel .'" class="btn btn-primary col-xs-12" role="button">Lihat Detail</a>';
    echo '           <div class="clearfix"></div>';
    echo '       </div>';
    echo '   </div>';
  endforeach;	
}
?>     
    </div>
<?php $this->load->view('demo/footer');?>