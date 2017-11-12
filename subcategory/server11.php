<!DOCTYPE html>
<html>
<body>

<?php
session_start();
$db1 = mysqli_connect('localhost', 'root', 'PRINCE0308', 'student');
$db = mysqli_connect('localhost', 'root', 'PRINCE0308', 'faculty');
$category0=$_POST['category0'];
$category1=$_POST['category1'];
$category2=$_POST['category2'];
$category3=$_POST['category3'];
$category4=$_POST['category4'];
$category5=$_POST['category5'];
$category6=$_POST['category6'];
if(isset($_POST['submit']))
{
	if($category0==1)
	{
		if($category1==1)
		{
			if($category2==1)
			{
		

    $name=mysqli_real_escape_string($db, $_POST['name']);
	$book=mysqli_real_escape_string($db, $_POST['book']);
	$web=mysqli_real_escape_string($db, $_POST['web']);
	$video=mysqli_real_escape_string($db, $_POST['video']);	
	$project=mysqli_real_escape_string($db, $_POST['project']);
	$contest=mysqli_real_escape_string($db, $_POST['contest']);
	$info=mysqli_real_escape_string($db, $_POST['info']);
	$email=mysqli_real_escape_string($db, $_POST['email']);
	$query1="INSERT INTO FRONTEND(BOOK, WEB, VIDEO, PROJECT, CONTEST, INFO, EMAIL,name)values('$book','$web','$video','$project','$contest','$info','$email','$name') ";

	mysqli_query($db,$query1); 
	


						}
}
}
header("location:lastpage/indexa.php");
}


if(isset($_POST['submit']))
{
	if($category0==1)
	{
		if($category1==1)
		{
			if($category2==2)
			{
		

	$name=mysqli_real_escape_string($db, $_POST['name']);
	$book=mysqli_real_escape_string($db, $_POST['book']);
	$web=mysqli_real_escape_string($db, $_POST['web']);
	$video=mysqli_real_escape_string($db, $_POST['video']);	
	$project=mysqli_real_escape_string($db, $_POST['project']);
	$contest=mysqli_real_escape_string($db, $_POST['contest']);
	$info=mysqli_real_escape_string($db, $_POST['info']);
	$email=mysqli_real_escape_string($db, $_POST['email']);
	$query1="INSERT INTO BACKEND(BOOK, WEB, VIDEO, PROJECT, CONTEST, INFO, EMAIL,name)values('$book','$web','$video','$project','$contest','$info','$email','$name') ";
	mysqli_query($db, $query1);
	


						}
}
}
header("location:lastpage/indexa.php");
}

