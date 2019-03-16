<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>

<link rel="stylesheet" href="css/accordion.css" />
<!-- START LEFT COL -->

<div class="header-title-wrap">
    <div class="header-title-section">
        <div class="header-overlay">
            <h2><?=$heading2?></h2>
        </div>
    </div>
</div>



<section class="wrapper">
    
<h3><?=$heading3?></h3>
<p>A COS Advocacia e Consultoria oferece atuação completa e multidisciplinar, capaz de abranger diversos problemas jurídicos.</p>
    
    
<button class="accordion">DIREITO DA FAMÍLIA</button>
<div class="panel">
  <ul>
    <li>Divócio</li>
    <li>Guarda e visita de filhos</li>
    <li>Pensão alimentícia</li>
    </ul>
</div>

<button class="accordion">DIREITO CIVIL</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">DIREITO TRABALHISTA</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
</section>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
  </script>
<!-- END RIGHT COL -->
<?php include 'includes/footer.php';?>