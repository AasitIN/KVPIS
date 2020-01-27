<script>
 $(document).ready(function () {
		var oTable = $('#dataTableId').dataTable( {
            "processing": true,
            "serverSide": true,
			"order": [[ 0, "desc" ]],
			"lengthMenu": [[10, 25, 50,100], [10, 25, 50,100]],
            "ajax":{
		     "url": "<?php echo site_url('admin/users/get_activities_logs'); ?>",
		     'dataType': 'json',
             'type': 'POST',
			 "data": function ( data ) {
                 
				 data.<?php echo $this->security->get_csrf_token_name(); ?> = "<?php echo $this->security->get_csrf_hash(); ?>";
                
            }
                
		    },
           
            "columns": [
			        {
						"orderable": false,
						"render": function(data, type, row) {
							return  row.serial_no;
						}
				    },

					{ "data": "username" },
					{ "data": "email" },
					{ "data": "role" },
					{ "data": "time" },
					{ "data": "last_login" },
					{ "data": "time" },
					{
						"orderable": false,
						"render": function(data, type, row) {
							return  row.ipaddress;
						}
				    },
					{ "data": "activity_type" },
					{ "data": "form_type" },					
					{ "data": "status" },					
								

            ],  
        });
	});
	
	
</script>