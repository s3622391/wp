<?php
include_once('tools.php');

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 3</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <style>
        <?php include("css/style.css"); ?>
    </style>
    <script>
        <?php include("tools.js"); ?>

    </script>
    <script type="text/javascript" src='../wireframe.js'>
        <?php include("../wireframe.js"); ?>

    </script>
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Coiny" rel="stylesheet">

</head>

<body>
    <header>
        <div>
            <p id="top"><img src='../../media/cinema-logo.png' alt="Cinema Logo" width='200' height='200' class="align-centre" /></p>
            <p id="name">Lunardo</p>
        </div>
    </header>

    <nav id="navbar">
        <ul>
            <li class="one"><a href="#About" class="active">About Us </a></li>
            <li class="one"><a href="#SeatsandPricing">Seats and Pricing</a></li>
            <li class="one"><a href="#NowShowing">Now Showing</a></li>
            <li class="one"><a href="#Booking">Booking</a><br /></li>
        </ul>
    </nav>

    <main>
        <div>
            <article>
                <div id="aboutposition">
                    <hr />
                    <h2 id="About">About Us</h2>
                    <hr />
                    <p id="textfont">Welcome to the Lunardo Cinema! We have just finished our extensive refurbishment, revamping the place bring to you a fantastic movie experience with brand new seating now including reclinable First class.</p>
                    <p id="textfont">Our projection system has been upgraded and now has <a href="https://www.dolby.com/us/en/brands/dolby-vision.html">3D Dolby Vision</a> projection and <a href="https://www.dolby.com/us/en/brands/dolby-atmos.html">Dolby Atmos</a> sound. </p>
                    <p id="name"><strong>Come and check us out!</strong></p>
                </div>
            </article>
            <article>
                <div>
                    <hr />
                    <h2 id="SeatsandPricing">Seats and Pricing</h2>
                    <hr />
                    <div id="seatimages">

                        <img src='../../media/StandardSeat.png' alt='Standard Cinema Seat' height="300" />
                        <img src='../../media/FirstClassSeat.png' alt='First Class Cinema Seat' height="300" />

                    </div>
                    <p id="textfont">New standard and First class seating available.</p>
                    <table>
                        <tr>
                            <th scope="col">Seat Type</th>
                            <th scope="col">All Day Monday and Wednesday</th>
                            <th scope="col">12pm Weekdays</th>
                            <th scope="col">All other times</th>
                        </tr>
                        <tr>
                            <th scope="row" id="STA">Standard Adult</th>
                            <td class="money">$14.00</td>
                            <td class="money">$14.00</td>
                            <td class="money">$19.80</td>
                        </tr>
                        <tr>
                            <th scope="row" id="STP">Standard Consession</th>
                            <td class="money">$12.50</td>
                            <td class="money">$12.50</td>
                            <td class="money">$17.50</td>
                        </tr>
                        <tr>
                            <th scope="row" id="STC">Standard Child</th>
                            <td class="money">$11.00</td>
                            <td class="money">$11.00</td>
                            <td class="money">$15.30</td>
                        </tr>
                        <tr>
                            <th scope="row" id="FCA">First Adult</th>
                            <td class="money">$24.00</td>
                            <td class="money">$24.00</td>
                            <td class="money">$30.00</td>
                        </tr>
                        <tr>
                            <th scope="row" id="FCP">First Consession</th>
                            <td class="money">$22.50</td>
                            <td class="money">$22.50</td>
                            <td class="money">$27.00</td>
                        </tr>
                        <tr>
                            <th scope="row" id="FCC">First Child</th>
                            <td class="money">$21.00</td>
                            <td class="money">$21.00</td>
                            <td class="money">$24.00</td>
                        </tr>
                    </table>
                    <hr />
                </div>
            </article>
            <article>
                <div>
                    <h2 id="NowShowing">Now Showing</h2>
                    <hr />
                    <section>
                        <div class="showing">
                            <button id="button"><img src='../../media/Ralphbreaksinternet.png' width='200' alt='Ralphbreaksinternetimage'></button>
                            <p><strong>Ralph Breaks the Internet PG</strong></p>
                            <ul>
                                <li>Monday - 12pm</li><br />
                                <li>Tuesday - 12pm</li><br />
                                <li>Wednesday - 6pm</li><br />
                                <li>Thursday - 6pm</li><br />
                                <li>Friday - 6pm</li><br />
                                <li>Saturday - 12pm</li><br />
                                <li>Sunday - 12pm</li><br />
                            </ul>
                            <div id="modalBox" class="modal">
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <div>
                                        <p class="synopsissize"><span> <iframe width="560" height="315" src="https://www.youtube.com/embed/_BcYBFC6zfY?start=1"></iframe></span>
                                            <!---Clip used for educational purposes from Walt Disney Animation Studios --->
                                            <strong>Ralph Breaks the Internet PG</strong><br />
                                            <br />Synopsis<br />
                                            <br />Video game bad guy Ralph and fellow misfit Vanellope von Schweetz must risk it all by traveling to the World Wide Web in search of a replacement part to save Vanellope's video game, "Sugar Rush." In way over their heads, Ralph and Vanellope rely on the citizens of the internet -- the netizens -- to help navigate their way, including an entrepreneur named Yesss, who is the head algorithm and the heart and soul of trend-making site BuzzzTube.</p>


                                        <p><strong>Make a Booking:</strong></p>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('0','0','0')" >Monday - 12pm</button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('0','1','0')">Tuesday - 12pm</button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('0','2','2')">Wednesday - 6pm</button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('0','3','2')">Thursday - 6pm</button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('0','4','2')">Friday - 6pm</button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('0','5','0')">Saturday - 12pm</button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('0','6','0')">Sunday - 12pm</button>
                                        <hr />
                                        <!--temp testing buttons 
                                        <button class="button buttonhover" class="click" id=movie[id] onclick="getTitle()">test title</button>
                                        <button class="button buttonhover" class="click" id=movie[day] onclick="getDay()">test title</button>
                                        <button class="button buttonhover" class="click" id=movie[hour] onclick="getHour()">test title</button>-->
                                        <!--    action="https://titan.csit.rmit.edu.au/~e54061/wp/lunardo-formtest.php" -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="showing">
                            <button id="buttonOne"><img src='../../media/Spiderweb.png' width='200' alt='Girlinthespiderswebimage'></button>
                            <p><strong>The Girl in the Spider's Web R</strong></p>
                            <ul>
                                <li>Monday - NA</li><br />
                                <li>Tuesday - NA</li><br />
                                <li>Wednesday - 9pm</li><br />
                                <li>Thursday - 9pm</li><br />
                                <li>Friday - 9pm</li><br />
                                <li>Saturday - 6pm</li><br />
                                <li>Sunday - 6pm</li><br />
                            </ul>
                            <div id="modalBoxOne" class="modal">
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <div>
                                        <p class="synopsissize"><span> <iframe width="560" height="315" src="https://www.youtube.com/embed/XKMSP9OKspQ?start=1"></iframe></span>
                                            <!---Clip used for educational purposes from Sony Pictures Entertainment --->
                                            <strong>The Girl in the Spider's Web R</strong><br /> <br />Synopsis<br /><br />
                                            Fired from the National Security Agency, Frans Balder recruits hacker Lisbeth Salander to steal FireWall, a computer program that can access codes for nuclear weapons worldwide. The download soon draws attention from an NSA agent who traces the activity to Stockholm. Further problems arise when Russian thugs take Lisbeth's laptop and kidnap a math whiz who can make FireWall work. Now, Lisbeth and an unlikely ally must race against time to save the boy and recover the codes to avert disaster.</p>

                                        <p><strong>Make a Booking:</strong></p>
                                        <button class="button buttonhover notshowing">Monday - </button>
                                        <button class="button buttonhover notshowing">Tuesday - </button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('1','2','3')">Wednesday - 9pm</button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('1','3','3')">Thursday - 9pm</button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('1','4','3')">Friday - 9pm</button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('1','5','2')">Saturday - 6pm</button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('1','6','2')">Sunday - 6pm</button>
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="showing">
                            <button id="buttonTwo"><img src='../../media/Boyerased.png' width='200' alt='BoyErasedImage'></button>
                            <p><strong>Boy Erased R</strong></p>
                            <ul>
                                <li>Monday - NA</li><br />
                                <li>Tuesday - NA</li><br />
                                <li>Wednesday - 12pm</li><br />
                                <li>Thursday - 12pm</li><br />
                                <li>Friday - 12pm</li><br />
                                <li>Saturday - 9pm</li><br />
                                <li>Sunday - 9pm</li><br />
                            </ul>
                            <div id="modalBoxTwo" class="modal">
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <div>
                                        <p class="synopsissize"><span> <iframe width="560" height="315" src="https://www.youtube.com/embed/-B71eyB_Onw?start=1"></iframe></span>
                                            <!---Clip used for educational purposes from Focus Features --->
                                            <strong>Boy Erased R</strong><br /><br /> Synopsis<br /><br />
                                            Jared Eamons, the son of a small-town Baptist pastor, must overcome the fallout after being outed as gay to his parents. His father and mother struggle to reconcile their love for their son with their beliefs. Fearing a loss of family, friends and community, Jared is pressured into attending a conversion therapy program. While there, Jared comes into conflict with its leader and begins his journey to finding his own voice and accepting his true self.</p>

                                        <p><strong>Make a Booking:</strong></p>
                                        <button class="button buttonhover notshowing">Monday - </button>
                                        <button class="button buttonhover notshowing">Tuesday - </button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('2','2','0')">Wednesday - 12pm</button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('2','3','0')">Thursday - 12pm</button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('2','4','0')">Friday - 12pm</button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('2','5','3')">Saturday - 9pm</button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields(21','6','3')">Sunday - 9pm</button>
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="showing">
                            <button id="buttonThree"><img src='../../media/Starisborn.png' width='200' alt='AStarisBornImage'></button>
                            <p><strong>A Star is Born R</strong></p>
                            <ul>
                                <li>Monday - 6pm</li><br />
                                <li>Tuesday - 6pm</li><br />
                                <li>Wednesday - NA</li><br />
                                <li>Thursday - NA</li><br />
                                <li>Friday - 6pm</li><br />
                                <li>Saturday - 3pm</li><br />
                                <li>Sunday - 3pm</li><br />
                            </ul>
                            <div id="modalBoxThree" class="modal">
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <div>
                                        <p class="synopsissize"><span> <iframe width="560" height="315" src="https://www.youtube.com/embed/4-tcHHyy1Rw?start=1"></iframe></span>
                                            <!---Clip used for educational purposes from Movieclips Trailers --->
                                            <strong>A Star is Born R</strong><br /><br /> Synopsis<br /><br />
                                            Seasoned musician Jackson Maine discovers -- and falls in love with -- struggling artist Ally. She has just about given up on her dream to make it big as a singer until Jackson coaxes her into the spotlight. But even as Ally's career takes off, the personal side of their relationship is breaking down, as Jackson fights an ongoing battle with his own internal demons.</p>

                                        <p><strong>Make a Booking:</strong></p>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('3','0','2')">Monday - 6pm</button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('3','1','2')">Tuesday - 6pm</button>
                                        <button class="button buttonhover notshowing">Wednesday - </button>
                                        <button class="button buttonhover notshowing">Thursday - </button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('3','4','2')">Friday - 6pm</button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('3','5','1')">Saturday - 3pm</button>
                                        <button class="button buttonhover" class="click" onclick="setHiddenFields('3','6','1')">Sunday - 3pm</button>
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <hr />
                </div>
            </article>
            <!-- https://titan.csit.rmit.edu.au/~e54061/wp/lunardo-formtest.php
                   -->
            <article>
                <div>
                    <h2 id="Booking">Booking</h2>
                    <hr />
                    <section id="showbooking">
                        <div id="infoposition">
                            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                                <fieldset class="seating1">

                                    <input id="movie[id]" type="hidden" name="movie[id]" />
                                    <input id="movie[day]" type="hidden" name="movie[day]" />
                                    <input id="movie[hour]" type="hidden"  name="movie[hour]" />
                                    <legend class="legendposition">Standard Seating</legend>
                                    <label for="seats[STA]">Adult</label>
                                    <select id="seats[STA]" name="seats[STA]" onclick="runningTotal()">
                                        <!--         <option> </option> -->
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                    <br />
                                    <label for="seats[STP]">Concession</label>
                                    <select id="seats[STP]" name="seats[STP]" onclick="runningTotal()">
                                        <!--        <option> </option> -->
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                    <br />
                                    <label for="seats[STC]">Child</label>
                                    <select id="seats[STC]" name="seats[STC]" onclick="runningTotal()">
                                        <!--       <option> </option> -->
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                    <br />
                                </fieldset>
                                <fieldset class="seating2">
                                    <legend class="legendposition">First Class Seating</legend>
                                    <label for="seats[FCA]">Adult</label>
                                    <select id="seats[FCA]" name="seats[FCA]" onclick="runningTotal()">
                                        <!--        <option> </option> -->
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                    <br />
                                    <label for="seats[FCP]">Concession</label>
                                    <select id="seats[FCP]" name="seats[FCP]" onclick="runningTotal()">
                                        <!--       <option> </option> -->
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                    <br />
                                    <label for="seats[FCC]">Child</label>
                                    <select id="seats[FCC]" name="seats[FCC]" onclick="runningTotal()">
                                        <!--        <option> </option> -->
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                    <br />
                                </fieldset>

                                <fieldset class="bookingdetails">
                                    <label id="cName">Name <input type="text" name="cust[name]" pattern="[-a-zA-Z ]" title="A->Z Upper & lower case only" required /> </label>
                                    <label id="cEmail">Email <input type="email" name=cust[email] pattern="/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-.]+$/"> /></label><br />
                                    <label id="cMobile">Mobile <input type="tel" name=cust[mobile] pattern="[^(\(04\)|04\+614)[]?\d{4}[]?\d{4}$]"  required /></label><br />
                                    <label id="cCard">Credit Card <input type="text" name=cust[card] pattern="^3(?:[47]\d([ -]?)\d{4}(?:\1\d{4}){2}|0[0-5]\d{11}|[68]\d{12})$|^4(?:\d\d\d)?([ -]?)\d{4}(?:\2\d{4}){2}$|^6011([ -]?)\d{4}(?:\3\d{4}){2}$|^5[1-5]\d\d([ -]?)\d{4}(?:\4\d{4}){2}$|^2014\d{11}$|^2149\d{11}$|^2131\d{11}$|^1800\d{11}$|^3\d{15}$" required /></label><br />
                                    <label id="cExpiry">Expiry <input type="month" name=cust[expiry] required /></label><br />
                                </fieldset>
                                <br />
                                <p id="curentTotal"> </p>
                                <button class="button buttonhover" type="submit" name="submitted" id='submit' onclick="validate()">Order</button>
                            </form>
                        </div>
                        <br />

                        <!--<button onclick="runningTotal()"> Total </button>-->
                        
                        <span id="clear"></span>
                    </section>
                </div>
            </article>
        </div>
        <p><a href="#top">Top</a></p>

        <script src='../wireframe.js'></script>
    </main>

    <footer>
        <div>
            <p><a href="mailto:LundardoCinema@example.com">Email US !</a>Phone: TBA, Address: TBA<br /></p>
        </div>
        <div>&copy;
            <script>
                document.write(new Date().getFullYear());

            </script> Ian Dowdle, student number (s3622391)
            <a href="https://github.com/s3622391/wp"> GitHub Repository</a>. Last modified
            <?=date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME']));?>.
        </div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.
        </div>
        <div>
            <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
        </div>
    </footer>
    <!--   <p id="errorcode"></p>
    <div id="debugger">preShow($_POST);</div>
    <div id="debugger">preShow($_GET);</div>
    <div id="debugger">preShow($_SESSION);</div>

-->
</body>

</html>
