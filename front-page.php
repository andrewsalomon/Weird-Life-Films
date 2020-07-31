<?php get_header();?>


<?php $background_video = get_field('background_video');?>
<?php $collage_1 = get_field('collage_1');?>
<?php $collage_2 = get_field('collage_2');?>
<?php $collage_3 = get_field('collage_3');?>
<?php $collage_4 = get_field('collage_4');?>
<?php $collage_5 = get_field('collage_5');?>
<?php $collage_6 = get_field('collage_6');?>

<body id="front-page">


    <div class="pace">
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
<div id="infinite" infinite-scroll>
    <div id="content">
       <div id="viewport">
         <div class="frame box collage collage-6" style="-webkit-transform: translateZ(-5000px);-moz-transform: translateZ(-5000px);">
            <div class="col-12 d-flex flex-column justify-content-center collage-item collage-info">
               <?php if( have_rows('collage_6') ): ?>
                <?php while( have_rows('collage_6') ): the_row(); 
                $c6_main_image = get_sub_field('c6_main_image'); ?>
                <div class="mx-auto d-block collage-img c6-header-img" style="background-image: url('<?php echo $c6_main_image; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
               <h1 class="collage-title c1-title-1 text-center"><?php echo $collage_6['c6_collage_title'];?></h1>
               <p class="text-center"><?php echo $collage_6['c6_subtitle'];?></p>
            </div>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_6') ): ?>
                <?php while( have_rows('collage_6') ): the_row(); 
                $c6_image_1 = get_sub_field('c6_image_1'); ?>
                <div class="collage-item d-1 c2-item-1" style="background-image: url('<?php echo $c6_image_1; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_6') ): ?>
                <?php while( have_rows('collage_6') ): the_row(); 
                $c6_image_2 = get_sub_field('c6_image_2'); ?>
                <div class="collage-item d-2 c2-item-2" style="background-image: url('<?php echo $c6_image_2; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_6') ): ?>
                <?php while( have_rows('collage_6') ): the_row(); 
                $c6_image_3 = get_sub_field('c6_image_3'); ?>
                <div class="collage-item d-1 c2-item-3" style="background-image: url('<?php echo $c6_image_3; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_6') ): ?>
                <?php while( have_rows('collage_6') ): the_row(); 
                $c6_image_4 = get_sub_field('c6_image_4'); ?>
                <div class="collage-item d-2 c2-item-4" style="background-image: url('<?php echo $c6_image_4; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_6') ): ?>
                <?php while( have_rows('collage_6') ): the_row(); 
                $c6_image_5 = get_sub_field('c6_image_5'); ?>
                <div class="collage-item d-1 c2-item-5" style="background-image: url('<?php echo $c6_image_5; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_6') ): ?>
                <?php while( have_rows('collage_6') ): the_row(); 
                $c6_image_6 = get_sub_field('c6_image_6'); ?>
                <div class="collage-item d-1 c2-item-6" style="background-image: url('<?php echo $c6_image_6; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
        </div>
        <div class="frame box collage collage-5"  style="-webkit-transform: translateZ(-4000px);-moz-transform: translateZ(-4000px);">
            <div class="col-12 d-flex flex-column justify-content-center collage-item collage-info">
               <?php if( have_rows('collage_5') ): ?>
                <?php while( have_rows('collage_5') ): the_row(); 
                $c5_main_image = get_sub_field('c5_main_image'); ?>
                <div class="mx-auto d-block collage-img c5-header-img" style="background-image: url('<?php echo $c5_main_image; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
               <h1 class="collage-title c1-title-1 text-center"><?php echo $collage_5['c5_collage_title'];?></h1>
               <p class="text-center"><?php echo $collage_5['c5_subtitle'];?></p>
            </div>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_5') ): ?>
                <?php while( have_rows('collage_5') ): the_row(); 
                $c5_image_1 = get_sub_field('c5_image_1'); ?>
                <div class="collage-item d-1 c1-item-1" style="background-image: url('<?php echo $c5_image_1; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_5') ): ?>
                <?php while( have_rows('collage_5') ): the_row(); 
                $c5_image_2 = get_sub_field('c5_image_2'); ?>
                <div class="collage-item d-2 c1-item-2" style="background-image: url('<?php echo $c5_image_2; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_5') ): ?>
                <?php while( have_rows('collage_5') ): the_row(); 
                $c5_image_3 = get_sub_field('c5_image_3'); ?>
                <div class="collage-item d-1 c1-item-3" style="background-image: url('<?php echo $c5_image_3; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_5') ): ?>
                <?php while( have_rows('collage_5') ): the_row(); 
                $c5_image_4 = get_sub_field('c5_image_4'); ?>
                <div class="collage-item d-2 c1-item-4" style="background-image: url('<?php echo $c5_image_4; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_5') ): ?>
                <?php while( have_rows('collage_5') ): the_row(); 
                $c5_image_5 = get_sub_field('c5_image_5'); ?>
                <div class="collage-item d-1 c1-item-5" style="background-image: url('<?php echo $c5_image_5; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_5') ): ?>
                <?php while( have_rows('collage_5') ): the_row(); 
                $c5_image_6 = get_sub_field('c5_image_6'); ?>
                <div class="collage-item d-1 c1-item-6" style="background-image: url('<?php echo $c5_image_6; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
        </div>
        <div class="frame box collage collage-4" style="-webkit-transform: translateZ(-3000px);-moz-transform: translateZ(-3000px);">
            <div class="col-12 d-flex flex-column justify-content-center collage-item collage-info">
               <?php if( have_rows('collage_4') ): ?>
                <?php while( have_rows('collage_4') ): the_row(); 
                $c4_main_image = get_sub_field('c4_main_image'); ?>
                <div class="mx-auto d-block collage-img c4-header-img" style="background-image: url('<?php echo $c4_main_image; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
               <h1 class="collage-title c1-title-1 text-center"><?php echo $collage_4['c4_collage_title'];?></h1>
               <p class="text-center"><?php echo $collage_4['c4_subtitle'];?></p>
            </div>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_4') ): ?>
                <?php while( have_rows('collage_4') ): the_row(); 
                $c4_image_1 = get_sub_field('c4_image_1'); ?>
                <div class="collage-item d-1 c2-item-1" style="background-image: url('<?php echo $c4_image_1; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_4') ): ?>
                <?php while( have_rows('collage_4') ): the_row(); 
                $c4_image_2 = get_sub_field('c4_image_2'); ?>
                <div class="collage-item d-2 c2-item-2" style="background-image: url('<?php echo $c4_image_2; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_4') ): ?>
                <?php while( have_rows('collage_4') ): the_row(); 
                $c4_image_3 = get_sub_field('c4_image_3'); ?>
                <div class="collage-item d-1 c2-item-3" style="background-image: url('<?php echo $c4_image_3; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_4') ): ?>
                <?php while( have_rows('collage_4') ): the_row(); 
                $c4_image_4 = get_sub_field('c4_image_4'); ?>
                <div class="collage-item d-2 c2-item-4" style="background-image: url('<?php echo $c4_image_4; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_4') ): ?>
                <?php while( have_rows('collage_4') ): the_row(); 
                $c4_image_5 = get_sub_field('c4_image_5'); ?>
                <div class="collage-item d-1 c2-item-5" style="background-image: url('<?php echo $c4_image_5; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_4') ): ?>
                <?php while( have_rows('collage_4') ): the_row(); 
                $c4_image_6 = get_sub_field('c4_image_6'); ?>
                <div class="collage-item d-1 c2-item-6" style="background-image: url('<?php echo $c4_image_6; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
        </div>
        <div class="frame box collage collage-3" style="-webkit-transform: translateZ(-2000px);-moz-transform: translateZ(-2000px);">
            <div class="col-12 d-flex flex-column justify-content-center collage-item collage-info">
               <?php if( have_rows('collage_3') ): ?>
                <?php while( have_rows('collage_3') ): the_row(); 
                $c3_main_image = get_sub_field('c3_main_image'); ?>
                <div class="mx-auto d-block collage-img c3-header-img" style="background-image: url('<?php echo $c3_main_image; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
               <h1 class="collage-title c1-title-1 text-center"><?php echo $collage_3['c3_collage_title'];?></h1>
               <p class="text-center"><?php echo $collage_3['c3_subtitle'];?></p>
            </div>
            <a href="http://salomondesign.co/weirdlife/projects"><div class="collage-item d-1 c1-item-1"></div>
                <?php if( have_rows('collage_3') ): ?>
                <?php while( have_rows('collage_3') ): the_row(); 
                $c3_image_1 = get_sub_field('c3_image_1'); ?>
                <div class="collage-item d-1 c1-item-1" style="background-image: url('<?php echo $c3_image_1; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects"><div class="collage-item d-2 c1-item-2"></div>
                <?php if( have_rows('collage_3') ): ?>
                <?php while( have_rows('collage_3') ): the_row(); 
                $c3_image_2 = get_sub_field('c3_image_2'); ?>
                <div class="collage-item d-2 c1-item-2" style="background-image: url('<?php echo $c3_image_2; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_3') ): ?>
                <?php while( have_rows('collage_3') ): the_row(); 
                $c3_image_3 = get_sub_field('c3_image_3'); ?>
                <div class="collage-item d-1 c1-item-3" style="background-image: url('<?php echo $c3_image_3; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_3') ): ?>
                <?php while( have_rows('collage_3') ): the_row(); 
                $c3_image_4 = get_sub_field('c3_image_4'); ?>
                <div class="collage-item d-2 c1-item-4" style="background-image: url('<?php echo $c3_image_4; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_3') ): ?>
                <?php while( have_rows('collage_3') ): the_row(); 
                $c3_image_5 = get_sub_field('c3_image_5'); ?>
                <div class="collage-item d-1 c1-item-5" style="background-image: url('<?php echo $c3_image_5; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_3') ): ?>
                <?php while( have_rows('collage_3') ): the_row(); 
                $c3_image_6 = get_sub_field('c3_image_6'); ?>
                <div class="collage-item d-1 c1-item-6" style="background-image: url('<?php echo $c3_image_6; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
        </div>

        <div class="frame box collage collage-2" style="-webkit-transform: translateZ(-1000px);-moz-transform: translateZ(-1000px);">
            <div class="col-12 d-flex flex-column justify-content-center collage-item collage-info">
               <?php if( have_rows('collage_2') ): ?>
                <?php while( have_rows('collage_2') ): the_row(); 
                $c2_main_image = get_sub_field('c2_main_image'); ?>
                <div class="mx-auto d-block collage-img c2-header-img" style="background-image: url('<?php echo $c2_main_image; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
               <h1 class="collage-title c2-title-1 text-center"><?php echo $collage_2['c2_collage_title'];?></h1>
               <p class="text-center"><?php echo $collage_2['c2_subtitle'];?></p>
            </div>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_2') ): ?>
                <?php while( have_rows('collage_2') ): the_row(); 
                $c2_image_1 = get_sub_field('c2_image_1'); ?>
                <div class="collage-item d-1 c2-item-1" style="background-image: url('<?php echo $c2_image_1; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_2') ): ?>
                <?php while( have_rows('collage_2') ): the_row(); 
                $c2_image_2 = get_sub_field('c2_image_2'); ?>
                <div class="collage-item d-2 c2-item-2" style="background-image: url('<?php echo $c2_image_2; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_2') ): ?>
                <?php while( have_rows('collage_2') ): the_row(); 
                $c2_image_3 = get_sub_field('c2_image_3'); ?>
                <div class="collage-item d-1 c2-item-3" style="background-image: url('<?php echo $c2_image_3; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_2') ): ?>
                <?php while( have_rows('collage_2') ): the_row(); 
                $c2_image_4 = get_sub_field('c2_image_4'); ?>
                <div class="collage-item d-2 c2-item-4" style="background-image: url('<?php echo $c2_image_4; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_2') ): ?>
                <?php while( have_rows('collage_2') ): the_row(); 
                $c2_image_5 = get_sub_field('c2_image_5'); ?>
                <div class="collage-item d-1 c2-item-5" style="background-image: url('<?php echo $c2_image_5; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_2') ): ?>
                <?php while( have_rows('collage_2') ): the_row(); 
                $c2_image_6 = get_sub_field('c2_image_6'); ?>
                <div class="collage-item d-1 c2-item-6" style="background-image: url('<?php echo $c2_image_6; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
        </div>
        <div class="frame box collage collage-1" style="-webkit-transform: translateZ(0px);-moz-transform: translateZ(0px);">
           <div class="collage-item collage-info"></div>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_1') ): ?>
                <?php while( have_rows('collage_1') ): the_row(); 
                $c1_image_1 = get_sub_field('c1_image_1'); ?>
                <div class="collage-item d-1 c1-item-1" style="background-image: url('<?php echo $c1_image_1; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_1') ): ?>
                <?php while( have_rows('collage_1') ): the_row(); 
                $c1_image_2 = get_sub_field('c1_image_2'); ?>
                <div class="collage-item d-2 c1-item-2" style="background-image: url('<?php echo $c1_image_2; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_1') ): ?>
                <?php while( have_rows('collage_1') ): the_row(); 
                $c1_image_3 = get_sub_field('c1_image_3'); ?>
                <div class="collage-item d-1 c1-item-3" style="background-image: url('<?php echo $c1_image_3; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
            <?php if( have_rows('collage_1') ): ?>
                <?php while( have_rows('collage_1') ): the_row(); 
                $c1_image_4 = get_sub_field('c1_image_4'); ?>
                <div class="collage-item d-2 c1-item-4" style="background-image: url('<?php echo $c1_image_4; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div></a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_1') ): ?>
                <?php while( have_rows('collage_1') ): the_row(); 
                $c1_image_5 = get_sub_field('c1_image_5'); ?>
                <div class="collage-item d-1 c1-item-5" style="background-image: url('<?php echo $c1_image_5; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
            <a href="http://salomondesign.co/weirdlife/projects">
                <?php if( have_rows('collage_1') ): ?>
                <?php while( have_rows('collage_1') ): the_row(); 
                $c1_image_6 = get_sub_field('c1_image_6'); ?>
                <div class="collage-item d-1 c1-item-6" style="background-image: url('<?php echo $c1_image_6; ?>')">
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </a>
        </div>
       </div>
    </div>
</div>
<p class="col-12 text-center copyright">© ALL RIGHTS RESERVED MCMXCVIII WEIRD LIFE LLC </p>

</body>


<?php get_footer();?>