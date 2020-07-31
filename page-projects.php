<?php
/*
Template Name: Projects
*/ ?>

<?php get_header();?>
<?php $background_video = get_field('background_video');?>


<body id="project-page">

<div class="pace-wrap">
    <div class="justify-content-center logo">
            <img class="col-sm-4 col-md-10 col-lg-5 col-xl-5" src="http://salomondesign.co/WLF_Logo.gif">
    </div>
    <div class="pace"></div>
</div>

<div class="bg-video">
    <?php

    $iframe = get_field('background_video');

    preg_match('/src="(.+?)"/', $iframe, $matches);
    $src = $matches[1];

    $params = array(
        'controls'  => 0,
        'hd'        => 1,
        'autoplay'  => 1,
        'loop'  => 1,
        'muted'  => 1,    
        'autohide'  => 1
    );
    $new_src = add_query_arg($params, $src);
    $iframe = str_replace($src, $new_src, $iframe);

    echo $iframe;
    ?>

</div>


     <div class="justify-content-center logo">
        <a href="http://salomondesign.co/weirdlife">
            <img class="col-sm-4 col-md-10 col-lg-5 col-xl-5" src="http://salomondesign.co/WLF_Logo_4.gif">
        </a>
    </div>

<nav class="navbar col">
        <a href="http://salomondesign.co/weirdlife/projects">
            <div class="main home-nav text-center">
                + <span class="hover-nav index-click">Index</span>
            </div>
        </a>
        <a href="http://salomondesign.co/weirdlife/about">
            <div class="main about-nav text-center">
                ? <span class="hover-nav about-click">About</span>
            </div>
        </a>
</nav>

<div class="grid-wrap">
    <?php echo do_shortcode('[print_responsive_video_grid id="1"]'); ?>
</div>

<p class="col-12 text-center copyright">© ALL RIGHTS RESERVED MCMXCVIII WEIRD LIFE LLC</p>
</body>

<?php get_footer();?>
