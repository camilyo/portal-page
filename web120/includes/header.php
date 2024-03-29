<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="<?=$robots?>" />
<meta name="description" content="<?=$meta_description?>"/>
<meta name="keywords" content="<?=$meta_keywords?>"/>

<meta charset="utf-8">
    
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="css/tables.css" />
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i> Camila Christensen | WEB120</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
    <?=makeLinks($nav1)?> 
<!-- START NAV
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Camila</a></li>
END NAV --> 
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
    </ul>
  </nav>
</header>

<!-- end header file here -->