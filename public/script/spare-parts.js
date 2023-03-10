var SPARE = {};
SPARE.duplicate_part_code = false;

$(document).ready(function(){
	//alert("s");
	var base_url=$("#base_url").val();
	//alert(base_url);
	$("#spare_id").on('keyup',function(){
		$(this).val($(this).val().toUpperCase());
		var spare_id=$(this).val();
		//var v_number = $("#vessel_number").val();
		  //alert(v_number);
		  $.ajax({
		  	url: base_url+'/check_spare_id',
		    method: 'post',
		    dataType: "json",
		    data: {spare_id: spare_id},
		    success:function(response){

		    	//alert(response.part_code[0].sp);

		    if (response.part_code[0] != undefined) {
		    	if (response.part_code[0].spare_id != "") {
		    		
		    		SPARE.duplicate_part_code = true;
		    		$(".invalid-feedback").text("Duplicate Part Code " + spare_id).show();
		    		$("#add_part").prop("disabled",true);
            return;
		    	}
		    }
		    else {
		    	SPARE.duplicate_part_code = false;
		    	$(".invalid-feedback").hide();
		    	$("#add_part").prop("disabled",false);

		    }

			if (!SPARE.duplicate_part_code && (spare_id != "")) {
			   $("#add_vessel_form").submit();
			}
		}
		  });

	})



	$("#weight").on("click",function(){
		$('#w_l_btn_name').text("Weight");
		$("#selected_weight_liters").val("weight");
		$("#weight_liters_ext").text('Kg');
	})

	$("#liters").on("click",function(){
		$('#w_l_btn_name').text("Liters");
		$("#selected_weight_liters").val("liters");
		$("#weight_liters_ext").text('liters');
	});


	$("#weight_liters_type").on("change", function(){
		var val=$(this).val();
		if(val=="Weight"){
			
			$("#selected_weight_liters").val("weight");
			$("#weight_liters_ext").text('Kg');
		}else{
			
			$("#selected_weight_liters").val("liters");
			$("#weight_liters_ext").text('liters');
		}
		
	});

	//spare validation

	$("#spare_part_form").validate({

 
  rules: {
            spare_id: {
                required: true,
                minlength:2,
                
            },
            weight_liters: {
                required: true,
                minValue: 0,
            }
            
        },
        messages: {
           
            spare_id: {
                required: "Please enter spare id",
                minlength: "Spare id must be 2 or more characters",
                
            },
            
            weight_liters: {
                required: "Please enter weight or litres amount",
                maxlength: "Value should be greater than 0",
                
            }
        },
       
});

	
})