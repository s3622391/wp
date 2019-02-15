<?php
session_start();

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

$movieObject['RBI']['title'] = 'Ralph Breaks the Internet';
$movieObject['RBI']['rating'] = 'PG';
$movieObject['RBI']['description'] = '<P>Video game bad guy Ralph and fellow misfit Vanellope von Schweetz must risk it all by traveling to the World Wide Web in search of a replacement part to save Vanellopes video game, Sugar Rush. In way over their heads, Ralph and Vanellope rely on the citizens of the internet -- the netizens -- to help navigate their way, including an entrepreneur named Yesss, who is the head algorithm and the heart and soul of trend-making site BuzzzTube.</p>';
$movieObject['RBI']['screenings'] = ['MON' => 12,
                                     'TUE' => 12,
                                     'WED' => 18,
                                     'THU' => 18,
                                     'FRI' => 18,
                                     'SAT' => 12,
                                     'SUN' => 12  ];
 



  
$movieObject['GSW']['title'] = "The Girl in the Spider's";
$movieObject['GSW']['rating'] = 'R';
$movieObject['GSW']['description'] = "<P>Fired from the National Security Agency, Frans Balder recruits hacker Lisbeth Salander to steal FireWall, a computer program that can access codes for nuclear weapons worldwide. The download soon draws attention from an NSA agent who traces the activity to Stockholm. Further problems arise when Russian thugs take Lisbeths laptop and kidnap a math whiz who can make FireWall work. Now, Lisbeth and an unlikely ally must race against time to save the boy and recover the codes to avert disaster.</p>";
$movieObject['GSW']['screenings'] = ['WED' => 21,
                                     'THU' => 21,
                                     'FRI' => 21,
                                     'SAT' => 18,
                                     'SUN' => 18 ];

$movieObject['BER']['title'] = "Boy Erased";
$movieObject['BER']['rating'] = 'R';
$movieObject['BER']['description'] = "<P>Jared Eamons, the son of a small-town Baptist pastor, must overcome the fallout after being outed as gay to his parents. His father and mother struggle to reconcile their love for their son with their beliefs. Fearing a loss of family, friends and community, Jared is pressured into attending a conversion therapy program. While there, Jared comes into conflict with its leader and begins his journey to finding his own voice and accepting his true self.</p>";
$movieObject['BER']['screenings'] = ['WED' => 12,
                                     'THU' => 12,
                                     'FRI' => 12,
                                     'SAT' => 21,
                                     'SUN' => 21  ];
    
$movieObject['ASB']['title'] = "A Star is Born";
$movieObject['ASB']['rating'] = 'R';
$movieObject['ASB']['description'] = "<P>Seasoned musician Jackson Maine discovers -- and falls in love with -- struggling artist Ally. She has just about given up on her dream to make it big as a singer until Jackson coaxes her into the spotlight. But even as Allys career takes off, the personal side of their relationship is breaking down, as Jackson fights an ongoing battle with his own internal demons.</p>";
$movieObject['ASB']['screenings'] = ['MON' => 18,
                                     'TUE' => 18,
                                     'FRI' => 18,
                                     'SAT' => 15,
                                     'SUN' => 15  ];

$pricesObject = ['full' => ['STA' => 19.8,
                            'STP' => 17.5,
                            'STC' => 15.3,
                            'FCA' => 30,
                            'FCP' => 27,
                            'FCC' => 24
                            ],
                 'disc' => ['STA' => 14,
                            'STP' => 12.5,
                            'STC' => 11,
                            'FCA' => 24,
                            'FCP' => 22.5,
                            'FCC' => 21
                            ]
                ];


$discountDay1 = 'MON';
$discountDay2 = 'WED';
$selectedTime = $_POST['movie']['hour'];
$selectedDay = $_POST['movie']['day'];
$total = 0;

