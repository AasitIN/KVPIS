<script>
    $(document).ready(function () {
        var oTable = $('#dataTableId').dataTable({
            "processing": true,
            "serverSide": true,
            "order": [[1, "asc"]],
            "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]],
            'columnDefs': [
            { className: 'text-center', targets: [4,5] }
            ],
            "dom": 'lBfrtip',
		"buttons": [
			{
                            extend: 'excel',
                            text: '<i class="fas fa-file-excel-o" style="padding: 0px 5px;"></i>',
                            titleAttr: 'EXCEL',
                            title: 'Profile-List',
                            exportOptions: {
				 columns: [1,2,3]
                            }
			},
		  ],
            "ajax": {
                "url": "<?php echo site_url('profile/profilelist/get_profile'); ?>",
                'dataType': 'json',
                'type': 'POST',
                "data": function (data) {
                    data.<?php echo $this->security->get_csrf_token_name(); ?> = "<?php echo $this->security->get_csrf_hash(); ?>";
                }
            },
            "columns": [
                            {
                                "orderable": false,
                                "render": function (data, type, row) { return  row.serial_no; }
                            },
                            {"data": "emp_code"},
                            {"data": "emp_type"},
                            {"data": "emp_name"},
                            {
                                "orderable": false,
                                "render": function (data, type, row) {
                                    return '<a href="<?php echo site_url(); ?>profile/index?EC=' + row.decode_id + '"><i class="fas fa-eye" title="View">&nbsp;View</i></a>';
                                }
                            },
                            {
                                "orderable": false,
                                "render": function (data, type, row) {
                                    return '<a href="<?php echo site_url(); ?>employee/personal_details?EC='+row.decode_id+'"><i class="fas fa-edit" title="Edit">&nbsp;Edit</i></a>';
                                }
                            },
            ],
        });
    });
  
</script>