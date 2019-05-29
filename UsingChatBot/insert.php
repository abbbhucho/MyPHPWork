<?php
session_start();
//$uname = $_REQUEST['uname'];
 // Retrieve data from Query String
   if(isset($_POST['uname']) && !empty($_POST['uname'])){
      $uname = $_POST['uname'];   
   }
   if (isset($_POST['msg']) && !empty($_POST['msg'])){
      $msg = $_POST['msg'];   
   }
   
   $user = $_SESSION["user"];  
   
   //used for testing purposes
   //$uname = "Customer";
   //$msg = "how are you";
   //$user = "Ram";
   
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   // Escape User Input to help prevent SQL Injection
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,'chat_message');
    if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            }
            
    $uname = mysqli_real_escape_string($conn,$uname);
    $msg = mysqli_real_escape_string($conn,$msg);        
            
//$con = mysqli_connect('localhost','root','');
//mysqli_select_db($con,'chat_message');
//$msg = mysqli_real_escape_string($con,$_REQUEST['msg']);
//mysqli_query($con,"INSERT INTO chats (`username`, `msg`) VALUES ('$uname', '$msg')");

$sql = "INSERT INTO `chats`( `Profession`, `UserName`, `message`, `time`) VALUES ('$uname','$user','$msg',NOW())";
$result1 = mysqli_query($conn,$sql);
if ($result1) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();

?>
