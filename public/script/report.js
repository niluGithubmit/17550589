$(document).ready(function(){
	var total = 0;
	var i=1;
    var base_url=$("#base_url").val();
	$('#addBtn').on('click', function () {
  
    // Adding a row inside the tbody.
		var rowIdx = 0;
		




    $('#tbody').append(`<tr id="R${++rowIdx}">
          <td width="350px"><input type="text" name="part"></td>
           
           <td width="150px"><input type="number" value="0" class="price" id="addnewrow` + i + `" name="price"></td>
           <td width="100px">
            <button class="btn btn-danger remove" 
                type="button">Remove</button>
            </td>
           </tr>`);
var button = $(".price").attr("id");
    


i++;

 alert(button);
 //alert(i);
 
  
    // var val =parseInt($("'"+text+"'").val());

    //  alert(val);

    
    // if (!isNaN(val)) {
    //     total += val;
    //   }
    

    //total=+1;

   

    //$("#net_total").val(total);
});

	$('#tbody').on('click', '.remove', function () {
  
    // Getting all the rows next to the 
    // row containing the clicked button
    var child = $(this).closest('tr').nextAll();
  
    // Iterating across all the rows 
    // obtained to change the index
    child.each(function () {
          
        // Getting <tr> id.
        var id = $(this).attr('id');
  
        // Getting the <p> inside the .row-index class.
        var idx = $(this).children('.row-index').children('p');
  
        // Gets the row number from <tr> id.
        var dig = parseInt(id.substring(1));
  
        // Modifying row index.
        idx.html(`Row ${dig - 1}`);
  
        // Modifying row id.
        $(this).attr('id', `R${dig - 1}`);
    });
  
    // Removing the current row.
    $(this).closest('tr').remove();
  
    // Decreasing the total number of rows by 1.
    rowIdx--;
});


    $("#price").on("keyup",function(){
        //alert($(this).val());
        var price=parseInt($(this).val());
        var ad_price=parseInt($("#ad_price").val());

        var total=price+ad_price;

        $("#total").val(total);
    });

    $("#ad_price").on("keyup",function(){
        //alert($(this).val());
        var ad_price=parseInt($(this).val());
        var price=parseInt($("#price").val());

        var total=price+ad_price;

        $("#total").val(total);
    })


    // $("#complete_services").on('click', function(){
    //     var date=$("#complete_report_date").val();
    //     var station_id=$("#station_id").val();

    //     $.ajax({
    //         url: base_url+'/complete_report',
    //         method: 'post',
    //         dataType: "json",
    //         data: {date: date,selected_time_slot:selected_time_slot},
    //         success:function(response){

    //         }
    //       });

        
    // })

    $("#complete_report_date").on("change",function(){


        var date=$("#complete_report_date").val();
        var station_id=$("#station_id").val();
        
         $("#complete_report_link").attr("href",base_url+"/complete_report/"+date+"/"+station_id);
        
        $("#complete_services").prop('disabled', false);
    })

    $("#click").click(function(){
  var write = '<div id = "example">Hello</div><button id= "click_pdf">PDF</button>';
  $("#here").html(write);
});
$("#click_pdf").on("click",function(){
    //alert("d");
  var doc = new jsPDF('p', 'pt', 'A4');
  var header = [1,2,3,4];
    doc.fromHTML($('#print_c').html(), 10, 10, header, {
       left:10,
    top:10,
    bottom: 10,
    width: 170,
    autoSize:false,
    printHeaders: true
    });
  doc.save("Test.pdf");
});


})