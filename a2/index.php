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

            </div>

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

            <div>
                <h2 id="NowShowing">Now Showing</h2>
                <hr />
                <section>
                    <div class="showing">
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
                    <div class="showing">
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
                    <div class="showing">
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
                    <div class="showing">
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

                <div>
                    <div>
                        <p class="synopsissize"><span> <iframe width="560" height="315" src="https://www.youtube.com/embed/_BcYBFC6zfY?start=1"></iframe></span>
                            <strong>Ralph Breaks the Internet PG</strong><br /> Synopsis<br />
                            Ralp Blah Blah Blah This is some text. This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.</p>

                        <p><strong>Make a Booking:</strong></p>
                        <button class="button buttonhover">Monday - 12pm</button>
                        <button class="button buttonhover">Tuesday - 12pm</button>
                        <button class="button buttonhover">Wednesday - 6pm</button>
                        <button class="button buttonhover">Thursday - 6pm</button>
                        <button class="button buttonhover">Friday - 6pm</button>
                        <button class="button buttonhover">Saturday - 12pm</button>
                        <button class="button buttonhover">Sunday - 12pm</button>
                        <hr />
                    </div>
                    <div>
                        <p class="synopsissize"><span> <iframe width="560" height="315" src="https://www.youtube.com/embed/XKMSP9OKspQ?start=1"></iframe></span>
                            <strong>The Girl in the Spider's Web R</strong><br /> Synopsis<br />
                            The Girl in the Spider's Web RBlah Blah Blah This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.</p>

                        <p><strong>Make a Booking:</strong></p>
                        <button class="button buttonhover notshowing">Monday - </button>
                        <button class="button buttonhover notshowing">Tuesday - </button>
                        <button class="button buttonhover">Wednesday - 9pm</button>
                        <button class="button buttonhover">Thursday - 9pm</button>
                        <button class="button buttonhover">Friday - 9pm</button>
                        <button class="button buttonhover">Saturday - 6pm</button>
                        <button class="button buttonhover">Sunday - 6pm</button>
                        <hr />
                    </div>
                    <div>
                        <p class="synopsissize"><span> <iframe width="560" height="315" src="https://www.youtube.com/embed/-B71eyB_Onw?start=1"></iframe></span>
                            <strong>Boy Erased R</strong><br /> Synopsis<br />
                            Boy Erased R Blah This is some text. This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.</p>

                        <p><strong>Make a Booking:</strong></p>
                        <button class="button buttonhover notshowing">Monday - </button>
                        <button class="button buttonhover notshowing">Tuesday - </button>
                        <button class="button buttonhover">Wednesday - 12pm</button>
                        <button class="button buttonhover">Thursday - 12pm</button>
                        <button class="button buttonhover">Friday - 12pm</button>
                        <button class="button buttonhover">Saturday - 9pm</button>
                        <button class="button buttonhover">Sunday - 9pm</button>
                        <hr />
                    </div>
                    <div>
                        <p class="synopsissize"><span> <iframe width="560" height="315" src="https://www.youtube.com/embed/4-tcHHyy1Rw?start=1"></iframe></span>
                            <strong>A Star is Born R</strong><br /> Synopsis<br />
                            A Star is Born R This is some text. This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.
                            This is some text. This is some text. This is some text.</p>

                        <p><strong>Make a Booking:</strong></p>
                        <button class="button buttonhover">Monday - 6pm</button>
                        <button class="button buttonhover">Tuesday - 6pm</button>
                        <button class="button buttonhover notshowing">Wednesday - </button>
                        <button class="button buttonhover notshowing">Thursday - </button>
                        <button class="button buttonhover">Friday - 6pm</button>
                        <button class="button buttonhover">Saturday - 15pm</button>
                        <button class="button buttonhover">Sunday - 15pm</button>
                        <hr />
                    </div>

                    <hr />
                </div>
                <h2 id="Booking">Booking</h2>
                <hr />
                <section id="showbooking">
                    <div>

                    </div>
                </section>
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
