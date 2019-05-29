<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button ,input[type=submit]{
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, input[type=submit] {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, input[type=submit] {
     width: 100%;
  }
}
</style>
<body>

<h2>Chat Trial</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Fill Details here</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" method="post">
    <div class="container">
      <h1>Fill Details</h1>
      <p>Please fill in this form to chat.</p>
      <hr>
      <label for="email"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>
      
      <label>
        <p class="p3">
    <input type="radio" name="q1" value="Chat Executive" />
    Chat Executive
    <input type="radio" name="q1" value="Customer" />
    Customer
    
      </label>

      <p>By creating an account you agree to our <a href="terms.html" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none';" class="cancelbtn">Cancel</button>
        <input type="submit" name="submit" value="Sign up" onclick="return message();"/> 
        </br>
        </br>
        <script>
          function message(){
          alert("Record Saved Successfully");
          return true;}
        </script>
        <?php
          session_start();
          include('conn.php');
          if (isset($_POST['submit'])){
              $name = $_POST['name'];
              $Profession = $_POST['q1'];
              $_SESSION["user"] = $name;
             
              $sql = $bdd->prepare("INSERT INTO users(UserName,Profession) VALUES(:UserName,:Profession)");
              //$sql2 = $bdd->prepare("INSERT INTO chats(UserName,Profession) VALUES(:UserName,:Profession)");
              $bdd ->beginTransaction();
              $sql->execute(array('UserName'=>$name,
                                  'Profession'=>$Profession));
              //$sql2->execute(array('UserName'=>$name,
                //                  'Profession'=>$Profession));
              
              $bdd->commit();
              $bdd->null;
              if($Profession=="Chat Executive")
              {
              header("location:chat_executive.php");
              }
              else{
              header("location:customer.php");  
              }
              mysql_close($bdd);
              exit;
          }
          elseif(
            $name="" || $Profession=""){
                              
                  echo "<h2>Record not saved ...</h2>";          
          }
        ?>
        <!--<?php
        //    if(isset($_GET['success'])){  
        //?>
        //<table>
        //<tr>
        //<td></td><td><span style="color:green;">User inserted</span></td>  
        //</tr>
        //</table>
        //<?php
        //    }
        //?>-->
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
</script>

</body>
</html>

