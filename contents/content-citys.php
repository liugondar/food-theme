<?php $section_city_title=get_field('field_5a60a56dc966c') ;?>
            <section class="section-citys">
                <div class="container">
                <h1><?php echo $section_city_title ;?></h1>
        </div>
                <div class="container" >
                <?php 
                    $loop= new WP_Query(array(
                        'post_type'=>'section_show_cities',
                        'orderby'=>'post_id',
                        'order'=>'ASC'
                    )) 
                ?>

                <?php while($loop->have_posts()): $loop->the_post() ;?>
                    <div class="col span-1-of-4 box-city">
                        <?php $temp=get_field('city_img') ;?>
                        <img src="<?php echo $temp['url'] ;?>" alt="">
                            <h3>
                               <?php echo the_field('title') ;?> 
                            </h3>
                            <div>
                                <p><i class="fa fa-laptop" aria-hidden="true"> </i><?php echo the_field('feature1') ;?></p>
                                <p><i class="fa fa-cloud" aria-hidden="true"></i><?php echo the_field('feature1') ;?> </p>
                                <p><i class="fa fa-heart" aria-hidden="true"></i><?php echo the_field('feature1') ;?></p>
                            </div>
                    </div>
                <?php endwhile ;?>
                </div>
            </section>
