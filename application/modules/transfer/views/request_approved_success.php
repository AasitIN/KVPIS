<?php //pr($users);     ?>
<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>transfer/index">Transfer Module</a> / Request Approved Confirmation</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header">Request Approved Confirmation</div>
            <div class="card-body user_view">
                <?php // print_r($id); ?>
                <div class="row" style="background: #ffffff!important; border:1px solid #cccccc;margin:30px 30px 0px 30px;">
                <div class="col-sm-2">&nbsp;</div>
                <div class="col-sm-8">
                    <h5 class="text-success text-bold text-center">Your Request Approved Successfully</h5>
                    <div class="text-center">
                        <hr>
                        <em>Download the acknowledgement copy</em> <br>
                        <i id="ack" class="fas fa-download text-success" style=" border:1px solid green; padding: 10px; border-radius: 25px;"></i>
                    </div>
                </div>
                <div class="col-sm-2">&nbsp;</div>
                </div>
                <!-- ========================================================================================-->
                <div class="row" style="background: #ffffff!important; border:1px solid #cccccc;margin:30px 30px 0px 30px;">
                <div class="col-sm-2">&nbsp;</div>
                <div class="col-sm-8" id="personal" style="background: #ffffff!important;">
                <div class="text-center"><img src="<?php echo base_url().'img/kvs-logo1bk.png';?>" width="150" alt="KENDRIYA VIDYALAYA SANGATHAN"/></div>
                <hr>
                <div class="row">
                    <div class="col-md-6 text-left"><b>Order No: KV/1001/12345</b></div>
                    <div class="col-md-6 text-right"><b>Dated: 02/09/2019</b></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 text-left">To,</div>
                    <div class="col-md-12 text-left">The Principal</div>
                    <div class="col-md-12 text-left">Kendriya Vidyalaya</div>
                    <div class="col-md-12 text-left">Indore No-1,Indore - 345274</div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-12 text-left">Sub: Approved Transfer Request of teacher from one KV to another KV within the same station during 2018-19 academic year</div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-12 text-left">Dear Madam / Sir,</div><br><br>
                    <div class="col-md-12 text-left">
                        <p class="text-justify">
                            This is to certify that the transfer request of Sri Sagar Sangram from Kendriya Vidyalaya Indore No-1 (1110) holding the designation 
                        TGT Physics to Kendriya Vidyalaya Agra Cantt-II, with designation TGT Physics has been processed successfully,
                        as per <strong>Order no - KV/1001/12345</strong> Dated - 12-08-2019 received from KVS HQ.<br><br>
                        I hereby declare that all the formality of joining has been covered from my end, and Sri Sagar Sangram will be joining from 3.09.2019.
                        </p>
                    </div>
                </div>
                <br><br><br><br>
                <div class="row">
                    <div class="col-md-12 text-left">
                    <p>With Best Regards,<br> Sri Ram Prasad(Principal)<br>Kendriya Vidyalaya Agra</p>
                    </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
<script>
$('#ack').click(function() {
    var options = {
    };
    var pdf = new jsPDF('p', 'pt', 'a4');
    //pdf.setFontSize(10);
    //pdf.setFontStyle('italic');
    //pdf.text('Transfer Acknowledgement', 250,20);
    //pdf.text("Centered text",{align: "center"},250,15);
    pdf.addHTML($("#personal"), 10, 25, options, function() {
        pdf.save('Initiate_Transfer_Acknowledgement.pdf');
    });
});
</script>