if(isset($_POST['submit']))
{
	if($category0==1)
	{
		if($category1==1)
		{
			if($category2==3)
			{
		

	$name=mysqli_real_escape_string($db, $_POST['name']);		
	$book=mysqli_real_escape_string($db, $_POST['book']);
	$web=mysqli_real_escape_string($db, $_POST['web']);
	$video=mysqli_real_escape_string($db, $_POST['video']);	
	$project=mysqli_real_escape_string($db, $_POST['project']);
	$contest=mysqli_real_escape_string($db, $_POST['contest']);
	$info=mysqli_real_escape_string($db, $_POST['info']);
	$email=mysqli_real_escape_string($db, $_POST['email']);
	$query1="INSERT INTO POLYGLOT(BOOK, WEB, VIDEO, PROJECT, CONTEST, INFO, EMAIL,name)values('$book','$web','$video','$project','$contest','$info','$email','$name') ";
	mysqli_query($db, $query1);
	


						}
}
}
header("location:lastpage/indexa.php");
}
if(isset($_POST['submit']))
{
	if($category0==1)
	{
		if($category1==2)
		{
			if($category5==1)
			{
		

	$name=mysqli_real_escape_string($db, $_POST['name']);
	$book=mysqli_real_escape_string($db, $_POST['book']);
	$web=mysqli_real_escape_string($db, $_POST['web']);
	$video=mysqli_real_escape_string($db, $_POST['video']);	
	$project=mysqli_real_escape_string($db, $_POST['project']);
	$contest=mysqli_real_escape_string($db, $_POST['contest']);
	$info=mysqli_real_escape_string($db, $_POST['info']);
	$email=mysqli_real_escape_string($db, $_POST['email']);
	$query1="INSERT INTO ANDROID(BOOK, WEB, VIDEO, PROJECT, CONTEST, INFO, EMAIL,name)values('$book','$web','$video','$project','$contest','$info','$email','$name') ";
	mysqli_query($db, $query1);
	


						}
}
}
header("location:lastpage/indexa.php");
}
if(isset($_POST['submit']))
{
	if($category0==1)
	{
		if($category1==1)
		{
			if($category5==2)
			{
		

				$name=mysqli_real_escape_string($db, $_POST['name']);
	$book=mysqli_real_escape_string($db, $_POST['book']);
	$web=mysqli_real_escape_string($db, $_POST['web']);
	$video=mysqli_real_escape_string($db, $_POST['video']);	
	$project=mysqli_real_escape_string($db, $_POST['project']);
	$contest=mysqli_real_escape_string($db, $_POST['contest']);
	$info=mysqli_real_escape_string($db, $_POST['info']);
	$email=mysqli_real_escape_string($db, $_POST['email']);
	$query1="INSERT INTO IOS(BOOK, WEB, VIDEO, PROJECT, CONTEST, INFO, EMAIL,name)values('$book','$web','$video','$project','$contest','$info','$email','$name') ";
	mysqli_query($db, $query1);
	


						}
}
}
header("location:lastpage/indexa.php");
}
if(isset($_POST['submit']))
{
	if($category0==1)
	{
		if($category1==3)
		{
			
		

	$name=mysqli_real_escape_string($db, $_POST['name']);
	$book=mysqli_real_escape_string($db, $_POST['book']);
	$web=mysqli_real_escape_string($db, $_POST['web']);
	$video=mysqli_real_escape_string($db, $_POST['video']);	
	$project=mysqli_real_escape_string($db, $_POST['project']);
	$contest=mysqli_real_escape_string($db, $_POST['contest']);
	$info=mysqli_real_escape_string($db, $_POST['info']);
	$email=mysqli_real_escape_string($db, $_POST['email']);
	$query1="INSERT INTO EMBEDDED(BOOK, WEB, VIDEO, PROJECT, CONTEST, INFO, EMAIL,name)values('$book','$web','$video','$project','$contest','$info','$email','$name') ";
	mysqli_query($db, $query1);
	


						
}
}
header("location:lastpage/indexa.php");
}
if(isset($_POST['submit']))
{
	if($category0==1)
	{
		if($category1==4)
		{
			
		

			$name=mysqli_real_escape_string($db, $_POST['name']);
	$book=mysqli_real_escape_string($db, $_POST['book']);
	$web=mysqli_real_escape_string($db, $_POST['web']);
	$video=mysqli_real_escape_string($db, $_POST['video']);	
	$project=mysqli_real_escape_string($db, $_POST['project']);
	$contest=mysqli_real_escape_string($db, $_POST['contest']);
	$info=mysqli_real_escape_string($db, $_POST['info']);
	$email=mysqli_real_escape_string($db, $_POST['email']);
	$query1="INSERT INTO CP(BOOK, WEB, VIDEO, PROJECT, CONTEST, INFO, EMAIL,name)values('$book','$web','$video','$project','$contest','$info','$email','$name') ";
	mysqli_query($db, $query1);
	


						
}
}
header("location:lastpage/indexa.php");
}
if(isset($_POST['submit']))
{
	if($category0==1)
	{
		if($category1==5)
		{
			
		

$name=mysqli_real_escape_string($db, $_POST['name']);
	$book=mysqli_real_escape_string($db, $_POST['book']);
	$web=mysqli_real_escape_string($db, $_POST['web']);
	$video=mysqli_real_escape_string($db, $_POST['video']);	
	$project=mysqli_real_escape_string($db, $_POST['project']);
	$contest=mysqli_real_escape_string($db, $_POST['contest']);
	$info=mysqli_real_escape_string($db, $_POST['info']);
	$email=mysqli_real_escape_string($db, $_POST['email']);
	$query1="INSERT INTO DESIGNING(BOOK, WEB, VIDEO, PROJECT, CONTEST, INFO, EMAIL,name)values('$book','$web','$video','$project','$contest','$info','$email','$name') ";
	mysqli_query($db, $query1);
	


						
}
}
header("location:lastpage/indexa.php");
}
if(isset($_POST['submit']))
{
	if($category0==1)
	{
		if($category1==6)
		{
			
		

	$name=mysqli_real_escape_string($db, $_POST['name']);
	$book=mysqli_real_escape_string($db, $_POST['book']);
	$web=mysqli_real_escape_string($db, $_POST['web']);
	$video=mysqli_real_escape_string($db, $_POST['video']);	
	$project=mysqli_real_escape_string($db, $_POST['project']);
	$contest=mysqli_real_escape_string($db, $_POST['contest']);
	$info=mysqli_real_escape_string($db, $_POST['info']);
	$email=mysqli_real_escape_string($db, $_POST['email']);
	$query1="INSERT INTO CAD(BOOK, WEB, VIDEO, PROJECT, CONTEST, INFO, EMAIL,name)values('$book','$web','$video','$project','$contest','$info','$email','$name') ";
	mysqli_query($db, $query1);
	


						
}
}
header("location:lastpage/indexa.php");
}
if(isset($_POST['submit']))
{
	if($category0==2)
	{
		if($category1==1)
		{
			if($category2==1)
			{
		

    $name=mysqli_real_escape_string($db, $_POST['name']);
	$book=mysqli_real_escape_string($db1, $_POST['book']);
	$web=mysqli_real_escape_string($db1, $_POST['web']);
	$video=mysqli_real_escape_string($db1, $_POST['video']);	
	$project=mysqli_real_escape_string($db1, $_POST['project']);
	$contest=mysqli_real_escape_string($db1, $_POST['contest']);
	$info=mysqli_real_escape_string($db1, $_POST['info']);
	$email=mysqli_real_escape_string($db1, $_POST['email']);
	$query1="INSERT INTO FRONTEND(BOOK, WEB, VIDEO, PROJECT, CONTEST, INFO, EMAIL,name)values('$book','$web','$video','$project','$contest','$info','$email','$name') ";
	mysqli_query($db1, $query1);
	


						}
}
}
header("location:lastpage/indexa.php");
}
if(isset($_POST['submit']))
{
	if($category0==2)
	{
		if($category1==1)
		{
			if($category2==2)
			{
		

				$name=mysqli_real_escape_string($db, $_POST['name']);
	$book=mysqli_real_escape_string($db1, $_POST['book']);
	$web=mysqli_real_escape_string($db1, $_POST['web']);
	$video=mysqli_real_escape_string($db1, $_POST['video']);	
	$project=mysqli_real_escape_string($db1, $_POST['project']);
	$contest=mysqli_real_escape_string($db1, $_POST['contest']);
	$info=mysqli_real_escape_string($db1, $_POST['info']);
	$email=mysqli_real_escape_string($db1, $_POST['email']);
	$query1="INSERT INTO BACKEND(BOOK, WEB, VIDEO, PROJECT, CONTEST, INFO, EMAIL,name)values('$book','$web','$video','$project','$contest','$info','$email','$name') ";
	mysqli_query($db1, $query1);
	


						}
}
}
header("location:lastpage/indexa.php");
}
if(isset($_POST['submit']))
{
	if($category0==2)
	{
		if($category1==1)
		{
			if($category2==3)
			{
		

$name=mysqli_real_escape_string($db, $_POST['name']);
	$book=mysqli_real_escape_string($db1, $_POST['book']);
	$web=mysqli_real_escape_string($db1, $_POST['web']);
	$video=mysqli_real_escape_string($db1, $_POST['video']);	
	$project=mysqli_real_escape_string($db1, $_POST['project']);
	$contest=mysqli_real_escape_string($db1, $_POST['contest']);
	$info=mysqli_real_escape_string($db1, $_POST['info']);
	$email=mysqli_real_escape_string($db1, $_POST['email']);
	$query1="INSERT INTO POLYGLOT(BOOK, WEB, VIDEO, PROJECT, CONTEST, INFO, EMAIL,name)values('$book','$web','$video','$project','$contest','$info','$email','$name') ";
	mysqli_query($db1, $query1);
	


						}
}
}
header("location:lastpage/indexa.php");
}

