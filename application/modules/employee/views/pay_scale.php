<link rel="stylesheet" href="<?php echo base_url();?>css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css"> <!-- Resource style -->
<script src="<?php echo base_url();?>js/modernizr.js"></script> <!-- Modernizr -->
<div id="content-wrapper">
    <div class="container-fluid">
    <div class="card mb-3">
        <div class="card-header register-header">
            <?php 
            //print_r($PerData);
            if(empty($EmpCode)) 
                echo '<i class="fa fa-user-plus"></i>&nbsp;Add Employee'; 
            else 
                echo '<i class="fa fa-user"></i>&nbsp;Employee Code - '.$EmpCode;  ?>
        </div>
    
    <div class="card-body shape-shadow">

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

        <?php echo form_open("", array("id" => "formID", "class" => "register", "autocomplete" => "off")); ?>

        <input type="hidden" name="emp_id" id="emp_id" value="<?php echo isset($EmpCode) ? $EmpCode : ''; ?>">
        <?php echo $this->load->view('elements/employeetab',(isset($EmpCode))?$EmpCode:''); ?>
        <h6><strong>Pay Level -</strong> </h6>
        <hr>
         <div class="background_div">
             <div class="row">
            
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Present Pay Level :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_dropdown("present_paylevel", array("" => "Select Level") + level(), isset($PaysData->present_paylevel) ? set_value('level_to', $PaysData->present_paylevel) : set_value('present_paylevel'), 'class="form-control validate[required]" id="paylevel" onchange="getpaylevelrange();" '); ?>
                    <span class="error"><?php echo form_error('present_pay_scale'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Pay Matrix :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <i class="fa fa-inr" aria-hidden="true"></i><?php echo form_input("pay_range", isset($PaysData->pay_range) ? set_value('pay_range', $PaysData->pay_range) : set_value('pay_range'), ' readonly placeholder="Pay Range" id="payrange" style="margin-top: -30px;margin-left: 16px;" class="numericOnly form-control validate[required]" '); ?>
                    <span class="error"><?php echo form_error('basic_pay'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Date of Next Increment :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("date_of_increment", isset($PaysData->date_of_increment) ? set_value('date_of_increment', $PaysData->date_of_increment) : set_value('date_of_increment'), 'placeholder="dd-mm-yyyy" class="datepicker-here form-control future_datepicker validate[required]" '); ?>
                    <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                    </div>
                <span class="error"><?php echo form_error('date_of_increment'); ?></span>
                </div>
            </div>
            
        </div>
</div>
        <div class="row">
        <div class="col-sm-12">
            <div  style="float:right;"> 
                <input class="btn btn-primary" type="reset" value="Reset">
                 <?php  echo form_submit('', 'Save & Next', 'class="btn btn-primary"');?>
            </div>
        </div>
    </div>
    <div class="text-right rg-footer"></div>
        <?php echo form_close(); ?>
    </div>
</div>
    </div>
</div>
<script type="text/javascript">
    var base_url = $('#url').val();
    var get_csrf_token_name = $('#get_csrf_token_name').val();
    var get_csrf_hash = $('#get_csrf_hash').val();
    function getpaylevelrange()
    {
        var paylevel = $('#paylevel').val();
        if (paylevel != '') {
            $.ajax({
                url: base_url + 'employee/get_levelrange',
                data: get_csrf_token_name + '=' + get_csrf_hash + '&p_id=' + paylevel,
                type: 'POST',
                success: function (response) {
                    $('#payrange').val(response.trim());
                }
            });
        }else{
             $('#payrange').val('');
        }
    }
</script>
    
        
        
