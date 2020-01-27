<style>
    .buttons-excel{
       background-color: green;
       color: white;
    }
    
</style>
<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
	<ol class="breadcrumb">
            <li class="breadcrumb-item">
		<a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Monthly Compliance</li>
	</ol>
        <!-- DataTables Example --> 
	<div class="card mb-3">
            <div class="card-header"><i class="fa fa-check-square" aria-hidden="true"></i>&nbsp;Submit Your Monthly Compliance</div>
            <div class="card-body">
                <?php if (isset($error_msg) && !empty($error_msg)) { ?>
                    <div class="alert alert-danger">
                        <strong>Error!</strong> <?php echo $error_msg; ?>.
                    </div>
                <?php } if ($this->session->flashdata('error')) { ?>
                    <div class="alert alert-danger">
                        <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php } if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success">
                        <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php } ?>
                <?php echo form_open("", array("method" => "post", "id" => "formID", "autocomplete" => "off")); ?>
                <div class="row">
                    <div class="col-md-3">
                        <label>Acceptance</label>
                    </div>
                    <div class="col-md-6">
                        <input type="checkbox" name="acceptance" required=""> I accept that i have updated all employee details of my unit for this month.
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-3">
                        
                    </div>
                    <div class="col-sm-6">
                        <div> 
                            <?php 
                                $month = date('m');
                                $year = date('Y');
                                $fromdate = $year.'-'.$month.'-20';
                                $todate = $year.'-'.$month.'-31';
                                $today = date('Y-m-d');
                                if (($today >= $fromdate) && ($today <= $todate) && empty($compdata)){
                                     echo form_submit('', 'Submit', 'class="btn btn-primary"');
                                }elseif(!empty($compdata)){
                                    echo "<p style='color:#f36d1b'>Compliance Submitted for this month.</p>"; 
                                }else{
                                    echo "<p style='color:#f36d1b'>Submit Button will active from 20th of each month.</p>";  
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
	</div>
    </div>
</div>


