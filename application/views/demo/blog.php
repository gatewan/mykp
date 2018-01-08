<?php
$this->load->view('demo/header');?>
    <!-- Custom CSS -->
<link href="<?=base_url()?>assets/css/blog-home.css" rel="stylesheet">

<style type="text/css">
img {
    display: block;
    max-width: 100%;
    height: auto;
}
.post {
    display: block;
    height: 625px;
    overflow: hidden;
    white-space: pre-wrap;
    text-overflow: ellipsis;
}
.btn-primary {
    margin-top: 20px;
	margin-bottom: 30px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
}
</style>
</head>

<body>
    <!-- Page Content -->
    <div class="container">
        <div class="row" style="margin-bottom: 60px;">
            <!-- Blog Entries Column -->
            <div class="col-md-8">
<?php
if(empty($array_emp)){ 
  echo "<h1>#404: Belum Ada Artikel Untuk Blog!!</h1>";
}else{
  foreach($array_emp as $d):
    echo '   <h2>';
    echo '        <a href="'.base_url().'demo/detail/'. $d->id_artikel .'">'.$d->judul.'</a>';
    echo '   </h2>';
    echo '	     <p><span class="glyphicon glyphicon-time"></span> Posted on '.$d->waktu.'</p>';
    echo '   <hr>';
    echo '      <div class="post"><p>'.$d->isi.'</p></div>';
    echo '      <a class="btn btn-primary" href="'.base_url().'demo/detail/'. $d->id_artikel .'">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>';
	echo '   <hr>';
  endforeach;	
}
?> 
                <!-- Pager -->
                <ul class="pager">
				<?php echo $this->pagination->create_links();?>
                </ul>
            </div>
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
					<form action="<?=base_url()?>demo/search" method="GET" class="form-inline">
                    <div class="input-group" style="width: 87%;">
                        <input name="cari" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
					</form>
                    <!-- /.input-group -->
                </div>
                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
<?php
if(empty($sidebar)){ 
  echo "<h1>#404: Belum Ada Label Untuk Blog!!</h1>";
}else{
  foreach($sidebar as $k):
    echo '   <li>';
    echo '        <a href="'.base_url().'demo/label/'. $k->label .'">'.$k->label.'</a>';
    echo '   </li>';
  endforeach;	
}
?> 
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Halo Petualang!</h4>
                    <p>Selamat datang di blog WTGI, tempat dimana kami akan berbagi cerita super seru seputar perjalanan kami dalam mengarungi sugai gending.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->
        <hr>
    </div>
    <!-- /.container -->
</body>
<?php
$this->load->view('demo/footer'); ?>