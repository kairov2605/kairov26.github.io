<? include("bd.php");
if (isset($_POST['text1'])) {$text = $_POST['text1']; if ($text=='') {unset($text);}}
if (isset($_POST['author'])) {$author=$_POST['author']; if ($author=='') {unset($author);}}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>����������</title>
<link rel="stylesheet" href="main.css">
</head>

<body>
<header>
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
<div class="titles">
 <div class="titles__first">
 <? if(isset($text) && isset($author))
 { 
 $result=mysql_query("UPDATE titlee SET text=$text, author=$author where page='index'");
 if ($result==true) {echo "<p>���� ������� ��������!</p>";}
else {echo "<p>���� �� ��������!</p>";}
}
else{
echo "<p>�� ����� �� ��� ����������, ������� ���� �� ����� ���� ��������.</p>";
	 }
 
 ?>
  </div>
 </div>

</div>




</header>
</body>
</html>