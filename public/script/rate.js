$(document).ready(function(){
	var base_url=$("#base_url").val();
	$(".feedback").on('click',function(){
		
		var station_id=$(this).attr("station_id");
		var ap_id=$(this).attr("ap_id");

		
		var user_id=$(this).attr("user_id");

		$("#station_id").val(station_id);
		$("#user_id").val(user_id);
		$("#ap_id").val(ap_id);
	})

	$(".feedback-type").on('click',function(){
		var rate_type=$(this).attr("type");
		var station_id=$("#station_id").val();
		var user_id=$("#user_id").val();
		var ap_id=$("#ap_id").val();

		$.ajax({
		  	url: base_url+'/customer_rate',
		    method: 'post',
		    dataType: "json",
		    data: {ap_id:ap_id,rate_type: rate_type,station_id:station_id,user_id:user_id},
		    success:function(response){
		    	if(response==1){
		    		location.reload();
		    	}

		    	

		   
		}
		  });
	})
})