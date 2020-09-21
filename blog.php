<?php get_header();?>
<main class="main-content">
  <div class="fullwidth-block inner-content">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="content">


            <?php if(have_posts()) :
            while (have_posts() : the_post();?>