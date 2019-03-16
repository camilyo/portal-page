<?php
//config.php

include 'credentials.php';

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//helps prevent date errors
date_default_timezone_set('America/Los_Angeles');



//die;

$title = THIS_PAGE;

$robots = "noindex,nofollow";
$meta_description = "Web developer seeking employment in Seattle. Focus on JavaScript, CSS and HTML.";
$meta_keywords = "Seattle web developer, programmer, web developer student, Seattle's best web developer, Javascript, HTML, CSS, Seattle Central College web developer";

switch(THIS_PAGE){
        
    case 'index.php':
        $title = 'Camila Christensen | WEB120';
        $logo = 'fa-home';
        $heading2 = 'Welcome';
        $heading3 = 'This is me';
        $meta_description = "I'm Camila Christensen, I am a " . $meta_description;
    break;
        
    case 'aia.php':
        $title = 'Audience, Issues and Approach Chart';
        $logo = 'fa-table';
        $meta_description = "Please take a look at the newest project Camila is developing, I am a " . $meta_description;
    break;
        
    case 'contactme.php':
        $title = 'Camila\'s contact page';
        $logo = 'fa-paper-plane';
        $robots = 'noindex, follow';
        $meta_description = "Please contact Camila, I am a " . $meta_description;
    break;
}

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Camila";



/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}



?>