//question 1
//Find the errors in the program
<?php
    print 'How are you';
    print 'I 'm fine.';
??>
//solution
there are two errors 
//print 'I /'m fine.;
and only one ? to close php

//question 2
//finding the solution to a hamburger problem
//solution
$each_hamburger = 4.95;
$quantity = 2;
$choc_milkshake = 1.95;
$cola = 0.85;
$sales_tax = 7.5;
$pretiptax = 16;
$amt = ($each_hamburger*$quantity)*$choc_milkshake*$cola;
$total_tax = (0.075+0.16)*$amt;
$total_pay = $amt+$total_tax;
print $total_pay;

//question 3
