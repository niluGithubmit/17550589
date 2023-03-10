$(document).ready(function(){
	var base_url=$("#base_url").val();
	$(".timeslot").on('click' , function(){
		var station_id=$("#station_id").val();
		var day =$(this).attr("day");
		var slot =$(this).attr("slot");

		//alert(station_id);

		 $.ajax({
		  	url: base_url+'/time_slot',
		    method: 'post',
		    dataType: "json",
		    data: {station_id: station_id,day:day,slot:slot},
		    success:function(response){

		    	location.reload();

		   
		}
		  });
	})

	$("#request_date").on('change', function(){
		$('#av_time_slot').html('');
		var d = $(this).val();


		var weekday=new Array(7);
		weekday[0]="Sunday";
		weekday[1]="Monday";
		weekday[2]="Tuesday";
		weekday[3]="Wednesday";
		weekday[4]="Thursday";
		weekday[5]="Friday";
		weekday[6]="Saturday";

		var loIsDate = new Date(d);
		var day = weekday[loIsDate.getDay()];
		var station_id=$("#station_id").val();

		$.ajax({
		  	url: base_url+'/get_time_slot',
		    method: 'post',
		    dataType: "json",
		    data: {station_id: station_id,day:day},
		    success:function(response){

		    	if(response.length!=0){
		    		for (i = 0; i < response.length; i++) {

		    		$('#av_time_slot').append('<div slot="'+response[i]['time_slot']+'" id="as" class="btn btn-info time">'+response[i]['time_slot']+'</div>&nbsp;&nbsp;');
    console.log(response[i]['time_slot']);
  }
		    	}else{
		    		$('#av_time_slot').append('<div id="as" class="text-danger">No Time Slot Available Selected date</div>&nbsp;&nbsp;');
		    	}

		    	

		    	

		    	$(".time").on("click",function(){
		
		
		$('.time').addClass("btn-info");
		$('.time').removeClass("btn-success");
		$(this).addClass("btn-success");
		$(this).removeClass("btn-info");

		var selected_time_slot=$(this).attr('slot');

		

		var ap_date=$("#request_date").val()

		$.ajax({
		  	url: base_url+'/check_available_appointment',
		    method: 'post',
		    dataType: "json",
		    data: {ap_date: ap_date,selected_time_slot:selected_time_slot},
		    success:function(response){

		    	if(response=="available"){
		    		$("#time_slot").val(selected_time_slot);
		    	}else{
		    		$("#time_slot").val("");
		    		$('.time').addClass("btn-info");
		    		alert(response);
		    	}

		    	

		   
		}
		  });
	})

		   
		}
		  });
		
	})


   
	
})