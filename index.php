<?php
include_once("./partials/projectsData.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>M&M - Web Developer</title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="style.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

</head>

<body class="antialiased">
  <?php include_once "./partials/navigation.php"; ?>
  <?php include_once "./partials/header.php"; ?>
  <?php include_once "./partials/about.php"; ?>
  <?php include_once "./partials/work.php"; ?>
  <?php include_once "./partials/skills.php"; ?>
  <?php include_once "./partials/projects.php"; ?>
  <?php include_once "./partials/contact.php"; ?>
  <?php include_once "./partials/footer.php"; ?>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

  <!-- AOS Animation Library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="main.js"></script>
</body>

</html>