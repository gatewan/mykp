<!doctype html>
<html>
<div id="print-content">
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
	input[type="button"] {
    padding: 10px;
    margin-top: 30px;
}
    </style>
</head>

<body>
<?php
if(empty($query)){ 
  echo "<h1>#404: Invoice Kosong...</h1>";
}else{
  foreach($query as $d):
  $id = $d->id_booking;
  $tgl = $d->tgl_booking;
  $nm = $d->nm_user;
  $cp = $d->cp_user;
  $email = $d->email;
  $pkt = $d->paket;
  endforeach;
  $total = $hrg[0]->harga;
}

?>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="https://www.sparksuite.com/images/logo.png" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                Invoice #:<?=$id?><br>
                                Created: <?=date("l, d-m-Y")?><br>
                                Due: Until tomorrow, at 08:00 pm
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                WTGI Adventure<br>
                                Desa Gadungan, Pasuruhan, Mertoyudan<br>
                                Magelang
                            </td>
                            
                            <td>
                                Guest Name: <?=$nm?><br>
                                CP: <?=$cp?><br>
                                Email: <?=$email?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
                  
            <tr class="heading">
                <td>
                    Paket
                </td>
                
                <td>
                    Date/Time of Booking
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    <?=$pkt?>
                </td>
                
                <td>
                    <?=$tgl?>
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                
                <td>
                  Total Rp.<?=$total?>,-
                </td>
            </tr>
        </table>
    </div>
</body>
</div>
<footer>
<center>
<input type="button" onclick="printDiv('print-content')" value="Cetak INVOICE"/>
</center>
<script type="text/javascript">
function printDiv(divName) {

 var printContents = document.getElementById(divName).innerHTML;
 w=window.open();
 w.document.write(printContents);
 w.print();
 w.close();
}
</script>
</footer>
</html>