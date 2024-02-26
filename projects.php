<!DOCTYPE html>
<?php
require_once('includes/connect.php');
$query = 'SELECT GROUP_CONCAT(project_img) AS images, description, title, Work, intro FROM projects, media WHERE projects.id = project_id AND projects.id = :projectId';
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
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
        }

        p {
            max-width: 800px;
            margin-bottom: 40px;
            color: #555;
        }

        .project-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .portfolio-image {
            width:80%;
            max-width: 700px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .portfolio-image:hover {
            transform: scale(1.1);
        }

        /* back btn stylizeing */

        .back-button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: red;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }

        .back-button:hover {
            background-color: black;
        }
    </style>
    <link rel="stylesheet" href="css/grid.css" >

</head>
<body>


<h1><?php echo $row['title']; ?></h1>

<p><?php echo $row['description']; ?></p>

<p><?php echo $row['intro']; ?></p>
<p><?php echo $row['Work']; ?></p>

<section class="project-gallery">
<?php 
for($i =0; $i < count($images); $i++) {

echo '<img class="portfolio-image" src="images/'.$images[$i].'" alt="Project Image">';

}
?>


</section>
<a href="index.php" class="back-button">Back to Home</a>

</body>
</html>
