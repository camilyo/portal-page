<?php include 'includes/config.php';?>
<?php include 'includes/header.php'?>


 <h2 class="pageID"><?=$heading2?></h2>

<!-- show/hide month view calendar based upon resolutiom -->
<div class='month-view embed-container'>
    
    <iframe src='https://calendar.google.com/calendar/embed?showTitle=0&height=600&wkst=1&bgcolor=%23ffffff&src=seattlecentral.edu_8hevm5tiqlgv4aig7rlqrqeogg%40group.calendar.google.com&color=%238D6F47&ctz=America%2FLos_Angeles' style='border-width:0' width='800' height='600' frameborder='0' scrolling='no'></iframe>  
</div>

<!-- show/hide agenda view calendar based upon resolutiom -->
    
<div class='agenda-view embed-container'><iframe src='https://calendar.google.com/calendar/embed?mode=AGENDA&height=600&wkst=1&bgcolor=%23FFFFFF&src=seattlecentral.edu_8hevm5tiqlgv4aig7rlqrqeogg%40group.calendar.google.com&color=%238D6F47&ctz=America%2FLos_Angeles' style='border-width:0' width='800' height='600' frameborder='0' scrolling='no'></iframe></div>



<?php include 'includes/footer.php'?>