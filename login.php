<?php
session_start();
     if (isset($_GET["login"])){
          class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('database.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      //echo "Opened database successfully\n";
   }

   $sql ='SELECT * from USERS where USERNAME="'.$_POST["usr_name"].'";';


   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      $id=$row['ID'];
      $username=$row["USERNAME"];
      $password=$row['PASSWORD'];
  }
    if ($id!=""){
        if ($password==$_POST["pwd"]){
           $_SESSION["login"]=$username;
           header('Location: index.php');    
        }else{
          
          echo "Wrong Password";
        }
      }else{
       echo "User not exist, please register to continue!";
      }
   //echo "Operation done successfully\n";
   $db->close();
     }
     ?>
<!--?php     
session_start();    
if(!isset($_SESSION["sess_user"])){    
    header("location:login.php");    
else {  
}
?>   
<!doctype html>    
<html>    
<head>    
<title>Welcome</title>    
    <style>     
        body{    
                
    margin-top: 110px;    
    margin-bottom: 110px;    
    margin-right: 160px;    
    margin-left: 90px;    
    background-color: lightcyan;    
    color: palevioletred;    
    font-family: verdana;    
    font-size: 100%    
        
        }    
            h2 {    
    color: darkred;    
    font-family: indigo;    
    font-size: 100%;    
}    
        h1 {    
    color: darkred;    
    font-family: indigo;    
    font-size: 100%;    
}    
                
            
    </style>    
</head>    
<body>    
    <center><h1>CREATE REGISTRATION AND LOGIN FORM USING PHP IN XAMPP</h1></center>    
        
<h2>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h2>    
<p>    
WE DID IT. SUCCESSFULLY CREATED REGISTRATION AND LOGIN FORM USING PHP IN XAMPP    
</p>    
</body>    
</html>    
<?php    
}    
?-->    