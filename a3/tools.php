<?php
session_start();
print_r($_POST);

$nameError = " ";
$name = " ";

if ($_server["REQUEST_Method"] == "POST") {
    if (empty($_POST["cust[name]"])) {
        $nameError = "A name is required";
    } else {
        $name = testName($_POST["cust[name]"]);
        
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameError = "Only letters and spacebar please";
        }
    }
}

function preShow( $arr, $returnAsString=false ) {
$ret = '<pre>' . print_r($arr, true) . '</pre>';
if ($returnAsString)
return $ret;
else 
echo $ret; 
}

?>