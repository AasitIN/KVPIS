<link rel="stylesheet" href="<?php echo base_url();?>css/reset.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css"> <!-- Resource style -->
<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css"> <!-- Resource style -->
<style>
.accordion_container {
  width: 100%;
}
.accordion_head {
  background-color: #E0E0E0;
  color: #014A69;
  cursor: pointer;
  font-family: arial;
  font-size: 14px;
  margin: 0 0 1px 0;
  padding: 5px 5px;
  font-weight: bold;
}
.accordion_body {
  background: #ffffff;
  border:1px solid #cccccc;
}
.accordion_body p {
  padding: 18px 5px;
  margin: 0px;
}
.plusminus {
    float: right;
    padding: 0px 10px;
    font-size: 24px;
}
@import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');

#demopurpose {
    background-color: #edf0f5;
}

.profile-card {
    position: relative;
    box-shadow: 0px 3px 6px rgba(0,0,0,.05);
    font-family: 'Poppins', sans-serif;
}

.profile-card .btn-edit {
    position: absolute;
    top: 1rem;
    right: 1.2rem;
    font-size: 1.4rem;
}

.profile-card .profile-picture {
    width: 7.4rem;
}

.profile-card .quote-text {
    font-size: .85rem;
    line-height: 1.55rem;
}

.profile-card .social-section {
    margin-top: 1rem;
}

.profile-card .social-section a {
    font-size: 1rem;
    line-height: 2.15rem;
    width: 2.2rem;
    height: 2.2rem;
    border: 1px solid #d6d6d6;
    color: #d6d6d6;
    border-radius: 50%;
    margin: 0 .5rem;
}

