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

               
     <!--   /* <style>
         body {
            height: auto;
            background-color: chocolate;
        }
                
        img.align-centre {
            display: block;
            margin: auto;
        }

        header,#name  {
            font-family: 'Coiny', cursive;
            font-size: 200%;
            text-align: center;
        }
        
        #textfont {
            font-family: sans-serif;
            font-size: 200%;
            text-align: center;
        }

        h2 {
            
            font-family: 'Bree Serif', serif;            
            font-size: 200%;
            text-align: left;
        }

        li {
            display: inline;
            margin-right: 10px;
            font-size: 150%;
        }

        li.one {
            border-width: thick;
            border-style: double;
            padding: 2px;
        }

        
        } -->

        </head>
            <body>
                <header>
                        <div>
                            <p id="top"><img src='../../media/cinema-logo.png'alt="Cinema Logo"width='200'height='200'class="align-centre"/></p>
                            <p id="name">Numpty Cinemas</p>
                        </div>
                </header>
            <nav>
                <ul id="navbar">
                    <li class="one"><a href="#About">About Us </a></li>
                    <li class="one"><a href="#SeatsandPricing">Seats and Pricing</a></li>
                    <li class="one"><a href="#NowShowing">Now Showing</a></li>
                    <li class="one"><a href="#Booking">Booking</a><br /></li>
                </ul>
            </nav>
            <main>
                <article>
                    <h2 id="About">About Us</h2>
                    <p></p>
                </article>
                <article>
                    <h2 id="SeatsandPricing">Seats and Pricing</h2>
                        <img src='../../media/StandardSeat.png'alt='Standard Cinema Seat'height="300"/>
                        <img src='../../media/FirstClassSeat.png'alt='First Class Cinema Seat'height="300"/>
                        <br>
                        <p id="textfont">New standard and First class seating available.</p>
                </article>
                <article>
                        <h2 id="NowShowing">Now Showing<h2><img src='../../media/avatar.png'alt='Avatar'class="align-centre"/>
                        <p id="textfont">Now Showing Here.</p>
                </article>
                <article>
                        <h2 id="Booking">Booking<h2><img src='../../media/RMIT-Logo.png'alt='RMIT-Logo'/>
                        <p id="textfont">Book Here.</p>
                </article>
        
                <p><a href="#top">Top</a></p>
            </main>
        
            <footer>
                <div>
                        <p><a href="mailto:NumptyCinema@example.com">Email US !</a>Phone: TBA, Address: TBA<br /></p></div><div>&copy;
                        <script>document.write(new Date().getFullYear());

                        </script>Ian Dowdle, student number (s3622391) 
                        <a href="https://github.com/s3622391/wp">GitHub Repository</a>. Last modified <?=date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME']));
        ?>.
                </div>
                <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.
                </div>
                <div>
                        <button id='toggleWireframeCSS'onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
                </div>
            </footer>
          </body>
    </html>
