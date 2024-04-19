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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js" defer></script>
    <script src="js/SplitText.js" defer></script>
    <script src="js/main.js" defer></script>
    <script src="js/form.js" defer></script>
    
</head>

<body>
    <header>
        <section class="grid-con" id="desktop_nav">
            <div class="desktop l-col-start-2 l-col-end-5 "><img src="images/Dev_Pandya_Logo.png" height="100px" width="150px"></div>
            <nav class="desktop l-col-start-6  l-col-end-12  ">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#projects">PROJECTS</a></li>
                    <li><a href="https://devpandya.com/reume.jpg" download target="_blank">RESUME</a></li>
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
                <h4><b>FRONT-END DEVELOPER & DESIGNER, PROJECT MANAGER </b></h4>
                
        </div>    
        </section>

        <section class="grid-con" id="info">
            <div id="info-left"class="col-span-4 l-col-start-3 l-col-end-6 xl-col-start-3 xl-col-end-6"><img src="images/hero_img.svg"></div>
            <div class="col-span-4 l-col-span-6 xl-col-span-6 ">
                <h1 id="info-right">
                    A Little About Me,
                </h1>
                <p>I'm a front-end developer and project manager with a knack for simplicity and a love for cool solutions. I enjoy taking on challenges, working collaboratively, and consistently delivering great results. Let's bring your projects to life with creativity and functionality.
                 Connect With Me On </p>
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
        </section>
<!--
        <h1>WHAT I KNOW  </h1>

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
-->

        <section  class="grid-con" id="projects">
        <h1 class="col-span-full" id="center">PROJECTS </h1>
        <?php

          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            echo  '<section class=" thumbnail col-span-4"><h3>'.$row['title'].'</h3><a href="projects.php?id='.
            $row['id'].
           '"><img class="thumbnail" src="images/'.    
          $row['image_url'].   
          '" alt="Project Thumbnail"></a></section>';
  
  }
  ?>
        
</section>
     

    </main>
    
    <h1>CONTACT </h1>
    <section class="grid-con" id="form-con">
    <h1 class="col-span-4 l-col-start-3 l-col-end-7 left-content" id="left">If you're interested in getting in touch,</h1>
    <p class="col-span-4 l-col-start-3 l-col-end-7 left-content" id="left"> whether it's for a business inquiry, a friendly chat, or simply to say hello, please don't hesitate to reach out! I'm always available and eager to connect.</p>
    <form class="col-span-4 l-col-start-7 l-col-end-12 right-content"id="contactForm">
        <label for="fname">Full Name</label>
        <input type="text" id="fname" />
        <label for="e_mail">Email</label>
        <input type="email" id="email" />
        <label for="c_subject">Subject</label>
        <input type="text" id="c_subject" />
        <label for="Comments">Comments</label>
        <input type="text" id="comments" />
        <input id="submit" type="submit" value="LET'S CONNECT" />
        <section id="feedback">
          <p>*Please fill out all required sections</p>
        </section>
    </form>
</section>


    <footer>
        <hr>
        <section class="grid-con" id="footer">  
            <p class="col-span-2 l-col-start-2 l-col-end-6"> @ 2024 Dev Pandya </p>
            
            <a href="#top" class="col-span-2 l-col-start-9 l-col--end-11 back-to-top">Back to Top</a>


        </section>
    </footer>
</body>

</html>
