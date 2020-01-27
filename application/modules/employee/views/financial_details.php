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
        <h6><strong>Promotion/Financial Upgradation - </strong> </h6>
        <hr>
         <div class="add_more_button" id="addmore" >
                <a class="btn btn-primary" id="addmore" href="javascript:"> + Add More</a>
        </div>
        <br>
        <div id="containner_financial_more" ></div>
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
<script id="financial_more_template" type="x-tmpl-mustache">
    <div class="background_div delete_wexp_financial_more"  id="delete_wexp_financial_more{{random_exr_id}}" >
        <div class="delete_more_button" style="display:none;" id="financial_more_1_{{random_exr_id}}">
            <a class="btn btn-primary" id="remove_wexp_financial_more{{random_exr_id}}" class="remove_wexp_financial_more{{random_exr_id}}" href="javascript:"> Delete</a>
        </div>
        <div class="row">
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Select Type:<span class="reqd"></span></label>
                <div class="col-sm-12">
                    <?php echo form_dropdown("upgradation_type[]", array("" => "Select Type") + financial_type(), isset($users->upgradation_type) ? set_value('upgradation_type', $users->upgradation_type) : set_value('upgradation_type'), 'id="financialtype_{{random_exr_id}}" class="form-control validate[required]" onchange="opendetaildiv({{random_exr_id}})"  '); ?>
                    <span class="error"><?php echo form_error('upgradation_type'); ?></span>
                </div>
            </div>
        </div>
        <div class="row" id="senior_selection_macp_{{random_exr_id}}" style="display:none;" >
            <div class="form-group col-md-3" >
                <label for="" class="col-sm-12 col-form-label">Level From:<span class="reqd"></span></label>
                <div class="col-sm-12">
                    <?php echo form_dropdown("level_from[]", array("" => "Select Level From") + level(), isset($users->level_from) ? set_value('level_from', $users->level_from) : set_value('level_from'), 'id="level_from_{{random_exr_id}}" class="form-control validate[required]"  '); ?>
                    <span class="error"><?php echo form_error('level_from'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-3" >
                <label for="" class="col-sm-12 col-form-label">Level To:<span class="reqd"></span></label>
                <div class="col-sm-12">
                <?php echo form_dropdown("level_to[]", array("" => "Select Level To") + level(), isset($users->level_to) ? set_value('level_to', $users->level_to) : set_value('level_to'), 'id="level_to_{{random_exr_id}}" class="form-control validate[required]"  '); ?>
                        <span class="error"><?php echo form_error('level_to'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-3" >
                <label for="" class="col-sm-12 col-form-label">Order No:<span class="reqd"></span></label>
                <div class="col-sm-12">
                    <?php echo form_input("order_no[]", '{{financial.order_no}}', 'placeholder="Order No" class="form-control validate[required]" '); ?>
                    <span class="error"><?php echo form_error('order_no'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-3" >
                <label for="" class="col-sm-12 col-form-label">Date:<span class="reqd"></span></label>
                <div class="col-sm-12">
                    <?php echo form_input("order_date[]", '{{financial.fdate}}', 'placeholder="Order Date"  id="service_more_to_datepicker{{random_exr_id}}" class="datepicker-here form-control common_datepicker validate[required] " '); ?>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                    <span class="error"><?php echo form_error('order_date'); ?></span>
                </div>
            </div>
        </div>    
    </div>
</script>

        
<script type="text/javascript">
var random_financial_more_id = Date.now();
$('#addmore').click(function () {
    random_financial_more_id = Date.now();
    RenderFinancialMore(random_financial_more_id);
});
    var financial_details =<?php echo json_encode(isset($FincData) ? $FincData: ''); ?>;
    //console.log(visit_details);
    if (financial_details!='') {
        $.each(financial_details, function (key, financial) {
            RenderFinancialMore(financial.id, financial);
            $("#financialtype_" + financial.id).val(financial.upgradation_type).trigger("change");
            $("#level_from_" + financial.id).val(financial.level_from).trigger("change");
            $("#level_to_" + financial.id).val(financial.level_to).trigger("change");
        });
    } else {
        financial_more = {};
        RenderFinancialMore(random_financial_more_id, financial_more);
    }
    

function RenderFinancialMore(random_financial_more_id, financial_more) {
    var source = $("#financial_more_template").html();
    
    var wexp_count = $(".delete_wexp_financial_more").length;
    Mustache.parse(source);
    var rendered = Mustache.render(source, {
        random_exr_id: random_financial_more_id,
        financial: financial_more,
    });
 
    $("#containner_financial_more").append(rendered);
    
    if (wexp_count != 0) {
       $("#financial_more_1_"+random_financial_more_id).css("display","block");
    }
    delete_financial_more(random_financial_more_id);
    $("#service_more_to_datepicker" + random_financial_more_id).datepicker({
        maxDate: "0",
        dateFormat: 'dd-mm-yy',
        changeMonth: true,
        changeYear: true,
        yearRange: "-88:+0",
        onSelect: function (selected) {
            var date = $('#service_more_from_datepicker' + random_financial_more_id).val();
            var newsdate = date.split("-").reverse().join("-");
            var startDate = new Date(newsdate);
            var edate = $('#service_more_to_datepicker' + random_financial_more_id).val()
            var newedate = edate.split("-").reverse().join("-");
            var endDate = new Date(newedate);
            if (startDate != '' && endDate != '' && startDate > endDate) {
                alert('start date should be equal to or less than end date');
                $('#service_more_from_datepicker' + random_financial_more_id).val('');
                $('#service_more_to_datepicker' + random_financial_more_id).val('');
            }
        }

    });
}

function delete_financial_more(random_exr_id) {
    
    $("#remove_wexp_financial_more" + random_exr_id).click(function () {
        var wexp_count = $(".delete_wexp_financial_more").length;
        var wexp_id = $(this).attr("wexpid");
        if (wexp_id) {
            var confirm = window.confirm('Are you sure want to delete?');
            if (confirm) {
                $("#delete_wexp_financial_more" + wexp_id).remove();
                generate("success", "Details deleted successfully");
                location_reload();
                if (wexp_count == 1) {
                    equa = {};
                    RenderFinancialMore(random_exr_id, equa);
                }
            }
        } else {
            if (wexp_count > 1) {
                $("#delete_wexp_financial_more" + random_exr_id).remove();
            }

        }
        
    });
}

       
    function opendetaildiv(ids)
    {
        var text = $('#financialtype_'+ids).val();
        if(text==6 || text == '')
        {
            $('#senior_selection_macp_'+ids).hide();
        }else{
            $('#senior_selection_macp_'+ids).show();
        }
    }
    
    
</script>