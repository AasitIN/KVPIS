<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Level Range View</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header"><i class="fas fa-eye"></i> Level Range View</div>
            <div class="card-body user_view">
                <div class="row">
                    <div class="col-md-3">
                        <label>Level Name:</label>
                    </div>
                    <div class="col-md-3">
                        <p><?php echo $data->level_name; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label>Range From:</label>
                    </div>
                    <div class="col-md-3">
                        <p><?php echo $data->range_from; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label>Range To:</label>
                    </div>
                    <div class="col-md-3">
                        <p><?php echo $data->range_to; ?></p>
                    </div>
                </div>
                
            </div>
        </div>	
    </div>
</div>