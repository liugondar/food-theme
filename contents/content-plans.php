<?php function seperateText($text){
} ;?>
<?php 
    $detail1=get_field('field_5a60c0846f6e0') ;
    $detail1= preg_split ('/\r\n|\n|\r/', $detail1);
    $detail2=get_field('field_5a60c0d06f6e4');
    $detail2= preg_split ('/\r\n|\n|\r/', $detail2);

    $detail3=get_field('field_5a60c1006f6e8');
    $detail3= preg_split ('/\r\n|\n|\r/', $detail3);
?>

<section class="section-plans">
    <div class="container">
        <h1>Start eating healthy today</h1>
    </div>
    <div class="container">
        <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Premium</h3>
                            <p class="plan-price">$<?php echo the_field('field_5a60bfc0b16e8') ;?><span>/ month</span></p>
                            <p class="plan-price-meal"> <?php echo the_field('field_5a60c0576f6df') ;?></p>
                        </div>
                        <div>
                            <ul>
                            <?php foreach($detail1 as $detail): ;?>
                                <li><i class="fa fa-cloud"></i><?php echo $detail ;?></li>
                            <?php endforeach ;?>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-full">Sign up now</a>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Pro</h3>
                            <p class="plan-price">$<?php echo the_field('field_5a60c0ac6f6e2') ;?><span>/ meal</span></p>
                            <p class="plan-price-meal"><?php echo the_field('field_5a60c0c06f6e3') ;?></p>
                        </div>
                        <div>
                            <ul>
                                <?php foreach($detail2 as $detail) :;?>
                                <li><i class="fa fa-cloud"></i><?php echo $detail ;?></li>
                                <?php endforeach ;?>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-full">Sign up now</a>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Starter</h3>
                            <p class="plan-price">$<?php echo the_field('field_5a60c0ee6f6e6') ;?><span>/ month</span></p>
                            <p class="plan-price-meal"><?php echo the_field('field_5a60c0f86f6e7') ;?></p>
                        </div>
                        <div>
                            <ul>
                                <?php foreach($detail3 as $detail) :;?>
                                <li><i class="fa fa-cloud"></i><?php echo $detail ;?></li>
                                <?php endforeach ;?>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-ghost">Sign up now</a>
                        </div>
                    </div>
                </div>
    </div>
</section>