<?php //pr($users);  ?>

<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Roles View</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header"><i class="fas fa-eye"></i> Roles View</div>
            <div class="card-body user_view">
                <div class="row">

                    <div class="col-md-3">
                        <label>Role Name:</label>
                    </div>
                    <div class="col-md-3">
                        <p><?php echo $roles->name; ?></p>
                    </div>

                     <div class="col-md-3">
                        <label>Role Description:</label>
                    </div>
                    <div class="col-md-3">
                        <p><?php echo $roles->description; ?></p>
                    </div>
                    
                </div>
                <div class="row"><div class="col-md-3">
                        <label>Status:</label>
                    </div>
                    <div class="col-md-3">
                        <p>
                            <?php echo $roles->status == 1 ? 'Active' : 'In-active'; ?>
                        </p>
                    </div></div>
            </div>
        </div>	
    </div>
</div>