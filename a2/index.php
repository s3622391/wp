<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
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
            <li class="one"><a href="#About">About Us </a></li>
            <li class="one"><a href="#SeatsandPricing">Seats and Pricing</a></li>
            <li class="one"><a href="#NowShowing">Now Showing</a></li>
            <li class="one"><a href="#Booking">Booking</a><br /></li>
        </ul>

    </nav>

    <main>
        <div>
            <div id="aboutposition">
                <hr />
                <h2 id="About">About Us</h2>
                <hr />
                <p id="textfont">Welcome to the Lunardo Cinema! We have just finished our extensive refurbishment, revamping the place bring to you a fantastic movie experience with brand new seating now including reclinable First class.</p>
                <p id="textfont">Our projection system has been upgraded and now has <a href="https://www.dolby.com/us/en/brands/dolby-vision.html">3D Dolby Vision</a> projection and <a href="https://www.dolby.com/us/en/brands/dolby-atmos.html">Dolby Atmos</a> sound. </p>
                <p id="name"><strong>Come and check us out!</strong></p>
                <hr />
            </div>

            <div>
                <h2 id="SeatsandPricing">Seats and Pricing</h2>
                <hr />
                <div class="row">
                    <div class="column">
                        <img src='../../media/StandardSeat.png' alt='Standard Cinema Seat' height="300" />
                    </div>
                    <div class="column">
                        <img src='../../media/FirstClassSeat.png' alt='First Class Cinema Seat' height="300" />
                    </div>
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

            <div>
                <h2 id="NowShowing">Now Showing</h2>
                <hr />
                <section id="showing">
                    <div>
                        <img src='../../media/Ralphbreaksinternet.png' width='200' alt='Ralphbreaksinternetimage'>
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
                    </div>
                    <div>
                        <img src='../../media/Spiderweb.png' width='200' alt='Girlinthespiderswebimage'>
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
                    </div>
                    <div>
                        <img src='../../media/Boyerased.png' width='200' alt='BoyErasedImage'>
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
                    </div>
                    <div>
                        <img src='../../media/Starisborn.png' width='200' alt='AStarisBornImage'>
                        <p><strong>A Star is Born R</strong></p>
                        <ul>
                            <li>Monday - 18pm</li><br />
                            <li>Tuesday - 18pm</li><br />
                            <li>Wednesday - NA</li><br />
                            <li>Thursday - NA</li><br />
                            <li>Friday - 6pm</li><br />
                            <li>Saturday - 15pm</li><br />
                            <li>Sunday - 15pm</li><br />
                        </ul>
                    </div>

                </section>

                <hr />
            </div>

            <div>

                <h2 id="Booking">Booking</h2>
                <hr />
                <section id="showbooking">
                    <div>
                        <p><strong>Ralph Breaks the Internet PG</strong></p>
                        <p> Synopsis</p>
                        <p> Ralp Blah Blah Blah</p>
                        <div id="vidright">
                            <video src="https://www.youtube.com/watch?v=_BcYBFC6zfY" poster="../../media/Ralphbreaksinternet.png" width="200" preload controls></video>
                        </div>
                    </div>
                </section>
                <hr />
            </div>
        </div>
        <p><a href="#top">Top</a></p>
    </main>

    <footer>
        <div>
            <p><a href="mailto:LundardoCinema@example.com">Email US !</a>Phone: TBA, Address: TBA<br /></p>
        </div>
        <div>&copy;
            <script>
                document.write(new Date().getFullYear());

            </script>Ian Dowdle, student number (s3622391)
            <a href="https://github.com/s3622391/wp">GitHub Repository</a>. Last modified
            <?=date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME']));?>.
        </div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.
        </div>
        <div>
            <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
        </div>
    </footer>
</body>

</html>
