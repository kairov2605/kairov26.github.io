<?php
$db = mysql_connect("localhost","arman1","1998");
mysql_select_db("phpsite",$db);
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name=='') {unset($name);}}
if (isset($_POST['password'])) {$password=$_POST['password']; if ($password=='') {unset($password);}}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Оброботчик</title>
<link rel="stylesheet" href="main.css">
</head>

<body class="heder2>
<div class="TABLE">
<div class="heading clearfix">
<p> 
<nav>
<ul class="menu">
<li>
<a href="index.php">Главная</a>
</li>
<li>
<a href="forum.php">Форум</a>
</li>
<li>
<a href="raz.php">Развлечения</a>
</li>
<li>
<a href="#">Другий</a>
</li>
<li>
<a href="#">О нас</a>
</li>
</ul>
</nav>
</div>

<?   
if ( isset($name)&& isset($password) ) 
{  $myrow=mysql_query("SELECT name from polzovatel WHERE name='$name'",$db);
    $proverka= mysql_num_rows($myrow);
	if( $proverka==true)
	{ echo " Takoe nik uje est";
		}
			else {
			$result=mysql_query("INSERT INTO polzovatel(name,password) VALUES('$name','$password')");
			if ($result==true){
			echo "ДОБРО ПОЖАЛОВАТЬ В НАШИ РЯДЫ!!!";}
			else {echo "vi ne zaregistovani";}
		
		
		}
		
		
	}

?></p>

</div>



</body>
</html>