if(isset($_POST['submit']))
{
	if($category0==2)
	{
		if($category1==2)
		{
			if($category5==1)
			{
		

	$name=mysqli_real_escape_string($db, $_POST['name']);
	$book=mysqli_real_escape_string($db1, $_POST['book']);
	$web=mysqli_real_escape_string($db1, $_POST['web']);
	$video=mysqli_real_escape_string($db1, $_POST['video']);	
	$project=mysqli_real_escape_string($db1, $_POST['project']);
	$contest=mysqli_real_escape_string($db1, $_POST['contest']);
	$info=mysqli_real_escape_string($db1, $_POST['info']);
	$email=mysqli_real_escape_string($db1, $_POST['email']);
	$query1="INSERT INTO ANDROID(BOOK, WEB, VIDEO, PROJECT, CONTEST, INFO, EMAIL,name)values('$book','$web','$video','$project','$contest','$info','$email','$name') ";
	mysqli_query($db1, $query1);
	


						}
}
}
header("location:lastpage/indexa.php");
}
if(isset($_POST['submit']))
{
	if($category0==2)
	{
		if($category1==2)
		{
			if($category5==2)
			{
		

    $name=mysqli_real_escape_string($db, $_POST['name']);
	$book=mysqli_real_escape_string($db1, $_POST['book']);
	$web=mysqli_real_escape_string($db1, $_POST['web']);
	$video=mysqli_real_escape_string($db1, $_POST['video']);	
	$project=mysqli_real_escape_string($db1, $_POST['project']);
	$contest=mysqli_real_escape_string($db1, $_POST['contest']);
	$info=mysqli_real_escape_string($db1, $_POST['info']);
	$email=mysqli_real_escape_string($db1, $_POST['email']);
	$query1="INSERT INTO IOS(BOOK, WEB, VIDEO, PROJECT, CONTEST, INFO, EMAIL,name)values('$book','$web','$video','$project','$contest','$info','$email','$name') ";
	mysqli_query($db1, $query1);
	


						}
}
}
header("location:lastpage/indexa.php");
}
if(isset($_POST['submit']))
{
	if($category0==2)
	{
		if($category1==3)
		{
			
		

    $name=mysqli_real_escape_string($db, $_POST['name']);
	$book=mysqli_real_escape_string($db1, $_POST['book']);
	$web=mysqli_real_escape_string($db1, $_POST['web']);
	$video=mysqli_real_escape_string($db1, $_POST['video']);	
	$project=mysqli_real_escape_string($db1, $_POST['project']);
	$contest=mysqli_real_escape_string($db1, $_POST['contest']);
	$info=mysqli_real_escape_string($db1, $_POST['info']);
	$email=mysqli_real_escape_string($db1, $_POST['email']);
	$query1="INSERT INTO EMBEDDED(BOOK, WEB, VIDEO, PROJECT, CONTEST, INFO, EMAIL,name)values('$book','$web','$video','$project','$contest','$info','$email','$name') ";
	mysqli_query($db1, $query1);
	


						
}
}
header("location:lastpage/indexa.php");
}
if(isset($_POST['submit']))
{
	if($category0==2)
	{
		if($category1==4)
		{
			
	

    $name=mysqli_real_escape_string($db, $_POST['name']);
	$book=mysqli_real_escape_string($db1, $_POST['book']);
	$web=mysqli_real_escape_string($db1, $_POST['web']);
	$video=mysqli_real_escape_string($db1, $_POST['video']);	
	$project=mysqli_real_escape_string($db1, $_POST['project']);
	$contest=mysqli_real_escape_string($db1, $_POST['contest']);
	$info=mysqli_real_escape_string($db1, $_POST['info']);
	$email=mysqli_real_escape_string($db1, $_POST['email']);
	$query1="INSERT INTO CP(BOOK, WEB, VIDEO, PROJECT, CONTEST, INFO, EMAIL,name)values('$book','$web','$video','$project','$contest','$info','$email','$name') ";
	mysqli_query($db1, $query1);
							
}
}
header("location:lastpage/indexa.php");
}

