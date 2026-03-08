<footer class="site-footer">

<div class="container footer-grid">

<div class="footer-about">
<h3><?php bloginfo('name'); ?></h3>
<p><?php bloginfo('description'); ?></p>
</div>

<div class="footer-nav">
<?php
wp_nav_menu([
'theme_location' => 'footer'
]);
?>
</div>

<div class="footer-contact">

<p><?php _e('Contact Us','hawp'); ?></p>

</div>

</div>

<?php wp_footer(); ?>

</footer>

</body>
</html>