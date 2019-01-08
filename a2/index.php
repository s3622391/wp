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

</head>

<body>

    <header>
        <div>

            <p><img src='../../media/cinema-logo.png' alt="Cinema Logo" width='200' height='200' class="align-centre" /></p>
            <p> Numpty Cinemas</p>



        </div>
    </header>

    <nav>
        <div>Put website navigation links here</div>
    </nav>

    <main>
        <article id='About'>
            <img src='../../media/pic.png' alt='pic' />
            <p>Test 1</p>
        </article>
        <article id='Seats and Pricing'>
            <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
            <p>Test 2</p>
        </article>
        <article id='Now Showing'>

            <img src='../../media/avatar.png' alt='Avatar' />
            <p>Test 3</p>
        </article>
        <article id='Booking'>

            <img src='../../media/RMIT-Logo.png' alt='RMIT-Logo' />
            <p>Test 4</p>
        </article>
    </main>

    <footer>
        <div>
            <p><a href="mailto:NumptyCinema@example.com">Email US!</a> Phone: TBA, Address: TBA<br /></p>
        </div>
        <div>&copy;<script>
                document.write(new Date().getFullYear());

            </script> Ian Dowdle, student number (s3622391) <a href="https://github.com/s3622391/wp">GitHub Repository</a>. Last modified
            <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

</body>

</html>
