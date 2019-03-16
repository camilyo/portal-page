<!DOCTYPE html>
<html lang="br">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta name="description" content="<?=$meta_description?>"/>
<meta name="keywords" content="<?=$meta_keywords?>"/>
<meta charset="utf-8">
    
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
    
</head>
<body>   
<div class="wrapper">
<a href="index.php"><img src="images/<?=$logo?>" class="logo" alt="logo" /></a>

<header>
   
 <nav>
<ul class="topnav" id="myTopnav">
    
    <?=makeLinks($nav1)?> 
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
    </ul>
  </nav>
    
</header>

<!-- end header file here -->