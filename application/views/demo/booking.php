<?php
$this->load->view('demo/header');?>
  <div class="jumbotron">
	<div class="container">
    <h3>Bootstrap Tutorial</h3>      
  </div>
  </div>
<div class="container">
<form>
 <div class="row">
   <div class="col-xs-5">
 <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number">
  </div>
  </div>
  
 <div class="col-xs-5">
   <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Pilihan Paket</label>
 <select class="form-control">
  <option>Paket 1</option>
  <option>Paket 2</option>
  <option>Paket 3</option>
</select>
  </div>  
 </div> 
  </div>

  <div class="row"> 
<div class="container">
    <div class="row">
        <div class='col-sm-5'>
            <div class="form-group">
			 <label for="exampleInputEmail1">Tentukan Tanggal</label>
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
   <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </div>
</div>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php
$this->load->view('demo/footer'); ?>