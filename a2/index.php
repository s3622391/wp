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

    <style type="text/css">
        img.align-centre {
            display: block;
            margin: auto;
        }
        header {
            font-family: sans-serif;
            font-size: 200%;
            text-align: center;
        }

    </style>
</head>

<body>

    <header>
        <div>

            <p><img src='../../media/cinema-logo.png' alt="Cinema Logo" width='200' height='200' class="align-centre" />
                <br><strong>Numpty Cinemas</strong></p>
            


        </div>
    </header>

    <nav>
        <div>Put website navigation links here</div>
    </nav>

    <main>
        <article id='Website Under Construction'>
            <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
            <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
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
