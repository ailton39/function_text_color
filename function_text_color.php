<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>function_cor</title>

</head>

<body>
<center>
<h3><font color="#000000">Enter the name of the color you want to appear!</font></h3>
<form method="post">
<input type="text" name="color">
<input type="submit" name="go" value="Go">

</form>


<?php
//function 'cor' com if switch case. 
function color_text(){
	if(isset($_POST['go'])&& ($_POST['go'])=='Go'){
				$color = $_POST['color'];
	switch($color)
	{
	case 'blue';
	echo '<h1><font color="#0033FF">'.$color.'</font></h1>';
	break;
	
	case 'red';
	echo '<h1><font color="#FF0000">'.$color.'</font></h1>';
	break;
	
	case 'green';
	echo '<h1><font color="#33CC00">'.$color.'</font></h1>';
	break;
	
	case 'yellow';
	echo '<h1><font color="#FFFF00">'.$color.'</font></h1>';
	break;
	
	case 'black';
	echo '<h1><font color="#000000">'.$color.'</font></h1>';
	break;
	
	case 'purple';
	echo '<h1><font color="#6600CC">'.$color.'</font></h1>';
	break;
	
	
	}
	
	}
}
color_text();

 ?>
 </center>
</body>
</html>