<?php
/*
Template Name: Record
*/

get_header();
?>

    <link href="/d3/_assets/css/normalize.css" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="/d3/_assets/css/main.css" rel="stylesheet">

<?php
get_header();
st_before_content($columns='sixteen');
get_template_part( 'loop', 'index' );
st_after_content();
get_footer();
?>


    <script src="/d3/node_modules/d3/dist/d3.min.js"></script>
    <script src="/d3/node_modules/d3-fetch/dist/d3-fetch.min.js"></script>
    <script src="/d3/_assets/js/inflation.js"></script>
    <script src="/d3/node_modules/moment/min/moment.min.js"></script>
    <script src="/d3/_assets/js/comics.js"></script>

