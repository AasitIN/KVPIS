<?php //pr($users);  ?>

<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Designation View</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header"><i class="fas fa-eye"></i> Designation View</div>
            <div class="card-body user_view">
                <div class="row">
                    <div class="col-md-3">
                        <label>Designation Category:</label>
                    </div>
                    <div class="col-md-3">
                        <p><?php echo $designation->category_name; ?></p>
                    </div>
                    <div class="col-md-3">
                        <label>Designation Name:</label>
                    </div>
                    <div class="col-md-3">
                        <p><?php echo $designation->designation_name; ?></p>
                    </div>

                    
                </div>
               
            </div>
        </div>	
    </div>
</div>