.profile-card .social-section a:hover {
    background-color: #007bff;
    border-color: #007bff;
    color: #fff;
}
.font-bold{
    font-weight: bold;
}
h6 {
    color: #0072bc;
}
</style>
<script src="<?php echo base_url();?>js/modernizr.js"></script> <!-- Modernizr -->
<div id="content-wrapper" style="padding-top:1px!important;">
    <div class="container-fluid" style="padding:1px!important;">
        <div class="card mb-3">
            <div class="card-header register-header text-center">
                <?php 
                //show($PerData);
                if(empty($PerData->emp_code)) 
                    echo '<label style="margin-bottom:0px!important"> EMPLOYEE (CODE - 10001) DETAILS </label>'; 
                else 
                    echo '<label style="margin-bottom:0px!important">EMPLOYEE DETAILS / CODE - '.$PerData->emp_code.'</label>'  ?>
            </div>
            <div class="card-body shape-shadow" style="padding: 0.25rem!important;background:#ffffff!important;"> 
                <div class="accordion_container">
                    <!--======================================= PERSONAL DETAILS ======================================-->
                    <div class="accordion_head"><i class="fas fa-user" style="padding:10px 13px; border:1px solid;background: #014a69; color: #ffffff!important;"></i>&nbsp;PERSONAL DETAILS<span class="plusminus">-</span></div>
                    <div class="accordion_body" style="display: block;">
                        <div class="row m-1">
                            <div class="col-md-9">
                                <h6>Personal Information :</h6>    
                            </div>
                            <div class="col-md-1" style="padding-right:0px!important;">
                                <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/personal_details?EC=".base64_encode($PerData->emp_code);?>"><i class="fas fa-edit"></i></a>
                            </div>
                            <div class="col-md-1" style="padding-left:0px!important;">
                                <button id="pdf1"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
                            </div>
							<?php //pr($PerData); ?>
                            <!--<div class="col-md-1" style="padding-left:0px!important;">
                                <a href="<?php echo base_url().'profile/ProfileDownload/index/'.base64_encode($PerData->emp_code);?>"  class="btn btn-success float-left m-1"><i class="fa fa-download" aria-hidden="true"></i></a>
                            </div>-->
                        </div>
                        <?php echo $this->load->view('personal',array())?>
                    </div>
                    <!--======================================= SERVICE DETAILS ======================================-->
                    <div class="accordion_head"><i class="fas fa-address-card" style="padding:10px 11px; border:1px solid;background: #014a69; color: #ffffff!important;"></i>&nbsp;SERVICE DETAILS<span class="plusminus">+</span></div>
                    <div class="accordion_body" style="display: none;">
                    <div class="row m-1" style="background:#ffffff!important;">
                        <div class="col-md-10">
                            <h6>Service Details : </h6>    
                        </div>
                        <div class="col-md-1" style="padding-right:0px!important;">
                            <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/service_details?EC=".base64_encode($PerData->emp_code);?>"><i class="fas fa-edit"></i></a>
                        </div>
                        <div class="col-md-1" style="padding-left:0px!important;">
                            <button id="pdf2"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
                        </div>
                    </div> 
                        <?php echo $this->load->view('service',array())?>
                    </div>
                    <!--======================================== ACADEMIC DETAILS ======================================-->                    
                    <div class="accordion_head"><i class="fas fa-graduation-cap" style="padding:10px 10px; border:1px solid;background: #014a69; color: #ffffff!important;"></i>&nbsp;ACADEMIC DETAILS<span class="plusminus">+</span></div>
                    <div class="accordion_body" style="background:#ffffff!important; display: none;">
                    <div class="row m-1" style="background:#ffffff!important;">
                        <div class="col-md-10">
                            <h6>Academic Qualification : </h6>    
                        </div>
                        <div class="col-md-1" style="padding-right:0px!important;">
                            <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/academic_details?EC=".base64_encode($PerData->emp_code);?>"><i class="fas fa-edit"></i></a>
                        </div>
                        <div class="col-md-1" style="padding-left:0px!important;">
                            <button id="pdf3"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
                        </div>
                    </div> 
                        <?php echo $this->load->view('academic',array())?>
                    </div> 
                    
                    <!--====================================== FAMILY DETAILS =================================================-->
                    <div class="accordion_head"><i class="fas fa-street-view" style="padding:10px 12px; border:1px solid;background: #014a69; color: #ffffff!important;"></i>&nbsp;FAMILY DETAILS<span class="plusminus">+</span></div>
                    <div class="accordion_body" style="display: none;">
                    <div class="row m-1" style="background:#ffffff!important;">
                        <div class="col-md-10">
                            <h6>Family Details : </h6>    
                        </div>
                        <div class="col-md-1" style="padding-right:0px!important;">
                            <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/family_details?EC=".base64_encode($PerData->emp_code);?>"><i class="fas fa-edit"></i></a>
                        </div>
                        <div class="col-md-1" style="padding-left:0px!important;">
                            <button id="pdf5"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
                        </div>
                    </div> 
                        <?php  echo $this->load->view('family',array())?>
                    </div>
                    
                    <!--====================================== PAY DETAILS =================================================-->
                    <div class="accordion_head"><i class="fas fa-inr" style="padding:10px 15px; border:1px solid;background: #014a69; color: #ffffff!important;"></i>&nbsp;PAY-LEVEL DETAILS<span class="plusminus">+</span></div>
                    <div class="accordion_body" style="display: none;">
                    <div class="row m-1" <?php //echo ($TeacherExchangeData->is_exchange_prog == 1)?"style=background:#ffffff!important;display:block":"style=display:none"?>>
                        <div class="col-md-10">
                            <h6>Pay Details : </h6>    
                        </div>
                        <div class="col-md-1" style="padding-right:0px!important;">
                            <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/payscale_section?EC=".base64_encode($PerData->emp_code);?>"><i class="fas fa-edit"></i></a>
                        </div>
                        <div class="col-md-1" style="padding-left:0px!important;">
                            <button id="pdf6"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
                        </div>
                    </div> 
                        <?php echo $this->load->view('paydetail',array())?>
                    </div>
                    <!--====================================== AWARD DETAILS =================================================-->
                    <div class="accordion_head"><i class="fas fa-award" style="padding:10px 14px; border:1px solid;background: #014a69; color: #ffffff!important;"></i>&nbsp;AWARDS DETAILS<span class="plusminus">+</span></div>
                    <div class="accordion_body" style="display: none;">
                    <div class="row m-1" style="background:#ffffff!important;">
                        <div class="col-md-10">
                            <h6>Award Details : </h6>    
                        </div>
                        <div class="col-md-1" style="padding-right:0px!important;">
                            <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/award_section?EC=".base64_encode($PerData->emp_code);?>"><i class="fas fa-edit"></i></a>
                        </div>
                        <div class="col-md-1" style="padding-left:0px!important;">
                            <button id="pdf7"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
                        </div>
                    </div>
                        <?php echo $this->load->view('award',array())?>
                    </div>
                    <!--====================================== TRAINING DETAILS =================================================-->
                    <div class="accordion_head"><i class="fas fa-book" style="padding:10px 14px; border:1px solid;background: #014a69; color: #ffffff!important;"></i>&nbsp;TRAINING DETAILS<span class="plusminus">+</span></div>
                    <div class="accordion_body" style="display: none;">
                        <div class="row m-1" style="background:#ffffff!important;">
                        <div class="col-md-10">
                            <h6>Training & Workshops : </h6>    
                        </div>
                        <div class="col-md-1" style="padding-right:0px!important;">
                            <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/training_section?EC=".base64_encode($PerData->emp_code);?>"><i class="fas fa-edit"></i></a>
                        </div>
                        <div class="col-md-1" style="padding-left:0px!important;">
                            <button id="pdf8"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
                        </div>
                    </div> 
                        <?php echo $this->load->view('training',array())?>
                    </div>
                    <!--====================================== APAR DETAILS =================================================-->
                    <div class="accordion_head"><i class="fas fa-star" style="padding:10px 12px; border:1px solid;background: #014a69; color: #ffffff!important;"></i>&nbsp;APAR DETAILS<span class="plusminus">+</span></div>
                    <div class="accordion_body" style="display: none;">
                    <div class="row m-1" style="background:#ffffff!important;">
                        <div class="col-md-10">
                            <h6>APAR Details : </h6>    
                        </div>
                        <div class="col-md-1" style="padding-right:0px!important;">
                            <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/performance_section?EC=".base64_encode($PerData->emp_code);?>"><i class="fas fa-edit"></i></a>
                        </div>
                        <div class="col-md-1" style="padding-left:0px!important;">
                            <button id="pdf9"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
                        </div>
                    </div>
                        <?php echo $this->load->view('apar',array())?>
                    </div>
                    <!--====================================== PROMOTION DETAILS =================================================-->
                    <div class="accordion_head"><i class="fas fa-handshake-o" style="padding:10px 11px; border:1px solid;background: #014a69; color: #ffffff!important;"></i>&nbsp;PROMOTION DETAILS<span class="plusminus">+</span></div>
                    <div class="accordion_body" style="display: none;">
                        <div class="row m-1" style="background:#ffffff!important;">
                        <div class="col-md-10">
                            <h6>Promotion Details : </h6>    
                        </div>
                        <div class="col-md-1" style="padding-right:0px!important;">
                            <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/promotion?EC=".base64_encode($PerData->emp_code);?>"><i class="fas fa-edit"></i></a>
                        </div>
                        <div class="col-md-1" style="padding-left:0px!important;">
                            <button id="pdf10"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
                        </div>
                    </div>
                        <?php echo $this->load->view('promotion',array())?>
                    </div>
                    <!--====================================== FINANCIAL DETAILS =================================================-->
                    <div class="accordion_head"><i class="fas fa-line-chart" style="padding:10px 13px; border:1px solid;background: #014a69; color: #ffffff!important;"></i>&nbsp;FINANCIAL UPGRADATION DETAILS<span class="plusminus">+</span></div>
                    <div class="accordion_body" style="display: none;">
                    <div class="row m-1">
                        <div class="col-md-10">
                            <h6>Financial Upgradation Details : </h6>    
                        </div>
                        <div class="col-md-1" style="padding-right:0px!important;">
                            <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/financial?EC=".base64_encode($PerData->emp_code);?>"><i class="fas fa-edit"></i></a>
                        </div>
                        <div class="col-md-1" style="padding-left:0px!important;">
                            <button id="pdf11"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
                        </div>
                    </div> 
                        <?php echo $this->load->view('financial',array())?>
                    </div>
                    <!--====================================== EXCHANGE DETAILS =================================================-->
                    <div class="accordion_head"><i class="fas fa-retweet" style="padding:10px 11px; border:1px solid;background: #014a69; color: #ffffff!important;"></i>&nbsp;TEACHER EXCHANGE PROGRAM<span class="plusminus">+</span></div>
                    <div class="accordion_body" style="display: none;">
                    <div class="row m-1">
                        <div class="col-md-10">
                            <h6>Teacher Exchange Details : </h6>    
                        </div>
                        <div class="col-md-1" style="padding-right:0px!important;">
                            <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/teacher_exchange?EC=".base64_encode($PerData->emp_code);?>"><i class="fas fa-edit"></i></a>
                        </div>
                        <div class="col-md-1" style="padding-left:0px!important;">
                            <button id="pdf12"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
                        </div>
                    </div>
                        <?php echo $this->load->view('teacherExchange',array())?>
                    </div>
                    <!--====================================== FOREIGN DETAILS =================================================-->
                    <div class="accordion_head"><i class="fas fa-plane" style="padding:10px 12px; border:1px solid;background: #014a69; color: #ffffff!important;"></i>&nbsp;FOREIGN VISIT<span class="plusminus">+</span></div>
                    <div class="accordion_body" style="display: none;">
                      <div class="row m-1">
                        <div class="col-md-10">
                            <h6>Foreign Visit Details : </h6>    
                        </div>
                        <div class="col-md-1" style="padding-right:0px!important;">
                            <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/foreign_visit?EC=".base64_encode($PerData->emp_code);?>"><i class="fas fa-edit"></i></a>
                        </div>
                        <div class="col-md-1" style="padding-left:0px!important;">
                            <button id="pdf13"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
                        </div>
                    </div> 
                        <?php echo $this->load->view('foreignVisit',array())?>
                    </div>
                    <!--====================================== END OF ACCORDIAN =============================================-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js"></script>
