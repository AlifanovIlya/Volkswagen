$(document).ready(function (){
	$('#second').hide();
    $('#third').hide();
	$('#first').click(function (){
		$('#first').hide();
		var i=$(this).data('id');
		$('#second').fadeIn();
	});
	$('#button').click(function (){
		$('#second').hide();
		var i=$(this).data('id');
		$('#third').fadeIn();
	});
});