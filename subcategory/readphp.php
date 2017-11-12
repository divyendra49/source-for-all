<!DOCTYPE HTML>
<html>
    <title>Names</title>
  
    <head>
        <link rel="stylesheet" type="text/css" href="readcss.css">
        <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Berkshire+Swash">
  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet prefetch' href='https://cdn.jsdelivr.net/foundation/5.5.0/css/foundation.css'>
    </head>
    <body>
        <div class="topnav" id="myTopnav">
          <a href="#" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
      <a class="fa fa-facebook-f" style="font-size:30px;color:white"></a>
      <a class="fa fa-google" style="font-size:30px;color:white"></a>
      <a class="fa fa-instagram" style="font-size:30px;color:white"></a>
    <h1>Source for All</h1>  
      
    </div>
                   
        <h3>Click on the names of Faculty or Students </h3>
        <div class="container">
 
  
  <div class="left container">
     <h1 style="text-align:center">Faculty</h1>
  

                        

                        <?php
            session_start();
                        $con = mysqli_connect("localhost" , "root" , "PRINCE0308","faculty");
                        $category=$_GET['category1'];
                        
                         if(isset($_GET['category1']))
                          {
                            
                             
                                
                             
                            $query = mysqli_query($con,"SELECT name FROM CP");
                            
                              while($rows= mysqli_fetch_array($query))
                              { $tablename="CP";
                                $id=$rows['EMAIL'] ;
                                $name1=$rows['name'];?>
       <div class="container-left">
	<img src="http://aspirehire-co-uk.mysmarterwebsite.co.uk/aspirehire-co-uk/_img/profile.svg" class="each-image">
	<div class="heading-container-left">
	<h1><?php
                              echo('<a href="blue.php?id='.$tablename.'&id1='.$name1.'">'. $name1.' </a>'); ?></h1>

	</div>
	</div>
	   <?php
                         }
                     }
                         ?>
  
                     
                      <?php
                        session_start();
                        $con = mysqli_connect("localhost" , "root" , "PRINCE0308","faculty");
                        $category=$_GET['category2'];
                        
                         if(isset($_GET['category2']))
                          {
                                                       
                            $query = mysqli_query($con,"SELECT name FROM DESIGNING");
                            
                              while($rows= mysqli_fetch_array($query))
                              { $tablename="DESIGNING";
                                $name1=$rows['name'];?>
                                <div class="container-left">
  <img src="http://aspirehire-co-uk.mysmarterwebsite.co.uk/aspirehire-co-uk/_img/profile.svg" class="each-image">
  <div class="heading-container-left">
  <h1><?php
                              echo('<a href="blue.php?id='.$tablename.'&id1='.$name1.'">'. $name1.' </a>'); ?></h1>

  </div>
  </div>
     <?php
                         }
                     }
                         ?>
  
                       <?php
                        session_start();
                        $con = mysqli_connect("localhost" , "root" , "PRINCE0308","faculty");
                        $category=$_GET['Category3'];
                        
                         if(isset($_GET['Category3']))
                          {
                                                       
                            $query = mysqli_query($con,"SELECT name FROM FRONTEND");
                            
                              while($rows= mysqli_fetch_array($query))
                              { $tablename="FRONTEND";
                                $name1=$rows['name'];?>
       <div class="container-left">
  <img src="http://aspirehire-co-uk.mysmarterwebsite.co.uk/aspirehire-co-uk/_img/profile.svg" class="each-image">
  <div class="heading-container-left">
  <h1><?php
                              echo('<a href="blue.php?id='.$tablename.'&id1='.$name1.'">'. $name1.' </a>'); ?></h1>

  </div>
  </div>
     <?php
                         }
                     }
                         ?>
                          <?php
                        session_start();
                        $con = mysqli_connect("localhost" , "root" , "PRINCE0308","faculty");
                        $category=$_GET['Category3'];
                        
                         if(isset($_GET['Category3']))
                          {
                                                       
                            $query = mysqli_query($con,"SELECT name FROM BACKEND");
                            
                              while($rows= mysqli_fetch_array($query))
                              { 
                                $name1=$rows['name'];
                                $tablename="BACKEND";?>
                                <div class="container-left">
  <img src="http://aspirehire-co-uk.mysmarterwebsite.co.uk/aspirehire-co-uk/_img/profile.svg" class="each-image">
  <div class="heading-container-left">
  <h1><?php
                              echo('<a href="blue.php?id='.$tablename.'&id1='.$name1.'">'. $name1.' </a>'); ?></h1>

  </div>
  </div>
     <?php
                         }
                     }
                         ?>

                          <?php
                       session_start();
                        $con = mysqli_connect("localhost" , "root" , "PRINCE0308","faculty");
                        $category=$_GET['Category3'];
                        
                         if(isset($_GET['Category3']))
                          {
                                                       
                            $query = mysqli_query($con,"SELECT name FROM POLYGLOT");
                            
                              while($rows= mysqli_fetch_array($query))
                              { 
                                $name1=$rows['name'];
                                $tablename="POLYGLOT";?>
       <img src="img_avatar1.png" class="media-object" style="width:60px">

    <div class="media-body">
      <h4 class="media-heading"></h4><?php
                                  echo('<a href="blue.php?id='.$tablename.'&id1='.$name1.'">'. $name1.' </a>');; ?><br></div>
                             <?php    
                              
                            }
                         }
                         ?> 
  


                                         <?php
                        session_start();
                        $con = mysqli_connect("localhost" , "root" , "PRINCE0308","faculty");
                        $category=$_GET['Category4'];
                        
                         if(isset($_GET['Category4']))
                          {
                                                       
                            $query = mysqli_query($con,"SELECT name FROM ANDROID");
                            
                              while($rows= mysqli_fetch_array($query))
                              { 
                                $name1=$rows['name'];
                                $tablename="ANDROID";;?>
  
      <div class="container-left">
  <img src="http://aspirehire-co-uk.mysmarterwebsite.co.uk/aspirehire-co-uk/_img/profile.svg" class="each-image">
  <div class="heading-container-left">
  <h1><?php
                              echo('<a href="blue.php?id='.$tablename.'&id1='.$name1.'">'. $name1.' </a>'); ?></h1>

  </div>
  </div>
     <?php
                         }
                     }
                         ?>
                         <?php
                        session_start();
                        $con = mysqli_connect("localhost" , "root" , "PRINCE0308","faculty");
                        $category=$_GET['Category4'];
                        
                         if(isset($_GET['Category4']))
                          {
                                                       
                            $query = mysqli_query($con,"SELECT name FROM IOS");
                            
                              while($rows= mysqli_fetch_array($query))
                              { 
                                $name1=$rows['name'];
                                $tablename="IOS";?>
  
      <div class="container-left">
  <img src="http://aspirehire-co-uk.mysmarterwebsite.co.uk/aspirehire-co-uk/_img/profile.svg" class="each-image">
  <div class="heading-container-left">
  <h1><?php
                              echo('<a href="blue.php?id='.$tablename.'&id1='.$name1.'">'. $name1.' </a>'); ?></h1>

  </div>
  </div>
     <?php
                         }
                     }
                         ?>
                         <?php
                        session_start();
                       $con = mysqli_connect("localhost" , "root" , "PRINCE0308","faculty");
                        $category=$_GET['Category5'];
                        
                         if(isset($_GET['Category5']))
                          {
                                                       
                            $query = mysqli_query($con,"SELECT name FROM CAD");
                            
                              while($rows= mysqli_fetch_array($query))
                              { 
                                $name1=$rows['name'];
                                $tablename="CAD";?>
  
      <div class="container-left">
  <img src="http://aspirehire-co-uk.mysmarterwebsite.co.uk/aspirehire-co-uk/_img/profile.svg" class="each-image">
  <div class="heading-container-left">
  <h1><?php
                              echo('<a href="blue.php?id='.$tablename.'&id1='.$name1.'">'. $name1.' </a>'); ?></h1>

  </div>
  </div>
     <?php
                         }
                     }
                         ?>

                         <?php
                       session_start();
                        $con = mysqli_connect("localhost" , "root" , "PRINCE0308","faculty");
                        $category=$_GET['Category6'];
                        
                         if(isset($_GET['Category6']))
                          {
                                                       
                            $query = mysqli_query($con,"SELECT name FROM EMBEDDED");
                            
                              while($rows= mysqli_fetch_array($query))
                              { 
                                $name1=$rows['name'];
                                $tablename="EMBEDDED";?>
                         <hr>
       <div class="container-left">
  <img src="http://aspirehire-co-uk.mysmarterwebsite.co.uk/aspirehire-co-uk/_img/profile.svg" class="each-image">
  <div class="heading-container-left">
  <h1><?php
                              echo('<a href="blue.php?id='.$tablename.'&id1='.$name1.'">'. $name1.' </a>'); ?></h1>

  </div>
  </div>
     <?php
                         }
                     }
                         ?></div>
              <div class="right container">


                        <h1 style="text-align:center;">Students</h1>
                         <?php
                        session_start();
                        $con = mysqli_connect("localhost" , "root" , "PRINCE0308","student");
                        $category=$_GET['category1'];
                        
                         if(isset($_GET['category1']))
                          {
                            
                             
                                
                             
                            $query = mysqli_query($con,"SELECT name FROM CP");
                            
                              while($rows= mysqli_fetch_array($query))
                              { 
                                $id=$rows['EMAIL'] ;
                                $name1=$rows['name'];
                                $tablename="CP";?>
     
    <div class="container-right">
    <img src="http://aspirehire-co-uk.mysmarterwebsite.co.uk/aspirehire-co-uk/_img/profile.svg" class="each-image">
  
  <div class="heading-container-right">
  <h1><?php
                              echo('<a href="blue.php?id='.$tablename.'&id1='.$name1.'">'. $name1.' </a>'); ?></h1></h1>
  </div>
  </div>
    <?php
                         }
                     }
                         ?>
                     
                      <?php
                       session_start();
                        $con = mysqli_connect("localhost" , "root" , "PRINCE0308","student");
                        $category=$_GET['category2'];
                        
                         if(isset($_GET['category2']))
                          {
                                                       
                            $query = mysqli_query($con,"SELECT name FROM DESIGNING");
                            
                              while($rows= mysqli_fetch_array($query))
                              { 
                                $name1=$rows['name'];
                                $tablename="DESIGNING";?>
      
    <div class="container-right">
    <img src="http://aspirehire-co-uk.mysmarterwebsite.co.uk/aspirehire-co-uk/_img/profile.svg" class="each-image">
  
  <div class="heading-container-right">
  <h1><?php
                              echo('<a href="blue.php?id='.$tablename.'&id1='.$name1.'">'. $name1.' </a>'); ?></h1></h1>
  </div>
  </div>
    <?php
                         }
                     }
                         ?>

                        <?php
                       session_start();
                        $con = mysqli_connect("localhost" , "root" , "PRINCE0308","student");
                        $category=$_GET['Category3'];
                        
                         if(isset($_GET['Category3']))
                          {
                                                       
                            $query = mysqli_query($con,"SELECT name FROM FRONTEND");
                            
                              while($rows= mysqli_fetch_array($query))
                              { 
                                $name1=$rows['name'];?>
     
    <div class="container-right">
    <img src="http://aspirehire-co-uk.mysmarterwebsite.co.uk/aspirehire-co-uk/_img/profile.svg" class="each-image">
  
  <div class="heading-container-right">
  <h1><?php
                              echo('<a href="blue.php?id='.$tablename.'&id1='.$name1.'">'. $name1.' </a>'); ?></h1></h1>
  </div>
  </div>
    <?php
                         }
                     }
                         ?>

                          <?php
                       session_start();
                        $con = mysqli_connect("localhost" , "root" , "PRINCE0308","student");
                        $category=$_GET['Category3'];
                        
                         if(isset($_GET['Category3']))
                          {
                                                       
                            $query = mysqli_query($con,"SELECT name FROM BACKEND");
                            
                              while($rows= mysqli_fetch_array($query))
                              { 
                                $name1=$rows['name'];
                                $tablename="BACKEND";?>
     
    <div class="container-right">
    <img src="http://aspirehire-co-uk.mysmarterwebsite.co.uk/aspirehire-co-uk/_img/profile.svg" class="each-image">
  
  <div class="heading-container-right">
  <h1><?php
                              echo('<a href="blue.php?id='.$tablename.'&id1='.$name1.'">'. $name1.' </a>'); ?></h1></h1>
  </div>
  </div>
    <?php
                         }
                     }
                         ?>
  

                         <?php
                       session_start();
                        $con = mysqli_connect("localhost" , "root" , "PRINCE0308","student");
                        $category=$_GET['Category3'];
                        
                         if(isset($_GET['Category3']))
                          {
                                                       
                            $query = mysqli_query($con,"SELECT name FROM POLYGLOT");
                            
                              while($rows= mysqli_fetch_array($query))
                              { 
                                $name1=$rows['name'];
                                $tablename="POLYGLOT";?>
   
    <div class="container-right">
    <img src="http://aspirehire-co-uk.mysmarterwebsite.co.uk/aspirehire-co-uk/_img/profile.svg" class="each-image">
  
  <div class="heading-container-right">
  <h1><?php
                              echo('<a href="blue.php?id='.$tablename.'&id1='.$name1.'">'. $name1.' </a>'); ?></h1></h1>
  </div>
  </div>
    <?php
                         }
                     }
                         ?>

                                                <?php
                        session_start();
                        $con = mysqli_connect("localhost" , "root" , "PRINCE0308","student");
                        $category=$_GET['Category4'];
                        
                         if(isset($_GET['Category4']))
                          {
                                                       
                            $query = mysqli_query($con,"SELECT name FROM ANDROID");
                            
                              while($rows= mysqli_fetch_array($query))
                              { 
                                $name1=$rows['name'];
                                $tablename="ANDROID";?>
   
    <div class="container-right">
    <img src="http://aspirehire-co-uk.mysmarterwebsite.co.uk/aspirehire-co-uk/_img/profile.svg" class="each-image">
  
  <div class="heading-container-right">
  <h1><?php
                              echo('<a href="blue.php?id='.$tablename.'&id1='.$name1.'">'. $name1.' </a>'); ?></h1></h1>
  </div>
  </div>
    <?php
                         }
                     }
                         ?>
                          <?php
                        session_start();
                       $con = mysqli_connect("localhost" , "root" , "PRINCE0308","student");
                        $category=$_GET['Category4'];
                        
                         if(isset($_GET['Category4']))
                          {
                                                       
                            $query = mysqli_query($con,"SELECT name FROM IOS");
                            
                              while($rows= mysqli_fetch_array($query))
                              { 
                                $name1=$rows['name'];
                                $tablename="IOS";?>
     
    <div class="container-right">
    <img src="http://aspirehire-co-uk.mysmarterwebsite.co.uk/aspirehire-co-uk/_img/profile.svg" class="each-image">
  
  <div class="heading-container-right">
  <h1><?php
                              echo('<a href="blue.php?id='.$tablename.'&id1='.$name1.'">'. $name1.' </a>'); ?></h1></h1>
  </div>
  </div>
    <?php
                         }
                     }
                         ?>
                         <?php
                        session_start();
                       $con = mysqli_connect("localhost" , "root" , "PRINCE0308","student");
                        $category=$_GET['Category5'];
                        
                         if(isset($_GET['Category5']))
                          {
                                                       
                            $query = mysqli_query($con,"SELECT name FROM CAD");
                            
                              while($rows= mysqli_fetch_array($query))
                              { 
                                $name1=$rows['name'];
                                 $tablename="CAD";?>

    <div class="container-right">
    <img src="http://aspirehire-co-uk.mysmarterwebsite.co.uk/aspirehire-co-uk/_img/profile.svg" class="each-image">
  
  <div class="heading-container-right">
  <h1><?php
                              echo('<a href="blue.php?id='.$tablename.'&id1='.$name1.'">'. $name1.' </a>'); ?></h1></h1>
  </div>
  </div>
    <?php
                         }
                     }
                         ?>
                         <?php
                       session_start();
                        $con = mysqli_connect("localhost" , "root" , "PRINCE0308","student");
                        $category=$_GET['Category6'];
                        
                         if(isset($_GET['Category6']))
                          {
                                                       
                            $query = mysqli_query($con,"SELECT name FROM EMBEDDED");
                            
                              while($rows= mysqli_fetch_array($query))
                              { 
                                $name1=$rows['name'];
                                $tablename="EMBEDDED";?>
     
    <div class="container-right">
    <img src="http://aspirehire-co-uk.mysmarterwebsite.co.uk/aspirehire-co-uk/_img/profile.svg" class="each-image">
  
  <div class="heading-container-right">
  <h1><?php
                              echo('<a href="blue.php?id='.$tablename.'&id1='.$name1.'">'. $name1.' </a>'); ?></h1></h1>
  </div>
  </div>
    <?php
                         }
                     }
                         ?>
                           </div>
</div>

  </div>        
    </body>
</html>