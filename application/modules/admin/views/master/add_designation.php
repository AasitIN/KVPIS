<?php //pr($users);   ?>

<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Designation</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header"><i class="fas fa-eye"></i> Add Designation</div>
            <?php echo form_open_multipart("", array("method" => "post", "id" => "formID", "autocomplete" => "off")); ?>
            <input type="hidden" name="id" value="<?php echo isset($designation->designation_id) ? $designation->designation_id : ''; ?>">
            <div class="card-body user_view">
                <div class="row">
  <div class="col-md-3">
                        <label>Designation Category:<span class="reqd">*</span></label>
                    </div>
                    <div class="col-md-3">
                        <?php echo form_dropdown("cat_id", array("" => "Select Category") + designation_category_lists(), isset($designation->category_id) ? set_value('cat_id', $designation->category_id) : set_value('cat_id'), 'class="form-control validate[required]"'); ?>
                       <?php  echo form_error('cat_id');
                        ?>
                    </div>
                    <div class="col-md-3">
                        <label>Designation Name:<span class="reqd">*</span></label>
                    </div>
                    <div class="col-md-3">
                        <?php echo form_input("name", isset($designation->designation_name) ? set_value('name', $designation->designation_name) : set_value('name'), 'class="txtOnly validate[required] form-control" ');
                        echo form_error('name');
                        ?>
                    </div>
                </div>
<div class="row">
   <div class="col-md-1">
                        <label>RO:</label>
                    </div>
                    <div class="col-md-1">
                        <input type="checkbox" name="ro" class="form-control" value="1" <?php echo ($designation->ro == 1 ? 'checked' : null); ?>>
                       
                    </div>

<div class="col-md-1">
                        <label>Hq:</label>
                    </div>
                    <div class="col-md-1">
                        <input type="checkbox" name="hq" class="form-control" value="1" <?php echo ($designation->hq == 1 ? 'checked' : null); ?>>
                       
                    </div>
<div class="col-md-1">
                        <label>Zt:</label>
                    </div>
                    <div class="col-md-1">
                        <input type="checkbox" name="zt" class="form-control" value="1" <?php echo ($designation->zt == 1 ? 'checked' : null); ?>>
                       
                    </div>
<div class="col-md-1">
                        <label>Kv:</label>
                    </div>
                    <div class="col-md-1">
                        <input type="checkbox" name="kv" class="form-control" value="1" <?php echo ($designation->kv == 1 ? 'checked' : null); ?>>
                       
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