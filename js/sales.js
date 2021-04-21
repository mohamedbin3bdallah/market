$(document).ready(function(){
    $("#pcode").keyup(function(){
		var val = $(this).val();
		$.ajax({
			type: 'POST',
			url: '../ajaxs/searchsaleinvoice.php',
			data: {
				'pcode':val
			},
			success: function (response) {
				if(response == 0) document.getElementById("productinvoices").innerHTML = '';
				else document.getElementById("productinvoices").innerHTML = response;
			}
		});
    });
});

$(document).ready(function(){
    $("#invoiceno").keyup(function(){
		var val = $(this).val();
		$.ajax({
			type: 'POST',
			url: '../ajaxs/searchsaleinvoice.php',
			data: {
				'invoice':val
			},
			success: function (response) {
				if(response == 0) document.getElementById("productinvoice").innerHTML = '';
				else document.getElementById("productinvoice").innerHTML = response;
			}
		});
    });
});

function CallPrint(invoice) {
    var prtContent = document.getElementById('printinvoice');
    var WinPrint = window.open('../pages/invoice.php?invoice='+invoice, '', 'width=800,height=650,scrollbars=1,menuBar=1');
    var str =  prtContent.innerHTML;
    WinPrint.document.write(str);
    WinPrint.document.close();
    WinPrint.focus();
}