<!DOCTYPE html>
<?php
require_once('includes/connect.php');
$query = 'SELECT GROUP_CONCAT(project_img) AS images, description, title, Work, intro,design_process,worked_as,Contributors,duration, image_url FROM projects, media WHERE projects.id = project_id AND projects.id = :projectId';
$stmt = $connection->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$images = explode(",", $row['images']);
$stmt = null;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['title']; ?></title>
    <link rel="stylesheet" href="css/grid.css" >
    <link rel="stylesheet" href="css/main.css">
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
<main id="project-info" class="grid-con" style="margin-bottom: 50px;">

<h1><?php echo $row['title']; ?></h1>
<div class="d-hero-con">
<?php
echo '<img class="d-hero" src="images/'.    
          $row['image_url'].   
          '" alt="Project Thumbnail">'
  ?>
</div>

<h2>Summary Of The Project</h2>
<p><?php echo $row['description']; ?></p>
<p><?php echo $row['intro']; ?></p>
<h2> What I learnt and worked On</h2>
<p><?php echo $row['Work']; ?></p>
<p><?php echo $row['design_process']; ?></p>
<h2>Worked As </h2>
<p><?php echo $row['worked_as']; ?></p>
<h2> Contributors </h2>
<p><?php echo $row['Contributors']; ?></p>
<h2> Duration </h2>
<p><?php echo $row['duration']; ?></p>

<div id="right-images-container">
<section class="project-gallery l-col-span-5 l-col-end-10 col-span-4">
<?php 
for($i =0; $i < count($images); $i++) {

echo '<img class="portfolio-image" src="images/'.$images[$i].'" alt="Project Image">';

}
?>
</div>
</section>
</main>

<footer style="margin-top: 20px;">
        <section class="grid-con" id="footer" >
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
