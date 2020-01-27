<link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"> <!-- Resource style -->
<script src="<?php echo base_url(); ?>js/modernizr.js"></script> <!-- Modernizr -->
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
        <h6><strong>Annual Performance Appraisal Report- </strong></h6>
        <hr>
    
       
        <table class="table table-bordered" id="containner_performance_details"  width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <tr role="row">
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending"  style="width: 141px;">Year</th>
                <th  tabindex="0"  rowspan="1" colspan="1"  style="width: 232px;">Overall Grade</th>
                <th  tabindex="0"  rowspan="1" colspan="1"  style="width: 232px;">Remark</th>
                <th  tabindex="0"  rowspan="1" colspan="1"  style="width: 84px;" > <a href="javascript:;" id="addmore_performance" class=" link-cross addbtnTable">+ Add More</a></th>
            </tr>
        </table>
    
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

<script id="performance_template" type="x-tmpl-mustache">
    <tr id="delete_wexp_performance_details{{random_exr_id}}" class="delete_wexp_performance_details">
    <td><?php echo form_dropdown("year[]", array("" => "Select Year") + performance_years(), isset($row->year) ? set_value('year', $row->year) : set_value('year'), 'id="year_{{random_exr_id}}" class="form-control"  '); ?></td>
    <td><?php echo form_input("grading[]",'{{performance_detail.grading}}', 'placeholder="Overall Grade" maxlength="4" class="decimalNumericOnly form-control" '); ?></td>
    <td><?php echo form_input("remark[]",'{{performance_detail.remark}}', 'placeholder="Remark"  class="form-control" '); ?></td>
    <td><a href="javascript:;" id="remove_wexp_performance_details{{random_exr_id}}" class="remove_wexp_performance_details{{random_exr_id}} link-cross closebtnTable">-</a></td>
    </tr>
</script>
<?php //pr($PerfData); ?>
<script>
var random_performance_id = Date.now();
$('#addmore_performance').click(function () {
    random_performance_id = Date.now();
    var wexp_count = $(".delete_wexp_performance_details").length;
    if(wexp_count<=7){
      RenderPerformanceDetails(random_performance_id);  
    }
    
});
var performance_details =<?php echo json_encode(isset($PerfData) ? $PerfData: ''); ?>;
if (performance_details!='') {
    $.each(performance_details, function (key, performance_detail) {
        RenderPerformanceDetails(performance_detail.id, performance_detail);
        $("#year_" + performance_detail.id).val(performance_detail.year).trigger("change");
       
    });
} else {
    performance_detail = {};
    RenderPerformanceDetails(random_performance_id, performance_detail);
   
}


function RenderPerformanceDetails(random_performance_id, performance_detail) {
    var source = $("#performance_template").html();
    Mustache.parse(source);
    var rendered = Mustache.render(source, {
        random_exr_id: random_performance_id,
        performance_detail: performance_detail,
    });
    $("#containner_performance_details").append(rendered);
    delete_performance_detail(random_performance_id);
}

function delete_performance_detail(random_exr_id) {
    $("#remove_wexp_performance_details" + random_exr_id).click(function () {
        var wexp_count = $(".delete_wexp_performance_details").length;
        var wexp_id = $(this).attr("wexpid");
        if (wexp_id) {
            var confirm = window.confirm('Are you sure want to delete?');
            if (confirm) {
                $("#delete_wexp_performance_details" + wexp_id).remove();
                generate("success", "Details deleted successfully");
                location_reload();
                if (wexp_count == 1) {
                    equa = {};
                    RenderPerformanceDetails(random_exr_id, equa);
                }
            }
        } else {
            if (wexp_count > 1) {
                $("#delete_wexp_performance_details" + random_exr_id).remove();
            }

        }
    });
}
</script>