-->
<script src="<?php echo base_url(); ?>vendor/jspdf/jspdf.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/jspdf/html2canvas.js"></script>
<script src="<?php echo base_url(); ?>vendor/jspdf/jspdf.debug.js"></script>

<script>
$(document).ready(function() {
  //toggle the component with class accordion_body
  $(".accordion_head").click(function() {
    if ($('.accordion_body').is(':visible')) {
      $(".accordion_body").slideUp(300);
      $(".plusminus").text('+');
    }
    if ($(this).next(".accordion_body").is(':visible')) {
      $(this).next(".accordion_body").slideUp(300);
      $(this).children(".plusminus").text('+');
    } else {
      $(this).next(".accordion_body").slideDown(300);
      $(this).children(".plusminus").text('-');
    }
  });
});

//============================== Create PDF ===============================//

$('#pdf1').click(function() {
    var options = {
    };
    var currentdate = new Date();
    var cDateTime = currentdate.getDate() + (currentdate.getMonth()+1) + currentdate.getFullYear() + currentdate.getHours()  + currentdate.getMinutes() + currentdate.getSeconds();
    var EmpInfo='<?php echo $title." ".$PerData->emp_first_name." ".$PerData->emp_middle_name." ".$PerData->emp_last_name."( ID :" .$PerData->emp_code.")"; ?>';
    var pdf = new jsPDF('p', 'pt', 'a4');
    pdf.setFontSize(10);
    pdf.setFontStyle('italic');
    pdf.text('Personal_Details - '+EmpInfo, 20,20);
    //pdf.text("Centered text",{align: "center"},250,15);
    pdf.addHTML($("#Personal_PDF"), 10, 25, options, function() {
        pdf.save('Personal_Details_'+EmpInfo+'_'+cDateTime+'.pdf');
    });
});

