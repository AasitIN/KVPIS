<script>
    $(document).ready(function () {
    var oTable = $('#dataTableId').dataTable( {
        "processing": true,
        "serverSide": true,
        "order": [[ 0, "asc" ]],
        "oLanguage": {   "sSearch": "Search By Name / Code" },
        "lengthMenu": [[10, 25, 50,100,-1], [10, 25, 50,100,"ALL"]],
        "dom": 'lBfrtip',
        "buttons": [
                {
                    extend: 'excel',
                    text: '<i class="fa fa-file-excel-o"></i> Export In Excel',
                    titleAttr: 'Export Data In Excel',
                    title: 'Compliance Reports',
                    exportOptions: {
                        modifier: {
                            search: 'applied',
                            order: 'applied'
                        },
                        columns: [1,2,3]
                    }
                    
                },
        ],

        "ajax":{
            "url": "<?php echo site_url('compliance/hqest_complaince_report'); ?>",
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
                { "data": "name" },
                { "data": "code" },
                { "data": "status" },
               					
		],  
    });
 });
    </script>
