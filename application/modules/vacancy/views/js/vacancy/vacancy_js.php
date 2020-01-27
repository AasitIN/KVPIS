<script>
    $(document).ready(function () {
        var logown="<?php echo $this->session->userdata['user_id'] ?>";
        var oTable = $('#dataTableId').dataTable({
            "processing": true,
            "serverSide": true,
            "order": [[1, "asc"]],
            "oLanguage": {   "sSearch": "Search By Name / Code" },
            "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]],
            "columnDefs": [{ className: 'text-center', targets: [4,5] }],
            "dom": 'lBfrtip',
            "buttons": [
                            {
                                extend: 'excel',
                                text: '<i class="fas fa-file-excel-o" style="padding: 0px 5px;"></i>Excel',
                                titleAttr: 'EXCEL',
                                title: 'Registered_Employee_List',
                                exportOptions: {columns: [1,2,3,4,5,6]}
                            }
                        ],
            "ajax": {
                "url"       : "<?php echo site_url('vacancy/vacancy/get_all_vacancy'); ?>",
                'dataType'  : 'json',
                'type'      : 'POST',
                "data"      : function (data) {
                                data.<?php echo $this->security->get_csrf_token_name(); ?> = "<?php echo $this->security->get_csrf_hash(); ?>";
                                
                                //console.log(data);
                            }
            },
            "columns": [
                            {
                                "orderable": false,
                                "render": function (data, type, row) { return  row.serial_no; }
                            },
                            {"data": "KV_CODE"},
                            {"data": "ROLE"},
                            {"data": "KV_REGION_ZEIT"},
                            {"data": "IN_POST"},
                            {"data": "DESI_TYPE"},
                            {"data": "IN_SUBJECT"},
                            {"data": "SANCTION_POST"},
                            {"data": "IN_POSITION"},
                            {"data": "TOTAL_VACANCY"},
                            
                    ],
        });
    });
</script>