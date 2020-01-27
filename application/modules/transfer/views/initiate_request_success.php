<?php //pr($users);     ?>

<style type="text/css">
@media print
{
body * { visibility: hidden; }
#personal * { visibility: visible; }
#personal { position: absolute; top: 40px; left: 30px; }
}
</style>
<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>transfer/index">Transfer</a> / Request Confirmation</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header"><i class="fa fa-check-square-o" aria-hidden="true"></i> &nbsp;Request Confirmation</div>
            <div class="card-body user_view">
                <?php // print_r($id); ?>
                <div class="row" style="background: #ffffff!important; border:1px solid #cccccc;margin:30px 30px 0px 30px;">
                
                <div class="col-sm-12">
                    <div class="alert alert-success text-center" style="margin-bottom:0px;">
                        Success! Your transfer request has been processed successfully.
                    </div>
                </div>
                
                
                </div>
                <!-- ========================================================================================-->
                <div class="row" style="background: #ffffff!important; border:1px solid #cccccc;margin:30px 30px 0px 30px;">
                <div class="col-sm-2"><i class="fa fa-print btn btn-danger print" aria-hidden="true"></i></div>
                <div class="col-sm-8" id="personal" style="background: #ffffff!important;">
                <div class="text-center" style="text-align:center;"><img src="<?php echo base_url().'img/kvs-logo1bk.png';?>" width="100" alt="KENDRIYA VIDYALAYA SANGATHAN"/></div>
                <hr>
                <div class="row">
                    <div class="col-md-6 text-left"><b>Order No: <?php echo $empdata->transfer_orderno; ?></b></div>
                    <div class="col-md-6 text-right"><b>Dated: <?php echo $empdata->initiate_date; ?></b></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 text-left">To,</div>
                    <?php if($empdata->transfer_place==5) { ?>
                    <div class="col-md-12 text-left">The Principal</div>
                    <div class="col-md-12 text-left"><?php echo $empdata->unitname; ?></div>
                    <?php }elseif($empdata->transfer_place==4) { ?>
                    <div class="col-md-12 text-left">The Director</div>
                    <div class="col-md-12 text-left">ZEIT <?php echo $empdata->unitname; ?></div>
                    <?php }elseif($empdata->transfer_place==3) { ?>
                    <div class="col-md-12 text-left">The Deputy Commisioner</div>
                    <div class="col-md-12 text-left">RO <?php echo $empdata->unitname; ?></div>
                    <?php }else { ?>
                    <div class="col-md-12 text-left">The Kendriya Vidyalaya Sagathan</div>
                    <div class="col-md-12 text-left"><?php echo $empdata->unitname; ?> </div>
                    <?php } ?>
                </div>
                <?php 
                    if($empdata->transfer_place==5) 
                        $transferplace = $empdata->unitname ; 
                    elseif($empdata->transfer_place==4)
                        $transferplace = 'ZEIT '.$empdata->unitname ; 
                    elseif($empdata->transfer_place==3)
                        $transferplace = 'RO '.$empdata->unitname ; 
                    else
                        $transferplace = 'Kendriya Vidyalaya Sagathan '.$empdata->unitname ; 
                ?>
                <?php 
                    if($empdata->current_place==5) 
                        $currentplace = $empdata->currentunitname ; 
                    elseif($empdata->current_place==4)
                        $currentplace = 'ZEIT '.$empdata->currentunitname ; 
                    elseif($empdata->current_place==3)
                        $currentplace = 'RO '.$empdata->currentunitname ; 
                    else
                        $currentplace = 'Kendriya Vidyalaya Sagathan '.$empdata->currentunitname ; 
                ?>
                <br><br>
                
                <div class="row">
                    <div class="col-md-12 text-left">Sub :- Employee transfer request.</div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-12 text-left">Dear Madam / Sir,</div><br><br>
                    <div class="col-md-12 text-left">
                        <p class="text-justify" style="text-align:justify;">
                        This is to certify that a transferred request has been initiated for 
                        <strong><?php echo $ED['emp_title'].' '.$ED['emp_name']. ' ('.$ED['emp_code'].') '?> </strong>
                        from <strong><?php echo $currentplace; ?></strong>
                        holding the designation<strong><?php echo $empdata->currentdesignation; ?></strong>
                        to <strong><?php echo $transferplace; ?></strong>, 
                        with designation <strong><?php echo $empdata->transferdesignation; ?></strong>.
                        He/She is transferred to the new location as per Order no - <strong> <?php echo $empdata->transfer_orderno; ?></strong> Dated : <strong><?php echo $empdata->transfer_date; ?></strong> received from KVS HQ.<br><br>
                        I hereby declare that all the formality of transfer has been covered from my end, 
                        and <?php echo $ED['emp_title'].' '.$ED['emp_name'];?> is relieved from <?php echo $currentplace; ?>.</p>
                    </div>
                </div>
                <br><br><br><br>
                <div class="row">
                    
                    <div class="col-md-6 text-left">
                    <p>With Best Regards,<br>
                        <?php if($empdata->current_place==5) echo 'Principal'; elseif($empdata->current_place==4) echo 'Director'; elseif($empdata->current_place==3) echo 'The Deputy Commisioner'; else echo 'The Kendriya Vidyalaya Sagathan'; ?>
                        <br><?php echo $empdata->currentunitname; ?></p>
                    </div>
                    <div class="col-md-6 text-right"><b>Signature</b></div>
                </div>
                <hr style="margin-bottom:30px;">
                </div>
                <div class="col-sm-2">&nbsp;</div>
                </div>
                <!-- ========================================================================================-->
                
                </div>
            </div>
        </div>	
    </div>
</div>
<script>
$('.print').click(function() {
    w=window.open();
    w.document.write($('#personal').html());
    w.print();
    w.close();
});

//--    var options = {
//--    };
//--    var pdf = new jsPDF('p', 'pt', 'a4');
    //pdf.setFontSize(10);
    //pdf.setFontStyle('italic');
    //pdf.text('Transfer Acknowledgement', 250,20);
    //pdf.text("Centered text",{align: "center"},250,15);
//--    pdf.addHTML($("#personal"), 10, 25, options, function() {
//--    pdf.save('Initiate_Transfer_Acknowledgement.pdf');
//--    });

</script>