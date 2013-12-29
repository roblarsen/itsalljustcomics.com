<?php
/*
Template Name: 100k club
*/

get_header();
st_before_content($columns='sixteen');
get_template_part( 'loop', 'page' );
st_after_content();
?>
<script type="text/javascript">
  jQuery( "#backupdata" ).remove();
</script>
<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.min.js'></script>
<script src="http://itsalljustcomics.com/wp-content/themes/comics2.0/js/lodash.min.js"></script> 
<script src="http://itsalljustcomics.com/wp-content/themes/comics2.0/js/app.js"></script> 
<script src="http://itsalljustcomics.com/wp-content/themes/comics2.0/js/services.js"></script> 
<script src="http://itsalljustcomics.com/wp-content/themes/comics2.0/js/controllers.js"></script> 
<script src="http://itsalljustcomics.com/wp-content/themes/comics2.0/js/filters.js"></script> 
<script src="http://itsalljustcomics.com/wp-content/themes/comics2.0/js/directives.js"></script>

<?php

get_footer();

?>