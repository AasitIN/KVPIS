<?php //pr($users);   ?>

<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add School</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header"><i class="fas fa-eye"></i> Add School</div>
            <?php echo form_open_multipart("", array("method" => "post", "id" => "formID", "autocomplete" => "off")); ?>
            <input type="hidden" name="id" value="<?php echo isset($school->id) ? $school->id : ''; ?>">
            <div class="card-body user_view">
                <div class="row">
                    
                    <div class="col-md-2">
                        <label>Region <span class="reqd">*</span></label>
                    </div>
                    <div class="col-md-4">
                        <?php echo form_dropdown("reg_id", array("" => "Select Region") + masterregion_lists(), isset($school->regid) ? set_value('reg_id', $school->regid) : set_value('reg_id'), 'class="validate[required] form-control " ');
                        echo form_error('reg_id');
                        ?>
                    </div>
                    <div class="col-md-2">
                        <label>Station <span class="reqd">*</span></label>
                    </div>
                    <div class="col-md-4">
                        <?php echo form_dropdown("station", array("" => "Select Station") + master_station_lists(), isset($school->station) ? set_value('reg_id', $school->station) : set_value('station'), 'class="validate[required] form-control " ');
                        echo form_error('station');
                        ?>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label>Zone <span class="reqd">*</span></label>
                    </div>
                    <div class="col-md-4">
                        <?php echo form_dropdown("zone", array("" => "Select Zone") + zone(), isset($school->zone) ? set_value('zone', $school->zone) : set_value('zone'), 'class="validate[required] form-control " ');
                        echo form_error('zone');
                        ?>
                    </div>
                    <div class="col-md-2">
                        <label>School Name:<span class="reqd">*</span></label>
                    </div>
                    <div class="col-md-4">
                        <?php echo form_input("name", isset($school->name) ? set_value('name', $school->name) : set_value('name'), 'class="txtOnly validate[required] form-control" ');
                        echo form_error('name');
                        ?>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-2">
                        <label>School Code:</label>
                    </div>
                    <div class="col-md-4">
                        <?php echo form_input("code", isset($school->code) ? set_value('code', $school->code) : set_value('code'), 'class="numericOnly validate[required] form-control" ');
                        echo form_error('code');
                        ?>
                    </div>
                </div>
               
               
                <div class="text-right">
                <?php
                echo form_submit('', 'Submit', 'class="btn btn-primary"'); ?>
                <input type="reset" value="Cancel" class="btn btn-default">
                </div>
                
                <?php echo form_close(); ?>
            </div>
        </div>	
    </div>
</div>