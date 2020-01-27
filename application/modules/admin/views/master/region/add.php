<?php //pr($users);   ?>

<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Region/Ziet/KV Abroad</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header"><i class="fas fa-eye"></i> Add Region/Ziet/KV Abroad</div>
            <?php echo form_open_multipart("", array("method" => "post", "id" => "formID", "autocomplete" => "off")); ?>
            <input type="hidden" name="id" value="<?php echo isset($region->id) ? $region->id : ''; ?>">
            <div class="card-body user_view">
                <div class="row">
                    <div class="col-md-2">
                        <label>Zone <span class="reqd">*</span></label>
                    </div>
                    <div class="col-md-4">
                        <?php echo form_dropdown("zone", array("" => "Select Zone") + zone(), isset($region->zone) ? set_value('zone', $region->zone) : set_value('zone'), 'class="validate[required] form-control " ');
                        echo form_error('zone');
                        ?>
                    </div>
                    
                    <div class="col-md-2">
                        <label>Region/ZEIT/KV Abroad:<span class="reqd">*</span></label>
                    </div>
                    <div class="col-md-4">
                        <?php echo form_dropdown("region_type", array("" => "Select Type") + region_type(), isset($region->region_type) ? set_value('region_type', $region->region_type) : set_value('region_type'), 'class="validate[required] form-control " ');
                        echo form_error('region_type');
                        ?>
                    </div>

                   
                    
                    
                </div>
                
                <div class="row">
                    <div class="col-md-2">
                        <label>Name:<span class="reqd">*</span></label>
                    </div>
                    <div class="col-md-4">
                        <?php echo form_input("name", isset($region->name) ? set_value('name', $region->name) : set_value('name'), 'class="validate[required] form-control" ');
                        echo form_error('name');
                        ?>
                    </div>
                    <div class="col-md-2">
                        <label>Code:</label>
                    </div>
                    <div class="col-md-4">
                        <?php echo form_input("code", isset($region->code) ? set_value('code', $region->code) : set_value('code'), 'class="numericOnly validate[required] form-control" ');
                        echo form_error('code');
                        ?>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-2">
                        <label>Website Url:</label>
                    </div>
                    <div class="col-md-4">
                        <?php echo form_input("website", isset($region->website) ? set_value('website', $region->website) : set_value('website'), 'class="validate[custom[url]] form-control" ');
                        echo form_error('website');
                        ?>
                    </div>
                    <div class="col-md-2">
                        <label>Email:</label>
                    </div>
                    <div class="col-md-3">
                        <?php echo form_input("email", isset($region->email) ? set_value('email', $region->email) : set_value('email'), 'class="validate[custom[email]] form-control" ');
                        echo form_error('email');
                        ?>
                    </div>


                </div>
                <?php
                echo form_submit('', 'Submit', 'class="btn btn-primary"'); ?>
                <input type="reset" value="Cancel" class="btn btn-default">
                
<?php echo form_close(); ?>
            </div>
        </div>	
    </div>
</div>