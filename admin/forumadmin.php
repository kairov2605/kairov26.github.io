<? include("bd.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>��������� �������������</title>
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
<a href="forumadmin.php">�����</a>
</li>
<li>
<a href="razadmin.php">�����������</a>
</li>
<li>
<a href="dradmin">������</a>
</li>
<li>
<a href="contactadmin">� ���</a>
</li>
<li>
<a href="imgadmin.php">��������</a>
</li>
</ul>
</nav>
</div>
 <div class="font1">
 <div class="font1>
   <form id="form12" name="form12" method="post" action="peopleadmin.php">
   <p>
       <label for='title'>�������������</label>
   </p>
  <?  $result=mysql_query("select id,name from polzovatel");
  $myrow=mysql_fetch_array($result);
   do {
    printf( " <p><input type='radio' name='id' value='%s'><label>%s</label></p>",$myrow["id"],$myrow["name"]);
	echo"<p><input type='submit' name='button' id='button' value='��������' /></p>"; }
   while ($myrow=mysql_fetch_array($result)) ?>
	   </form>
 </div>
 </div>

</div>

</body>
</html>
