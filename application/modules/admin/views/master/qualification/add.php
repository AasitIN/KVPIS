<?php //pr($users);   ?>

<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Qualification</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header"><i class="fas fa-eye"></i> Add Qualification</div>
            <?php echo form_open_multipart("", array("method" => "post", "id" => "formID", "autocomplete" => "off")); ?>
            <input type="hidden" name="id" value="<?php echo isset($qualification->id) ? $qualification->id : ''; ?>">
            <div class="card-body user_view">
                <div class="row first-row">

                    <div class="col-md-2">
                        <label>Qualification Name:<span class="reqd">*</span></label>
                    </div>
                    <div class="col-md-3">
                        <?php echo form_input("name", isset($qualification->name) ? set_value('name', $qualification->name) : set_value('name'), 'class="txtOnly validate[required] form-control" ');
                        echo form_error('name');
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