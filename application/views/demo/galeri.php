<?php
$this->load->view('demo/header');?>
<script type="text/javascript" src="<?=base_url()?>bower_components/instafeed.js/instafeed.min.js"></script>
<style type="text/css">
div#instafeed-gallery-feed {
    width: 1060px;
	margin-left: 40px;
}
@import url('https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i');
body {
  font-family: 'Lato', "Helvetica", Arial, sans-serif;
}

/* remove bootstrap gutter*/
.row.no-gutter {
  margin-left: 0;
  margin-right: 0;
}

.row.no-gutter [class*='col-']:not(:first-child),
.row.no-gutter [class*='col-']:not(:last-child) {
  padding-right: 0;
  padding-left: 0;
}


/* the good stuff */
body {
}

.img-featured-container {
  overflow: hidden;
  position: relative;
}

.img-featured-container img {
  width: 100%;
/*   padding: 10px; */
}

.img-featured-container .img-backdrop {
  background: linear-gradient(135deg, rgba(38, 163, 255, 0.85), rgba(83, 201, 179, 0.85));
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  position: absolute;
  z-index: 1;
  opacity: 0;
  transition: all 0.3s ease;
}

.img-featured-container:hover > .img-backdrop {
  opacity: 1;
}

/* center text horizontally and vertically on image hover */
.img-featured-container .description-container {
  color: #fff;
  font-size: 16px;
  line-height: 1.2;
  padding: 0 30px;
  text-align: center;
  line-height: 20px;
  width: 100%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  transform-style: preserve-3d;
  z-index: 2;
  opacity: 0;
  transition: all .2s ease;
}

.img-featured-container .description-container .fa-instagram {
  font-size: 40px;
}

.img-featured-container .description-container p {
  font-weight: 300;
  margin-bottom: 0;
}

.img-featured-container:hover .description-container {
  opacity: 1;
}

.img-featured-container .description-container .caption {
  display: none;
  margin-bottom: 10px;
}

.img-featured-container .description-container .likes,
.img-featured-container .description-container .comments {
  margin: 0 5px;
}

/* load more button */
#btn-instafeed-load {
  color: #fff;
  background: #26a3ff;
  font-size: 16px;
  margin: 20px auto;
  padding: 8px 40px;
  display: block;
  border: none;
}

/* media queries  */
@media screen and (min-width:768px) {
  .img-featured-container .description-container .caption {
    display: block;
  }
}
</style>
<div class="container">
<?=br(3)?>
<div id="instafeed-gallery-feed" class="gallery row no-gutter">
</div>
<button id="btn-instafeed-load" class="btn">Load more</button>

<script type="text/javascript">
var galleryFeed = new Instafeed({
  get: 'user',
  userId: 'YOUR_ID',
  accessToken: "YOUR_TOKEN",
  //resolution: "standard_resolution",
  useHttp: "true",
  limit: '14',
  //template: '<div class="col-md-4"><a href="{{image}}"><div class="img-featured-container"><div class="img-backdrop"></div><div class="description-container"><p class="caption">{{caption}}</p><span class="likes"><i class="icon ion-heart"></i> {{likes}}</span><span class="comments"><i class="icon ion-chatbubble"></i> {{comments}}</span></div><img src="{{image}}" class="img-responsive"></div></a></div>',
  target: "instafeed-gallery-feed",
  after: function() {
    // disable button if no more results to load
    if (!this.hasNext()) {
      btnInstafeedLoad.setAttribute('disabled', 'disabled');
    }
  },
});
galleryFeed.run();

var btnInstafeedLoad = document.getElementById("btn-instafeed-load");
btnInstafeedLoad.addEventListener("click", function() {
  galleryFeed.next()
});	
</script>
</div>
    <hr />
<?php
$this->load->view('demo/footer'); ?>