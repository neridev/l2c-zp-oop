<?php
include('variables.php');
?>

<aside class="pre-footer">
    <div class="container">
        <p>
            <strong>Zaujali sme Vás pre nový projekt?</strong>
            Jednoducho nám zavolajte alebo napíšte.
        </p>

        <ul class="menu personal">
        <li><i class="fa fa-phone"></i><a href="tel:<?php echo str_replace(' ', '', $contact_phone);?>"><?php echo $contact_phone ?></a></li>
        <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $contact_email ?>"><?php echo $contact_email ?></a></li>
        </ul>
    </div>
</aside>

<footer>
    <div class="container">
        <p class="logo">
            <strong>NIGHT</strong>FURY<i class="fa fa-fire"></i>
        </p>
        <p class="author">
            Návrh a design pripravil <a href="mailto:tomas@cloudfender.com">tomas@cloudfender.com</a>
        </p>
        <ul class="menu nav-footer">
            <li><a href="index.html">Domov</a></li>
            <li><a href="portfolio.html">Portfólio</a></li>
            <li><a href="about.html">O nás</a></li>
            <li><a href="contact.html">Kontakt</a></li>
        </ul>
    </div>
</footer>

<!-- scripts -->
<script src="js/lightbox.js"></script>