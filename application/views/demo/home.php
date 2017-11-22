<?php
$this->load->view('demo/header'); 
?>
    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">

<!--LOOPING GAMBAR DI DATABASE BESERTA KETERANGANNYA-->
<?php
if(empty($array_emp)){ 
  echo "<h3>Belum Ada Gambarnya Coy!!</h3>";
}else{
  foreach($array_emp as $d):
	$upath=base_url().'uploads/'.$d->nm_gbr;
	$tag="'";
  echo '<div class="item">';
  echo '<div class="fill" style="background-image:url('.$tag.$upath.$tag.');"></div>';
  echo '<div class="carousel-caption">';
  echo '<h3>First Slide</h3>';
  echo '<p>'.$d->ket_gbr.'</p>';
  echo '</div>';
  echo '</div>';
  endforeach;	
}
?>
</div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
		
    <!-- Script to Activate the Carousel -->
    <script>
	$(".carousel .item").first().addClass("active");
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>