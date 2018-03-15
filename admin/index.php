<? include("bd.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Главная</title>
<link rel="stylesheet" href="main.css">
</head>
<body>
<header>
<div class="TABLE">
<div class="heading clearfix">
<nav>
<ul class="menu">
<li>
<a href="index.php">Главная</a>
</li>
<li>
<a href="forumadmin.php">Форум</a>
</li>
<li>
<a href="razadmin.php">Развлечения</a>
</li>
<li>
<a href="dradmin">Другий</a>
</li>
<li>
<a href="contactadmin">О нас</a>
</li>
<li>
<a href="imgadmin.php">Картинки</a>
</li>
</ul>
</nav>
</div>
 <div class="titles">
 <div class="titles__first">
   <form id="form1" name="form1" method="post" action="indexadmin.php">
     <p>
       <label for="title">Введите тему</label>
       </p>
     <p> 
       <input type="text" name="text1" id="text" />
     </p>
     <p>
       <label for="title">Введите автора</label>
       </p>
     <p> 
       <input type="text" name="author" id="author" />
     </p>
     <p>
       <input type="submit" name="button" id="button" value="Изменить тему" />
     </p>
   </form>
 </div>
 </div>

</div>
</header>

</body>
</html>
