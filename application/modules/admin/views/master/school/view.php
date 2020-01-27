<?php //pr($users);  ?>

<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">School View</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header"><i class="fas fa-eye"></i> School View</div>
            <div class="card-body user_view">
                <div class="row">

                    <div class="col-md-3">
                        <label>School Name:</label>
                    </div>
                    <div class="col-md-3">
                        <p><?php echo $school->name; ?></p>
                    </div>

                    <div class="col-md-3">
                        <label>Region Name: </label>
                    </div>
                    <div class="col-md-3">
                        <p><?php echo $school->regionname; ?></p>
                    </div>
                    
                </div>
                <div class="row">

                    <div class="col-md-3">
                        <label>Station:</label>
                    </div>
                    <div class="col-md-3">
                        <p><?php echo $school->station_name; ?></p>
                    </div>

                    <div class="col-md-3">
                        <label>Zone: </label>
                    </div>
                    <div class="col-md-3">
                        <p><?php echo $school->zone_name; ?></p>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label>School Code:</label>
                    </div>
                    <div class="col-md-3">
                        <p><?php echo $school->code; ?></p>
                    </div>
                    
                </div>
                
            </div>
        </div>	
    </div>
</div>