<?php

//require(conn.php);

//
//$sql = "SELECT * FROM users ORDER BY id ASC LIMIT 15";
//$retval = mysql_query( $sql, $bdd );
////$prof_query = mysqli_query($con,"SELECT Profession FROM users ORDER BY id ASC LIMIT 15");
////if ()
// if(! $retval ) {
//      die('Could not get data: ' . mysql_error());
//   }
//   
//    while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
//        echo "
//    <ul>
//        <li class='sent'>
//					<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0m7VGPALJzSxd_xzmaR4IDB8AByrmb6ul9SW_jvBZq8zc6eya0g' alt='' />
//					<p>How do you do !</p>
//				</li>
//     </ul>           
//        ";          
//    }
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $dbname = "chat_message";
   
   //Connect to MySQL Server
   $conn2 = mysqli_connect($dbhost, $dbuser, $dbpass,'chat_message');
    if ($conn2->connect_error) {
               die("Connection failed: " . $conn2->connect_error);
            }
   
   //// Retrieve data from Query String
   //$uname = $_REQUEST['uname'];
   //$msg = $_REQUEST['msg'];
   //
   
   // Escape User Input to help prevent SQL Injection
   //$uname = mysqli_real_escape_string($conn2,$uname);
   //$msg = mysqli_real_escape_string($conn2,$msg);
   
   
   //build query
   $query = "SELECT * FROM chats ";
   //$prof_query = "SELECT PROFESSION FROM chats";
   // $prof_result = mysqli_query($conn2,$prof_query);
   //Execute query
   $qry_result = mysqli_query($conn2,$query);
   // $datas = array();
   // if (mysqli_num_rows($qry_result) > 0){
   //      while($row = mysqli_fetch_assoc($qry_result)){
   //         $datas[] = $row;
   //      }
   //   }
      //  $datases = array();
           // var_dump($prof_result);
      // if (mysqli_num_rows($prof_result) > 0){
      //   while($col = mysqli_fetch_assoc($prof_result)){
      //      $datases[] = $col;
            
      //   }
      $posts = mysqli_fetch_all($qry_result,MYSQLI_ASSOC);
      //}
       //var_dump($datases);
        //foreach($datases[0] as $data)
        //{
        //    echo $data;
        //}
    //to get one row at a time
    //foreach($datas[0] as $data){
    //     echo $data['ChatText'];
    //}
    ?>
      
   <!--//Build Result String-->
   <ul>
   	<li class='sent'>
      <img src='https:encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0m7VGPALJzSxd_xzmaR4IDB8AByrmb6ul9SW_jvBZq8zc6eya0g' alt='' />
      <p>Sample Chat:  How do you do !</p>
      </li>
   
   <!--// Insert a new row in the table for each person returned-->
   <?php
      foreach($posts as $post) :
      if ($post['Profession'] == "Customer"){
      ?>
      
               <li class='sent'>
                  <img src='https:encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0m7VGPALJzSxd_xzmaR4IDB8AByrmb6ul9SW_jvBZq8zc6eya0g' alt='' />
                  <p><?php echo $post['message']  ?>
                 <sub style="font-size:8px;"><?php echo $post['time']?></sub></p>
               </li>
      
      <?php }else { ?>
               <li class='replies'>
                  <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpaER8I71i8AWwPyemOoin1MT-2WcqrJK4L4pH4EtvJbCoZgQOkQ' alt=''  />
                  <p><?php echo $post['message']  ?>
                  <sub style="font-size:8px;"><?php echo $post['time']?></sub></p>
               </li>
      <?php
      } endforeach; ?>
      </ul>
   <!--  
   foreach($datas[0] as $data){
      foreach($datases[0] as $dat){
               if($dat=="Customer"){
                  $display_string .= "<ul>";
                  $display_string .= "<li class='sent'>";
                  $display_string .= "<img src='https:encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0m7VGPALJzSxd_xzmaR4IDB8AByrmb6ul9SW_jvBZq8zc6eya0g' alt='' />";
                  $display_string .= "<p>".$data['message']."</p>";
                  $display_string .= "</li>";
               }
               else{
                  $display_string .= "<ul>";
                  $display_string .= "<li class='replies'>";
                  $display_string .= "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpaER8I71i8AWwPyemOoin1MT-2WcqrJK4L4pH4EtvJbCoZgQOkQ' alt=''  />";
                  $display_string .= "<p>".$data['message']."</p>";
                  $display_string .= "</li>";
               }
    }
   }
   
   $display_string .= "</ul>";
   echo $display_string;-->


<!--while($extract = mysql_fetch_assoc($result1)) {
	echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}
?>-->
   <!--<ul>
    
				<li class="sent">
    <img src="https:encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0m7VGPALJzSxd_xzmaR4IDB8AByrmb6ul9SW_jvBZq8zc6eya0g" alt="" />
					<p>How do you do !</p>
				</li>
				<li class="replies">
					<img src="https:encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpaER8I71i8AWwPyemOoin1MT-2WcqrJK4L4pH4EtvJbCoZgQOkQ" alt="" />
					<p>Fine.Never Give Up</p>
				</li>
				<li class="replies">
					<img src="https:encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpaER8I71i8AWwPyemOoin1MT-2WcqrJK4L4pH4EtvJbCoZgQOkQ" alt="" />
					<p>Excuses don't win championships.</p>
				</li>
				<li class="sent">
					<img src="https:encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0m7VGPALJzSxd_xzmaR4IDB8AByrmb6ul9SW_jvBZq8zc6eya0g" alt="" />
					<p>Oh yeah, did Michael Jordan tell you that?</p>
				</li>
				<li class="replies">
					<img src="https:encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpaER8I71i8AWwPyemOoin1MT-2WcqrJK4L4pH4EtvJbCoZgQOkQ" alt="" />
					<p>No, I told him that.</p>
				</li>
				<li class="replies">
					<img src="https:encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpaER8I71i8AWwPyemOoin1MT-2WcqrJK4L4pH4EtvJbCoZgQOkQ" alt="" />
					<p>What are your choices when someone puts a code to your head?</p>
				</li>
				<li class="sent">
					<img src="https:encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0m7VGPALJzSxd_xzmaR4IDB8AByrmb6ul9SW_jvBZq8zc6eya0g" alt="" />
					<p>What are you talking about? You do what they say or they shoot you.</p>
				</li>
				<li class="replies">
					<img src="https:encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpaER8I71i8AWwPyemOoin1MT-2WcqrJK4L4pH4EtvJbCoZgQOkQ" alt="" />
					<p>Wrong. You take the code, or you pull out a bigger one. Or, you call their bluff. Or, you can never satisfy them How do you think you can improve lke that.<?php date_default_timezone_set("Asia/Calcutta"); "The time is " . date("h:i:sa"); ?></p>
				</li>
			</ul>
       -->     