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
        <h6><strong>Foreign Visit - </strong></h6>
        <hr>
        <?php $pdata = 2; ?>
        <div class="row">
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Official Visit to Foreign Country  :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_dropdown("is_country_visit", array("" => "Select") + single_parent(), isset($ForgData[0]->is_country_visit) ? set_value('is_country_visit', $ForgData[0]->is_country_visit) : set_value('is_country_visit'), ' id="visit" class="form-control validate[required]"  '); ?>
                    <span class="error"><?php echo form_error('is_country_visit'); ?></span>
                </div>
            </div>
        </div>
        <div class="add_more_button" id="addmore" <?php echo ($ForgData[0]->is_country_visit== 1) ?"style=display:block;":"style=display:none;"?> >
            <a class="btn btn-primary"  id="addmoreprofessional" href="javascript:"> Add More</a>
        </div>
        <br>


        <div id="containner_professional_more" <?php echo ($ForgData[0]->is_country_visit== 1 )?"style=display:block;":"style=display:none;"?> ></div>
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
<script id="professional_more_template" type="x-tmpl-mustache">
    <div class="background_div delete_wexp_professional_more"  id="delete_wexp_professional_more{{random_exr_id}}">
        <input type="hidden" name="emp_id" id="emp_id" value="<?php echo isset($EmpCode) ? $EmpCode : ''; ?>">   
        <div class="delete_more_button" style="display:none; " id="professional_more_1_{{random_exr_id}}">
            <a class="btn btn-primary" id="remove_wexp_professional_more{{random_exr_id}}" class="remove_wexp_professional_more{{random_exr_id}}" href="javascript:"> Delete</a>
        </div>
            <div class="row" >
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Year :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_dropdown("visit_year[]", array("" => "Select Year") + last5_years(), isset($users->visit_year) ? set_value('visit_year', $users->visit_year) : set_value('visit_year'), 'id="year_of_visit_{{random_exr_id}}" class="form-control validate[required]"  '); ?>
                    <span class="error"><?php echo form_error('visit_year'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Country Name :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("country_name[]", '{{visit_detail.country_name}}', 'placeholder="Name of the Country" class="form-control validate[required]" onkeypress="LettersAndDotOnly();" '); ?>
                    <span class="error"><?php echo form_error('country_name'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Order No. :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("order_no[]", '{{visit_detail.order_no}}', 'placeholder="Order No." class="form-control validate[required]"  '); ?>
                    <span class="error"><?php echo form_error('order_no'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Duration(In Days):<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("duration[]", '{{visit_detail.duration}}', 'placeholder="Duration(In Days)" class="form-control validate[required]" '); ?>
                    <span class="error"><?php echo form_error('duration'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Purpose :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("purpose[]", '{{visit_detail.purpose}}', 'placeholder="Enter Purpose of Visit" class="form-control validate[required]" '); ?>
                    <span class="error"><?php echo form_error('purpose'); ?></span>
                </div>
            </div>
            
        </div>
        </div>
</script>
<script>
    var random_professional_more_id = Date.now();
    $('#addmoreprofessional').click(function () {
        random_professional_more_id = Date.now();
        var wexp_count = $(".delete_wexp_professional_more").length;
        if(wexp_count<=4){
          RenderProfessionalMore(random_professional_more_id); 
        }

    });
    
    var visit_details =<?php echo json_encode(isset($ForgData) ? $ForgData: ''); ?>;
    //console.log(visit_details);
    if (visit_details!='') {
        $.each(visit_details, function (key, visit_detail) {
            RenderProfessionalMore(visit_detail.id, visit_detail);
            $("#year_of_visit_" + visit_detail.id).val(visit_detail.visit_year).trigger("change");
        });
    } else {
        professional_more = {};
        RenderProfessionalMore(random_professional_more_id, professional_more);
    }
        

function RenderProfessionalMore(random_professional_more_id, professional_more) {
    var source = $("#professional_more_template").html();
    var wexp_count = $(".delete_wexp_professional_more").length;
    Mustache.parse(source);
    var rendered = Mustache.render(source, {
        random_exr_id: random_professional_more_id,
        visit_detail: professional_more,
    });
    $("#containner_professional_more").append(rendered);
    if (wexp_count != 0) {
       $("#professional_more_1_"+random_professional_more_id).css("display","block");
    }
    delete_family_more(random_professional_more_id);
}

function delete_family_more(random_exr_id) {
    
    $("#remove_wexp_professional_more" + random_exr_id).click(function () {
        var wexp_count = $(".delete_wexp_professional_more").length;
        var wexp_id = $(this).attr("wexpid");
        if (wexp_id) {
            var confirm = window.confirm('Are you sure want to delete?');
            if (confirm) {
                $("#delete_wexp_professional_more" + wexp_id).remove();
                generate("success", "Details deleted successfully");
                location_reload();
                if (wexp_count == 1) {
                    equa = {};
                    RenderProfessionalMore(random_exr_id, equa);
                }
            }
        } else {
            if (wexp_count > 1) {
                $("#delete_wexp_professional_more" + random_exr_id).remove();
            }

        }
        
    });
}
</script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $( "#visit" ).change(function() {
                    var text = $("#visit").val();
                    if(text=='1')
                    {
                      $('#containner_professional_more').show(); 
                      $('#addmore').show();
                    }else{
                      $('#containner_professional_more').hide();
                      $('#addmore').hide();
                    }
                });
            });
        </script>
