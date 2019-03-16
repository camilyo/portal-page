<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<!-- START LEFT COL -->
<section>
 <h2 class="pageID"><?=$heading2?></h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/phone.jpg" class="phone" alt="" />
    <p><b>Hey,</b></p>
    
    <p>I am Camila Christensen, I grew up in São Paulo, considered a vibrant financial center and one of the most populous city in Brazil.  I've moved to Seattle almost 5 years ago. During a conference in 2017, I took my first programming class and it totally blew my mind. </p>
        
    <p> I am currently pursuing a Programming degree at Seattle Central College and exploring the career option I have. In my free time, I love going to the mountains. It helps me to relax. It nourishes my mind, body and soul.</p>
    
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3><?=$heading3?></h3>
 <img src="images/desktop.jpg" class="desktop" alt="" />
 <img src="images/tablet.jpg" class="tablet" alt="" />
 
    <div class="contact-me">
     <button class="button" onclick="window.location.href='contactme.php'">Contact Me</button>
    </div>
    
</aside>


<!-- END RIGHT COL -->
<?php include 'includes/footer.php';?>
