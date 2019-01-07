<?php

$uname = $_REQUEST['uname'];


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'chatbox');
$msg = mysqli_real_escape_string($con,$_REQUEST['msg']);
mysqli_query($con,"INSERT INTO logs (`username`, `msg`) VALUES ('$uname', '$msg')");

$result1 = mysqli_query($con,"SELECT * FROM logs ORDER BY id DESC");

while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}