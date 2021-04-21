$(document).ready(function(){
	$(".sizedel").click(function() {
		var id = $(this).attr('id');		
		$("#sizes-"+id).modal('show');
		
});
});

function deletesize(id,pcode,size)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'pcode': pcode,
		'size': size,
		},
		url:'../ajaxs/deletesize.php',
		success: function (response) { if(response == 1) $("#tr-"+id).hide(); }
	});
}