$('#pdf2').click(function() {
    var options = {
    };
    var currentdate = new Date();
    var cDateTime = currentdate.getDate() + (currentdate.getMonth()+1) + currentdate.getFullYear() + currentdate.getHours()  + currentdate.getMinutes() + currentdate.getSeconds();

    var EmpInfo="<?php echo $title.' '.$PerData->emp_first_name.' '.$PerData->emp_middle_name.' '.$PerData->emp_last_name.'( ID : '.$PerData->emp_code.' )'; ?>";
    var pdf = new jsPDF('p', 'pt', 'a4');
    pdf.setFontSize(10);
    pdf.setFontStyle('italic');
    pdf.text('Service Details - '+EmpInfo, 20,20);
    //pdf.text("Centered text",{align: "center"},250,15);
    pdf.addHTML($("#Service_PDF"), 10, 25, options, function() {
        pdf.save('Service_Details_'+EmpInfo+'_'+cDateTime+'.pdf');
    });
});

$('#pdf3').click(function() {
    var options = {
    };
    var currentdate = new Date();
    var cDateTime = currentdate.getDate() + (currentdate.getMonth()+1) + currentdate.getFullYear() + currentdate.getHours()  + currentdate.getMinutes() + currentdate.getSeconds();

    var EmpInfo="<?php echo $title.' '.$PerData->emp_first_name.' '.$PerData->emp_middle_name.' '.$PerData->emp_last_name.'( ID : '.$PerData->emp_code.' )'; ?>";
    var pdf = new jsPDF('p', 'pt', 'a4');
    pdf.setFontSize(10);
    pdf.setFontStyle('italic');
    pdf.text('Academic Details - '+EmpInfo, 20,20);
    //pdf.text("Centered text",{align: "center"},250,15);
    pdf.addHTML($("#Academic_PDF"), 10, 25, options, function() {
        pdf.save('Academic_Details_'+EmpInfo+'_'+cDateTime+'.pdf');
    });
});
$('#pdf4').click(function() {
    var options = {
    };
    var currentdate = new Date();
    var cDateTime = currentdate.getDate() + (currentdate.getMonth()+1) + currentdate.getFullYear() + currentdate.getHours()  + currentdate.getMinutes() + currentdate.getSeconds();

    var EmpInfo="<?php echo $title.' '.$PerData->emp_first_name.' '.$PerData->emp_middle_name.' '.$PerData->emp_last_name.'( ID : '.$PerData->emp_code.' )'; ?>";
    var pdf = new jsPDF('p', 'pt', 'a4');
    pdf.setFontSize(10);
    pdf.setFontStyle('italic');
    pdf.text('Result Details - '+EmpInfo, 20,20);
    //pdf.text("Centered text",{align: "center"},250,15);
    pdf.addHTML($("#Result_PDF"), 10, 25, options, function() {
        pdf.save('Result_Details_'+EmpInfo+'_'+cDateTime+'.pdf');
    });
});
$('#pdf5').click(function() {
    var options = {
    };
    var currentdate = new Date();
    var cDateTime = currentdate.getDate() + (currentdate.getMonth()+1) + currentdate.getFullYear() + currentdate.getHours()  + currentdate.getMinutes() + currentdate.getSeconds();

    var EmpInfo="<?php echo $title.' '.$PerData->emp_first_name.' '.$PerData->emp_middle_name.' '.$PerData->emp_last_name.'( ID : '.$PerData->emp_code.' )'; ?>";
    var pdf = new jsPDF('p', 'pt', 'a4');
    pdf.setFontSize(10);
    pdf.setFontStyle('italic');
    pdf.text('Family Details - '+EmpInfo, 20,20);
    //pdf.text("Centered text",{align: "center"},250,15);
    pdf.addHTML($("#family_PDF"), 10, 25, options, function() {
        pdf.save('Family_Details_'+EmpInfo+'_'+cDateTime+'.pdf');
    });
});
$('#pdf6').click(function() {
    var options = {
    };
    var currentdate = new Date();
    var cDateTime = currentdate.getDate() + (currentdate.getMonth()+1) + currentdate.getFullYear() + currentdate.getHours()  + currentdate.getMinutes() + currentdate.getSeconds();

    var EmpInfo="<?php echo $title.' '.$PerData->emp_first_name.' '.$PerData->emp_middle_name.' '.$PerData->emp_last_name.'( ID : '.$PerData->emp_code.' )'; ?>";
    var pdf = new jsPDF('p', 'pt', 'a4');
    pdf.setFontSize(10);
    pdf.setFontStyle('italic');
    pdf.text('Pay Details - '+EmpInfo, 20,20);
    //pdf.text("Centered text",{align: "center"},250,15);
    pdf.addHTML($("#pay_PDF"), 10, 25, options, function() {
        pdf.save('Pay_Details_'+EmpInfo+'_'+cDateTime+'.pdf');
    });
});
$('#pdf7').click(function() {
    var options = {
    };
    var currentdate = new Date();
    var cDateTime = currentdate.getDate() + (currentdate.getMonth()+1) + currentdate.getFullYear() + currentdate.getHours()  + currentdate.getMinutes() + currentdate.getSeconds();

    var EmpInfo="<?php echo $title.' '.$PerData->emp_first_name.' '.$PerData->emp_middle_name.' '.$PerData->emp_last_name.'( ID : '.$PerData->emp_code.' )'; ?>";
    var pdf = new jsPDF('p', 'pt', 'a4');
    pdf.setFontSize(10);
    pdf.setFontStyle('italic');
    pdf.text('Award Details - '+EmpInfo, 20,20);
    //pdf.text("Centered text",{align: "center"},250,15);
    pdf.addHTML($("#award_PDF"), 10, 25, options, function() {
        pdf.save('Award_Details_'+EmpInfo+'_'+cDateTime+'.pdf');
    });
});
$('#pdf8').click(function() {
    var options = {
    };
    var currentdate = new Date();
    var cDateTime = currentdate.getDate() + (currentdate.getMonth()+1) + currentdate.getFullYear() + currentdate.getHours()  + currentdate.getMinutes() + currentdate.getSeconds();

    var EmpInfo="<?php echo $title.' '.$PerData->emp_first_name.' '.$PerData->emp_middle_name.' '.$PerData->emp_last_name.'( ID : '.$PerData->emp_code.' )'; ?>";
    var pdf = new jsPDF('p', 'pt', 'a4');
    pdf.setFontSize(10);
    pdf.setFontStyle('italic');
    pdf.text('Training Details - '+EmpInfo, 20,20);
    //pdf.text("Centered text",{align: "center"},250,15);
    pdf.addHTML($("#training_PDF"), 10, 25, options, function() {
        pdf.save('Training_Details_'+EmpInfo+'_'+cDateTime+'.pdf');
    });
});
$('#pdf9').click(function() {
    var options = {
    };
    var currentdate = new Date();
    var cDateTime = currentdate.getDate() + (currentdate.getMonth()+1) + currentdate.getFullYear() + currentdate.getHours()  + currentdate.getMinutes() + currentdate.getSeconds();

    var EmpInfo="<?php echo $title.' '.$PerData->emp_first_name.' '.$PerData->emp_middle_name.' '.$PerData->emp_last_name.'( ID : '.$PerData->emp_code.' )'; ?>";
    var pdf = new jsPDF('p', 'pt', 'a4');
    pdf.setFontSize(10);
    pdf.setFontStyle('italic');
    pdf.text('APAR Details - '+EmpInfo, 20,20);
    //pdf.text("Centered text",{align: "center"},250,15);
    pdf.addHTML($("#perfermance_PDF"), 10, 25, options, function() {
        pdf.save('APAR_Details_'+EmpInfo+'_'+cDateTime+'.pdf');
    });
});
$('#pdf10').click(function() {
    var options = {
    };
    var currentdate = new Date();
    var cDateTime = currentdate.getDate() + (currentdate.getMonth()+1) + currentdate.getFullYear() + currentdate.getHours()  + currentdate.getMinutes() + currentdate.getSeconds();

    var EmpInfo="<?php echo $title.' '.$PerData->emp_first_name.' '.$PerData->emp_middle_name.' '.$PerData->emp_last_name.'( ID : '.$PerData->emp_code.' )'; ?>";
    var pdf = new jsPDF('p', 'pt', 'a4');
    pdf.setFontSize(10);
    pdf.setFontStyle('italic');
    pdf.text('Promotion Details - '+EmpInfo, 20,20);
    //pdf.text("Centered text",{align: "center"},250,15);
    pdf.addHTML($("#promotion_PDF"), 10, 25, options, function() {
        pdf.save('Promotion_Details_'+EmpInfo+'_'+cDateTime+'.pdf');
    });
});
$('#pdf11').click(function() {
    var options = {
    };
    var currentdate = new Date();
    var cDateTime = currentdate.getDate() + (currentdate.getMonth()+1) + currentdate.getFullYear() + currentdate.getHours()  + currentdate.getMinutes() + currentdate.getSeconds();

    var EmpInfo="<?php echo $title.' '.$PerData->emp_first_name.' '.$PerData->emp_middle_name.' '.$PerData->emp_last_name.'( ID : '.$PerData->emp_code.' )'; ?>";
    var pdf = new jsPDF('p', 'pt', 'a4');
    pdf.setFontSize(10);
    pdf.setFontStyle('italic');
    pdf.text('Financial Details - '+EmpInfo, 20,20);
    //pdf.text("Centered text",{align: "center"},250,15);
    pdf.addHTML($("#financial_PDF"), 10, 25, options, function() {
        pdf.save('Finacial_Details_'+EmpInfo+'_'+cDateTime+'.pdf');
    });
});
$('#pdf12').click(function() {
    var options = {
    };
    var currentdate = new Date();
    var cDateTime = currentdate.getDate() + (currentdate.getMonth()+1) + currentdate.getFullYear() + currentdate.getHours()  + currentdate.getMinutes() + currentdate.getSeconds();

    var EmpInfo="<?php echo $title.' '.$PerData->emp_first_name.' '.$PerData->emp_middle_name.' '.$PerData->emp_last_name.'( ID : '.$PerData->emp_code.' )'; ?>";
    var pdf = new jsPDF('p', 'pt', 'a4');
    pdf.setFontSize(10);
    pdf.setFontStyle('italic');
    pdf.text('Teacher Exchange Details - '+EmpInfo, 20,20);
    //pdf.text("Centered text",{align: "center"},250,15);
    pdf.addHTML($("#teacher_PDF"), 10, 25, options, function() {
        pdf.save('Teacher_Exchange_Details_'+EmpInfo+'_'+cDateTime+'.pdf');
    });
});
$('#pdf13').click(function() {
    var options = {
    };
    var currentdate = new Date();
    var cDateTime = currentdate.getDate() + (currentdate.getMonth()+1) + currentdate.getFullYear() + currentdate.getHours()  + currentdate.getMinutes() + currentdate.getSeconds();

    var EmpInfo="<?php echo $title.' '.$PerData->emp_first_name.' '.$PerData->emp_middle_name.' '.$PerData->emp_last_name.'( ID : '.$PerData->emp_code.' )'; ?>";
    var pdf = new jsPDF('p', 'pt', 'a4');
    pdf.setFontSize(10);
    pdf.setFontStyle('italic');
    pdf.text('Foreign Visit Details - '+EmpInfo, 20,20);
    //pdf.text("Centered text",{align: "center"},250,15);
    pdf.addHTML($("#foreign_PDF"), 10, 25, options, function() {
        pdf.save('Foreign_Visit_Details_'+EmpInfo+'_'+cDateTime+'.pdf');
    });
});

</script>