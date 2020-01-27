var base_url=$('#url').val();
 $.validator.addMethod("pwcheck", function(value) {
           return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
               && /[a-z]/.test(value) // has a lowercase letter
               && /[A-Z]/.test(value) // has a Upper letter
               && /[!,@,#,$,%,^,&,*]/.test(value) // has a Special Character
               && /\d/.test(value) // has a digit
        },"Passwords should have special characters with uppercase letters, lowercase letters and at least one number.");
        $('#form').validate({
            rules:{
                role_id:{
                    required:true,
                },
                email:{
                    required:true,
                    email:true,
                    remote:base_url+'register/cheque_unique_email'
                },
                first_name:{
                    required:true
                },
                mobile:{
                    required:true,
                    remote:base_url+'register/cheque_unique_mobile',
                    maxlength:10,  
                    minlength:10,  
                },
                password:{
                    required:true,
                    pwcheck:true
                },
                cpassword:{
                    required:true,
                    equalTo:'#password',
                },
                
            },
            messages:{
               role_id:{
                    required:'Please select application for',
                },
                email:{
                    required:'Please enter email',
                    remote:'This email already registered,please try another'
                },
                first_name:{
                    required:'Please enter first name'
                },
                mobile:{
                    required:'Please enter mobile number',
                    remote:'This mobile number already registered,please try another'
                },
                password:{
                    required:'Please enter password',
                    
                },
                cpassword:{
                    required:'Please enter confirm password',
                    equalTo:'Please enter same password again',
                },
            },
            submitHandler:function(form){
                generateHashPassword();
                form.submit();   
            }
           
        });
        
        function generateHashPassword() {
                var password = document.getElementById('password');
                var hashPassword = new jsSHA("SHA-512", "TEXT", {numRounds: 1});
                hashPassword.update(password.value);
                password.value = hashPassword.getHash("HEX"); 

                var cpassword = document.getElementById('cpassword');
                var hashPassword = new jsSHA("SHA-512", "TEXT", {numRounds: 1});
                hashPassword.update(cpassword.value);
                cpassword.value = hashPassword.getHash("HEX"); 
                return true;
            } 

        

        $('#refresh_captcha').on('click',function(){
                var base_url=$('#url').val();
                $.ajax({
                    url:base_url+'register/refresh_captcha',
                    type:'get',
                    data:'captcha=1',
                    beforeSend:function(){
                        $('#captcha_img').html('<i class="fa fa-spinner fa-spin"></i>');        
                    },
                    success:function(response){
                        $('#captcha_img').html(response);        
                    }

                });
            });

  