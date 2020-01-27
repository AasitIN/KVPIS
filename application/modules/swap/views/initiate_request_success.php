<?php  //show($E); ?>
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
            <div class="card-header">
                <i class="fa fa-check-square-o" aria-hidden="true"></i> &nbsp;Request Confirmation
            </div>
            <div class="card-body user_view">
                <div class="col-sm-12">
                    <div class="alert alert-success text-center" style="margin-bottom:0px;">
                        Success! Your transfer request has been processed successfully.
                    </div>
                </div>
                
       <!-- =========================== TRANSFER LETTER START ========================-->
            
       <div class="row" style="border: 1px dotted #8c8c8c; margin:2% 15%; border-radius:5px;">
        <div class="col-sm-1"><i class="fa fa-print btn btn-danger print" aria-hidden="true"></i></div>
        <div class="col-sm-10" id="personal" style="background: #ffffff!important;letter-spacing: .5px;">
        
        <div class="text-center" style="text-align:center;"><img src="<?php echo base_url().'img/kvs-logo1bk.png';?>" width="100" alt="KENDRIYA VIDYALAYA SANGATHAN"/></div>
        <hr>
        
        <div class="row">
            <div class="col-md-6 text-left"  style="float:left;"> <b>Order No:</b>&nbsp;  <span style="border-bottom: 1px dotted #ccc;"><?php echo $E->TRA_OR_NO; ?></span></div>
            <div class="col-md-6 text-right" style="float:right"> <b>Dated:   </b>&nbsp;  <span style="border-bottom: 1px dotted #ccc;"><?php echo $E->TRA_OR_DT; ?></span></div>
        </div>
        <br>
        <div class="row" style="margin-top:50px!important;">
            <div class="col-md-12 text-left">To,</div>
            <?php if($E->transfer_place==5) {     //KV?>
                <div class="col-md-12 text-left">
                    The Principal,<br><?php echo $E->EMP_TRA_AUTH; ?>
                </div>
            <?php }elseif($E->transfer_place==4) { //ZIET?>
                <div class="col-md-12 text-left">
                    The Director,<br>ZEIT <?php echo $E->EMP_TRA_AUTH; ?>
                </div>
            <?php }elseif($E->transfer_place==3) { //RO?>
                <div class="col-md-12 text-left">
                    The Deputy Commisioner,<br>RO <?php echo $E->EMP_TRA_AUTH; ?>
                </div>
            <?php }else { ?>
                <div class="col-md-12 text-left">
                    The Kendriya Vidyalaya Sagathan,<br><?php echo $E->EMP_TRA_AUTH; ?> 
                </div>
            <?php } ?>
        </div>
        <?php 
            if($E->transfer_place==5){
                $transferplace = $E->EMP_TRA_AUTH ; 
            }elseif($E->transfer_place==4){
                $transferplace = 'ZEIT '.$E->EMP_TRA_AUTH ; 
            }elseif($E->transfer_place==3){
                $transferplace = 'RO '.$E->EMP_TRA_AUTH ; 
            }else{
                $transferplace = 'Kendriya Vidyalaya Sagathan - HQ' ;
                $transferplace.=($E->EMP_PRE_SECTION && $E->EMP_PRE_SECTION!='NA')?'('.$E->EMP_PRE_SECTION.')':'';
            }
        ?>
        <?php 
            if($E->present_place==5) 
                $currentplace = $E->EMP_PRE_AUTH ; 
            elseif($E->present_place==4)
                $currentplace = 'ZEIT '.$E->EMP_PRE_AUTH ; 
            elseif($E->present_place==3)
                $currentplace = 'RO '.$E->EMP_PRE_AUTH ; 
            else
                $currentplace = 'Kendriya Vidyalaya Sagathan - HQ' ; 
                $currentplace .=($E->EMP_TRA_SECTION && $E->EMP_TRA_SECTION!='NA')?'('.$E->EMP_TRA_SECTION.').':'.';
        ?>
        <br><br>

        <div class="row">
            <div class="col-md-12 text-left"><b>Sub :- </b>&nbsp; Employee transfer request.</div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12 text-left">Dear Madam / Sir,</div><br>
            <div class="col-md-12 text-left">
                <p class="text-justify" style="text-align:justify;">
                This is to certify that a transferred request has been initiated for 
                <strong><?php echo $E->EMP_TTL.' '.$E->EMP_NAME. ' ('.$E->EMP_ID.') ';?> </strong>
                from <strong><?php echo $currentplace; ?></strong>
                holding the designation 
                <strong>
                <?php
                echo $E->EMP_PRE_DESIG;
                echo $PS=($E->EMP_PRE_SUB && $E->EMP_PRE_SUB!='NA')?'('.$E->EMP_PRE_SUB.')':'';
                
                ?>
                </strong>
                to <strong><?php echo $transferplace; ?></strong>, 
                with designation 
                <strong>
                <?php
                echo $E->EMP_TRA_DESIG;
                echo $TS=($E->EMP_TRA_SUB && $E->EMP_TRA_SUB!='NA')?'('.$E->EMP_TRA_SUB.').':'.';
                
                ?>
                </strong>
                He/She is transferred to the new location as per Order no: <strong> <?php echo $E->TRA_OR_NO; ?></strong> Dated : <strong><?php echo $E->TRA_OR_DT; ?></strong> received from KVS HQ.<br><br>
                I hereby declare that all the formality of transfer has been covered from my end, 
                and <?php echo $E->EMP_TTL.' '.$E->EMP_NAME;?> is relieved from <?php echo $currentplace; ?>.</p>
            </div>
        </div>
        <br><br><br><br>
        <div class="row">

            <div class="col-md-6 text-left" style="float:left">
            <p><b>With Best Regards,</b>&nbsp;<br><br>
                <?php 
                if($TYP=='2'){  // Re - Initiate From HQ End
                    echo 'The Kendriya Vidyalaya Sagathan, <br> KVS HQ (Dept. of Establishment)';
                    
                }else{          // Direct Initiate
                    if($E->present_place==5)    echo 'Principal';   elseif($E->present_place==4)    echo 'Director';    elseif($E->present_place==3) echo 'The Deputy Commisioner'; else echo 'The Kendriya Vidyalaya Sagathan'; 
                    
                    echo '<br>'.$E->EMP_PRE_AUTH;
                }
                ?>

            </div>
            <div class="col-md-6 text-right" style="float:right;"><b>Signature</b></div>
        </div>
        <div style="clear:both;"></div>
        <hr style="margin-bottom:30px;">
        </div>
        <div class="col-sm-1">&nbsp;</div>
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