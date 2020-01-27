<?php
//print_r($users); 
$NA='NA';  ?>

<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Users View</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header"><i class="fas fa-eye"></i> Users View</div>
            <div class="card-body user_view">
                <div class="row">
                    <div class="col-md-2">
                        <label>Username:</label>
                    </div>
                    <div class="col-md-2">
                        <p><?php echo $users->username; ?></p>
                    </div>
                    <div class="col-md-2">
                        <label>Role:</label>
                    </div>
                    <div class="col-md-2">
                        <p><?php echo $users->ROLE; ?></p>
                    </div>
                    <div class="col-md-2">
                        <label>Category:</label>
                    </div>
                    <div class="col-md-2">
                        <p> <?php echo $users->CATG; ?></p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-2">
                        <label>Region:</label>
                    </div>
                    <div class="col-md-2">
                        <p> <?php echo $users->REGION; ?></p>
                    </div>
                    <div class="col-md-2">
                        <label>School:</label>
                    </div>
                    <div class="col-md-2">
                        <p> <?php echo $users->SCHOOL; ?></p>
                    </div>
                    <div class="col-md-2">
                        <label>Status:</label>
                    </div>
                    <div class="col-md-2">
                        <p> <?php echo $users->status == 1 ? '<span class="text-success">ACTIVE</span>' : '<span class="text-danger">IN-ACTIVE</span>'; ?></p>
                    </div>
                </div>
            </div>
        </div>	
    </div>
</div>