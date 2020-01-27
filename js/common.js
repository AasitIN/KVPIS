jQuery(document).ready(function () {
	jQuery("#formID").validationEngine();
    $('input[name="checkall"]').click(function () {
        var isChecked = this.checked;
        $('input[name="listitems"]').each(function () {
            this.checked = isChecked;
        });
    });
    $('#delete-all').submit(function () {
        var checkedItems = $('input[name="listitems"]:checked').length;
        if (checkedItems == 0) {
            alert(message.selectOne);
            return false;
        } else {
            if (confirm(message.confirmMessage)) {
                var chkId = '';
                $('input[name="listitems"]:checked').each(function () {
                    chkId += $(this).val() + ",";
                });
                chkId = chkId.slice(0, -1);
                $('#deleteAllValue').val(chkId);
                return true;
            } else {
                return false;
            }
        }

    });
	
	//tabing section
    $('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

	

});

var message = {
    noPage: 'Page not found',
    selectOne: 'Please select atleast one record',
    confirmMessage: 'This operation can not undone. Are you sure you want continue to perform this action?',
    confirmContinue: 'Are you sure you want to continue this operation?',
};

