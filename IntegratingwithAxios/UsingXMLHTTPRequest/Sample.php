//Creation of html form to take input values from the user

//creating a javascript function to send data via http request to insert.php

var xmlhttp = new XMLHttpRequest();
    var url = 'insert.php';
    var params = "uname="+uname+"&msg="+message;
    
    xmlhttp.open('POST', url, true);
  
    //Send the proper header information along with the request
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    
    http.onreadystatechange = function() {
      if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          console.log(xmlhttp.responseText);
      }
    }
  	xmlhttp.send(params);
