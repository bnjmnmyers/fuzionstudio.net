// JavaScript Document
$(document).ready(function(){
	var pathname = window.location.pathname;
	
	switch(pathname){
		case '/about.php':
			$('#navAbout').addClass('current');
			break;	
		case '/classes.php':
			$('#navClasses').addClass('current');
			break;
		case '/contact.php':
		case '/process.php':
			$('#navContact').addClass('current');
			break;
		case '/downloads.php':
			$('#navDownloads').addClass('current');
			break;
		case '/media.php':
			$('#navMedia').addClass('current');
			break;
		case '/pricing.php':
			$('#navPricing').addClass('current');
			break;
		case '/schedule.php':
			$('#navSchedule').addClass('current');
			break;
		case '/testimonials.php':
			$('#navTestimonials').addClass('current');
			break;
		default:
			$('#navHome').addClass('current');	
	}
	
	$('.current').children('a').css({'color':'#FFF'});
	
	$('#nav ul li').bind('mouseover',function(){
		$(this).children('a').css({
			'color':'#FFF'
		});	
	}).bind('mouseout',function(){
		if(!$(this).hasClass('current')){
			$(this).children('a').css({
				'color':'#555'
			});
		}
	});
})