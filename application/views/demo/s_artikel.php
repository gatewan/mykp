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
img{
	 max-width: 820px;
}
</style>
<?php echo br(3);?> 
<!-- Begin page content -->
<?php
if(empty($isi)){ 
  echo "<center><h1>#404: Belum Ada Artikel Tentang About!!</h1></center>";
}else{
  echo "<div class='container' id='artikel' style='margin-bottom:100px; width:850px;'>";
  echo heading($jud,1);
  echo $isi;
  echo br(1);
  echo "<ul class='nav nav-pills' role='tablist'>";
  echo '<li><a href="#" style="padding:0px;"><span class="label label-info">'.$cat.'</span></a></li>';
  echo '<li><a href="#" style="padding:0px;"><span class="label label-default">Date: '.$wkt.'</span></a></li>';
  echo "</ul>";
  echo br(3);
  echo	'<div id="disqus_thread"></div>';
  echo "</div>";
}
?>
<!--DISQUS-->

<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
var disqus_developer = 1; // this would set it to developer mode
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://mykp-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                             
<!--Disqusend-->
<?php $this->load->view('demo/footer'); ?>