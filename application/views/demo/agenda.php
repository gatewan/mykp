<?php
$this->load->view('demo/header');?>
<!-- Custon OWN CSS -->
	<link href="<?=base_url()?>assets/css/fullcalendar.css" rel="stylesheet">
<div class="container">
<br />
<br />
<br />
<h2>Agenda</h2>
    <p class="lead">
        This agenda viewer will let you see multiple events cleanly!
    </p>
    
    <div class="alert alert-warning">
        <h4>Mobile Support</h4>
        <p>In order to get the lines between cells looking their best without any JavaScript, I had to use tables for this design. While this could be done in ".row", doing so will cause issues when displaying the vertical borders between cells, which is a compromise I wasn't willing to make this time.'</p>
    </div>

    <hr />

    <div class="agenda">
        <div class="table-responsive">
            <table class="table table-condensed table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Event</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Single event in a single day -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">26</div>
                            <div class="dayofweek">Saturday</div>
                            <div class="shortdate text-muted">July, 2014</div>
                        </td>
                        <td class="agenda-time">
                            5:30 AM
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                <i class="glyphicon glyphicon-repeat text-muted" title="Repeating event"></i> 
                                Fishing
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Multiple events in a single day (note the rowspan) -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="3">
                            <div class="dayofmonth">24</div>
                            <div class="dayofweek">Thursday</div>
                            <div class="shortdate text-muted">July, 2014</div>
                        </td>
                        <td class="agenda-time">
                            8:00 - 9:00 AM 
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                Doctor's Appointment
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="agenda-time">
                            10:15 AM - 12:00 PM 
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                Meeting with executives
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="agenda-time">
                            7:00 - 9:00 PM
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                Aria's dance recital
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
$this->load->view('demo/footer'); ?>