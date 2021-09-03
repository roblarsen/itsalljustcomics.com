<?php
/*
Template Name: New 100k club
*/

get_header();
?>
<link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Condensed" rel="stylesheet"> <link rel="stylesheet" href="//itsalljustcomics.com/wp-content/themes/comics2.0/_assets/styles/100k.css">

<?php
st_before_content($columns='sixteen');
get_template_part( 'loop', 'page' );
st_after_content();
?>

<script src="//itsalljustcomics.com/wp-content/themes/comics2.0/_assets/scripts/vendor.js"></script> 
<script src="//itsalljustcomics.com/wp-content/themes/comics2.0/_assets/scripts/scripts.js"></script>

<?php

get_footer();

?>
