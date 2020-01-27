<?php //pr($users);   ?>

<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Role</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header"><i class="fas fa-eye"></i> Add Role</div>
            <?php echo form_open_multipart("", array("method" => "post", "id" => "formID", "autocomplete" => "off")); ?>
            <input type="hidden" name="id" value="<?php echo isset($roles->id) ? $roles->id : ''; ?>">
            <div class="card-body user_view">
                <div class="row">

                    <div class="col-md-2">
                        <label>Role Name:<span class="reqd">*</span></label>
                    </div>
                    <div class="col-md-3">
                        <?php echo form_input("name", isset($roles->name) ? set_value('name', $roles->name) : set_value('name'), 'class="txtOnly validate[required] form-control" ');
                        echo form_error('name');
                        ?>
                    </div>
                    <div class="col-md-2">
                        <label>Role Description:<span class="reqd">*</span></label>
                    </div>
                    <div class="col-md-3">
                        <?php echo form_input("description", isset($roles->description) ? set_value('description', $roles->description) : set_value('description'), 'class="txtOnly validate[required] form-control" ');
                        echo form_error('description');
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