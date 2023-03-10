var CAT = {};
CAT.duplicate_category = false;

$(document).ready(function(){

	var base_url=$("#base_url").val();
	//alert(base_url);
	$("#cat_name").on('keyup',function(){
		$(this).val($(this).val().toUpperCase());
		var cat_name=$(this).val();
		//var v_number = $("#vessel_number").val();
		  //alert(v_number);
		  $.ajax({
		  	url: base_url+'/check_cat_name',
		    method: 'post',
		    dataType: "json",
		    data: {cat_name: cat_name},
		    success:function(response){

		    	//alert(response.part_code[0].sp);

		    if (response.category_name[0] != undefined) {
		    	if (response.category_name[0].cat_name != "") {
		    		
		    		CAT.duplicate_category = true;
		    		$(".invalid-feedback").text("Duplicate Category Name " + cat_name).show();
		    		$("#add_cat").prop("disabled",true);
            return;
		    	}
		    }
		    else {
		    	CAT.duplicate_category = false;
		    	$(".invalid-feedback").hide();
		    	$("#add_cat").prop("disabled",false);

		    }

			if (!CAT.duplicate_category && (cat_name != "")) {
			   $("#add_vessel_form").submit();
			}
		}
		  });

	})


	$("#cat_name_update").on('keyup',function(){
		$(this).val($(this).val().toUpperCase());
		var cat_name=$(this).val();
		//var v_number = $("#vessel_number").val();
		  //alert(v_number);
		  $.ajax({
		  	url: base_url+'/check_cat_name',
		    method: 'post',
		    dataType: "json",
		    data: {cat_name: cat_name},
		    success:function(response){

		    	//alert(response.part_code[0].sp);

		    if (response.category_name[0] != undefined) {
		    	if (response.category_name[0].cat_name != "") {
		    		
		    		CAT.duplicate_category = true;
		    		$(".invalid-feedback-updare").text("Duplicate Category Name " + cat_name).show();
		    		$("#update_cat").prop("disabled",true);
            return;
		    	}
		    }
		    else {
		    	CAT.duplicate_category = false;
		    	$(".invalid-feedback-updare").hide();
		    	$("#update_cat").prop("disabled",false);

		    }

			if (!CAT.duplicate_category && (cat_name != "")) {
			   $("#add_vessel_form").submit();
			}
		}
		  });

	})


	$("body").delegate(".cat_delete_btn", "click", function(){
        Swal.fire({

          icon: 'warning',
          title: 'Are you sure ! ',
          text: "You want to Delete this Category?",

          showCancelButton: true,
          confirmButtonText: 'Delete',
          showLoaderOnConfirm: true,
          denyButtonText: `Don't save`,
          allowOutsideClick: () => Swal.isLoading(),
          
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
            var did=$(this).attr('did');
            
            

            $.ajax({
              url: base_url+'/cat_delete',
              type: 'POST',
              data: {did:did},
              async: false,
              success:function(response)
              {
        //alert(response);
        
        
        Swal.fire('Deleted!', '', 'success');
        window.location.reload()
      }
    });

          } else if (result.isDenied) {

            Swal.fire('Changes are not saved', '', 'info')
          }
        })
      })



	$("body").delegate(".cat_edit_btn", "click", function(){
    var eid=$(this).attr('eid');
    var cat_name_val=$(this).attr('cat_name_val');
    var des=$(this).attr('des');
    $("#cat_name_update").val(cat_name_val);
    $("#cat_id").val(eid);
    $("#cat_des_update").val(des);

    $("#cat_edit_modal").modal('show'); 
    //alert(eid);
});


	


})