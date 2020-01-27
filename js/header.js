function alpha_numeric(e) {
    var k;
    document.all ? k = e.keyCode : k = e.which;
    return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
}

function LetersOnly() {
    var inputValue = event.charCode;
    if (!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)) {
        event.preventDefault();
    }
}
            
function LettersAndDotOnly() {
    var inputValue = event.charCode;
    if (!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue!=46 && inputValue != 0) ) {
        event.preventDefault();
    }
}
			
function NumberOnly(number) {
    var charCode = (number.which) ? number.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    } else {
        return true;
    }

}
            
function isNumberAndDecimal(txt,event){
    var charCode = (event.which) ? event.which : event.keyCode;
    if (charCode == 46) {
        //Check if the text already contains the . character
        if (txt.value.indexOf('.') === -1) {
            return true;
            } else {
            return false;
            }
        } else {
            if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        }
            return true;
}
//*** ====================== PIS FORM VALIVATION SCRIPT STARTS FROM HERE ====================== ***//
    $(document).ready(function() {
        $(document).on('keydown',".numericOnly",function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
            // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
            // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    });

    $(document).ready(function() {
        
        $("#from_date").datepicker({
        maxDate: "0",
        dateFormat: 'dd-mm-yy',
        changeMonth: true,
        changeYear: true,
        onSelect:function(selected_date){
                   var from_date= $('#from_date').datepicker('getDate');
                           $('#to_date').datepicker('option', 'minDate', from_date);
                }
        });

        $('#to_date').datepicker({		
                //minDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
        });
        
        $("#start_date").datepicker({
        maxDate: "0",
        dateFormat: 'dd-mm-yy',
        changeMonth: true,
        changeYear: true,
            onSelect:function(selected_date){
                var start_date= $('#start_date').datepicker('getDate');
                                $('#end_date').datepicker('option', 'minDate', start_date);
            }
        });

        $('#end_date').datepicker({		
                //minDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
        });
        
        $("#liensdate").datepicker({
        maxDate: "0",
        dateFormat: 'dd-mm-yy',
        changeMonth: true,
        changeYear: true,
            onSelect:function(selected_date){
                var liensdate= $('#liensdate').datepicker('getDate');
                               $('#lienedate').datepicker('option', 'minDate', liensdate);
            }
        });

        $('#lienedate').datepicker({		
            //minDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
        });

        $("#common_datepicker").datepicker({
            maxDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
        }); 

        $(".common_datepicker").datepicker({
            maxDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
        }); 

        $(".future_datepicker").datepicker({
            minDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+10",
        }); 

    });

    $(document).ready(function () {
				
        $(document).on('keydown','.txtOnly',function(e){
            var key = e.keyCode;
            if ( (key >= 48 && key <= 57) || (key >= 96 && key <= 105) || (key >= 186) && (key <= 192) || (key >= 219) && (key <= 223)) {
                e.preventDefault();
            }
        });
                
        $(document).on('keydown','.txtanddotOnly',function(e){
            var key = e.keyCode;
            if ( (key >= 48 && key <= 57) || (key >= 96 && key <= 105) || (key >= 186) && (key <= 189) || (key >= 191) && (key <= 192) || (key >= 219) && (key <= 223)) {
                e.preventDefault();
            }
        });
                
        $(document).on('keydown','.noSpace',function(e){
            var key = e.keyCode;
            if ( key == 32) {
                e.preventDefault();
            }
        });

 
	$(document).on("keypress","input", function(e) {
            if (e.which === 32 && !this.value.length)
            {
                e.preventDefault();
            } 
            if(this.value.length >=100 )
            {
                e.preventDefault();  
            }
        });
				
        $( document ).on( 'focus', ':input', function(){
            $( this ).attr( 'autocomplete', 'off' );
        });
				
	$(document).on("keypress","textarea", function(e) {
               
            if (e.which === 32 && !this.value.length)
            {
                e.preventDefault();
            } 
            if(this.value.length >=500)
            {
                e.preventDefault();  
            }
        });
				
        $(document).on('keyup','.minone',function(){
            if($(this).val() < 1)
            {
                $(this).val('');
            }else{
            }
        });

        $(document).on('keydown keyup change','.general',function(e){
            if (this.value.length == 2 )
            {
                if($(this).val() < 1)
                {
                    $(this).val('');
                }

            }

        });
				
        $(document).on('keydown keyup change','.general_new',function(e){
            if (this.value.length == 3 )
            {
                if($(this).val() < 2)
                {
                    $(this).val('');
                }

            }

        });

               
        //$(".decimalNumericOnly").on("keypress keyup blur",function (event) {
        $(document).on("keypress",".decimalNumericOnly",function (event) {
            $(this).val($(this).val().replace(/[^0-9\.]/g,''));
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });

                 
        function validateEmail(sEmail) {
            var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/;
            if (filter.test(sEmail)) {
                return true;
            } else {
                return false;
            }
        }

        $('#unique_email').blur(function () {
            var sEmail = $(this).val();
            if ($.trim(sEmail).length == 0) {
                $("#label_email").html('Please enter valid email address');
                e.preventDefault();
            }
            if (validateEmail(sEmail)) {
                $("#label_email").html("");
            } else {
                $("#label_email").html('Please enter valid email address');
                e.preventDefault();
            }
        });
               
    });
			
    setTimeout(function() { $('.alert-danger').fadeOut('fast'); }, 3000); // <-- time in milliseconds
    setTimeout(function() { $('.alert-success').fadeOut('fast'); }, 2000);
    
    $(function () {
        $(".print-btn").click(function () {
            var contents = $("#printTable").html();
            var frame1 = $('<iframe />');
            frame1[0].name = "frame1";
            frame1.css({"position": "absolute", "top": "-1000000px"});
            $("body").append(frame1);
            var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
            frameDoc.document.open();
            //Create a new HTML document.
            frameDoc.document.write('<html><head><title> CHECKLIST </title>');
            frameDoc.document.write('</head><body>');

            frameDoc.document.write('<link rel="stylesheet" href="<?php echo base_url(); ?>css/print.css" />');
            //Append the external CSS file.
            // frameDoc.document.write('<link rel="stylesheet" href="http://182.74.129.18/msk/css/print.css" />');
            //Append the DIV contents.
            frameDoc.document.write(contents);
            frameDoc.document.write('</body></html>');
            frameDoc.document.close();
            setTimeout(function () {
                window.frames["frame1"].focus();
                window.frames["frame1"].print();
                frame1.remove();
            }, 500);
        });
    });
    
//Single Image Validation 
$(document).ready(function () {
    $("#emp_photo").change(function(){
        $("#valid_image").html('');
	var input=this;
	var image_name=input.files[0].name;
	var split = image_name.split('.');
	var sizeof=split.length; 
        //var toLowerCase = input.files[0].type.split('/').pop().toLowerCase();		 
            if(sizeof > 2){
                console.log('Double extension not allow');
                $("#valid_image").html('Double extension file not allowed');
                $("#emp_photo").val('');
                return false;
            }else{
		var iSize = ((input.files[0].size) / 1024);
		var limit_image_size = (Math.round((iSize / 1024) * 100) / 100);
		if(limit_image_size <= 2){
                    if (input.files[0].type=='image/jpeg' || input.files[0].type=='image/jpg' || input.files[0].type=='image/png') {
                    var reader = new FileReader();
			reader.onload = function (e) {
                            $(input).parent().find("img").remove();
                            $(input).parent().append("<img src='"+e.target.result+"' class='preview-img'>");
                        }
			reader.readAsDataURL(input.files[0]);
                    }else{
                            $("#valid_image").html("Invalid! Please upload valid image format");
                            $("#emp_photo").val('');
                            return false;
                    }
                }else{
                        $("#valid_image").html("Please select image size less than or equal to 2 MB");
                        $("#emp_photo").val('');
                        return false;
                }
            }
    });
});