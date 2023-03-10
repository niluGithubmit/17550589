$(document).ready(function(){

    // 'copy', 'csv', 'excel', 'pdf', 'print' ,'colvis'
	var base_url=$("#base_url").val();
	 $('#users_table').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'excel',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: ':visible'
                }
            },

            'colvis'
        ],
        columnDefs: [ {
            targets: -1,
            visible: false
        } ]
    } );

	 $('a.toggle-vis').on('click', function (e) {
        e.preventDefault();
 
        // Get the column API object
        var column = table.column($(this).attr('data-column'));
 
        // Toggle the visibility
        column.visible(!column.visible());
    });

	 $('#bologna-list a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})

	 $(".delete_user").click(function(){
        var id = $(this).attr("user_id");
 
 
        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: base_url+'/users/delete/'+id,
               type: 'post',
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Record removed successfully");  
               }
            });
        }
    });

     $("body").delegate(".delete_station", "click", function(){
    var id = $(this).attr("user_id");
 
 
        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: base_url+'/station/delete/'+id,
               type: 'post',
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Record removed successfully"); 
                    location.reload(); 
               }
            });
        }
});

	
     $("body").delegate(".delete_owner", "click", function(){
     var id = $(this).attr("user_id");
 
 
        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: base_url+'/owner/delete/'+id,
               type: 'post',
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();

                    alert("Record removed successfully");  
                    location.reload();
               }
            });
        }
});
	
})