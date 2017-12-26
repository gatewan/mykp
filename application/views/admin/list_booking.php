<?php $this->load->view('admin/header'); ?>
<style>
#myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 2px;
    z-index: 99;
    border: solid;
    border-style: outset;
    background-color: #0fb312;
    color: white;
    cursor: pointer;
    padding: 7px;
    border-radius: 9px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<div class="container">
<div class="panel panel-default">
<?=$this->session->flashdata('pesan')?>
<div class="panel-heading"><strong>Panel Artikel</strong> <small>Selamat menulis</small></div>
<div class="panel-body">
<?php
$template = array(
        'table_open'            => '<table border="1" cellpadding="4" cellspacing="0" class="table table-bordered table table-hover">',
        'table_close'           => '</table>'
);
$this->table->set_template($template);

$this->table->set_heading(
'ID.',
'Nama',
'No. Telp/HP',
'Tanggal & Waktu',
'Email',
'ID. Paket',
'Invoice',
'Konfirmasi',
'Hapus'
);

if(empty($query)){ //jika data kosong kita tampilkan pesan
	echo "
	    <tr>
        <td colspan='3'>Data tidak ada</td>
		</tr>	
	";
}else{
	foreach($query as $rowdata): //-- menampilkan data dari query dengan looping
	//membuat status tombol moderasi
	$sts = $rowdata->status;
	$indkator="btn btn-warning btn-sm glyphicon glyphicon-warning-sign";
	if($sts == NULL){
	$sts="Pending";
	$indkator;	
	}else{
	$sts="Approved";
	$indkator="btn btn-success btn-sm glyphicon glyphicon-ok";
	}
	//end_status tombol
	$this->table->add_row(
    $rowdata->id_booking,
	$rowdata->nm_user,
	$rowdata->cp_user,
	$rowdata->tgl_booking,
	$rowdata->email,
	$rowdata->paket,
	'<a href="'.base_url().'admin/invoice/'. $rowdata->id_booking .'" class="btn btn-info btn-sm" target="_blank"><i class="glyphicon glyphicon-print"></i></a>',
	'<div id="myDiv"><a href="'.base_url().'admin/approve/'. $rowdata->id_booking .'" class="'.$indkator.'"> '.$sts.'</a></div>',
    '<a href="'.base_url().'admin/cencel/'. $rowdata->id_booking .'" class="btn btn-danger btn-sm" onclick="return confirm("Anda Yakin menghapus data ini?")"><i class="glyphicon glyphicon-trash"></i></a>'
	);
	endforeach;	
	echo $this->table->generate();
}

?>

</div>
</div>
</div>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

</script>
</body>