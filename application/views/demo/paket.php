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
    padding: 7px 5px 0px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
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
</style>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    Post Thumbnail List
                </h4>
                <img src="https://www.w3schools.com/w3images/lights.jpg" alt="...">
				<div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
                </div>
                <a href="http://bootsnipp.com/snippets/featured/post-thumbnail-list" class="btn btn-primary col-xs-12" role="button">View Snippet</a>
                <div class="clearfix"></div>
            </div>
        </div>
        
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    Colourful Tabbed Slider Carousel
                </h4>
                <img src="https://www.w3schools.com/w3images/nature.jpg" alt="...">
				<div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
                </div>
                <a href="http://bootsnipp.com/snippets/featured/colourful-tabbed-slider-carousel" class="btn btn-primary col-xs-12" role="button">View Snippet</a>
                <div class="clearfix"></div>
            </div>
        </div>
        
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    Portfolio using Panels
                </h4>
                <img src="https://www.w3schools.com/w3images/fjords.jpg" alt="...">
				<div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
                </div>
                <a href="http://bootsnipp.com/snippets/featured/portfolio-using-panels" class="btn btn-primary col-xs-12" role="button">View Snippet</a>
                <div class="clearfix"></div>
            </div>
        </div>
        
    </div>
<?php $this->load->view('demo/footer');?>