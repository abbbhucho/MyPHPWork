//the earlier or basic format of inserting html into PHP code can be like 
<?php
echo"
    <head><title>Prac</title></head>
    <body>
            <h1>Say hello to the world</h1>
    </body>
    ";

?>
//but we here mention the other method of defining HTML code in a systematic way in a systematic way
<?php
print <<<_HTML_
          <head><title>Prac</title></head>
          <body>
            <h1>Say hello to the world</h1>
          </body>
       _HTML_;
?>
//this method has its own advantage
//in the first method to insert a data we will have to alter between echo commands to input data from php variables.
//but in the second method we dont require to do so
//example printing a form
<?php
$name = "abc";
echo"
      
        <h1>Your Name:".$name."is good</h1>";
?>
//but in second case
<?php
    print <<<_HTML_
      <h1>Your Name:".$name."is good</h1>";   

    _HTML;
?>
this syntax is called by using heredoc .HEREDOC is depricated from new version of php.NOWDOC is used in php 7.3
//to see more reference here 
//https://laravel-news.com/flexible-heredoc-and-nowdoc-coming-to-php-7-3
