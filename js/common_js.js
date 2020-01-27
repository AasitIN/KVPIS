//for pdf validation secction
jQuery(document).ready(function () {
    $("#pdf_only").change(function () {
        var input = this;
        var pdf_name = input.files[0].name;
        var split = pdf_name.split('.');
        var sizeof = split.length;

        var pdf_valid = $(this).attr("pdf_valid");
        var pdf_size = $(this).attr("pdf_size");
        var pdf_double_extension = $(this).attr("pdf_double_extension");
        if (sizeof > 2) {
            $("#pdf_double_extension" + pdf_double_extension).html("Double extension not allow");
            $("#pdf_size" + pdf_size).hide();
            $("#pdf_valid" + pdf_valid).hide();
            $("#pdf_double_extension" + pdf_double_extension).show();
        } else {
            var iSize = ((input.files[0].size) / 1024);
            var image_size = (Math.round((iSize / 1024) * 100) / 100);

            if (image_size <= 2) {

                if (input.files[0].type == 'application/pdf') {
                    var reader = new FileReader();
                    reader.readAsDataURL(input.files[0]);
                    $("#pdf_size" + pdf_size).hide();
                    $("#pdf_valid" + pdf_valid).hide();
                    $("#pdf_double_extension" + pdf_double_extension).hide();

                } else {
                    $("#pdf_valid" + pdf_valid).html("Invalid pdf.Please select valid pdf");
                    $("#pdf_size" + pdf_size).hide();
                    $("#pdf_valid" + pdf_valid).show();
                    $("#pdf_double_extension" + pdf_double_extension).hide();
                    return false;
                }
            } else {
                $("#pdf_size" + pdf_size).html("Pdf size greater than 2 MB.Please select pdf size less than or equal to 2 MB");
                $("#pdf_size" + pdf_size).show();
                $("#pdf_valid" + pdf_valid).hide();
                $("#pdf_double_extension" + pdf_double_extension).hide();
                return false;
            }
        }
    });

$("#pdf_step_3_1,#pdf_step_3_2,#pdf_step_3_3,#pdf_step_3_4").change(function () {
        var input = this;
        var pdf_name = input.files[0].name;
        var split = pdf_name.split('.');
        var sizeof = split.length;

        var pdf_valid = $(this).attr("pdf_valid");
        var pdf_size = $(this).attr("pdf_size");
        var pdf_double_extension = $(this).attr("pdf_double_extension");
        if (sizeof > 2) {
            $("#pdf_double_extension" + pdf_double_extension).html("Double extension not allow");
            $("#pdf_size" + pdf_size).hide();
            $("#pdf_valid" + pdf_valid).hide();
            $("#pdf_double_extension" + pdf_double_extension).show();
        } else {
            var iSize = ((input.files[0].size) / 1024);
            var image_size = (Math.round((iSize / 1024) * 100) / 100);

            if (image_size <= 2) {

                if (input.files[0].type == 'application/pdf' || input.files[0].type == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' || input.files[0].type == 'application/msword' ) {
                    var reader = new FileReader();
                    reader.readAsDataURL(input.files[0]);
                    $("#pdf_size" + pdf_size).hide();
                    $("#pdf_valid" + pdf_valid).hide();
                    $("#pdf_double_extension" + pdf_double_extension).hide();

                } else {
                    $("#pdf_valid" + pdf_valid).html("Invalid File. Please select valid pdf/doc/docx file");
                    $("#pdf_size" + pdf_size).hide();
                    $("#pdf_valid" + pdf_valid).show();
                    $("#pdf_double_extension" + pdf_double_extension).hide();
                    return false;
                }
            } else {
                $("#pdf_size" + pdf_size).html("File size is greater than 2 MB. Please select file size less than or equal to 2 MB");
                $("#pdf_size" + pdf_size).show();
                $("#pdf_valid" + pdf_valid).hide();
                $("#pdf_double_extension" + pdf_double_extension).hide();
                return false;
            }
        }
    });
    
    $("#zip_only").change(function () {
        var input = this;
        var zip_name = input.files[0].name;
        var split = zip_name.split('.');
        var sizeof = split.length;

        var zip_valid = $(this).attr("zip_valid");
        var zip_size = $(this).attr("zip_size");
        var zip_double_extension = $(this).attr("zip_double_extension");
        if (sizeof > 2) {
            $("#zip_double_extension" + zip_double_extension).html("Double extension not allow");
            $("#zip_size" + zip_size).hide();
            $("#zip_valid" + zip_valid).hide();
            $("#zip_double_extension" + zip_double_extension).show();
        } else {
            var iSize = ((input.files[0].size) / 1024);
            var image_size = (Math.round((iSize / 1024) * 100) / 100);

            if (image_size <= 10) {

                if (input.files[0].type == 'application/zip' || input.files[0].type == 'application/x-zip') {
                    var reader = new FileReader();
                    reader.readAsDataURL(input.files[0]);
                    $("#zip_size" + zip_size).hide();
                    $("#zip_valid" + zip_valid).hide();
                    $("#zip_double_extension" + zip_double_extension).hide();

                } else {
                    $("#zip_valid" + zip_valid).html("Invalid File. Please select valid zip file");
                    $("#zip_size" + zip_size).hide();
                    $("#zip_valid" + zip_valid).show();
                    $("#zip_double_extension" + zip_double_extension).hide();
                    return false;
                }
            } else {
                $("#zip_size" + zip_size).html("File size is greater than 10 MB. Please select file size less than or equal to 10 MB");
                $("#zip_size" + zip_size).show();
                $("#zip_valid" + zip_valid).hide();
                $("#zip_double_extension" + zip_double_extension).hide();
                return false;
            }
        }
    });

    //Image validation Section
    $("#image_only, #emp_photo").change(function () {
        var input = this;
        var image_name = input.files[0].name;
        var split = image_name.split('.');
        var sizeof = split.length;
        if (sizeof > 2) {
            $("#double_extension").html("Double extension not allow");
            $("#image_size").hide();
            $("#image_valid").hide();
            $("#double_extension").show();
        } else {
            var iSize = ((input.files[0].size) / 1024);
            var image_size = (Math.round((iSize / 1024) * 100) / 100);
            if (image_size <= 2) {
                if (input.files[0].type == 'image/jpeg' || input.files[0].type == 'image/jpg' || input.files[0].type == 'image/png' || input.files[0].type == 'image/gif') {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $(input).parent().find("img").remove();
                        $(input).parent().append("<img src='" + e.target.result + "' class='preview-img'>");
                    }
                    reader.readAsDataURL(input.files[0]);
                    $("#image_size").hide();
                    $("#image_valid").hide();
                    $("#double_extension").hide();
                } else {
                    $("#image_valid").html("Invalid image.Please select valid image jpeg/jpg/png/gif");
                    //$(this).val('');
                    $("#image_size").hide();
                    $("#image_valid").show();
                    $("#double_extension").hide();
                    return false;
                }
            } else {
                $("#image_size").html("Image size greater than 2 MB.Please select image size less than or equal to 2 MB");
                //$(this).val('');
                $("#image_size").show();
                $("#image_valid").hide();
                $("#double_extension").hide();
                return false;
            }
        }
    });
});