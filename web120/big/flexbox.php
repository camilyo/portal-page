<?php include 'includes/config.php';?>
<?php include 'includes/header.php'?>

<!-- START LEFT COL -->
<section>
<h2><?=$heading2?></h2>
    <p>Since flexbox was implemented, it went through numerous changes to become what we see today. At first, it got introduced in a experimental way in different web browsers to be tested and explored without interfering with other implementations. In the past the specifications used were <b>display: box</b>, which had a number properties that can be recognize as activities we see in the flexbox today and <b>display: flexbox</b>. “Ultimately the specification was updated to define <b>display: flex</b> as the way to create a flex container” (Mozilla Developer Network, last update 2018). You still can find reference to the old specifications in books and articles.</p>
    
     <img src="images/flexbox-parent-and-children-element.jpg" alt=" The Flexbox parent and children element" />
    <p><small>Font: The Flexbox parent and children element, “css-tricks.com” (2013)
        </small></p>
    
    <p>The flexbox property gives the container the ability to change its width, height and even its order, to best fill up the available space in the webpage. According to CSS-Tricks.com (2019), a flex container expands items to fill available free space, or shrinks them to prevent overflow. This flexible layout is used in complex web pages and application, to support the orientation changes and resize of page such as stretching and shrinking. As stated by W3Schools, “The Flexible Box Layout Module, makes it easier to design flexible responsive layout structure without using float or positioning.” By default, the flex items will tend to align all in one roll, but this behavior can be changed by the developer.</p>
    
    <p>In the table below there is a list of CSS properties that can be used with flexbox:</p>
    
    <img src="images/flexbox-properties-table.jpg" alt=" Properties table for Flexbox" />
    
    <p><small>Font: Properties table for Flexbox, “W3School.com”</small></p>
        
</section>
<!-- END LEFT COL -->
<!-- START RIGHT COL -->
<aside>
<h3><?=$heading3?></h3>
    
    <dl>
        <dt><b>A Complete Guide to Flexbox</b></dt>
        <dd>CSS-Tricks, Guide Collection (2013). A Complete Guide to Flexbox. css-tricks.com/snippets/css/a-guide-to-flexbox/. [Accessed 18 Feb. 2019].</dd>
    </dl>
    <dl>
        <dt><b>Backwards Compatibility of Flexbox</b></dt>
        <dd> MDN Web Docs (2018). Backwards Compatibility of Flexbox. developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Backwards_Compatibility_of_Flexbox. [Accessed 17 Feb. 2019].</dd>
    </dl>
    <dl>
        <dt><b>CSS Flexbox</b></dt>
        <dd>W3Schools, www.w3schools.com/csS/css3_flexbox.asp. CSS Flexbox. [Accessed 20 Feb. 2019].</dd>
    </dl>

</aside>

<!-- END RIGHT COL -->
<?php include 'includes/footer.php'?>