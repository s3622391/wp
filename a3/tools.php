<?php
session_start();
print_r($_POST);

 
if (!empty($_POST)) {
    echo "Hi {$_POST['cust']['name']},<br>";
    echo "It looks like you want to see a movie on {$_POST['movie']['day']} at {$_POST['movie']['hour']}.";
}

/*function printMyCode() {
  $lines = file($_SERVER['PHP_SELF']);
  echo "<pre class='mycode'><ol>";
  foreach ($lines as $line)
     echo '<li>'.rtrim(htmlentities($line)).'</li>';
  echo '</ol></pre>';
}

printMyCode()
    
//echo ($_POST['PHP_SELF'])    
*/
$name='';    
if(!empty ($_POST['submitted']))
{
    $name = trim($_POST['cust[name]']);
    if (empty($name))
    {
        $name_error='Name must be entered';
    }
}     
       
/*
function preShow( $arr, $returnAsString=false ) {
$ret = '<pre>' . print_r($arr, true) . '</pre>';
if ($returnAsString)
return $ret;
else 
echo $ret; 
}


Seat Type	     All Day Monday and Wednesday	12pm Weekdays	All other times
Standard Adult	    $14.00	                    $14.00	        $19.80
Standard Consession	$12.50	                    $12.50	        $17.50
Standard Child	    $11.00	                    $11.00	        $15.30
First Adult	        $24.00	                    $24.00	        $30.00
First Consession	$22.50	                    $22.50	        $27.00
First Child	        $21.00	                    $21.00	        $24.00

 


*/
?>
