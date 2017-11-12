<?php
include 'server11.php'
include 'index.php'

$con = mysql_connect("localhost","root","PRINCE0308");
$category=$_POST['category'];
mysql_select_db("faculty", $con);
echo "faculty names"
if(isset($_POST['Category']))
{
$category=$_POST['category'];
if ($category1==1)
{
	if ($category==2)
	{
		echo "web devlopment names \n"
$query = mysql_query("SELECT name FROM FRONTEND ,BACKEND ,POLYGLOT");
	 while($rows = mysql_fetch_array($query)):
	{
	$name=$rows['name'];
	echo $name+"\n";
	}
	}
}
}
if ($category1==2)
{
	if ($category==3)
	{
		echo "mobile devlopment \n";
$query = mysql_query("SELECT name FROM ANDROID ,IOS");
	while($rows = mysql_fetch_array($query)):
	{
	$name=$rows['name'];
	echo $name+"\n";
	}
	}
}
if ($category1==3)
{
	if ($category==5)
	{ echo "embedded \n";
$query = mysql_query("SELECT name FROM EMBEDDED");
	while($rows = mysql_fetch_array($query)):
	{
	$name=$name['name'];
	echo $name+"\n";
	}
	}
}
if ($category1==4)
{
	if ($category==0)
	{
		echo "cp \n";
$query = mysql_query("SELECT name FROM CP");
	while($rows = mysql_fetch_array($query)):
	{
	$name=$name['name'];
	echo $name+"\n";
	}
	}
}
if ($category1==5)
{
	if ($category==1)
	{echo "designing \n";
$query = mysql_query("SELECT name FROM DESIGNING");
	while($rows = mysql_fetch_array($query)):
	{
	$name=$name['name'];
	echo $name+"\n";
	}
	}
}
if ($category1==6)
{
	if ($category==4)
	{echo "cad \n";
$query = mysql_query("SELECT name FROM CAD");
	while($rows = mysql_fetch_array($query)):
	{
	$name=$name['name'];
	echo $name+"\n";
	}
	}
}
mysql_close($con);
$con1= mysql_connect("localhost","root","PRINCE0308");
mysql_select_db("student", $con1);
$category=$_POST['category'];

if ($category1==1)
{
	if ($category==2)
	{echo "web \n";
$query = mysql_query("SELECT name FROM FRONTEND ,BACKEND ,POLYGLOT");
	while($rows = mysql_fetch_array($query)):
	{
	$name=$name['name'];
	echo $name+"\n";
	}
	}
}
if ($category1==2)
{
	if ($category==3)
	{ echo "mob \n"
$query = mysql_query("SELECT name FROM ANDROID ,IOS");
	while($rows = mysql_fetch_array($query)):
	{
	$name=$name['name'];
	echo $name+"\n";
	}
	}
}
if ($category1==3)
{
	if ($category==5)
	{echo "embedded \n";
$query = mysql_query("SELECT name FROM EMBEDDED");
	while($rows = mysql_fetch_array($query)):
	{
	$name=$name['name'];
	echo $name+"\n";
	}
	}
}
if ($category1==4)
{
	if ($category==0)
	{ echo "cp \n";
$query = mysql_query("SELECT name FROM CP");
	while($rows = mysql_fetch_array($query)):
	{
	$name=$name['name'];
	echo $name+"\n";
	}
	}
}
if ($category1==5)
{
	if ($category==1)
	{ echo "design \n";
$query = mysql_query("SELECT name FROM DESIGNING");
	while($rows = mysql_fetch_array($query)):
	{
	$name=$name['name'];
	echo $name+"\n";
	}
	}
}
if ($category1==6)
{
	if ($category==4)
	{echo "cad \n";
$query = mysql_query("SELECT name FROM CAD");
	while($rows = mysql_fetch_array($query)):
	{
	$name=$name['name'];
	echo $name+"\n";
	}
	}
}



