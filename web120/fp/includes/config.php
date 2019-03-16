<?php
//config.php

include 'credentials.php';

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//helps prevent date errors
date_default_timezone_set('America/Sao_Paulo');


$meta_description = "Fundado em 2018, COS Assessoria e Consultoria é um escritório inovador, formado por mulheres.";
$meta_keywords = "São Paulo Advocacia, Advocacia e Consultoria, Consultoria Jurídica, Consultoria, Consultoria em São Paulo, Escritório formado por mulheres, Advogadas, Advogadas de São Paulo, Melhor escritório de Advocacia, Familía, Civil, Morumbi";

$title = THIS_PAGE;
$logo = 'logo1.png';
switch(THIS_PAGE){
        
    case 'index.php':
        $title = 'Advocacia e Consultoria - COS - São Paulo SP';
        $heading1 = 'O ESCRITÓRIO';
        $meta_description = $meta_description;
        
    break;
        
    case 'team.php':
        $title = 'Conheça os advogados do COS - Advocacia e Consultoria';
        $heading2 = 'CONHEÇA NOSSO TIME';
        $heading3 = 'QUEM SOMOS';
        $meta_description = $meta_description . ' Conheça nosso time!';
    break;
    
    case 'activity.php':
        $title = 'Áreas de Atuaçāo da COS - Advocacia e Consultoria';
        $heading2 = 'NOSSOS SERVIÇOS';
        $heading3 = 'ASSISTENCIA JURÍDICA';
        $meta_description = $meta_description . ' Esses saão os servicços que oferemos.';
    break;
        
    case 'news.php':
        $title = 'Ultimas notícias - COS - Advocacia e Consultoria';
    break;
    case 'contact.php':
        $title = 'Contate COS Advocacia e Consultoria';
        $heading2 = 'CONTATO';
        $heading3 = 'ENTRE EM CONTATO CONOSCO';
        $meta_description = $meta_description . ' Entre em contanto conosco e tire suas dúvidas.';
    break;
}

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Início";
$nav1['team.php'] = "Advogados";
$nav1['activity.php'] = "Soluções";
$nav1['http://www.oabsp.org.br/noticias//'] = "Notícias";
$nav1['contact.php'] = "Contato";



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