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
        <h6><strong>Promotion - </strong></h6>
        <hr>
        <div class="row">
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Whether Promoted :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_dropdown("is_promoted", array("" => "Select") + single_parent(), isset($PromData[0]->is_promoted_demoted) ? set_value('is_promoted', $PromData[0]->is_promoted_demoted) : set_value('is_promoted'), ' id="ispromoted" class="form-control validate[required]"  '); ?>
                    <span class="error"><?php echo form_error('is_promoted'); ?></span>
                </div>
            </div>
        </div>
        
        <div class="add_more_button" id="addmore"  <?php echo ($PromData[0]->is_promoted_demoted== 1) ?"style=display:block;":"style=display:none;"?> >
            <a class="btn btn-primary"  id="addmorepromotion" href="javascript:"> Add More</a>
        </div>
        <br>
        <div id="containner_promotion_more"  <?php echo ($PromData[0]->is_promoted_demoted== 1) ?"style=display:block;":"style=display:none;"?> ></div>
        
        
        <div class="row">
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Whether Reversion :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_dropdown("is_demoted", array("" => "Select") + single_parent(), isset($DemoData[0]->is_promoted_demoted) ? set_value('is_demoted', $DemoData[0]->is_promoted_demoted) : set_value('is_demoted'), ' id="isdemoted" class="form-control validate[required]"  '); ?>
                    <span class="error"><?php echo form_error('is_demoted'); ?></span>
                </div>
            </div>
        </div>
        
        <div class="add_more_button" id="addmore1" <?php echo ($DemoData[0]->is_promoted_demoted== 1) ?"style=display:block;":"style=display:none;"?>>
            <a class="btn btn-primary"  id="addmoredemotion" href="javascript:"> Add More</a>
        </div>
        <br>
        <div id="containner_demotion_more" <?php echo ($DemoData[0]->is_promoted_demoted== 1) ?"style=display:block;":"style=display:none;"?>></div>
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
<script id="promotion_more_template" type="x-tmpl-mustache">
    <div class="background_div delete_wexp_promotion_more"  id="delete_wexp_promotion_more{{random_exr_id}}">
        <div class="delete_more_button" style="display:none; " id="promotion_more_1_{{random_exr_id}}">
            <a class="btn btn-primary" id="remove_wexp_promotion_more{{random_exr_id}}" class="remove_wexp_promotion_more{{random_exr_id}}" href="javascript:"> Delete</a>
        </div>
        <div class="row">
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Select Type :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_dropdown("promotion_type[]", array("" => "Select Type") + promotion_type(), isset($users->promotion_type) ? set_value('promotion_type', $users->promotion_type) : set_value('promotion_type'), 'id="prom_type_{{random_exr_id}}" class="form-control validate[required]"  '); ?>
                    <span class="error"><?php echo form_error('promotion_type[]'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Promoted From :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    
                    <?php echo form_dropdown("promoted_from[]", array("" => "Select Designation") + designation_list(), isset($users->promoted_from) ? set_value('promoted_from', $users->promoted_from) : set_value('promoted_from'), 'id="prom_from_{{random_exr_id}}" class="form-control validate[required]"  '); ?>
                    <span class="error"><?php echo form_error('promoted_from'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Promoted To :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                <?php echo form_dropdown("promoted_to[]", array("" => "Select Designation") + designation_list(), isset($users->promoted_to) ? set_value('promoted_to', $users->promoted_to) : set_value('promoted_to'), 'id="prom_to_{{random_exr_id}}" class="form-control validate[required]"  '); ?>
                    <span class="error"><?php echo form_error('promoted_to'); ?></span>
                </div>
            </div>
        </div>
        <div class="row" >
            
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Order No :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("promotion_order_no[]", '{{promotion.promotion_order_no}}', 'placeholder="Order No" class="form-control validate[required]" '); ?>
                    <span class="error"><?php echo form_error('promotion_order_no'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Order Date :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("promotion_order_date[]", '{{promotion.odate}}', 'placeholder="dd-mm-yy" id="promotiondate{{random_exr_id}}"  class="datepicker-here form-control validate[required] " '); ?>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                    <span class="error"><?php echo form_error('promotion_order_date'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Date of Actual Joining :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("promotion_date[]", '{{promotion.pdate}}', 'placeholder="dd-mm-yy" id="joiningdate{{random_exr_id}}" class="datepicker-here form-control validate[required] " '); ?>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                    <span class="error"><?php echo form_error('promotion_date'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Date of Notional Joining if any :<span class="reqd"></span></label>
                <div class="col-sm-12">
                    <?php echo form_input("notional_joining_date[]", '{{promotion.ndate}}', 'placeholder="dd-mm-yy" id="notionaldate{{random_exr_id}}"  class="datepicker-here form-control " '); ?>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                    <span class="error"><?php echo form_error('notional_joining_date'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Offer Accepted :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_dropdown("is_offer_accepted[]", array("" => "Select") + single_parent(), isset($users->is_offer_accepted) ? set_value('is_offer_accepted', $users->is_offer_accepted) : set_value('is_offer_accepted'), ' id="isaccepted_{{random_exr_id}}" class="form-control validate[required]" onchange="offeraccepted({{random_exr_id}})"  '); ?>
                    <span class="error"><?php echo form_error('is_offer_accepted'); ?></span>    
                </div>
            </div>
        </div>
        <div class="row" style="display:none;" id="isdebarreddiv_{{random_exr_id}}">

            <div class="form-group col-md-4">
                <label for="" class="col-sm-12 col-form-label">Whether debarred from Promotion :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                   
                    <?php echo form_dropdown("is_debarred[]", array("" => "Select") + single_parent(), isset($users->is_debarred) ? set_value('is_debarred', $users->is_debarred) : set_value('is_debarred'), 'class="form-control validate[required]" id="is_debarred_{{random_exr_id}}" onchange="isdebarredfun({{random_exr_id}})" '); ?>
                    <span class="error"><?php echo form_error('is_debarred'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4 debarreddiv_{{random_exr_id}}" style="display:none;" >
                <label for="" class="col-sm-12 col-form-label">Letter No :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("debarred_letter_no[]", '{{promotion.debarred_letter_no}}', 'placeholder="Letter No" class="form-control validate[required]" id="pletter" '); ?>
                    <span class="error"><?php echo form_error('debarred_letter_no'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4 debarreddiv_{{random_exr_id}}" style="display:none;" >
                <label for="" class="col-sm-12 col-form-label">Debarred From :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("debarred_from[]", '{{promotion.debarredfdate}}', 'placeholder="dd-mm-yyyy" id="from_datepicker_{{random_exr_id}}" class="datepicker-here form-control validate[required]" '); ?>
                    <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                    </div>
                <span class="error"><?php echo form_error('debarred_from'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4 debarreddiv_{{random_exr_id}}" style="display:none;" >
                <label for="" class="col-sm-12 col-form-label">Debarred To :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("debarred_to[]", '{{promotion.debarredtdate}}', 'placeholder="dd-mm-yyyy" id="to_datepicker_{{random_exr_id}}" class="datepicker-here form-control validate[required]" '); ?>
                    <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                    </div>
                <span class="error"><?php echo form_error('debarred_to'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4 debarreddiv_{{random_exr_id}}"  style="display:none;" >
                <label for="" class="col-sm-12 col-form-label" >Duration(In Days):<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("duration[]", '{{promotion.duration}}', 'id="duration_{{random_exr_id}}" readonly placeholder="Duration(In Days)" class="form-control validate[required]" '); ?>
                    <span class="error"><?php echo form_error('duration'); ?></span>
                </div>
            </div>
        </div>    
   </div>
</script>
<script id="demotion_more_template" type="x-tmpl-mustache">
    <div class="background_div delete_wexp_demotion_more"  id="delete_wexp_demotion_more{{random_exr_id}}">
        <div class="delete_more_button" style="display:none; " id="demotion_more_1_{{random_exr_id}}">
            <a class="btn btn-primary" id="remove_wexp_demotion_more{{random_exr_id}}" class="remove_wexp_demotion_more{{random_exr_id}}" href="javascript:"> Delete</a>
        </div>
        <div class="row">
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Revertion From :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    
                    <?php echo form_dropdown("demotion_from[]", array("" => "Select Designation") + designation_list(), isset($users->demotion_from) ? set_value('demotion_from', $users->demotion_from) : set_value('demotion_from'), 'id="demo_from_{{random_exr_id}}" class="form-control validate[required]"  '); ?>
                    <span class="error"><?php echo form_error('demotion_from'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Revertion To :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                <?php echo form_dropdown("demotion_to[]", array("" => "Select Designation") + designation_list(), isset($users->demotion_to) ? set_value('demotion_to', $users->demotion_to) : set_value('demotion_to'), 'id="demo_to_{{random_exr_id}}" class="form-control validate[required]"  '); ?>
                    <span class="error"><?php echo form_error('demotion_to'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Date of Reversion :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("demotion_date[]", '{{demotion.demodate}}', 'placeholder="dd-mm-yy" id="demotiondate{{random_exr_id}}"  class="datepicker-here form-control validate[required] " '); ?>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                    <span class="error"><?php echo form_error('demotion_date'); ?></span>
                </div>
            </div>
        </div>
         
   </div>
</script>

<script>
var random_promotion_more_id = Date.now();
$('#addmorepromotion').click(function () {
    random_promotion_more_id = Date.now();
    var wexp_count = $(".delete_wexp_promotion_more").length;
    RenderPromotionMore(random_promotion_more_id); 
   
});

    var prom_details =<?php echo json_encode(isset($PromData) ? $PromData: ''); ?>;
    //console.log(prom_details);
    if (prom_details!='') {
        $.each(prom_details, function (key, prom_detail) {
            RenderPromotionMore(prom_detail.id, prom_detail);
            $("#prom_type_" + prom_detail.id).val(prom_detail.promotion_type).trigger("change");
            $("#prom_from_" + prom_detail.id).val(prom_detail.promoted_demoted_from).trigger("change");
            $("#prom_to_" + prom_detail.id).val(prom_detail.promoted_demoted_to).trigger("change");
            $("#isaccepted_" + prom_detail.id).val(prom_detail.is_offer_accepted).trigger("change");
            $("#is_debarred_" + prom_detail.id).val(prom_detail.is_debarred).trigger("change");
        });
    } else {
        promotion_more = {};
        RenderPromotionMore(random_promotion_more_id, promotion_more);
    }
function RenderPromotionMore(random_promotion_more_id, promotion_more) {
    var source = $("#promotion_more_template").html();
    var wexp_count = $(".delete_wexp_promotion_more").length;
    Mustache.parse(source);
    var rendered = Mustache.render(source, {
        random_exr_id: random_promotion_more_id,
        promotion: promotion_more,
    });
    $("#containner_promotion_more").append(rendered);
    if (wexp_count != 0) {
       $("#promotion_more_1_"+random_promotion_more_id).css("display","block");
    }
    delete_promotion_more(random_promotion_more_id);
        $("#promotiondate" + random_promotion_more_id).datepicker({
            maxDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
        });
        $("#joiningdate" + random_promotion_more_id).datepicker({
            maxDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
        });
        $("#notionaldate" + random_promotion_more_id).datepicker({
            maxDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
        });
        $("#from_datepicker_" + random_promotion_more_id).datepicker({
                maxDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: "-88:+0",
                onSelect: function (selected) {
                    var date = $('#from_datepicker_' + random_promotion_more_id).val();
                    var newsdate = date.split("-").reverse().join("-");
                    var startDate = new Date(newsdate);
                    var edate = $('#to_datepicker_' + random_promotion_more_id).val()
                    var newedate = edate.split("-").reverse().join("-");
                    var endDate = new Date(newedate);
                    var dt1 = startDate;
                    var dt2 = endDate;
                    var duration_output = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
                    //$('#from_datepicker_'+random_promotion_more_id).val('');
//                    if (startDate != '' && endDate != '' && startDate != 'Invalid Date' && endDate != 'Invalid Date' && startDate > endDate) {
//                        alert('start date should be equal to or less than end date');
//                        $('#from_datepicker_' + random_promotion_more_id).val('');
//                    }
//                    else if (startDate != '' && endDate != '' && startDate != 'Invalid Date' && endDate != 'Invalid Date' && duration_output != '') {
//                        var final_duration_output = (duration_output + 1);
//                        $('#duration_'+random_promotion_more_id).val(final_duration_output);
//                    }
                    if (startDate != '' && endDate != '' && startDate > endDate) {
                        alert('start date should be equal to or less than end date');
                        $('#to_datepicker_' + random_promotion_more_id).val('');
                    }
                     else if (startDate != '' && endDate != '' && endDate > startDate) {
                        var final_duration_output = (duration_output + 1);
                        $('#duration_'+random_promotion_more_id).val(final_duration_output);
                    }
                }
            });
            $("#to_datepicker_" + random_promotion_more_id).datepicker({
                //maxDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                //yearRange: "-100:+0",
                onSelect: function (selected) {
                    var date = $('#from_datepicker_' + random_promotion_more_id).val();
                    var newsdate = date.split("-").reverse().join("-");
                    var startDate = new Date(newsdate);
                    var edate = $('#to_datepicker_' + random_promotion_more_id).val()
                    var newedate = edate.split("-").reverse().join("-");
                    var endDate = new Date(newedate);
                    var dt1 = startDate;
                    var dt2 = endDate;
                    var duration_output = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
                    $('#duration_'+random_promotion_more_id).val('');
                    if (startDate != '' && endDate != '' && startDate > endDate) {
                        alert('start date should be equal to or less than end date');
                        $('#to_datepicker_' + random_promotion_more_id).val('');
                    }
                     else if (startDate != '' && endDate != '' && endDate > startDate) {
                        var final_duration_output = (duration_output + 1);
                        $('#duration_'+random_promotion_more_id).val(final_duration_output);
                    }
                }

            });
            
   }         
            
        

function delete_promotion_more(random_exr_id) {
    
    $("#remove_wexp_promotion_more" + random_exr_id).click(function () {
        var wexp_count = $(".delete_wexp_promotion_more").length;
        var wexp_id = $(this).attr("wexpid");
        if (wexp_id) {
            var confirm = window.confirm('Are you sure want to delete?');
            if (confirm) {
                $("#delete_wexp_promotion_more" + wexp_id).remove();
                generate("success", "Details deleted successfully");
                location_reload();
                if (wexp_count == 1) {
                    equa = {};
                    RenderPromotionMore(random_exr_id, equa);
                }
            }
        } else {
            if (wexp_count > 1) {
                $("#delete_wexp_promotion_more" + random_exr_id).remove();
            }

        }
        
    });
}

    function offeraccepted(ids)
    {
        var text = $("#isaccepted_"+ids).val();
        if(text==1 || text == '')
        {
            $('#isdebarreddiv_'+ids).hide();
            $('.debarreddiv_'+ids).hide();
        }else{
            $('#isdebarreddiv_'+ids).show(); 
        }
    }
    
    function isdebarredfun(ids)
    {
        var text = $("#is_debarred_"+ids).val();
        if(text=='2' || text == '')
        {
          $('.debarreddiv_'+ids).hide(); 
        }else{
          $('.debarreddiv_'+ids).show();
        }
    }
</script>
<script>
var random_demotion_more_id = Date.now();
$('#addmoredemotion').click(function () {
    random_demotion_more_id = Date.now();
    RenderDemotionMore(random_demotion_more_id);
    
});

    var demotion_details =<?php echo json_encode(isset($DemoData) ? $DemoData: ''); ?>;
    //console.log(demotion_details);
    if (demotion_details!='') {
        $.each(demotion_details, function (key, demotion) {
            RenderDemotionMore(demotion.id, demotion);
            $("#demo_from_" + demotion.id).val(demotion.promoted_demoted_from).trigger("change");
            $("#demo_to_" + demotion.id).val(demotion.promoted_demoted_to).trigger("change");
        });
    } else {
        demotion_more = {};
        RenderDemotionMore(random_demotion_more_id, demotion_more);
    }
function RenderDemotionMore(random_demotion_more_id, demotion_more) {
    var source = $("#demotion_more_template").html();
    var wexp_count = $(".delete_wexp_demotion_more").length;
    Mustache.parse(source);
    var rendered = Mustache.render(source, {
        random_exr_id: random_demotion_more_id,
        demotion: demotion_more,
    });
    $("#containner_demotion_more").append(rendered);
    if (wexp_count != 0) {
       $("#demotion_more_1_"+random_demotion_more_id).css("display","block");
    }
    delete_demotion_more(random_demotion_more_id);
    $("#demotiondate" + random_demotion_more_id).datepicker({
        maxDate: "0",
        dateFormat: 'dd-mm-yy',
        changeMonth: true,
        changeYear: true,
        yearRange: "-88:+0",
    });
 }         
            
        

function delete_demotion_more(random_exr_id) {
    
    $("#remove_wexp_demotion_more" + random_exr_id).click(function () {
        var wexp_count = $(".delete_wexp_demotion_more").length;
        var wexp_id = $(this).attr("wexpid");
        if (wexp_id) {
            var confirm = window.confirm('Are you sure want to delete?');
            if (confirm) {
                $("#delete_wexp_demotion_more" + wexp_id).remove();
                generate("success", "Details deleted successfully");
                location_reload();
                if (wexp_count == 1) {
                    equa = {};
                    RenderDemotionMore(random_exr_id, equa);
                }
            }
        } else {
            if (wexp_count > 1) {
                $("#delete_wexp_demotion_more" + random_exr_id).remove();
            }

        }
        
    });
}
</script> 
<script>
    $(document).ready(function(){
        $( "#ispromoted" ).change(function() {
            var text = $("#ispromoted").val();
            if(text=='1')
            {
              $('#containner_promotion_more').show(); 
              $('#addmore').show();
            }else{
              $('#containner_promotion_more').hide();
              $('#addmore').hide();
            }
        });
    });
    
     $(document).ready(function(){
        $( "#isdemoted" ).change(function() {
            var text = $("#isdemoted").val();
            if(text=='1')
            {
              $('#containner_demotion_more').show(); 
              $('#addmore1').show();
            }else{
              $('#containner_demotion_more').hide();
              $('#addmore1').hide();
            }
        });
    });
    
    
    
    
   
</script>
        
