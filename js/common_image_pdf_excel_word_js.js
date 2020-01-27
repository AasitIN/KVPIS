//for multiple pdf validation
	function member_short_bio(random_common_id){
		$("#member_short_bio"+random_common_id).change(function(){
			 var input=this;
			 var pdf_name=input.files[0].name;
			 var split = pdf_name.split('.');
			 var sizeof=split.length; 
			
			 var pdf_valid=$(this).attr("pdf_valid");
			 var pdf_size=$(this).attr("pdf_size");
			 var pdf_double_extension=$(this).attr("pdf_double_extension"); 
			
			if(sizeof > 2){
				 $("#pdf_double_extension"+pdf_double_extension+random_common_id).html("Double extension not allow");
				 $("#pdf_size"+pdf_size+random_common_id).hide();
				 $("#pdf_valid"+pdf_valid+random_common_id).hide();
				 $("#pdf_double_extension"+pdf_double_extension+random_common_id).show();
			 }else{
				var iSize = ((input.files[0].size) / 1024);
				var pdff_size = (Math.round((iSize / 1024) * 100) / 100);
				if(pdff_size <= 2){
					if (input.files[0].type=='application/pdf' || input.files[0].type=='application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
						$("#pdf_size"+pdf_size+random_common_id).hide();
						$("#pdf_valid"+pdf_valid+random_common_id).hide();
						$("#pdf_double_extension"+pdf_double_extension+random_common_id).hide();

					}else{
						$("#pdf_valid"+pdf_valid+random_common_id).html("Invalid pdf/doc.Please select valid pdf/doc");
						$("#pdf_size"+pdf_size+random_common_id).hide();
						$("#pdf_valid"+pdf_valid+random_common_id).show();
						$("#pdf_double_extension"+pdf_double_extension+random_common_id).hide();
						return false;
					}
				}else{
					$("#pdf_size"+pdf_size+random_common_id).html("Pdf/Doc size greater than 2 MB.Please select pdf/doc size less than or equal to 2 MB");
					$("#pdf_size"+pdf_size+random_common_id).show();
					$("#pdf_valid"+pdf_valid+random_common_id).hide();
					$("#pdf_double_extension"+pdf_double_extension+random_common_id).hide();
					return false;
				}
			}
		});
	}
	
	
	
	function member_resident_proof(random_common_id){
		$("#member_resident_proof"+random_common_id).change(function(){
			 var input=this;
			 var pdf_name=input.files[0].name;
			 var split = pdf_name.split('.');
			 var sizeof=split.length; 
			
			 var pdf_valid=$(this).attr("pdf_valid");
			 var pdf_size=$(this).attr("pdf_size");
			 var pdf_double_extension=$(this).attr("pdf_double_extension"); 
			
			if(sizeof > 2){
				 $("#pdf_double_extension"+pdf_double_extension+random_common_id).html("Double extension not allow");
				 $("#pdf_size"+pdf_size+random_common_id).hide();
				 $("#pdf_valid"+pdf_valid+random_common_id).hide();
				 $("#pdf_double_extension"+pdf_double_extension+random_common_id).show();
			 }else{
				var iSize = ((input.files[0].size) / 1024);
				var pdff_size = (Math.round((iSize / 1024) * 100) / 100);
				if(pdff_size <= 2){
					if (input.files[0].type=='application/pdf' || input.files[0].type=='application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
						$("#pdf_size"+pdf_size+random_common_id).hide();
						$("#pdf_valid"+pdf_valid+random_common_id).hide();
						$("#pdf_double_extension"+pdf_double_extension+random_common_id).hide();

					}else{
						$("#pdf_valid"+pdf_valid+random_common_id).html("Invalid pdf/doc.Please select valid pdf/doc");
						$("#pdf_size"+pdf_size+random_common_id).hide();
						$("#pdf_valid"+pdf_valid+random_common_id).show();
						$("#pdf_double_extension"+pdf_double_extension+random_common_id).hide();
						return false;
					}
				}else{
					$("#pdf_size"+pdf_size+random_common_id).html("Pdf/Doc size greater than 2 MB.Please select pdf/doc size less than or equal to 2 MB");
					$("#pdf_size"+pdf_size+random_common_id).show();
					$("#pdf_valid"+pdf_valid+random_common_id).hide();
					$("#pdf_double_extension"+pdf_double_extension+random_common_id).hide();
					return false;
				}
			}
		});
	}
	
	
	//multiple image validation
	function member_passport_size(random_common_id){
		 $("#member_passport_size"+random_common_id).change(function(){
			 var input=this;
			 var image_name=input.files[0].name;
			 var split = image_name.split('.');
			 var sizeof=split.length; 
			 //var toLowerCase = input.files[0].type.split('/').pop().toLowerCase();		 
			 var image_valid=$(this).attr("image_valid");
			 var image_size=$(this).attr("image_size");
			 var image_double_extension=$(this).attr("image_double_extension"); 
			 if(sizeof > 2){
				 $("#image_double_extension"+image_double_extension+random_common_id).html("Double extension not allow");
				 $("#image_size"+image_size+random_common_id).hide();
				 $("#image_valid"+image_valid+random_common_id).hide();
				 $("#image_double_extension"+image_double_extension+random_common_id).show();
			 }else{
				var iSize = ((input.files[0].size) / 1024);
				var limit_image_size = (Math.round((iSize / 1024) * 100) / 100);
				if(limit_image_size <= 2){
					if (input.files[0].type=='image/jpeg' || input.files[0].type=='image/jpg' || input.files[0].type=='image/png' || input.files[0].type=='image/gif') {
					var reader = new FileReader();
					reader.onload = function (e) {
						 $(input).parent().find("img").remove();
						//$(input).parent().append("<img src='"+e.target.result+"' class='preview-img'>");
						}
						reader.readAsDataURL(input.files[0]);
						$("#image_size"+image_size+random_common_id).hide();
						$("#image_valid"+image_valid+random_common_id).hide();
						$("#image_double_extension"+image_double_extension+random_common_id).hide();
					}else{
						$("#image_valid"+image_valid+random_common_id).html("Invalid image.Please select valid image jpeg/jpg/png/gif");
						$("#image_size"+image_size+random_common_id).hide();
						$("#image_valid"+image_valid+random_common_id).show();
						$("#image_double_extension"+image_double_extension+random_common_id).hide();
						return false;
					}
				}else{
					$("#image_size"+image_size+random_common_id).html("Image size greater than 2 MB.Please select image size less than or equal to 2 MB");
					$("#image_size"+image_size+random_common_id).show();
					$("#image_valid"+image_valid+random_common_id).hide();
					$("#image_double_extension"+image_double_extension+random_common_id).hide();
					return false;
				}
			}
		});
	}
	

	jQuery(document).ready(function(){
    //for single pdf validation
	$("#pdf_only,#prpdf_only,#ppdf_only,#bpdf_only").change(function(){
		 var input=this;
		 var pdf_name=input.files[0].name;
		 var split = pdf_name.split('.');
		 var sizeof=split.length; 
		 var pdf_valid=$(this).attr("pdf_valid");
		 var pdf_size=$(this).attr("pdf_size");
		 var pdf_double_extension=$(this).attr("pdf_double_extension"); 
		
		if(sizeof > 2){
			 $("#pdf_double_extension"+pdf_double_extension).html("Double extension not allow");
			 $("#pdf_size"+pdf_size).hide();
			 $("#pdf_valid"+pdf_valid).hide();
			 $("#pdf_double_extension"+pdf_double_extension).show();
		 }else{
			var iSize = ((input.files[0].size) / 1024);
			var limit_pdf_size = (Math.round((iSize / 1024) * 100) / 100);
			
			if(limit_pdf_size <= 2){
				if (input.files[0].type=='application/pdf') {
					$("#pdf_size"+pdf_size).hide();
					$("#pdf_valid"+pdf_valid).hide();
					$("#pdf_double_extension"+pdf_double_extension).hide();

				}else{
					$("#pdf_valid"+pdf_valid).html("Invalid pdf.Please select valid pdf");
					$("#pdf_size"+pdf_size).hide();
					$("#pdf_valid"+pdf_valid).show();
					$("#pdf_double_extension"+pdf_double_extension).hide();
					return false;
				}
			}else{
				$("#pdf_size"+pdf_size).html("Pdf size greater than 2 MB.Please select pdf size less than or equal to 2 MB");
				$("#pdf_size"+pdf_size).show();
				$("#pdf_valid"+pdf_valid).hide();
				$("#pdf_double_extension"+pdf_double_extension).hide();
				return false;
			}
		}
	});
	
	
// Single Image Validation
	 $("#image_only,#common_photo,#emp_photo").change(function(){
		var input=this;
		 var image_name=input.files[0].name;
		 var split = image_name.split('.');
		 var sizeof=split.length; 
         //var toLowerCase = input.files[0].type.split('/').pop().toLowerCase();		 
		 var image_valid=$(this).attr("image_valid");
		 var image_size=$(this).attr("image_size");
		 var image_double_extension=$(this).attr("image_double_extension"); 
		 var class_condition=$(this).attr("class_condition");
		 console.log('Sizeof'+sizeof);
		 if(sizeof > 2){
			console.log('Double extension not allow');
			 $("#image_double_extension").html("Double extension not allow");
			 $("#image_size").hide();
			 $("#image_valid").hide();
			 $("#image_double_extension").show();
		 }else{
			var iSize = ((input.files[0].size) / 1024);
			var limit_image_size = (Math.round((iSize / 1024) * 100) / 100);
			if(limit_image_size <= 2){
				if (input.files[0].type=='image/jpeg' || input.files[0].type=='image/jpg' || input.files[0].type=='image/png' || input.files[0].type=='image/gif') {
				var reader = new FileReader();
				reader.onload = function (e) {
					$(input).parent().find("img").remove();
						if(class_condition==4){
							$(input).parent().append("<img src='"+e.target.result+"' class='preview-img'>");
						}else{
							$(input).parent().append("<img src='"+e.target.result+"' class='preview-img'>");
						}
					
					}
					reader.readAsDataURL(input.files[0]);
					$("#image_size").hide();
					$("#image_valid").hide();
				    $("#image_double_extension"+image_double_extension).hide();
				}else{
					$("#image_valid").html("Invalid image.Please select valid image jpeg/jpg/png/gif");
					$("#image_size").hide();
					$("#image_valid").show();
					$("#image_double_extension"+image_double_extension).hide();
					return false;
				}
			}else{
				$("#image_size").html("Image size greater than 2 MB.Please select image size less than or equal to 2 MB");
				$("#image_size").show();
				$("#image_valid").hide();
			    $("#image_double_extension"+image_double_extension).hide();
				return false;
			}
		}
	});
});