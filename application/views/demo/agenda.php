<?php
$this->load->view('demo/header');?>
<!-- Custon OWN CSS -->
	<link href="<?=base_url()?>assets/css/fullcalendar.css" rel="stylesheet">
<div class="container">
<br />
<br />
<br />
<h2>Agenda</h2> 
    <div class="alert alert-warning">
      <p>
        This agenda viewer will let you see multiple events cleanly!
    </p>
	   </div>

    <hr />
    <div class="agenda" style="margin-bottom: 70px;">
        <div class="table-responsive">
            <table class="table table-condensed table-bordered">
                <thead>
                    <tr>
                        <th>Hari & Tanggal</th>
                        <th>Waktu</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Single event in a single day -->
<?php
if(empty($query)){ 
  echo "<h1>#404: Agenda Kosong...</h1>";
}else{
  foreach($query as $d):
  $tgl = $d->tgl_booking;
  ?>
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth"><?=substr($tgl,0,2)?></div>
                            <div class="dayofweek"><?=substr($tgl,18,7)?></div>
                            <div class="shortdate text-muted"><?=substr($tgl,3,7)?></div>
                        </td>
                        <td class="agenda-time">
                            <?=substr($tgl,11,5)?>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                <i class="glyphicon glyphicon-user text-muted" title="Repeating event"></i> 
                                <?=$d->nm_user?>
                            </div>
                        </td>
                    </tr>
<?php  endforeach;	
}
?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
$this->load->view('demo/footer'); ?>