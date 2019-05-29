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
                     
     $prof_query = "SELECT * FROM chats";
     $prof_result = mysqli_query($conn2,$prof_query);
     //echo $prof_result;
      //      $datas = array();
      //     // var_dump($prof_result);
      // if (mysqli_num_rows($prof_result) > 0){
      //   while($col = mysqli_fetch_assoc($prof_result)){
      //      $datases[] = $col;
      //      
      //   }

      $posts = mysqli_fetch_all($prof_result,MYSQLI_ASSOC);
      ?>
      <?php
       //foreach($posts as $post) : ?>
           <!--<ul>
               <li class='sent'>
                  <img src='https:encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0m7VGPALJzSxd_xzmaR4IDB8AByrmb6ul9SW_jvBZq8zc6eya0g' alt=''  height="50" width="50"/>
                  <h5><?php //echo $post['message']  ?></h5>
                  <sub><?php //echo $post['time']?></sub>
               </li>-->
       <?php //endforeach; ?>
      <ul>
       <?php
      foreach($posts as $post) :
      if ($post['Profession'] == "Customer"){
      ?>
      
               <li class='sent'>
                  <img src='https:encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0m7VGPALJzSxd_xzmaR4IDB8AByrmb6ul9SW_jvBZq8zc6eya0g' alt=''  height="50" width="50"/>
                  <h5><?php echo $post['message']  ?></h5>
                  <sub><?php echo $post['time']?></sub>
               </li>
      
      <?php }else { ?>
               <li class='replies'>
                  <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpaER8I71i8AWwPyemOoin1MT-2WcqrJK4L4pH4EtvJbCoZgQOkQ' alt=''  />
                  <h5><?php echo $post['message']  ?></h5>
                  <sub><?php echo $post['time']?></sub>
               </li>
      <?php
      } endforeach; ?>
      </ul>
              
        
       