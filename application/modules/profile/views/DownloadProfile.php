<link rel="stylesheet" href="<?php echo base_url();?>css/reset.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css"> <!-- Resource style -->
<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css"> <!-- Resource style -->
<style>
.accordion_container {
  width: 100%;
}
.accordion_head {
  background-color: #808080;
  color: white;
  cursor: pointer;
  font-family: arial;
  font-size: 14px;
  margin: 0 0 1px 0;
  padding: 10px 10px;
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
                    echo '<h6 style="margin-bottom:0px!important"> EMPLOYEE (CODE - 10001) DETAILS </h6>'; 
                else 
                    echo '<h6 style="margin-bottom:0px!important">EMPLOYEE DETAILS / CODE - '.$PerData->emp_code.'</h6>'  ?>
            </div>
            <div class="card-body shape-shadow" style="padding: 0.25rem!important;background:#ffffff!important;"> 
                <div class="accordion_container" id="PrintDiv">
                    <form class="form">
                        <div class="accordion_head"><i class="fas fa-user" style="padding:1px 1px;"></i>&nbsp;PERSONAL DETAILS<span><button class="btn btn-danger float-right" style="font-size:12px;margin-top: -5px;" id="printPDF"><i class="fa fa-print"></i>&nbsp;Download</button></span></div>
                    <div class="accordion_body" style="display: block;">
                        <?php echo $this->load->view('personal',array())?>
                    </div>
                    <!--======================================== SERVICE DETAILS ======================================-->
                    <div class="accordion_head"><i class="fas fa-address-card" style="padding:1px 1px;"></i>&nbsp;SERVICE DETAILS</div>
                    <div class="accordion_body" style="display: block;">
                        <?php echo $this->load->view('service',array())?>
                    </div>
                    <!--======================================== ACADEMIC DETAILS ======================================-->                    
                    <div class="accordion_head"><i class="fas fa-graduation-cap" style="padding:1px 1px;"></i>&nbsp;ACADEMIC DETAILS</div>
                    <div class="accordion_body" style="display: block;">
                        <?php echo $this->load->view('academic',array())?>
                    </div> 
                    <!--====================================== RESULT DETAILS ==========================================-->
                    <div class="accordion_head"><i class="fas fa-school" style="padding:1px 1px;"></i>&nbsp;RESULT DETAILS</div>
                    <div class="accordion_body" style="display: block;">
                        <?php echo $this->load->view('result',array())?>
                    </div>
                    <!--====================================== FAMILY DETAILS ==========================================-->            
                    <div class="accordion_head"><i class="fas fa-street-view" style="padding:1px 1px;"></i>&nbsp;FAMILY DETAILS</div>
                    <div class="accordion_body" style="display: block;">
                        <?php  echo $this->load->view('family',array())?>
                    </div>
                    <!--====================================== PAY DETAILS ==========================================-->          
                    <div class="accordion_head"><i class="fas fa-inr" style="padding:1px 1px;"></i>&nbsp;PAY-LEVEL DETAILS</div>
                    <div class="accordion_body" style="display: block;">
                        <?php echo $this->load->view('paydetail',array())?>
                    </div>
                    <!--====================================== AWARD DETAILS ==========================================-->          
                    <div class="accordion_head"><i class="fas fa-award" style="padding:1px 1px;"></i>&nbsp;AWARDS DETAILS</div>
                    <div class="accordion_body" style="display: block;">
                        <?php echo $this->load->view('award',array())?>
                    </div>
                    <!--====================================== TRAINING DETAILS ==========================================-->          
                    <div class="accordion_head"><i class="fas fa-book" style="padding:1px 1px;"></i>&nbsp;TRAINING DETAILS</div>
                    <div class="accordion_body" style="display: block;">
                        <?php echo $this->load->view('training',array())?>
                    </div>
                    <!--====================================== APAR DETAILS ==========================================-->          
                    <div class="accordion_head"><i class="fas fa-star" style="padding:1px 1px;"></i>&nbsp;APAR DETAILS</div>
                    <div class="accordion_body" style="display: block;">
                        <?php echo $this->load->view('apar',array())?>
                    </div>
                    <!--====================================== PROMOTION DETAILS ==========================================-->          
                    <div class="accordion_head"><i class="fas fa-handshake-o" style="padding:1px 1px;"></i>&nbsp;PROMOTION DETAILS</div>
                    <div class="accordion_body" style="display: block;">
                        <?php echo $this->load->view('promotion',array())?>
                    </div>
                    <!--====================================== FINANCIAL DETAILS ==========================================-->          
                    <div class="accordion_head"><i class="fas fa-line-chart" style="padding:1px 1px;"></i>&nbsp;FINANCIAL UPGRADATION DETAILS</div>
                    <div class="accordion_body" style="display: block;">
                        <?php echo $this->load->view('financial',array())?>
                    </div>
                    <!--====================================== EXCHANGE DETAILS ==========================================-->          
                    <div class="accordion_head"><i class="fas fa-retweet" style="padding:1px 1px;"></i>&nbsp;TEACHER EXCHANGE PROGRAM</div>
                    <div class="accordion_body" style="display: block;">
                        <?php echo $this->load->view('teacherExchange',array())?>
                    </div>
                    <!--====================================== FOREIGN DETAILS ==========================================-->          
                    <div class="accordion_head"><i class="fas fa-plane" style="padding:1px 1px;"></i>&nbsp;FOREIGN VISIT</div>
                    <div class="accordion_body" style="display: block;">
                        <?php echo $this->load->view('foreignVisit',array())?>
                    </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>

<script>
$(document).ready(function() {
 console.log('Ready');
});

//============================== Create PDF ===============================//

$('#printPDF').click(function() {
    var options = {
      // pagesplit: true
    };
    //options.dim = { w: 400, h : 600 }
    var currentdate = new Date();
    var cDateTime = currentdate.getDate() + (currentdate.getMonth()+1) + currentdate.getFullYear() + currentdate.getHours()  + currentdate.getMinutes() + currentdate.getSeconds();
    var EmpInfo="<?php echo $title.' '.$PerData->emp_first_name.' '.$PerData->emp_middle_name.' '.$PerData->emp_last_name.'( KV Code : '.$PerData->emp_code.' )'; ?>";
    var pdf = new jsPDF('p', 'pt', 'a4');
    pdf.setFontSize(10);
    pdf.setFontStyle('italic');
    pdf.text('Employee Profile - '+EmpInfo, 20,20);
    //pdf.text("Centered text",{align: "center"},250,15);
    pdf.addHTML($("#PrintDiv"), 0, 25, options, function() {
        
        pdf.save('Personal_Details_'+EmpInfo+'_'+cDateTime+'.pdf');
    });
});
</script>