$(document).ready(function(){
	//customer registation validation


//owner name validation
jQuery.validator.addMethod("lettersonly", function(value, element) 
{
return this.optional(element) || /^[a-z," "]+$/i.test(value);
}, "Letters and spaces only please"); 

//old NIC validation
function old_nic_validation(value){
    $.validator.addMethod('NICNumber', function (value) { 
    return  /^[0-9]{9}[vVxX]$/.test(value); 
}, 'Please enter a valid National Identity Card Number.');
}


//old NIC validation
function new_nic_validation(value){
    $.validator.addMethod('NICNumber', function (value) { 
    return  /^[0-9]{9}[vVxX]$/.test(value); 
}, 'Please enter a valid National Identity Card Number.');
}





$('#nic').on('keyup', function() {
    console.log(this.value.length);
    if(this.value.length <= 10){
    	$.validator.addMethod('NICNumber', function (value) { 
    return  /^[0-9]{9}[vVxX]$/.test(value); 
}, 'Please enter a valid National Identity Card Number.');

    }else{
    	$.validator.addMethod('NICNumber', function (value) { 
    return  /^[0-9]{10}[0-9]$/.test(value); 
}, 'Please enter a valid National Identity Card Number.');

    }
});

//password validation
$.validator.addMethod("strong_password", function (value, element) {
    let password = value;
    if (!(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%&])(.{8,20}$)/.test(password))) {
        return false;
    }
    return true;
},


 function (value, element) {
    let password = $(element).val();
    if (!(/^(.{8,20}$)/.test(password))) {
        return 'Password must be between 8 to 20 characters long.';
    }
    else if (!(/^(?=.*[A-Z])/.test(password))) {
        return 'Password must contain at least one uppercase.';
    }
    else if (!(/^(?=.*[a-z])/.test(password))) {
        return 'Password must contain at least one lowercase.';
    }
    else if (!(/^(?=.*[0-9])/.test(password))) {
        return 'Password must contain at least one digit.';
    }
    else if (!(/^(?=.*[@#$%&])/.test(password))) {
        return "Password must contain special characters from @#$%&.";
    }
    return false;
});




	$("#service_station_regitration_form").validate({
 
  rules: {
            station_name: {
                required: true,
                minlength:2,
                lettersonly: true
                
            },
            nic: {
                required: true,
                maxlength: 12,
                NICNumber:true
            },
            phone_number: {
            	required: true,
                minlength: 10,
                maxlength: 10,
            },
            email: {
			      required: true,
			      email: true
			},
			address: {
				required: true,
                minlength: 3,
			},
			password2: {
				required: true,
                minlength: 8,
                strong_password: true
			},
			password_confirm2: {
            minlength: 5,
            equalTo: "#password2"
        }

        },
        messages: {
           
            station_name: {
                required: "Please enter valid name",
                minlength: "Station name must be 2 or more characters",
                
            },
            nic: {
                required: "Please enter valid NIC",
                maxlength: "NIC must be less than 10 characters",
                
            },
            phone_number: {
            	required: "Please enter valid phone numner",
                minlength: "Please enter valid phone numner",
                maxlength: "Please enter valid phone numner",
            },
            email: {
                required: "Enter your Email",
                email: "Please enter valid name.",
            },
            address: {
				required: "Please enter valid Address.",
                
			}
        },
       
});

    $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myUl #s_li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

   // $("pagination3").jqPagination({pagerLocation:"both",pageSize:"1"});
})