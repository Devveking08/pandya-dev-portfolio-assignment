<!DOCTYPE html>
<html lang="en">

<?php
require_once('includes/connect.php');
$stmt = $connection->prepare('SELECT * FROM projects ORDER BY title ASC');
$stmt->execute();

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">
    <title>DP Home</title>
    <script src="https://unpkg.com/split-type" defer></script>
    <script src="https://unpkg.com/gsap@3.9.1/dist/gsap.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.9.1/dist/TextPlugin.min.js" defer></script>
    <script src="js/SplitText.js" defer></script>
    <script src="js/main.js" defer></script>
    
</head>

<body>
    <header>
        <section class="grid-con" id="desktop_nav">
            <div class="desktop l-col-span-2 xl-col-span-2 "><img src="images/Dev_Pandya_Logo.png" height="100px" width="150px"></div>
            <nav class="desktop l-col-start-5  l-col-end-13  ">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#info">SKILLS</a></li>
                    <li><a href="#projects">PROJECTS</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </nav>
        </section>

        <section class="grid-con" id="nav-bar">
            <div class="mobile col-span-1 "><img src="images/Dev_Pandya_Logo.png" height="80px" width="110px"></div>
            <div class="mobile col-span-2"></div>
            <div class="hamburger mobile col-span-1">
                <div class="line "> </div>
                <div class="line "> </div>
                <div class="line "> </div>

                <nav class="mobile-nav">
                    <h2 class="hidden">Main Navigation</h2>
                    <ul class="burger">
                        <li> <a href="index.php" class="nav-button">HOME</a> </li>
                        <li> <a href="#skills" class="nav-button">SKILLS</a> </li>
                        <li> <a href="#projects" class="nav-button">PROJECTS</a> </li>
                        <li> <a href="contact.html" class="nav-button">CONTACT</a> </li>
                    </ul>
                </nav>
            </div>

        </section>
    </header>

    <main>
        <section class="grid-con" id="about">
            <div class="col-span-4 l-col-start-3 l-col-end-6 xl-col-start-2 xl-col-end-6 ">
                <h1> Dev Pandya </h1>
                <h4><b>FRONT-END DEVELOPER & PROJECT MANAGER </b></h4>
                
        </div>    
        </section>

        <section class="grid-con" id="info">
            <div class="col-span-4 l-col-start-3 l-col-end-6 xl-col-start-3 xl-col-end-6 circular-profile-pic"></div>
            <div class="col-span-4 l-col-span-6 xl-col-span-6 box">
                <p id="info-paragraph">
                </p>
            </div>
        </section>
        <hr>
        <h1>WHAT I KNOW  </h1>
        <hr>
        <section class="grid-con" id="skills">
        <div class="col-span-4 l-col-start-2 l-col-end-12 xl-col-start-2 xl-col-end-12 skills">
        <br>
        <img src="images/php.png" height="50px" width="50px" alt="php-logo" class="skill-icon" data-info="PHP: Hypertext Preprocessor is a server-side scripting language designed for Web development, but also used as a general-purpose programming language.">
        <img src="images/html-5.png" height="50px" width="50px" alt="html-5 icon" class="skill-icon" data-info="HTML5:  The latest version of Hypertext Markup Language, the code that describes web pages.">
        <img src="images/css-3.png" height="50px" width="50px" alt="css-3 icon" class="skill-icon" data-info="CSS3: Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language like HTML.">
        <img src="images/js.png" height="50px" width="50px" alt="js icon" class="skill-icon" data-info="JavaScript:  A programming language that enables you to create dynamically updating content, control multimedia, animate images, and much more.">
        <img src="images/creative-cloud.png" height="50px" width="50px" alt="creative cloud icon" class="skill-icon" data-info="Creative Cloud:  Adobe Creative Cloud is a set of applications and services from Adobe Inc. that gives subscribers access to a collection of software used for graphic design, video editing, web development, photography, and more.">
    </div>
    <div id="info-box" class="col-span-4 l-col-start-5 l-col-end-10  xl-col-start-5 xl-col-end-10 ">
        <div id="info-text"></div>
    </div>
    </section>

        <hr>
        <h1>PROJECTS </h1>
        <hr>
        <section class="grid-con" id="projects">
       
        <?php

          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            echo  '<section class=" l-col-span-5 l-col-end-10 col-span-4"><h3>'.$row['title'].'</h3><a href="projects.php?id='.
            $row['id'].
           '"><img class="thumbnail" src="images/'.    
          $row['image_url'].   
          '" alt="Project Thumbnail"></a></section>';
  
  }
  ?>
        
</section>
     

    </main>
    <hr>
    <h1>CONTACT </h1>
    <hr>
    <footer>
        <section class="grid-con" id="footer">
            <div class="col-span-4 l-col-span-12 xl-col-span-12"><h1 class="hidden">CONTACT</h1></div>
            <div class="col-span-4 l-col-span-5 xl-col-span-5 box ">
            <h3> Social Media: </h3>
            <div class="social-media">
            <a href="https://ca.pinterest.com/Specter0301/" target="_blank">
                <img src="images/Pintrest.png" height="50px" width="50px" alt="Pintrest-logo">
            </a>
            <a href="https://www.linkedin.com/in/dev-pandya-654320266/" target="_blank">
                <img src="images/Linkdin.png" height="50px" width="50px" alt="Linkdin-logo">
            </a>
            <a href="https://github.com/Devveking08/pandya-dev-portfolio-assignment" target="_blank">
                <img src="images/Git-hub.png" height="50px" width="50px" alt="Git-hub-logo">
            </a>
            </div>
            </div>

            <div class="col-span-4 l-col-span-1 xl-col-span-1 "></div>
            <div class="col-span-4 l-col-span-6 xl-col-span-6 box"><h3>Download Resume</h3><br>
                <img src="images/resume.png" height="50px" width="50px" alt="Resume">
            </div>

            <div class="col-span-2 l-col-span-3 xl-col-span-3"><img src="images/Dev_Pandya_Logo.png" alt="logo" height="100" width="140px"></div>
        </section>
    </footer>
</body>

</html>
