$(document).ready(function(){
	$(".productdel").click(function() {
		var id = $(this).attr('id');
		$("#product-"+id).modal('show');		
	});
});

function deleteproduct(id,pcode)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'pcode': pcode,
		},
		url:'../ajaxs/deleteproduct.php',
		success: function (response) { if(response == 1) $("#tr-"+id).hide(); }
	});
}