if (($selectedTime == 12) || ($selectedDay == $discountDay1) || ($selectedDay == $discountDay2)) {
    
   // echo " 12 or MON or WED ";
    
   if ($_POST['seats']['STA'] >= 0 ){       
       $total += number_format($_POST['seats']['STA'] * $pricesObject['disc']['STA'],2);
   };
   if ($_POST['seats']['STP'] >= 0 ){
       $total += number_format($_POST['seats']['STP'] * $pricesObject['disc']['STP'],2);
   };
   if ($_POST['seats']['STC'] >= 0 ){                
       $total += number_format($_POST['seats']['STC'] * $pricesObject['disc']['STC'],2);
   };
   if ($_POST['seats']['FCA'] >= 0 ){                
       $total += number_format($_POST['seats']['FCA'] * $pricesObject['disc']['FCA'],2);
   };                
   if ($_POST['seats']['FCP'] >= 0 ){                
       $total += number_format($_POST['seats']['FCP'] * $pricesObject['disc']['FCP'],2);
   };            
   if ($_POST['seats']['FCC'] >= 0 ){                
       $total += number_format($_POST['seats']['FCC'] * $pricesObject['disc']['FCC'],2);
   };               
           
} 
else {
    
   // echo " All other values ";
    
    if($_POST['seats']['STA'] != 0 ){
       $total += number_format($_POST['seats']['STA'] * $pricesObject['full']['STA'],2);
   };
   if($_POST['seats']['STP'] != 0 ){
       $total += number_format($_POST['seats']['STP'] * $pricesObject['full']['STP'],2);
   };
   if($_POST['seats']['STC'] != 0 ){                
       $total += number_format($_POST['seats']['STC'] * $pricesObject['full']['STC'],2);
   };
   if($_POST['seats']['FCA'] != 0 ){                
       $total += number_format($_POST['seats']['FCA'] * $pricesObject['full']['FCA'],2);
   };                
   if($_POST['seats']['FCP'] != 0 ){                
       $total += number_format($_POST['seats']['FCP'] * $pricesObject['full']['FCP'],2);
   };            
   if($_POST['seats']['FCC'] != 0 ){                
       $total += number_format($_POST['seats']['FCC'] * $pricesObject['full']['FCC'],2);
   };               
                                                      
}

/*if ( empty( $_SESSION['cust'] || $_SESSION['movie'] || $_SESSION['seats'])){
    header('Location: index.php');
} */

// echo $total;

$errorsFound = 0;
$cleanName = checkInput($_POST['cust']['name']);
if (!preg_match("/^[a-zA-Z ]*$/",$cleanName)) {
    $nameErr = '<span style="color:red">"Only letters and white space permitted"</span>';
    $errorsFound ++;
}
if ($errorsFound == 0) {
  $_SESSION['cust']['name'] = $cleanName;
}

$cleanMobile = checkInput($_POST['cust']['mobile']);
if (!preg_match("/^(\(04\)|04|\+614)( ?\d){8}$/",$cleanMobile)) {
    $mobileErr = '<span style="color:red">"Australian mobile number only"</span>';
    $errorsFound ++;
}
if ($errorsFound == 0) {
  $_SESSION['cust']['mobile'] = $cleanMobile;
}

$cleanEmail = checkInput($_POST['cust']['email']);
if (!filter_var($cleanEmail, FILTER_VALIDATE_EMAIL)) {
    $emailErr = '<span style="color:red">"Email format not permitted"</span>';
    $errorsFound ++;
}
if ($errorsFound == 0) {
  $_SESSION['cust']['email'] = $cleanEmail;
}

$cleanCard = checkInput($_POST['cust']['card']);
if (!preg_match("/^[0-9]{13,16}$/",$cleanCard)) {
    $cardErr = '<span style="color:red">"13 to 16 digits required"</span>';
    $errorsFound ++;
}

$cleanExpiry = checkInput($_POST['cust']['expiry']);
$expiry = $cleanExpiry;
$currentYearMon = date("m/Y");
$currentDay = date("d");

$exp = strtotime($expiry);
$currentDate = strtotime($currentYearMon);

if ($currentDate >= $exp) {
    $expiryErr = "Card out of date";
    $errorsFound ++;
}

function checkInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$_SESSION['movie']['id'] = $_POST['movie']['id'];
$_SESSION['movie']['day'] = $_POST['movie']['day'];
$_SESSION['movie']['hour'] = $_POST['movie']['hour'];
$_SESSION['seats']['STA'] = $_POST['seats']['STA'];
$_SESSION['seats']['STP'] = $_POST['seats']['STP'];
$_SESSION['seats']['STC'] = $_POST['seats']['STC'];
$_SESSION['seats']['FCA'] = $_POST['seats']['FCA'];
$_SESSION['seats']['FCP'] = $_POST['seats']['FCP'];
$_SESSION['seats']['FCC'] = $_POST['seats']['FCC'];

$now = date('d/m h:i');
 
$cells = array_merge(
    [ $now ] ,
    $_SESSION['cust'],
    $_SESSION['movie'],
    $_SESSION['seats'],
    [ $total ]
);  

//print_r($_SESSION);    
    
print_r($cells);


$file = fopen("bookings.txt","a");
    
fputcsv($file,$cells);
  

/*function printMyCode() {
  $lines = file($_SERVER['PHP_SELF']);
  echo "<pre class='mycode'><ol>";
  foreach ($lines as $line)
     echo '<li>'.rtrim(htmlentities($line)).'</li>';
  echo '</ol></pre>';
}

printMyCode()  */
    
//echo ($_POST['PHP_SELF'])    

?>
