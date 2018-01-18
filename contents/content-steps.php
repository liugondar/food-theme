<?php 
    $section_how_it_work_title=get_field('field_5a607a4a137ec');
wp_reset_query();
    $section_how_it_work_img=get_field('field_5a607bad397d4');
    debug_to_console($section_how_it_work_img['url']);
    ?>
            <section class="section-steps">
                <div class="container">
                    <h1>
                    <?php echo $section_how_it_work_title ;?>
                    </h1>
                <div class="show-steps">
                    <div class="col span-1-of-2" >
                        <img src="<?php echo $section_how_it_work_img['url'] ;?>" alt="">
                    </div>
                    <div class="col span-1-of-2" >
                        <div class="step">
                            <div>1</div>
                            <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                        </div>
                        <div class="step">
                            <div>2</div>
                            <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                        </div>
                        <div class="step">
                            <div>3</div>
                            <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                        </div>
                         <div class="download">
                              <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/download-app-android.png" alt=""></a>
                              <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/download-app.svg" alt=""></a>
                         </div>
                    </div>
                </div></div>
            </section>
