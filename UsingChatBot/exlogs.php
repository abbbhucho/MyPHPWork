<?php


   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $dbname = "chat_message";
   
   //Connect to MySQL Server
   $conn2 = mysqli_connect($dbhost, $dbuser, $dbpass,'chat_message');
    if ($conn2->connect_error) {
               die("Connection failed: " . $conn2->connect_error);
            }
   
  
   
   //build query
   $query = "SELECT * FROM chats ";
  
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
      <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpaER8I71i8AWwPyemOoin1MT-2WcqrJK4L4pH4EtvJbCoZgQOkQ' alt='' />
      <p>Sample Chat:  How do you do !</p>
      </li>
   
   <!--// Insert a new row in the table for each person returned-->
   <?php
      foreach($posts as $post) :
      if ($post['Profession'] == "Chat Executive"){
      ?>
      
               <li class='sent'>
                  <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpaER8I71i8AWwPyemOoin1MT-2WcqrJK4L4pH4EtvJbCoZgQOkQ' alt='' />
                  <p><?php echo $post['message']  ?>
                 <sub style="font-size:8px;"><?php echo $post['time']?></sub></p>
               </li>
      
      <?php }else { ?>
               <li class='replies'>
                  <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0m7VGPALJzSxd_xzmaR4IDB8AByrmb6ul9SW_jvBZq8zc6eya0g' alt=''  />
                  <p><?php echo $post['message']  ?>
                  <sub style="font-size:8px;"><?php echo $post['time']?></sub></p>
               </li>
      <?php
      } endforeach; ?>
      </ul>
  