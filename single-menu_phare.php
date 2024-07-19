<?php get_header() ?>
<header>
    </header>
    <hr class="single__menu_hr">

<div class="single__menu_phare">
    <img src="<?php the_field('menu_image')?>"></img>
    <h2><?php the_field('menu_name');?></h2>
    <p class="single__menu_phare_price"><?php the_field('menu_price');?></p>
    <p class="single__menu_phare_desc"><?php the_field('menu_desc');?> </p>

</div>


<?php get_footer() ?>