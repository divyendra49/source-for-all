<?php
include "server11.php";
?>
<!DOCTYPE html>
<html >
<head>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Berkshire+Swash">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel='stylesheet prefetch' href='https://cdn.jsdelivr.net/foundation/5.5.0/css/foundation.css'>
     <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <link rel='stylesheet prefetch' href='https://cdn.jsdelivr.net/foundation/5.5.0/css/foundation.css'>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script type="text/javascript" src="sub.js"></script>
     <meta charset="UTF-8">
     <title>Sub category Page</title>
    <link rel="stylesheet" href="11css.css">
    </head>
<body>
    <div class="topnav" id="myTopnav">
        
      <a class="fa fa-facebook-f" style="font-size:30px;color:white"></a>
      <a class="fa fa-google" style="font-size:30px;color:white"></a>
      <a class="fa fa-instagram" style="font-size:30px;color:white"></a>
    <h1>Source for All</h1>  
      
    </div>

 <section class="container">   
<form method="POST" action="server11.php">

<p>
Are You:
<div class="dropdown">
<select id="person" name="category0" class="dropdown-select">
<option value="0">Select</option>
<option value="1">Faculty</option>
<option value="2">Student</option>
</select>
</div>
    </p>

    <p>Category
        <div class="dropdown">
        <select id="category1" name="category1" class="dropdown-select">
            <option value="0">Select the category</option>
            <option value="1">WEB DESIGNING</option>
            <option value="2">MOBILE APPLICATION</option>
            <option value="3">EMBEDDED SOLUTIONS/INTERNET OF THINGS</option>
            <option value="4">COMPETITIVE PROGRAMMING</option>
            <option value="5">GRAPHIC DESIGNING</option>
            <option value="6">CAD</option>
            <!--<option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>-->
        </select>
        </div>
    </p>
    <div id="Permission1">
    
    
    <p>Are you:-
     <div class="dropdown">
        <select id="category2" name="category2" class="dropdown-select">
            <option value="0">Select</option>
            <option value="1">Frontend</option>
            <option value="2">Backend</option>
            <option value="3">Polyglot</option>
            </select>
            </div>
        </p></div>
        
    <div id="Permission2">
    <p>Languages:
        
        <div id="category3" name="category3" >
            <input type="checkbox" class="styled-checkbox" id="styled-checkbox-1" name="frontendcatg" value="1"> <label for="styled-checkbox-1">HTML</label>  <br>
            <input type="checkbox" class="styled-checkbox" id="styled-checkbox-2" name="frontendcatg" value="2"><label for="styled-checkbox-2">CSS</label> <br>
            <input type="checkbox" class="styled-checkbox" id="styled-checkbox-3" name="frontendcatg" value="3"><label for="styled-checkbox-3">JAVASCRIPT</label> <br>
            </div>
            
       
        </p> </div>
        
    <div id="Permission3">
    <p>Languages:</p>
        <div id="category4" name="category4">
            <input type="checkbox" class="styled-checkbox" id="styled-checkbox-1" name="bckendcatg" value="1"><label for="styled-checkbox-1">PHP</label><br>
            <input type="checkbox" class="styled-checkbox" id="styled-checkbox-2" name="bckendcatg" value="2"><label for="styled-checkbox-1">JAVA</label><br>
            <input type="checkbox" class="styled-checkbox" id="styled-checkbox-3" name="bckendcatg" value="3">.NET<br>
           <input type="checkbox" class="styled-checkbox" id="styled-checkbox-4" name="bckendcatg" value="4">PYTHON<br>
                        
           Other: <input type="text" name="bckendcatg" >
            </div>
         
         </div>

         <div id="Permission6">
    <p>Languages:</p>
        <div id="category6" name="category6">
            <input type="checkbox" class="styled-checkbox" id="styled-checkbox-1" name="polyendcatg" value="1">PHP<br>
            <input type="checkbox" class="styled-checkbox" id="styled-checkbox-2" name="polyendcatg" value="2">JAVA<br>
            <input type="checkbox" class="styled-checkbox" id="styled-checkbox-3" name="polyendcatg" value="3">CSS<br>
           <input type="checkbox" class="styled-checkbox" id="styled-checkbox-4" name="polyendcatg" value="4">JAVASCRIPT<br>
                        
           Other: <input type="text" name="polyendcatg" >
            </div>
  
    </div>
        
        <div id="Permission5">

        <p>
        
        Are you:
        <div class="dropdown">
        <select id="category5" name="category5" class="dropdown-select">
        <option value="0">Select</option>
        <option value="1">Android</option>
        <option value="2">IOS</option>
        </select>
        </div>
        </p>
        </div>
        <div id="Permission4" >
          <h2>
        SUBMIT THE DETAILS 
        </h2>
        <div id="category" name="category">
        <p>Name:</p>
        <input type="text" class="dropdown" required name="name"><br>
        <br>
        <p>Best books to learn:</p><input type="text" class="dropdown" required name="book"><br><br>
        <p>Best websites to learn:</p><input type="text" class="dropdown" required name="web"><br><br>
        <p>Video courses:</p><input type="text" class="dropdown" required name="video"><br><br>
        <p>Projects you have worked :</p><input type="text" class="dropdown" required name="project"><br><br>
        <p>Contest:</p><input type="text" class="dropdown" required name="contest"><br><br>
        <p>Additional Info</p><input type="text" class="dropdown"  name="info"><br><br>
        <p>Provide your E-mail Address ;</p><input type="email" class="dropdown" required name="email"><br><br>
        </div>
        
        
        </div>
        <!--    <p align="center">
        <input type="submit" value="SUBMIT" name="submit" />
    </p> -->
    <button class="btn_sign_up btn btn-default btn-md" type="submit"  name="submit">
           Submit
           </button>
           
        
    </form>
    </section>
    </body>


</html>


