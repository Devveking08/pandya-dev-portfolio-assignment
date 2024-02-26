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
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="#info">SKILLS</a></li>
                    <li><a href="projects.html">PROJECTS</a></li>
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
                        <li> <a href="#" class="nav-button">ABOUT</a> </li>
                        <li> <a href="#" class="nav-button">SKILLS</a> </li>
                        <li> <a href="#" class="nav-button">PROJECTS</a> </li>
                        <li> <a href="#" class="nav-button">CONTACT</a> </li>
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
            <div class="col-span-4 l-col-start-6 l-col-end-12 xl-col-start-6 xl-col-end-12 skills ">
                <br>
                <img src="images/html-5.png" height="50px" width="50px" alt="html-5 icon"></img>
                <img src="images/css-3.png" height="50px" width="50px" alt="html-5 icon"></img>
                <img src="images/js.png" height="50px" width="50px" alt="html-5 icon"></img>
                <img src="images/creative-cloud.png" height="50px" width="50px" alt="html-5 icon"></img>
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
            <div class="col-span-4 l-col-span-5 xl-col-span-5 box"><h3> Social Media: </h3>
                <img src="images/Pintrest.png" height="50px" width="50px" alt="Pintrest-logo">
                <img src="images/Linkdin.png" height="50px" width="50px" alt="Linkdin-logo">
                <img src="images/Git-hub.png" height="50px" width="50px" alt="Git-hub-logo">
            </div>
            <div class="col-span-4 l-col-span-1 xl-col-span-1 "></div>
            <div class="col-span-4 l-col-span-6 xl-col-span-6 box"><h3>Inquires</h3><br>
                <p>Email: devpandya750@gmal.com<p>
            </div>

            <div class="col-span-2 l-col-span-3 xl-col-span-3"><img src="images/Dev_Pandya_Logo.png" alt="logo" height="100" width="140px"></div>
        </section>
    </footer>
</body>

</html>
