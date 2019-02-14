<?php
session_start();
print_r($_POST);

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

echo $movieObject['GSW']["title"];
echo $movieObject['ASB']["description"];  
echo $pricesObject['full']['FCC'];

$file = fopen("bookings.txt","w");

foreach ($movieObject as $field) {
    fputcsv($file,implode(",",$field));
}

fclose($file);


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
