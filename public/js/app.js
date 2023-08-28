jQuery('#primary-form').validate({
	rules:{
		email:{
			required:true,
			email:true
		},
		password:{
			required:true,
			minlength:5
		},
        text: {
            required:true,
            minlenght:5
        }
	},messages:{
		name:"Please enter your name",
		email:{
			required:"Please enter your email",
			email:"Please enter valid email",
		},
		password:{
			required:"Please enter your password",
			minlength:"Password must be 6 character long"
		},
        text:{
			required:"Please enter your 6 digit code",
			minlength:"Code must be 6 character long"
		},
	},
	submitHandler:function(form){
		debugger;
        let email = $('#email').val();
        let password = $('#password').val();
        $.ajax({
          headers: {
        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    	  },
          url: "loginform",
          type:"POST",
          data:{
            //"_token": "{{ csrf_token() }}",
            email:email,
            password:password,
            // mobile_number:mobile_number,
            // subject:subject,
            // message:message,
          },
          success:function(response){
            console.log(response);
            if(response.success == "step3") {
               window.location.href = "authenticationpage";
              //alert("true");
              //$('#success-message').text(response.success); 
              //$("#contactForm")[0].reset(); 
            }
            if(response.success == "error") {
               $("#user-error").removeClass("d-none");
               //window.location.href = "authentication-page";
              //alert("true");
              //$('#success-message').text(response.success); 
              //$("#contactForm")[0].reset(); 
            }
          },
          error: function(response) {
            console.log(response)
           }
        });
	}
});

jQuery('#authenticateform').validate({
	rules:{
        text: {
            required:true,
            minlenght:6
        }
	},messages:{
        text:{
			required:"Please enter your 6 digit code",
			minlength:"Code must be 6 character long"
		}
	},
	submitHandler:function(form){
		
		debugger;
        let text = $('#text').val();
        $.ajax({
          headers: {
        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    	  },
          url: "authenticateform",
          //method:"POST",
          data:{
            //"_token": "{{ csrf_token() }}",
            text:text,
            //password:password,
            // mobile_number:mobile_number,
            // subject:subject,
            // message:message,
          },
          success:function(response){
            debugger;
            console.log(response);
            if(response) {
               window.location.href = "submission";
              //alert("true");
              //$('#success-message').text(response.success); 
              //$("#contactForm")[0].reset(); 
            }
          },
          error: function(response) {
            console.log(response)
           }
        });
		
	}
});