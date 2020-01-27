<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Designation</li>
        </ol> 

        <!-- DataTables Example --> 
        <div class="card mb-3">
            <div class="card-header"><i class="fa fa-sliders" aria-hidden="true"></i>&nbsp; Designation List
                <a href="<?php echo base_url() . 'admin/master/add_designation' ?>" class="btn btn-warning" style="float:right;line-height: 5px;"><i class="fa fa-plus-circle"></i>&nbsp;Add Designation</a>
            </div>
            <?php
            if ($this->session->flashdata('success')) {
                ?>
                <div class="alert alert-success">
                    <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php
            }
            ?>
            <?php
            if ($this->session->flashdata('error')) {
                ?>
                <div class="alert alert-danger">
                    <strong>Success!</strong> <?php echo $this->session->flashdata('error'); ?>
                </div>
                <?php
            }
            ?>
            <div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTableId" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th><?php echo SN; ?></th>
                                <th>Designation Category</th>
                                <th>Designation Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->

<!-- END CONTENT -->
<?php echo $this->load->view("admin/js/master/designation_js", '', true); ?>     


