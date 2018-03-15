<? include("bd.php"); 
$result= mysql_query("Select title,meta_d,meta_k,text from titlee where page='raz'");
$myrow=mysql_fetch_array($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title><? $myrow['title']?></title>
<link rel="stylesheet" href="main.css">
</head>
<body class="heder3">
<div class="TABLE">
<div class="heading clearfix">
  <nav>
<ul class="menu">
<li>
<a href="index.php">Главная</a>
</li>
<li>
<a href="forum.php">Форум</a>
</li>
<li>
<a href="raz.php">Полезные приложения</a>
</li>
<li>
<a href="#">О ноутбуках</a>
</li>
<li>
<a href="#">О нас</a>
</li>
<li>
  <input name="adacd" type="text" value="пойск по сайту" />
</li>
</ul>
</nav>
  <p>&nbsp;</p>
  <p class="t">Марки ноутбука</p>
</div>
 <div class="titles">
   
   <img src="img/logo.png" width="350" height="250" />
   <img src="img/icon1.png" width="350" height="250">
   <img src="img/icon2.png" width="350" height="250">
   <img src="img/icon3.png" width="350" height="250" />
</div>

</div>
</div>
</body>
</html>






