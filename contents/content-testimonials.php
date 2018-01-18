<?php $loop=new WP_Query(array(
        'post_type'=>'section_feedback',
        'orderby'=>'post_id',
        'order'=>'ASC'
)) ;
?>
<section class="section-testimonials ">
    <div class="container">
    <h1>Our customers can't live without us</h1>
    <div class="grid">
        <?php while($loop->have_posts()): $loop->the_post() ;?>

        <blockquote  class="col span-1-of-3"><?php the_content() ;?>
<cite><img src="<?php $temp=get_field('author_img'); echo $temp['url'];  ?> "/>(<?php echo the_field('author') ;?> )</cite></blockquote>
        <?php endwhile ;?>
</div>

    
    </div>
</section>