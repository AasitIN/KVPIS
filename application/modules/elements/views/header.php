<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title><?php echo $title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="KVS-PIS" name="Kendriya Vidyalaya Sangathan" />
  <meta content="Kendriya Vidyalaya Sangathan" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <!--for js css-->
    <link href="<?php echo base_url(); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>css/validation/validationEngine.jquery.css" rel="stylesheet"/>
    <!--<link href="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet"/>-->
    <link href="<?php echo base_url(); ?>vendor/datatable/jquery.dataTables.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>css/sb-admin.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>css/jquery/ui-1.12.1/jquery-ui.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet"/>
    
    <link href="<?php echo base_url(); ?>vendor/alertify/css/alertify.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>vendor/alertify/css/themes/default.css" rel="stylesheet"/>

    <!--for js script-->
    <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/validation/jquery.validationEngine.js"></script>
    <script src="<?php echo base_url(); ?>js/validation/jquery.validationEngine-en.js"></script>
    <script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatable/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatable/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatable/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatable/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatable/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatable/buttons.html5.min.js"></script>
    <!--<script src="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.js"></script>-->
    <script src="<?php echo base_url(); ?>js/sb-admin.min.js"></script>
    <script src="<?php echo base_url(); ?>js/demo/datatables-demo.js"></script>
    <script src="<?php echo base_url(); ?>js/mustache.min.js"></script>
    <script src="<?php echo base_url(); ?>js/common.js"></script>
    <script src="<?php echo base_url(); ?>js/common_js.js"></script>
    <script src="<?php echo base_url(); ?>js/header.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery_validate.js"></script>
    <script src="<?php echo base_url(); ?>js/encrypt.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery/ui-1.12.1/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>js/handlebars.js"></script>
    <script src="<?php echo base_url(); ?>js/typeahead.bundle.js"></script>
    <script src="<?php echo base_url(); ?>vendor/alertify/alertify.js"></script>
    <?php
    if (isset($javascripts)) {
        foreach ($javascripts as $jskey => $javascript) {
            if (is_string($jskey)) {
                echo $javascript . "\n";
            } else {
                echo script_tag($javascript) . "\n";
            }
        }
    }
    ?>
    <!-- for css style-->
    <?php
    if (isset($style_sheets)) {
        foreach ($style_sheets as $href => $media) {
              echo link_tag(array('href' => $media, 'rel' => 'stylesheet')) . "\n";
        }
    }
    ?>
</head>

<body>
    <input type="hidden" id="url" value="<?php echo base_url();?>">
    <input type="hidden" id="get_csrf_token_name" value="<?php echo $this->security->get_csrf_token_name(); ?>">
    <input type="hidden" id="get_csrf_hash" value="<?php echo $this->security->get_csrf_hash(); ?>">
    <?php $this->session->set_userdata(array('csrf_hash'=>$this->security->get_csrf_hash()));?>
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
        <a class="anchor_logo" href="<?php echo site_url('admin/dashboard');?>">
            <img class="kvs_logo" src="<?php echo base_url(); ?>img/kvs-logo1bk.png">
        </a>

        <div class="pisheading text-center">
            <h6 style="margin-bottom: 0px;color: #ff8d17!important;font-size:15px;text-shadow: 1px 1px 1px #1a1a1a;">केंद्रीय विद्यालय संगठन </h6>
            
            <span style="text-shadow: 1px 1px 1px #1a1a1a;letter-spacing: 1px;">KENDRIYA VIDYALAYA SANGATHAN</span>
            <hr style="margin: 0px!important;border-bottom: 1px solid #80A5B4;">
            <h6 style="color: #4CAF50;text-shadow: 1px 1px 0px #1a1a1a; letter-spacing: 3px;font-size: 16px;font-family: serif;font-weight: bold;">PERSONNEL INFORMATION SYSTEM</h6>
        </div>
        
        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></form>
        
        <!-- Navbar -->
        <ul class="navbar-nav ml-auto mr-md-5">
            <li class="nav-item dropdown no-arrow text-center">
                <a class="nav-link" href="<?php echo base_url('admin/notification'); ?>" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-comments fa-3" style="font-size: 36px; position: absolute; left: -50px;">
                        <?php 
                            $ids=$this->session->userdata('user_id');
                            $msg = GetNotificationCount($ids);
                            if(!empty($msg)){
                        ?>
                            <span style="
                                    background: #f00;
                                    color: #cccccc;
                                    border-radius: 20px;
                                    padding: 2px 6px;
                                    position: absolute;
                                    top: -5px;
                                    font-size: 16px;"><?php echo $msg; ?></span>
                        <?php } ?>
                    </i>
                </a>
                
            </li>
            <li class="nav-item dropdown no-arrow text-center">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-3" style="font-size:36px;"></i>
                    <br><small>Hi! <?php echo ucfirst($this->auth_data->username);?></small>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?php echo site_url('settings/profile'); ?>">Profile</a>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo site_url('admin/users/activities_logs'); ?>">Activity Logs</a>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo site_url('settings/change_password'); ?>">Change Password</a>
                <div class="dropdown-divider"></div> 
                    <a class="dropdown-item" href="<?php echo site_url('login/logout'); ?>">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>