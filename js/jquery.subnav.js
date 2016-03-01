// JavaScript Document
$(document).ready(function(){
	$('.infoCont').hide();
	$('.infoCont:first').show();
	$('#subNav li:eq(1)').css({'text-decoration':'none'});
	$('.subNavLink').bind('click',function(){
		$('.infoCont').hide();
		$("#"+$(this).attr('id')+"Cont").show();
		$('.subNavLink').css({'text-decoration':'underline'});
		$(this).css({'text-decoration':'none'});	
	})
})