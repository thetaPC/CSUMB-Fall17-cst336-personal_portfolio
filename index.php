<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset="utf-8"/>
        <title>Maria Loza: Personal Website</title>
        
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="css/index.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> 
    </head>
<!-- closing h
\ead -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
            <h1>Maria Loza</h1>
        </header>
        <nav>
            <hr width="50%"/>
            <a id="home" href="index.html">Home</a>
            <a id="about" href="about.html">About</a>
            <a id="contact" href="contact.html">Contact</a>
        </nav>
        
        <br><br>
        
        <main>
            <figure id="me">
                <img src="img/maria.jpg" alt="Picture of Maria Loza"/>
            </figure>
            <div id="welcomeText">
                Hello! <br>
                <p>Thank you for visiting my professional portfolio website.</p>
                <p>I am a Software Engineer and have been recently hired at the Acme Corporation.</p>
                <p>Feel free to contact me!</p>
                
                <br><br>
                
                <em>
                    "With ordinary talent and extraordinary
                    <strong>perseverance</strong>, all things are attainable"
                </em>
                
                <br>
                - Thomas F. Buxton
            </div>
        </main>
        
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>
            <img src="img/csumb_logo.png" alt="CSUMB logo" />
            <br>
            CST 336. 2017&copy; Loza <br>
            <strong>Disclaimer:</strong> The information in this webpage is fictitous. <br>
            It is used for academic purposes only.
            
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>