<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>View Your Settings</title>
	
	<style type="text/css">
	
	body
	{
		<?php 
		
		if(isset($_COOKIE['font_size']))
		{
			print "\t\tfont-size: ".htmlentities($_COOKIE['font_size']).";\n";
		}else
		{
			print "\t\tfont-size:medium;\n";
		}
		
		if(isset($_COOKIE['font_color']))
		{
			print "\t\tcolor:#".htmlentities($_COOKIE['font_color']).";\n"; 
		}else
		{
			print "\t\tcolor:#000:\n";
		}
		
		
		
		?>
	}
	
	
	</style>
	</head>

	<body>
		<p><a href="cookies.php">Customize Your Settings</a></p>
		<p><a href="reset.php">Reset Your Settings</a></p>

		<p>
		yadda yadda yadda yadda yadda
		yadda yadda yadda yadda yadda
		yadda yadda yadda yadda yadda
		yadda yadda yadda yadda yadda
		yadda yadda yadda yadda yadda
		<p>
	</body>
</html>