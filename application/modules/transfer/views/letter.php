<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>transfer/index">Transfer Module</a> / Transfer Confirmation</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header">Transfer Confirmation</div>
            <div class="card-body user_view">
                <?php // print_r($id); ?>
                <div class="row" style="background: #ffffff!important; border:1px solid #cccccc;margin:30px 30px 0px 30px;">
                    <div class="col-sm-12">
                        <?php 
                        if($empdata->status=='ACCEPTED'){
                        ?>
                        
                        <div class="alert alert-success text-center" style="margin-bottom:0px;">
                            Success! Your transfer request has been <?php echo strtolower($empdata->status);?>
                        </div>
                        <?php }
                        if($empdata->status=='REJECTED'){
                        ?>
                        <div class="alert alert-danger text-center" style="margin-bottom:0px;">
                            Error! Your transfer request has been <?php echo strtolower($empdata->status);?>
                        </div>
                        <?php }
                        if($empdata->status=='ONHOLD'){
                        ?>
                        <div class="alert alert-warning text-center" style="margin-bottom:0px;">
                            Warning! Your transfer request has been put on hold for some official updation.
                        </div>
                        <?php }
                        ?>
                    </div>
                </div>
                <!-- ========================================================================================-->
                <div class="row" style="background: #ffffff!important; border:1px solid #cccccc;margin:30px 30px 0px 30px;">
                <div class="col-sm-2"><i class="fa fa-print btn btn-danger print" aria-hidden="true"></i></div>
                <div class="col-sm-8" id="personal" style="background: #ffffff!important;">
                <div class="text-center"><img src="<?php echo base_url().'img/kvs-logo1bk.png';?>" width="100" alt="KENDRIYA VIDYALAYA SANGATHAN"/></div>
                <hr>
                <div class="row">
                    <div class="col-md-6 text-left"><b>Order No: <?php echo $empdata->transfer_orderno; ?></b></div>
                    <div class="col-md-6 text-right"><b>Dated: <?php echo $empdata->initiate_date; ?></b></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 text-left">To,</div>
                    <div class="col-md-12 text-left"><?php echo $empdata->emp_title.' '.$empdata->emp_name;?></div>
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
                    <div class="col-md-12 text-left">Sub :- Employee transfer response.</div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-12 text-left">Dear Madam / Sir,</div><br><br>
                    <div class="col-md-12 text-left">
                        <p class="text-justify">
                        This is to certify that <?php echo $empdata->emp_title.' '.$empdata->emp_name;?> has been transferred from <?php echo $currentplace; ?> holding the designation 
                        <?php echo $empdata->currentdesignation; ?> to <?php echo $transferplace; ?>, with designation <?php echo $empdata->transferdesignation; ?>. He/She is transferred to the new location as per <strong>Order no - <?php echo $empdata->transfer_orderno; ?></strong> Dated - <?php echo $empdata->transfer_date; ?> received from KVS HQ.<br><br>
                        I hereby declare that all the formality of transfer has been covered from my end, 
                        and the status of transfer process is <?php echo $empdata->status; ?>.
                        <?php if(!empty($empdata->reason)) echo 'And the reason for '.$empdata->status. ' is '.$empdata->reason; ?></p>
                    </div>
                </div>
                <br><br><br><br>
                <div class="row">
                    
                    <div class="col-md-6 text-left">
                    <p>With Best Regards,<br>
                        <?php if($empdata->transfer_place==5) echo 'Principal'; elseif($empdata->transfer_place==4) echo 'Director'; elseif($empdata->transfer_place==3) echo 'The Deputy Commisioner'; else echo 'The Kendriya Vidyalaya Sagathan'; ?>
                        <br><?php echo $empdata->unitname; ?></p>
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
</script>
