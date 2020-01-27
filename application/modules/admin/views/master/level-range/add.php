<?php //pr($users);   ?>

<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active"> <a href="<?php echo base_url().'admin/master/level_range';?>">Pay Level Range</a></li>
            <li class="breadcrumb-item active"><?php echo isset($range->id) ? 'Edit' : 'Add'; ?> Pay Level Range</li>
        </ol>
        <div class="card mb-3">
            <!-- <div class="card-header"><?php echo isset($range->id) ? 'Edit' : 'Add'; ?> Pay Level Range</div> -->
            <?php echo form_open_multipart("", array("method" => "post", "id" => "formID", "autocomplete" => "off")); ?>
            <input type="hidden" name="id" value="<?php echo isset($range->id) ? $range->id : ''; ?>">
            <div class="card-body user_view">
                <div class="row">

                    <div class="col-md-2">
                        <label>Level Name:<span class="reqd">*</span></label>
                    </div>
                    <div class="col-md-3">
                    <?php echo form_dropdown("level_name", array("" => "Select Level") + level(), isset($range->level_name) ? set_value('level_name', $range->level_name) : set_value('level_name'), 'class="validate[required] form-control " ');
                        echo form_error('level_name');
                    ?>
                       
                    </div>
                   


                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label>Range From:<span class="reqd">*</span></label>
                    </div>
                    <div class="col-md-3">
                        <?php echo form_input("range_from", isset($range->range_from) ? set_value('range_from', $range->range_from) : set_value('range_from'), 'class="numericOnly validate[required] form-control" id="range_from"' );
                        echo form_error('range_from');
                        ?>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-2">
                        <label>Range To:<span class="reqd">*</span></label>
                    </div>
                    <div class="col-md-3">
                        <?php echo form_input("range_to", isset($range->range_to) ? set_value('range_to', $range->range_to) : set_value('range_to'), 'class="numericOnly validate[required] form-control" id="range_to"');
                        echo form_error('range_to');
                        ?>
                    </div>
                   


                </div>
                <div class="text-right submit-btn" >
                <?php
                echo form_submit('', 'Submit', 'class="btn btn-primary"'); ?>
                <input type="reset" value="Cancel" class="btn btn-default">
                </div>
<?php echo form_close(); ?>
            </div>
        </div>	
    </div>
</div>
<script>
    $("#range_to") .blur(function() {
        var range_from = parseInt($("#range_from").val());
        var range_to = parseInt($("#range_to").val());
        if (range_to != ''  && range_from > range_to) {
            alert('Range To should be equal to or greater than range from');
            $('#range_to').val('');
        }
           

    });
    $("#range_from") .blur(function() {
        var range_from = parseInt($("#range_from").val());
        var range_to = parseInt($("#range_to").val());
        if (range_from != ''  && range_from > range_to) {
            alert('Range From should be equal to or less than range to');
            $('#range_from').val('');
        }
           

    });
</script>