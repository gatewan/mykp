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
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>
            </div>
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>
                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
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