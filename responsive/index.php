<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>First Responsive Site</title>
<link href="css/global.css" rel="stylesheet" />
<script type="text/javascript" language="javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" language="javascript">

	$(function(){
		
		var pull = $('#pull');
		var menu = $('nav ul');
		var menuHeight = menu.height();
		
		$(pull).on('click', function(e){
			e.preventDefault();
			menu.slideToggle();
		});
		
	});

</script>
</head>

<body>
	<nav class="clearFix">
    	<ul class="clearFix">
        	<li><a href="#">Home</a></li>
        	<li><a href="#">About</a></li>
        	<li><a href="#">Classes</a></li>
        	<li><a href="#">Schedule</a></li>
        	<li><a href="#">Downloads</a></li>
        	<li><a href="#">Contacts</a></li>
    	</ul>
    	<a href="#" id="pull">Menu</a>
	</nav>
</body>
</html>