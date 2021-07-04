<?php

$servername = "localhost";
$username = "root";
$password = "";
$my_db = "robot";
$port ='3306';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$my_db,$port);

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}





if(isset($_POST['forward'])){
$sqlf = "UPDATE `map` SET `direction`= 'forward' WHERE 1";
if(mysqli_query($conn, $sqlf)){
          $sql2f = "SELECT `direction` FROM `map` WHERE 1";
          $result=mysqli_query($conn, $sql2f);
          while($row = mysqli_fetch_assoc($result)) {
          echo "directione:  " .$row['direction'] ;
}}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}




if(isset($_POST['left'])){
$sqll = "UPDATE `map` SET `direction`= 'left' WHERE 1";
if(mysqli_query($conn, $sqll)){
          $sql2l = "SELECT `direction` FROM `map` WHERE 1";
          $result=mysqli_query($conn, $sql2l);
          while($row = mysqli_fetch_assoc($result)) {
          echo "directione:  " .$row['direction'] ;
}} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}




 if(isset($_POST['stop'])){
$sqls = "UPDATE `map` SET `direction`= 'stop' WHERE 1";
if(mysqli_query($conn, $sqls)){
          $sql2s = "SELECT `direction` FROM `map` WHERE 1";
          $result=mysqli_query($conn, $sql2s);
          while($row = mysqli_fetch_assoc($result)) {
          echo "directione:  " .$row['direction'] ;
}} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}





 if(isset($_POST['right'])){
$sqlr = "UPDATE `map` SET `direction`= 'right' WHERE 1";
if(mysqli_query($conn, $sqlr)){
          $sql2r = "SELECT `direction` FROM `map` WHERE 1";
          $result=mysqli_query($conn, $sql2r);
          while($row = mysqli_fetch_assoc($result)) {
          echo "directione:  " .$row['direction'] ;
}} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}





 if(isset($_POST['backward'])){
$sqlb = "UPDATE `map` SET `direction`= 'backward' WHERE 1";
if(mysqli_query($conn, $sqlb)){
          $sql2b = "SELECT `direction` FROM `map` WHERE 1";
          $result=mysqli_query($conn, $sql2b);
          while($row = mysqli_fetch_assoc($result)) {
          echo "directione:  " .$row['direction'] ;
}} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}

mysqli_close($conn);
?>
