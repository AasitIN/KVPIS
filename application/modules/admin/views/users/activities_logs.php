<div id="content-wrapper">
  <div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
	  <li class="breadcrumb-item">
		<a href="#">Dashboard</a>
	  </li>
	  <li class="breadcrumb-item active">User Activity Log</li>
	</ol>

	<!-- DataTables Example -->
	<div class="card mb-3">
	  <div class="card-header"><i class="fa fa-user"></i> User Activity Log List</div>
	  <div class="card-body">
		<div class="table-responsive">
		  <table class="table table-bordered" id="dataTableId" width="100%" cellspacing="0">
			<thead>
			  <tr>
			    <th><?php echo SN;?></th>
				<th>Username</th>
				<th>Email Id</th>
				<th>Role</th>
				<th>Last Access</th>
				<th>Last Login</th>
				<th>Created Date/Time</th>
				<th>Ip Address</th>
				<th>Activity Type</th>
				<th>Form Type</th>
				
				<th>Status</th>
			  </tr>
			</thead>
		  </table>
		</div>
	  </div>
	</div>
  </div>
</div>

<?php echo $this->load->view("admin/js/users/activities_logs_js",'',true); ?>        

