<!DOCTYPE html>

<html >
<head>
  <meta charset="UTF-8">
  <title>Info Page</title>
  
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Berkshire+Swash">
  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet prefetch' href='https://cdn.jsdelivr.net/foundation/5.5.0/css/foundation.css'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="bluecss.css">

  
</head>

<body>
      <body>

<div class="topnav" id="myTopnav">
          <a href="../front/homepage.php" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
      <a class="fa fa-facebook-f" style="font-size:30px;color:white"></a>
      <a class="fa fa-google" style="font-size:30px;color:white"></a>
      <a class="fa fa-instagram" style="font-size:30px;color:white"></a>
    <h1>Source for All</h1>  
      
    </div>
        <div class="main-container">

            
            <!-- LEFT-CONTAINER -->
            <div class="left-container container">
                <div class="menu-box block"> <!-- MENU BOX (LEFT-CONTAINER) -->
                    <h2 class="titular">MENU BOX</h2>
                    <ul class="menu-box-menu">
                        <li>
                            <a class="menu-box-tab" href="#KK"><span class="icon fa fa-book scnd-font-color " ></span>Books</a>                            
                        </li>
                        <li>
                            <a class="menu-box-tab" href="#8"><span class="icon fa fa-window-restore scnd-font-color"></span>Websites</a>                            
                        </li>
                        <li>
                            <a class="menu-box-tab" href="#10"><span class="icon fa fa-video-camera scnd-font-color"></span>Video 
                            Courses</a>
                        </li>
                        <li>
                            <a class="menu-box-tab" href="#12"><span class="icon fa fa-briefcase scnd-font-color"></span>Project</a>
                        </li>
                        <li>
                            <a class="menu-box-tab" href="#13"><span class="icon fa fa-trophy scnd-font-color"></span>Contest</a>
                        </li>                        
                    </ul>
                </div>
                <div class="donut-chart-block block"> <!-- BLOCK NUMBER 2 (LEFT-CONTAINER) -->
                    <h2 class="titular">People Learning Source STATS</h2>
                    <div class="donut-chart">
                        <!-- DONUT-CHART by @kseso https://codepen.io/Kseso/pen/phiyL -->
                        <div id="porcion1" class="recorte"><div class="quesito ios" data-rel="21"></div></div>
                        <div id="porcion2" class="recorte"><div class="quesito mac" data-rel="39"></div></div>
                        <div id="porcion3" class="recorte"><div class="quesito win" data-rel="31"></div></div>
                        <div id="porcionFin" class="recorte"><div class="quesito linux" data-rel="9"></div></div>
                        <p class="center-date">YEAR<br><span class="scnd-font-color">2017</span></p> 
                    </div>
                    <ul class="os-percentages horizontal-list">
                        <li>
                            <p class="ios os scnd-font-color">Offline</p>
                            <p class="os-percentage">30<sup>%</sup></p>
                        </li>
                        <li>
                            <p class="mac os scnd-font-color">Online</p>
                            <p class="os-percentage">70<sup>%</sup></p>
                        </li>
                       
                    </ul>
                </div>
                
                
                <a name="10">
                <div class="line-chart-block block clear"> <!-- BLOCK NUMBER 3 (LEFT-CONTAINER) -->
               
                    
                     <div class="weather block clear">  
                         
                         <h2 class="titular"><span class="icon fa fa-video-camera "></span><strong>Best Video Courses</strong></h2>
                        <div class="current-day">
                          <br><br><p class="current-day-date">Websites for Video Courses</p>
                            
                            
                         </div>
                    
                    <ul class="next-days">
                        <li>
                            
                           &nbsp  <p><?php
                             $con = mysqli_connect("localhost" , "root" , "PRINCE0308","faculty");
                             $con1= mysqli_connect("localhost" , "root" , "PRINCE0308","student");
                            // echo "hii";
                              $tablename=$_GET['id'];
                              $name1=$_GET['id1'];
                              //echo $tablename;
                              //echo "hi";
                              //echo $name1;
                              $query = mysqli_query($con,"SELECT VIDEO FROM `{$tablename}` WHERE name='$name1'");
                             // //echo $query;
                               while($rows= mysqli_fetch_array($query))
                               { 
                                    echo $rows['VIDEO'];      

                               }
                               $query1 = mysqli_query($con1,"SELECT VIDEO FROM `{$tablename}` WHERE name='$name1'");
                               while($rows1=mysqli_fetch_array($query1))
                               {
                               	echo $rows1['VIDEO'];
                               }
                         
                            ?>    


                            </p>
                        </li>
                       
                        
                         </ul>
                    </div>
                </div>
                
                </a>
                <div class="media block"> <!--Block number  4 inclusion with block number 3(DO NOT TOUCH!!)-->
                    
                </div>
              
            </div>
            
            
            
            
            
            <!-- MIDDLE-CONTAINER -->
            <div class="middle-container container">
                
                
                <div class="profile block"> <!-- PROFILE (MIDDLE-CONTAINER) Block NUMBER 1 -->
                    <a class="add-button" href="#28"><span class="icon entypo-plus scnd-font-color"></span></a>
                    <div class="profile-picture big-profile-picture clear">
                        <img width="150px" alt="Karan Khiani  picture" src="https://www.ischool.berkeley.edu/sites/default/files/default_images/avatar.jpeg" >
                    </div>
                    <h1 class="user-name"><?php
                             $con = mysqli_connect("localhost" , "root" , "PRINCE0308","faculty");
                            // echo "hii";
                              $tablename=$_GET['id'];
                              $name1=$_GET['id1'];
                              echo $name1;
                              ?>

                              </h1>
                    <div class="profile-description">
                        <p class="scnd-font-color">
                            <?php
                             $con = mysqli_connect("localhost" , "root" , "PRINCE0308","faculty");
                            // echo "hii";
                              $tablename=$_GET['id'];
                              $name1=$_GET['id1'];
                              echo $tablename;
                              ?>

                        </p>
                    </div>
                    <ul class="profile-options horizontal-list">
                        
                        <li><a class="likes" href="#42"><p><span class="icon fontawesome-heart-empty scnd-font-color"></span>0</p></a></li>
                        <li><a class="views" href="#41"><p><span class="icon fontawesome-eye-open scnd-font-color"></span>0</p></a></li>
                    </ul>
                </div>
                
                
                
                <a name="KK">
                <div class="weather block clear KK  "> <!-- BOOKS BLOCK NUMBER 2 (MIDDLE-CONTAINER) -->
                    <h2 class="titular"><span class="icon fa fa-book  " ></span><strong>Best Books To Learn</strong></h2>
                    <div class="current-day">
                        <p class="current-day-date"></p>
                        <p class="current-day-temperature"></p>
                    </div>
                                       <ul class="next-days">
                        <li>
                            
                            &nbsp <p>
                                <?php
                             $con = mysqli_connect("localhost" , "root" , "PRINCE0308","faculty");
                             $con1 = mysqli_connect("localhost" , "root" , "PRINCE0308","student");
                            // echo "hii";
                              $tablename=$_GET['id'];
                              $name1=$_GET['id1'];
                              
                              $query = mysqli_query($con,"SELECT BOOK FROM `{$tablename}` WHERE name='$name1'");
                             // //echo $query;
                              $query1 = mysqli_query($con1,"SELECT BOOK FROM `{$tablename}` WHERE name='$name1'");
                               while($rows= mysqli_fetch_array($query))
                               { 
                                
                                    echo $rows['BOOK']; 
                                    }
                                    while($rows1= mysqli_fetch_array($query1))
                               { 
                                
                                    echo $rows1['BOOK'];  
                                    }     

                              ?>



                            </p>
                        </li>
                        
                        
                         </ul>
                </div>
                </a>
                <a name="12">
                <div class="tweets block"> <!-- PROJECTS BLOCK NUMBER 3(MIDDLE-CONTAINER) -->
                    <h2 class="titular"><span class="icon fa fa-briefcase "></span>Projects</h2>
                    <div class="tweet first">
                        <p><?php
                             $con = mysqli_connect("localhost" , "root" , "PRINCE0308","faculty");
                            // echo "hii";
                             $con1 = mysqli_connect("localhost" , "root" , "PRINCE0308","student");
                              $tablename=$_GET['id'];
                              $name1=$_GET['id1'];
                              
                              $query = mysqli_query($con,"SELECT PROJECT FROM `{$tablename}` WHERE name='$name1'");
                             // //echo $query;
                              $query1 = mysqli_query($con1,"SELECT PROJECT FROM `{$tablename}` WHERE name='$name1'");
                               while($rows= mysqli_fetch_array($query))
                               { 
                                    echo $rows['PROJECT']; 
                                    } 
                                    while($rows1= mysqli_fetch_array($query1))
                               { 
                                    echo $rows1['PROJECT']; 
                                    } 


                              ?> 
                       
                    </div>
                </div> 
                </a>
                
              
            </div>

            
            
            
            <!-- RIGHT-CONTAINER -->
            <div class="right-container container">
            
                <div class="join-newsletter block"> <!-- EMAIL BLOCK NUMBER 1 (RIGHT-CONTAINER) -->
                    <h2 class="titular"><span class="fontawesome-envelope "></span>&nbsp Contact By Email

                    </h2>
                    <div class="input-container">
                        <br><br>
                        <input type="text" placeholder="<?php
                             $con = mysqli_connect("localhost" , "root" , "PRINCE0308","faculty");
                             $con1 = mysqli_connect("localhost" , "root" , "PRINCE0308","student");
                            // echo "hii";
                              $tablename=$_GET['id'];
                              $name1=$_GET['id1'];
                              
                              $query = mysqli_query($con,"SELECT EMAIL FROM `{$tablename}` WHERE name='$name1'");
                              $query1 = mysqli_query($con1,"SELECT EMAIL FROM `{$tablename}` WHERE name='$name1'");
                             // //echo $query;
                               while($rows= mysqli_fetch_array($query))
                               { 
                                    echo $rows['EMAIL']; 
                                    } 
                                    while($rows1= mysqli_fetch_array($query1))
                               { 
                                    echo $rows1['EMAIL']; 
                                    } 


                              ?>" class="email text-input">
                        <div class="input-icon envelope-icon-newsletter"></div>
                    </div>
                </div>
                
                
                
                

                <a name="8">

                <div class="calendar-day block"> <!-- Websites Block number 3(RIGHT-CONTAINER) -->
                    <div class="arrow-btn-container">
                        <h2 class="titular"><span class="icon fa fa-window-restore "></span> &nbsp Websites to learn</h2>
                        </div> 
                 <div class="tweet first">
                        <p><?php
                             $con = mysqli_connect("localhost" , "root" , "PRINCE0308","faculty");
                             $con1 = mysqli_connect("localhost" , "root" , "PRINCE0308","student");
                            // echo "hii";
                              $tablename=$_GET['id'];
                              $name1=$_GET['id1'];
                              
                              $query = mysqli_query($con,"SELECT WEB FROM `{$tablename}` WHERE name='$name1'");
                              $query1 = mysqli_query($con1,"SELECT WEB FROM `{$tablename}` WHERE name='$name1'");
                             // //echo $query;
                               while($rows= mysqli_fetch_array($query))
                               { 
                                    echo $rows['WEB']; 
                                    } 
                                    while($rows1= mysqli_fetch_array($query1))
                               { 
                                    echo $rows1['WEB']; 
                                    }         

                              ?>
                       
                    </div>
                     
                </div>
                </a>
                <br>
                <a name="13">
                <div class="calendar-month block 13" > <!-- contest Block number 4 (RIGHT-CONTAINER) -->
                    <div class="arrow-btn-container">
                        <h2 class="titular"><span class="icon fa fa-trophy "></span> &nbsp Contest</h2>
                    </div>
                    <div class="tweet first">
                        <p><?php
                             $con = mysqli_connect("localhost" , "root" , "PRINCE0308","faculty");
                             $con1 = mysqli_connect("localhost" , "root" , "PRINCE0308","student");
                            // echo "hii";
                              $tablename=$_GET['id'];
                              $name1=$_GET['id1'];
                              
                              $query = mysqli_query($con,"SELECT CONTEST FROM `{$tablename}` WHERE name='$name1'");
                             // //echo $query;
                              $query1 = mysqli_query($con1,"SELECT CONTEST FROM `{$tablename}` WHERE name='$name1'");
                               while($rows= mysqli_fetch_array($query))
                               { 
                                    echo $rows['CONTEST']; 
                                    }   
                                    while($rows1= mysqli_fetch_array($query1))
                               { 
                                    echo $rows1['CONTEST']; 
                                    }       

                              ?> 
                       
                    </div>
                    </a>
                     <div class="calendar-month1 block 12" >
                     </div>
                    
                    
                    </div> <!-- end calendar-month block --> 

            </div> <!-- end right-container -->
           
            <div style="align:center ;padding: 430px;">
                <a href="display.php">
               <button>
                 Learn More
                </button></a>
                </div>

        </div> <!-- end main-container -->

    </body>
  
  
</body>
</html>


