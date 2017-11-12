<?php
include "test.php";
?>
<!DOCTYPE html>
<html >
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src=".js"></script>
  <meta charset="UTF-8">
  <title>Sub category Page</title>
    </head>
<body>
    
<form method="POST" action="test.php">
<p>
Are You:
<select id="person" name="category0">
<option value="0">Select</option>
<option value="1">Faculty</option>
<option value="2">Student</option>
</select>
</p>

    <p>Category
    
        <select id="category1" name="category1" >
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
        
    </p>
    
    <div id="Permission1">
    
    
    <p>Are you:-
    <form method="POST">
        <select id="category2" name="category2">
            <option value="0">Select</option>
            <option value="1">Frontend</option>
            <option value="2">Backend</option>
            <option value="3">Polyglot</option>
            </select>
            </form>
        </p></div>
        
    <div id="Permission2">
    <p>Languages:
    <form method="POST">
        <div id="category3" name="category3">
            <input type="checkbox" name="frontendcatg" value="1">HTML<br>
            <input type="checkbox" name="frontendcatg" value="2">CSS<br>
            <input type="checkbox" name="frontendcatg" value="3">JAVASCRIPT<br>
           Other: <input type="text" name="frontendcatg" >
            </div>
            <h4>
        FILL OUT THE ENTRIES 
        </h4>
        </form>
        </p> </div>
        
    <div id="Permission3">
    <p>Languages:</p>
    <form method="POST">
        <div id="category4" name="category4">
            <input type="checkbox" name="bckendcatg" value="1">PHP<br>
            <input type="checkbox" name="bckendcatg" value="2">JAVA<br>
            <input type="checkbox" name="bckendcatg" value="3">.NET<br>
           <input type="checkbox" name="bckendcatg" value="4">PYTHON<br>
                        
           Other: <input type="text" name="bckendcatg" >
            </div>
            </form>
            <h4>
        FILL OUT THE ENTRIES 
        </h4>
         </div>

         <div id="Permission6">
         <form method="POST">
    <p>Languages:</p>
        <div id="category6" name="category6">
            <input type="checkbox" name="polyendcatg" value="1">PHP<br>
            <input type="checkbox" name="polyendcatg" value="2">JAVA<br>
            <input type="checkbox" name="polyendcatg" value="3">CSS<br>
           <input type="checkbox" name="polyendcatg" value="4">JAVASCRIPT<br>
                        
           Other: <input type="text" name="polyendcatg" >
            </div>
            </form>
  <h4>
        FILL OUT THE ENTRIES 
        </h4>
    </div>
        
        <div id="Permission5">
        <p>
        <form method="POST">
        Are you:
        <select id="category5" name="category5">
        <option value="0">Select</option>
        <option value="1">Android</option>
        <option value="2">IOS</option>
        </select>
        </form>
        </p>
        </div>
        <form method="POST">
        <div id="Permission4">
        
        <div id="category" name="category">
        Best books to learn:<input type="text" name="book"><br>
        Best websites to learn:<input type="text" name="web"><br>
        Video courses:<input type="text" name="video"><br>
        Projects you have worked:<input type="text" name="project"><button onclick="myFunction()">Try it</button><br>
        Contests :<input type="text" name="contest"><br>
        Additional Information :<input type="text" name="info"><br>
        Provide your E-mail Address <input type="text" name="email"><br>
        </div>
        
        
        </div>
-->        
   <p align="center">
        <input type="submit" value="SUBMIT" name="submit" />
    </p>
  </form>

    </body>


</html>