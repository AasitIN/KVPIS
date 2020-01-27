<style>
    .buttons-excel{
       background-color: green;
       color: white;
    }
    
</style>
<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
	<ol class="breadcrumb">
            <li class="breadcrumb-item">
		<a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Send Mail</li>
	</ol>
        <!-- DataTables Example --> 
	<div class="card mb-3">
            <div class="card-header"><i class="fa fa-comment"></i> Send your feedback</div>
            <div class="card-body">
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
                <?php echo form_open("", array("method" => "post", "id" => "formID", "autocomplete" => "off")); ?>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label>Message/Feedback</label>
                    </div>
                    <div class="form-group col-md-9">
                        <textarea placeholder="Type your message here.." class="form-control validate[required]" name="message" id="emp_address"></textarea>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        
                    </div>
                    <div class="form-group col-sm-6">
                        <div> 
                            <?php 
                                echo form_submit('', 'Send mail', 'class="btn btn-primary"');
                               
                            ?>
                            
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
	</div>
    </div>
</div>


