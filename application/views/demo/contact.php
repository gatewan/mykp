<?php
$this->load->view('demo/header'); ?>
  <div class="jumbotron" style="padding-bottom: 0px;">
  </div>
<style type="text/css">
input#counter {
    border: none;
    background-color: transparent;
    margin-left: 3px;
}
h4{
    margin-bottom: 7px;
}
.footer{
	bottom:0px;
}
</style>  
<div class="container">
<?=$this->session->flashdata('pesan')?>
    <div class="row" style="margin-top: 20px; margin-bottom: -15px;">
        <div class="col-md-8">
            <div class="well well-sm" style="height: 355px;">
                <form action="<?=base_url()?>admin/sendmail" method="POST">
                <div class="row" style="padding-top: 16px;">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input name="nama" type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="Service">General Customer Service</option>
                                <option value="Suggestions">Suggestions</option>
                                <option value="Product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea onkeyup="textCounter(this,'counter',500);" name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
							<input disabled  maxlength="3" size="3" value="500" id="counter">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
           <!-- <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend> -->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1977.5385245217421!2d110.19817735794159!3d-7.566578848635824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8c2fba5125e9%3A0x683c4bc19cab6d13!2sWisata+Tubing+Gending+Indah!5e0!3m2!1sid!2sid!4v1514761362972" width="360" height="355" frameborder="0" style="border:0" allowfullscreen></iframe>    

            </form>
        </div>
    </div>
<hr>
<center>
<?php
if(empty($array_emp)){ 
  echo "<h4>#404: Alamat belum tertera!!</h4>";
  echo "<h4>#405: Tidak Di ijinkan >1 alamat!!</h4>";
}else{
  foreach($array_emp as $d):
  echo $d->isi;
  endforeach;	
}
?>
</center>
</div>
<script>
function textCounter(field,field2,maxlimit)
{
 var countfield = document.getElementById(field2);
 if ( field.value.length > maxlimit ) {
  field.value = field.value.substring( 0, maxlimit );
  return false;
 } else {
  countfield.value = maxlimit - field.value.length;
 }
}
</script>

<?php $this->load->view('demo/footer'); ?>
