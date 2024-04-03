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

</head>
<body>
<main id="project-info" class="grid-con">

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
<h2> What I learnt and worked </h2>
<p><?php echo $row['Work']; ?></p>
<p><?php echo $row['design_process']; ?></p>
<h2>Worked As </h2>
<p><?php echo $row['worked_as']; ?></p>
<h2> Contributors </h2>
<p><?php echo $row['Contributors']; ?></p>
<h2> Duration </h2>
<p><?php echo $row['duration']; ?></p>


<section class="project-gallery l-col-span-5 l-col-end-10 col-span-4">
<?php 
for($i =0; $i < count($images); $i++) {

echo '<img class="portfolio-image" src="images/'.$images[$i].'" alt="Project Image">';

}
?>


</section>
<a href="index.php" class="back-button">Back to Home</a>
</main>
</body>
</html>
