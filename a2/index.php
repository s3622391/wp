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
            <div>
                <h2 id="About">About Us</h2>
                
                <p id="textfont">Welcome to the Lunardo Cinema! We have just finished our extensive refurbishment, revamping the place bring to you a fantastic movie experience with brand new seating now including reclinable First class.</p>
                <p id="textfont">Our projection system has been upgraded and now has <a href="https://www.dolby.com/us/en/brands/dolby-vision.html">3D Dolby Vision</a> projection and <a href="https://www.dolby.com/us/en/brands/dolby-atmos.html">Dolby Atmos</a> sound. </p>
                <p id="name"><strong>Come and check us out!</strong></p>
            </div>

            <div>
                <h2 id="SeatsandPricing">Seats and Pricing</h2>
                <div class="row">
                    <div class="column">
                        <img src='../../media/StandardSeat.png' alt='Standard Cinema Seat' height="300" />
                    </div>
                    <div class="column">
                        <img src='../../media/FirstClassSeat.png' alt='First Class Cinema Seat' height="300" />
                    </div>
                </div>
                <p id="textfont">New standard and First class seating available.</p>
            </div>

            <div>
                <h2 id="NowShowing">Now Showing</h2>
                <img src='../../media/avatar.png' alt='Avatar' class="align-centre" />
                <p id="textfont">Now Showing Here.</p>
            </div>

            <div>

                <h2 id="Booking">Booking</h2>
                <img src='../../media/RMIT-Logo.png' alt='RMIT-Logo'>
                <p id="textfont">Book Here.</p>
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
