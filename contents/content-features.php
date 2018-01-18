<?php 
    $section_features_title=get_field('tieude_section_feature');
    $section_features_description=get_field('section_features_description');
;?>
 <section class="section-features">
                <div class="container">
                <h1>test</h1>
                
                    <div>
                        ahihi
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