if(isset($_POST['submit']))
{
	if($category0==2)
	{
		if($category1==5)
		{
			
	

    $name=mysqli_real_escape_string($db, $_POST['name']);
	$book=mysqli_real_escape_string($db1, $_POST['book']);
	$web=mysqli_real_escape_string($db1, $_POST['web']);
	$video=mysqli_real_escape_string($db1, $_POST['video']);	
	$project=mysqli_real_escape_string($db1, $_POST['project']);
	$contest=mysqli_real_escape_string($db1, $_POST['contest']);
	$info=mysqli_real_escape_string($db1, $_POST['info']);
	$email=mysqli_real_escape_string($db1, $_POST['email']);
	$query1="INSERT INTO DESIGNING(BOOK, WEB, VIDEO, PROJECT, CONTEST, INFO, EMAIL,name)values('$book','$web','$video','$project','$contest','$info','$email','$name') ";
	mysqli_query($db1, $query1);
							
}
}
header("location:lastpage/indexa.php");
}

if(isset($_POST['submit']))
{
	if($category0==2)
	{
		if($category1==6)
		{
			
	

    $name=mysqli_real_escape_string($db, $_POST['name']);
	$book=mysqli_real_escape_string($db1, $_POST['book']);
	$web=mysqli_real_escape_string($db1, $_POST['web']);
	$video=mysqli_real_escape_string($db1, $_POST['video']);	
	$project=mysqli_real_escape_string($db1, $_POST['project']);
	$contest=mysqli_real_escape_string($db1, $_POST['contest']);
	$info=mysqli_real_escape_string($db1, $_POST['info']);
	$email=mysqli_real_escape_string($db1, $_POST['email']);
	$query1="INSERT INTO CAD(BOOK, WEB, VIDEO, PROJECT, CONTEST, INFO, EMAIL,name)values('$book','$web','$video','$project','$contest','$info','$email','$name') ";
	mysqli_query($db1, $query1);
							
}
}
header("location:lastpage/indexa.php");
}


?>
</body>
</html>



