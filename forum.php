<? include("bd.php"); 
$result= mysql_query("Select title,meta_d,meta_k,text from titlee where page='forum'");
$myrow=mysql_fetch_array($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<meta name="description" content="<? echo $myrow['meta_d']; ?>" />
<meta name="keywords" content="<? echo $myrow['meta_k']; ?>" />

<title><? echo $myrow['title']; ?></title>
<link rel="stylesheet" href="main.css">
</head>

<body class="heder2">
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
</div>
<div class="titles">
   <form action="people.php" method="post" name="form1" target="_parent" class="TABLE"  id="form1" >
     <p align="center"><h1><i>Регистрация</i></h1></p>
      <p class="form" >
    <label for="name" >Введите имя с которым зайдете на форум </label>
    <br />
<input type="text" name="name" id="name" />
  </p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
      <p class="form">
    <label for="password" >Придумайте пароль</label>
    <br />
<input type="password" name="password" id="password" />
  </p>
   <p class="form">
    <input type="submit" name="submit" id="submit" value="Зарегестрироваться" />
  </p>
  <p></p>
  <p></p>
  <p></p>
  <p class="form" > или <a href="vhod.php">Войдите</a></p>
   </form>
<p class="TABLE">
  
  
  
  
  
  
  
  
</p>
</body>
</html>