<?php 

    $section_features_title=get_field('field_5a6078919c8d1');
    $section_features_description=get_field('field_5a60797bb5c80');
;?>
 <section class="section-features">
                <div class="container">
                <h1><?php echo $section_features_title;?></h1>
                
                    <div>
                    <?php echo $section_features_description ;?>
                    </div>
                    <div class="features-grid grid">
                            <?php $loop=new WP_Query(array(
                                'post_type'=>'section_features',
                                'orderby'=>'post_id',
                                'order'=>'ASC'
                            )) ;?>

                            <?php while($loop->have_posts()): $loop->the_post() ;?>
                                
                        <div class="col span-1-of-4 " >
                            <i class="<?php the_field('button_style');?>"></i>
                            <h3><?php the_field('title') ;?></h3>
                            <p><?php the_field('description') ;?></p>
                        </div>
                            <?php endwhile ;?>


                    </div>
                </div>
            </section>