$(document).ready(function(){
	$("#fuel_type").on("change", function(){
		var val=$(this).val();
		// <option value="Diesel">Diesel</option>
  //                               	<option value="Petrol">Petrol</option>
  //          alert("e");                     	<option value="Electric">Electric</option>

		if(val=="Petrol"){
			$(".capacity").text("CC");
			$("#cap_ext").val("CC");
		}
		else if(val=="Diesel"){
			$(".capacity").text("CC");
			$("#cap_ext").val("CC");
		}
		else{
			$(".capacity").text("WATTS");
			$("#cap_ext").val("WATTS");
			
		}
		//$('#capacity').text("as");
	})

	$("#letters").on("keyup",function(){
		$(this).val($(this).val().toUpperCase());
	})

//customer registation validation


//owner name validation
jQuery.validator.addMethod("lettersonly", function(value, element) 
{
return this.optional(element) || /^[a-z," "]+$/i.test(value);
}, "Letters and spaces only please"); 

//owner NIC validation
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

//owner password validation
$.validator.addMethod("strong_password", function (value, element) {
    let password = value;
    if (!(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%&])(.{8,20}$)/.test(password))) {
        return false;
    }
    return true;
}, function (value, element) {
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




	$("#customer_regitration_form").validate({

 
  rules: {
            owner_name: {
                required: true,
                minlength:2,
                lettersonly: true
                
            },
            nic: {
                required: true,
                maxlength: 12,
                NICNumber:true
            },
            contact: {
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
			password: {
				required: true,
                minlength: 8,
                strong_password: true
			},
			password_confirm: {
            minlength: 5,
            equalTo: "#password"
        }

        },
        messages: {
           
            owner_name: {
                required: "Please enter valid name",
                minlength: "Owner name must be 2 or more characters",
                
            },
            nic: {
                required: "Please enter valid NIC",
                maxlength: "NIC must be less than 10 characters",
                
            },
            contact: {
            	required: "Please enter valid phone numner",
                minlength: "Please enter valid phone numner",
                maxlength: "Please enter valid phone numner",
            },
            email: {
                required: "Enter your Email",
                email: "Please enter valid name.",
            },
            address: {
				required: "Please enter valid Owner Address.",
                
			}
        },
       
});

//update vehicle owner
//$("#owner_update_button").on("click",function(){
   var nic_update=$("#nic").val();
   if(nic_update!=null){
if(nic_update.length <= 10){
        $.validator.addMethod('NICNumber2', function (value) { 
    return  /^[0-9]{9}[vVxX]$/.test(value); 
}, 'Please enter a valid National Identity Card Number.');

    }else{
        $.validator.addMethod('NICNumber2', function (value) { 
    return  /^[0-9]{10}[0-9]$/.test(value); 
}, 'Please enter a valid National Identity Card Number.');

    } 

}
//})


   $("#customer_update_form").validate({


 
  rules: {
            owner_name: {
                required: true,
                minlength:2,
                lettersonly: true
                
            },
            nic: {
                required: true,
                maxlength: 12,
                NICNumber2:true
            },
            contact: {
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
            password: {
                required: true,
                minlength: 8,
                strong_password: true
            },
            password_confirm: {
            minlength: 5,
            equalTo: "#password"
        }

        },
        messages: {
           
            owner_name: {
                required: "Please enter valid name",
                minlength: "Owner name must be 2 or more characters",
                
            },
            nic: {
                required: "Please enter valid NIC",
                maxlength: "NIC must be less than 10 characters",
                
            },
            contact: {
                required: "Please enter valid phone numner",
                minlength: "Please enter valid phone numner",
                maxlength: "Please enter valid phone numner",
            },
            email: {
                required: "Enter your Email",
                email: "Please enter valid name.",
            },
            address: {
                required: "Please enter valid Owner Address.",
                
            }
        },

       
});


    

//vehicle number validation
function vehicle_number_validation(value){
    jQuery.validator.addMethod("vehicle_number", function(value, element) 
    {
        return this.optional(element) || /^([a-zA-Z]{1,3}|((?!0*-)[0-9]{1,3}))-[0-9]{4}(?<!0{4})/m.test(value);
    }, "Please enter valid vehicle number");
   }

jQuery.validator.addMethod("vehicle_number", function(value, element) 
{
return this.optional(element) || /^([a-zA-Z]{1,3}|((?!0*-)[0-9]{1,3}))-[0-9]{4}(?<!0{4})/m.test(value);
}, "Please enter valid vehicle number"); 
$("#add_vehicle_form").validate({

    rules: {
            v_number: {
                required: true,
                minlength:2,
                vehicle_number: true,
                
                
            },
            vehicle_brand: {
                required: true,
                minlength:2,
            },


            vehicle_model: {
                required: true,
                minlength:2,
            },
            average_km: {
                required: true,
                min:1,
                max:10000,
            }
        },
        messages: {
           
            v_number: {
                required: "Please enter vehicle number",
                minlength: "Owner name must be 2 or more characters",
                
            
        },
        vehicle_brand: {
                required: "Please enter valid vehicle brand",
                minlength: "vehicle brand must be 2 or more characters",
                
            
        },
        vehicle_model: {
                required: "Please enter valid vehicle model",
                minlength: "vehicle model must be 2 or more characters",
                
            
        },
    }
})



})