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
<a href="index.php">�������</a>
</li>
<li>
<a href="forum.php">�����</a>
</li>
<li>
<a href="raz.php">�������� ����������</a>
</li>
<li>
<a href="#">� ���������</a>
</li>
<li>
<a href="#">� ���</a>
</li>
<li>
<input name="adacd" type="text" value="����� �� �����" />
</li>
</ul>
</nav>
</div>
<div class="titles">
   <form action="people.php" method="post" name="form1" target="_parent" class="TABLE"  id="form1" >
     <p align="center"><h1><i>�����������</i></h1></p>
      <p class="form" >
    <label for="name" >������� ��� � ������� ������� �� ����� </label>
    <br />
<input type="text" name="name" id="name" />
  </p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
      <p class="form">
    <label for="password" >���������� ������</label>
    <br />
<input type="password" name="password" id="password" />
  </p>
   <p class="form">
    <input type="submit" name="submit" id="submit" value="������������������" />
  </p>
  <p></p>
  <p></p>
  <p></p>
  <p class="form" > ��� <a href="vhod.php">�������</a></p>
   </form>
<p class="TABLE">
  
  
  
  
  
  
  
  
</p>
</body>
</html>