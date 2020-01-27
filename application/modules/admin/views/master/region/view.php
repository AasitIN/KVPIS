<?php //pr($users);  ?>

<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Region/Zeit/KV Abroad Name View</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header"><i class="fas fa-eye"></i> Region/Zeit/KV Abroad Name View</div>
            <div class="card-body user_view">
                <div class="row">

                    <div class="col-md-2">
                        <label>Name:</label>
                    </div>
                    <div class="col-md-2">
                        <p><?php echo $region->name; ?></p>
                    </div>
                    <div class="col-md-2">
                        <label>Code:</label>
                    </div>
                    <div class="col-md-2">
                        <p><?php echo $region->code; ?></p>
                    </div>
                    <div class="col-md-2">
                        <label>Zone:</label>
                    </div>
                    <div class="col-md-2">
                        <p><?php echo $region->zonename; ?></p>
                    </div>
                    
                    
                </div>
                
                <div class="row">
                    <div class="col-md-2">
                        <label>Website:</label>
                    </div>
                    <div class="col-md-2">
                        <p><?php echo $region->website; ?></p>
                    </div>
                    <div class="col-md-3">
                        <label>Region Email:</label>
                    </div>
                    <div class="col-md-3">
                        <p><?php echo $region->email; ?></p>
                    </div>
                    
                </div>
                
            </div>
        </div>	
    </div>
</div>