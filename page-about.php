<?php
/*
Template Name: About
*/ ?>

<?php get_header();?>

<?php $background_video = get_field('background_video');?>
<?php $intro_block = get_field('intro_block');?>
<?php $team = get_field('team');?>
<?php $ryan_block = get_field('ryan_block');?>
<?php $laura_block = get_field('laura_block');?>
<?php $mike_block = get_field('mike_block');?>
<?php $jackson_block = get_field('jackson_block');?>
<?php $sara_block = get_field('sara_block');?>
<?php $image = get_sub_field('sara_image_1'); ?>

<body id="about-page">

    <div class="pace"></div>

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
            <img class="col-sm-4 col-md-10 col-lg-5 col-xl-5" src="http://salomondesign.co/WLF_Logo.gif">
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

<div class="about container">
    
    <div class="col-12 about-block bio-block">
        <p class="col-sm-12 col-lg-9 container-fluid text-center"><?php echo $intro_block['about_copy'];?></p>
    </div>

    <div class="d-flex justify-content-center flex-wrap about-block contact">
        CONTACT US FOR WORK
    </div>

    <div class="d-flex justify-content-center flex-wrap about-block info">
        <div class="col text-left">
            <a href="https://vimeo.com/weirdlife"><p>VIMEO<p></a>
        </div>
        <div class="col text-center">
            <a href="">
                <p><?php echo $intro_block['email'];?><p>
            </a>
            <p class="phone"><?php echo $intro_block['phone'];?></p>
        </div>
        <div class="col text-right">
            <a href="https://instagram.com/weirdlifefilms"><p>INSTAGRAM<p></a>
        </div>
    </div>

    <div class="container-fluid col about-block wave">
            <iframe src="https://player.vimeo.com/video/311764154" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
    </div>
     <div class="d-flex justify-content-center flex-wrap col-12 about-block bio-block">
        <div class="col-sm-12 col-lg-8">
        <h1 class="col"><?php echo $team['about_title'];?></h1>
        <p class="col text-left"><?php echo $team['team_bio'];?></p>
        </div>
        <?php if( have_rows('intro_block') ): ?>
            <?php while( have_rows('intro_block') ): the_row(); 
            $support_image_1 = get_sub_field('support_image_1'); ?>
            <div class="col-sm-8 col-md-8 col-lg-4 d-1 about-img about-img-1" style="background-image: url('<?php echo $support_image_1; ?>')">
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
        <?php if( have_rows('intro_block') ): ?>
            <?php while( have_rows('intro_block') ): the_row(); 
            $support_image_2 = get_sub_field('support_image_2'); ?>
            <div class="col-4 d-1 about-img about-img-2" style="background-image: url('<?php echo $support_image_2; ?>')">
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
    </div>

    <div class="d-flex flex-wrap justify-content-center about-block team">
        <div class="col-sm-9 col-md-10 col-lg-3 col-xl-3 team-item">
                <?php if( have_rows('ryan_block') ): ?>
                <?php while( have_rows('ryan_block') ): the_row(); 
                $ryan_image = get_sub_field('ryan_image_1'); ?>
                <div class="team-img" style="background-image: url('<?php echo $ryan_image; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            <h1 class="text-center"><?php echo $ryan_block['ryan_name'];?></h1>
            <p class="text-center"><?php echo $ryan_block['ryan_title'];?></p>
            <?php if( have_rows('ryan_block') ): ?>
             <?php while( have_rows('ryan_block') ): the_row(); 
                    $link = get_sub_field('ryan_paste_link');
                    if( $link ): ?>
                    <a class="text-center" href="<?php echo esc_url( $link ); ?>">
                        <p class="text-center"><?php echo $ryan_block['ryan_social_links'];?></p>
                    </a>
                    <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
            <p class="team-bio"><?php echo $ryan_block['ryan_bio'];?></p>
        </div>
        <div class="col-sm-9 col-md-10 col-lg-3 col-xl-3 team-item">
                <?php if( have_rows('laura_block') ): ?>
                <?php while( have_rows('laura_block') ): the_row(); 
                $laura_image = get_sub_field('laura_image_1'); ?>
                <div class="team-img" style="background-image: url('<?php echo $laura_image; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            <h1 class="text-center"><?php echo $laura_block['laura_name'];?></h1>
            <p class="text-center"><?php echo $laura_block['laura_title'];?></p>
            <?php if( have_rows('laura_block') ): ?>
             <?php while( have_rows('laura_block') ): the_row(); 
                    $link = get_sub_field('laura_paste_link');
                    if( $link ): ?>
                    <a class="text-center" href="<?php echo esc_url( $link ); ?>">
                        <p class="text-center"><?php echo $laura_block['laura_social_links'];?></p>
                    </a>
                    <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
            <p class="team-bio"><?php echo $laura_block['laura_bio'];?></p>
        </div>
        <div class="col-sm-9 col-md-10 col-lg-3 col-xl-3 team-item">
                <?php if( have_rows('jackson_block') ): ?>
                <?php while( have_rows('jackson_block') ): the_row(); 
                $jackson_image = get_sub_field('jackson_image_1'); ?>
                <div class="team-img" style="background-image: url('<?php echo $jackson_image; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            <h1 class="text-center"><?php echo $jackson_block['jackson_name'];?></h1>
            <p class="text-center"><?php echo $jackson_block['jackson_title'];?></p>
            <?php if( have_rows('jackson_block') ): ?>
             <?php while( have_rows('jackson_block') ): the_row(); 
                    $link = get_sub_field('jackson_paste_link');
                    if( $link ): ?>
                    <a class="text-center" href="<?php echo esc_url( $link ); ?>">
                        <p class="text-center"><?php echo $jackson_block['jackson_social_links'];?></p>
                    </a>
                    <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
            <p class="team-bio"><?php echo $jackson_block['jackson_bio'];?></p>
        </div>
        <div class="col-sm-9 col-md-10 col-lg-3 col-xl-3 team-item">
                <?php if( have_rows('mike_block') ): ?>
                <?php while( have_rows('mike_block') ): the_row(); 
                $mike_image = get_sub_field('mike_image_1'); ?>
                <div class="team-img" style="background-image: url('<?php echo $mike_image; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            <h1 class="text-center"><?php echo $mike_block['mike_name'];?></h1>
            <p class="text-center"><?php echo $mike_block['mike_title'];?></p>
            <?php if( have_rows('mike_block') ): ?>
             <?php while( have_rows('mike_block') ): the_row(); 
                    $link = get_sub_field('mike_paste_link');
                    if( $link ): ?>
                    <a class="text-center" href="<?php echo esc_url( $link ); ?>">
                        <p class="text-center"><?php echo $mike_block['mike_social_links'];?></p>
                    </a>
                    <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
            <p class="team-bio"><?php echo $mike_block['mike_bio'];?></p>
        </div>
        <div class="col-sm-9 col-md-10 col-lg-3 col-xl-3 team-item">
                <?php if( have_rows('sara_block') ): ?>
                <?php while( have_rows('sara_block') ): the_row(); 
                $sara_image = get_sub_field('sara_image_1'); ?>
                <div class="team-img" style="background-image: url('<?php echo $sara_image; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            <h1 class="text-center"><?php echo $sara_block['sara_name'];?></h1>
            <p class="text-center"><?php echo $sara_block['sara_title'];?></p>
             <?php if( have_rows('sara_block') ): ?>
             <?php while( have_rows('sara_block') ): the_row(); 
                    $link = get_sub_field('sara_paste_link');
                    if( $link ): ?>
                    <a class="text-center" href="<?php echo esc_url( $link ); ?>">
                        <p class="text-center"><?php echo $sara_block['sara_social_links'];?></p>
                    </a>
                    <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
            <p class="team-bio"><?php echo $sara_block['sara_bio'];?></p>
        </div>
    </div>
    <div class="col-12 container row about-block view-block">
            <?php if( have_rows('intro_block') ): ?>
            <?php while( have_rows('intro_block') ): the_row(); 
            $support_image_3 = get_sub_field('support_image_3'); ?>
            <div class="col-4 d-1 about-img about-img-3" style="background-image: url('<?php echo $support_image_3; ?>')">
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
        <a class="container" href="http://salomondesign.co/weirdlife/projects">
            <div class="container view">
                <h1 class="text-center"><i class="far fa-smile"></i>   VIEW OUR WORK   <i class="far fa-smile"></i></h1>
            </div>
        </a>
    </div>
</div>
<p class="col-12 text-center copyright">© ALL RIGHTS RESERVED MCMXCVIII WEIRD LIFE LLC</p>

</body>

<?php get_footer();?>