</div>

<footer class="container">

    <div class="grid6 first">

        <div class="footer-logo">
            <a href="<?php echo ipHomeUrl(); ?>"><?php echo ipGetOption('Config.websiteTitle'); ?></a>
        </div>

        <?php echo ipSlot('text', array('id' => 'footer')); ?>

        <h3>social</h3>

        <ul class="social-links cf">
            <li class="twitter"><a href="#">Twitter</a></li>
            <li class="facebook"><a href="#">Facebook</a></li>
            <li class="google"><a href="#">Google</a></li>
            <li class="instagram"><a href="#">Instagram</a></li>
            <li class="dribble"><a href="#">Dribble</a></li>
        </ul>

    </div>

    <div class="grid6">
        <?php echo ipBlock('footer1')->asStatic()->render(); ?>
    </div>

    <div id="footer-bottom" class="grid12 first align-right">

        <p>
            Free theme for <a href="http://www.impresspages.org/">ImpressPages</a>
            &nbsp; &nbsp; &nbsp;
            Developed by <a href="http://audrius.arj.lt/">Audrius</a>
            &nbsp; &nbsp; &nbsp;
            Design by <a href="http://www.styleshout.com/">styleshout</a>
        </p>

        <div id="go-top"><a href="#" title="Back to Top">Go To Top</a></div>

    </div>

</footer>


<?php echo ipAddJs('assets/site.js'); ?>
<?php echo ipJs(); ?>

</body>
</html>
