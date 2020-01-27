<?php //pr($users);  ?>

<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Subject View</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header"><i class="fas fa-eye"></i> Subject View</div>
            <div class="card-body user_view">
                <div class="row">

                    <div class="col-md-3">
                        <label>Subject Name:</label>
                    </div>
                    <div class="col-md-3">
                        <p><?php echo $subject->name; ?></p>
                    </div>

                     
                    
                </div>
                
            </div>
        </div>	
    </div>
</div>