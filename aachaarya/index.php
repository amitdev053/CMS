<?php include('header.php'); ?>
<!-- Index page Image, heading & paragraph Starts Here----------------------------------->

<section class="ds section-home">
	<div class="container">
		<div class="divider-50 divider-xl-65"></div>
		<div class="row align-center">

<?php
require '../lib/cmsone.php';


if($indexcolrow > 0){
$indexrow = mysqli_fetch_assoc($indexresult);
// print_r($indexrow);

?>
			<div class="col-lg-6 col-xl-5 order-lg-1 order-2 text-center text-md-left">
				<div class="divider-60 divider-lg-0"></div>
				<h5 class="special-heading bold mb-2 text-white">
					<span><?php echo $indexrow['content_heading']; ?></span>
				</h5>
				<p>
				<?php echo $indexrow['content_discripation']; ?>
				</p>
				<div class="line line-left"></div>
				<h3 class="special-heading fw-500 mb-2 color-main2 big-size">
					<span>Ultimate Guide</span>
				</h3>
				<h3 class="special-heading fw-500 text-white fs-50">
					<span>To Astrology</span>
				</h3>
				<br>
				<a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-maincolor">Let’s Begin</a>
			</div>
			<div class="col-lg-6 col-xl-7 order-lg-2 order-1 text-center text-lg-right">
				<!-- <img class="horoscope-image" src="image/horoscope-main.png" alt="img"> -->
				<?php
	echo '<img src="../uploadimg/'.( $indexrow['content_image'] ).'" class="horoscope-image">';
?>
			</div>
			
<?php
	
}
else{
	echo "Section coming Soon";
}
?>
		</div>
	</div>
</section>
<!-- Index page Image, heading & paragraph completed Here----------------------------------->


<!-- About Image, heading & paragraph Starts Here----------------------------------->

<section id="about" class="ds c-gutter-50 pt-100">
	<div class="container">
	<?php
require '../lib/cms.php';
if($aboutcolrowone > 0){
$aboutrowone = mysqli_fetch_assoc($aboutresultone)
	

// print_r($row);

?>

		<div class="row align-center">
			<div class="col-lg-6">
			    <div class="about-img mt-2" >
			     
					<?php
					echo '<img src="../uploadimg/'.( $aboutrowone['content_image'] ).'"/>';
					?>
			    </div>
			</div>
			<div class="col-lg-6 text-center text-md-left">
				<div class="divider-60 divider-lg-0 "></div>
				<h3 class="special-heading mt-2 fs-60 text-center text-md-left">
					<span><?php echo $aboutrowone['content_heading']; ?></span>
				</h3>
				<div class="divider-35"></div>
				<!-- <p>Aachaarya prakarsh ji has been practicing vedic astrology, numerology and vaastu for over 27 years. he expanded his business across the country. being an astrologer he has served thousands of people he completed 10000+ cases in astrology,, 5000+ cases in vaastu and 6000+ cases in numerology. he inspired to spread vedic knowledge by free yogdaan at every thursday also. he has thausand of satisfied clients all over the world. they are connected to aachaarya prakarsh ji for a very long time & their generation's also connected with him.</p> -->
				<?php echo $aboutrowone['content_discripation']; ?>
				<div class="shortcode-simple-counter counter-layout-2">
					<div class="counter_wrap justify-content-md-start">
						<div class="counter-wrap">
							<h2 class="counter counter-size" data-from="0" data-to="10" data-speed="1000">10</h2>
						</div>
						<p class="counter-text ">
							<span class="counter-add">Years Of<br><span class="color-dark fw-500">Experience</span></span>
						</p>
					</div>
				</div>
				<div class="divider-30 divider-xl-50"></div>
				<a href="#" class="btn btn-outline-maincolor btn-medium" data-toggle="modal" data-target="#exampleModal">Book Reading Now</a>
			</div>
		</div>
	
<?php

	}
else{
	echo "About Section coming Soon";
	}
		?>
	</div>
</section>

<!-- About Image, heading & paragraph Completed Here----------------------------------->


<!-- About Card Section Starts Here--------------------------------------->

<section class="ds bs box-vision-mission">
	<div class="container">
        <div class="row">
<?php
 if($colrowone > 0){
while($rowone = mysqli_fetch_assoc($resultone)){
// print_r($rowone);

?>
            <div class="col-md-4">
			<div class="box-vision">
                    <!-- <img src="image/mission2.png"> -->
					<?php
					echo '<img src="../uploadimg/'.( $rowone['content_image'] ).'"/>';
					?>
                    <h3><?php echo $rowone['content_heading']; ?></h3>
                    <p><?php echo $rowone['content_discripation']; ?></p>
			</div>
			</div>
			<?php
}
}
else{
	echo "About Section coming Soon";
	}
?>

            <!-- <div class="col-md-4">
                <div class="box-vision">
                    <img src="image/3d-icon-of-view-free-png.webp">
                    <h3>Vision</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-vision">
                    <img src="image/value-company.png">
                    <h3>Value</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                </div>
            </div> 
        </div>-->
</div>

</div>
</section>


<!-- About Card Section Completed Here--------------------------------------->



<section class="ds bs features-section s-overlay s-overlay-half-left s-py-90 s-py-xl-150 container-px-xl-30">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-12 col-lg-6 col-xl-5 text-center text-lg-left left section-special-2">
				<div class="z-index-2">
					<div>
						<p class="text-white text-center text-md-left fs-20 line-right mb-0">
							<span>Advantages</span>
						</p>
						<h3 class="special-heading mt-2 fs-60 text-center text-md-left">
							<span>Benefits of <br>Learning Magic</span>
						</h3>
						<p class="text-center text-md-left  mt-4">
							<span>They will provide the best free horoscope <br>astrology to you by analysing your sign.</span>
						</p>
						<div class="divider-60 divider-lg-0"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 section-special-3">
				<div class="z-index-2 ds opacity">
					<div>
						<div class="media">
							<div class="fs-50">
								<i class="ico ico-moon"></i>
							</div>
							<div class="media-body">
								<h6 class="mt-1 mb-2 color-main2">
									Acts as a Financial Planner
								</h6>
								<p>
									The planet in the 1st house of your horoscope and its lord influence the skills and talent in a person.
								</p>
							</div>
						</div>
						<div class="divider-40 divider-xl-60"></div>
						<div class="media">
							<div class="fs-50">
								<i class="ico ico-tarot"></i>
							</div>
							<div class="media-body">
								<h6 class="mt-1 mb-2 color-main2">
									Makes You Confident and Optimistic
								</h6>
								<p>
									If you hone the skills you are naturally good at and use it to your benefit, you will not just save your time
								</p>
							</div>
						</div>
						<div class="divider-40 divider-xl-60"></div>
						<div class="media">
							<div class="fs-50">
								<i class="ico ico-gem"></i>
							</div>
							<div class="media-body">
								<h6 class="mt-1 mb-2 color-main2">
									Helps in Decision Making
								</h6>
								<p>
									A person with Ascendant lord Venus will be inclined towards creative, artistic and innovative fields.
								</p>
							</div>
						</div>
						<div class="divider-40 divider-xl-60"></div>
						<div class="media">
							<div class="fs-50">
								<i class="ico ico-diamond"></i>
							</div>
							<div class="media-body">
								<h6 class="mt-1 mb-2 color-main2">
									Tells if Your Partner Is Rich and Attractive
								</h6>
								<p>
									Horoscope not just informs you about your skills but also tells you a specific career which will benefit you the most.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="forecasts" class="ds section-forecast s-overlay c-gutter-60 c-mb-60">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center mb-0">
				<h3 class="text-center mt-0 mb-2 special-heading fs-60 color-main">
					<span>Monthly Horoscopes 2023</span>
				</h3>
				<div class="line"></div>
			
				<div class="divider-40 divider-xl-60"></div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="vertical-item text-center  content-padding corner-box">
					<div class="item-content">
						<div class="icon-styled fs-50">
							<a href="aries.php" class="color-darkgrey ico ico-icon_aries"></a>
						</div>
						<h5 class="mt-4 mt-lg-5 fs-20 links-maincolor2">
							<a href="aries.php">Aries</a>
						</h5>
						<p>
							Mar 21 - Apr 19
						</p>
					</div>
				</div>
			</div><!-- .col-* -->
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="vertical-item text-center  content-padding corner-box">
					<div class="item-content">
						<div class="icon-styled fs-50">
							<a href="taurus.php" class="color-darkgrey ico ico-icon_taurus"></a>
						</div>
						<h5 class="mt-4 mt-lg-5 fs-20 links-maincolor2">
							<a href="taurus.php">Taurus</a>
						</h5>
						<p>
							Apr 20 - May 20
						</p>
					</div>
				</div>
			</div><!-- .col-* -->
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="vertical-item text-center  content-padding corner-box">
					<div class="item-content">
						<div class="icon-styled fs-50">
							<a href="gemini.php" class="color-darkgrey ico ico-icon_gemini"></a>
						</div>
						<h5 class="mt-4 mt-lg-5 fs-20 links-maincolor2">
							<a href="gemini.php">Gemini</a>
						</h5>
						<p>
							May 21 - Jun 20
						</p>
					</div>
				</div>
			</div><!-- .col-* -->
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="vertical-item text-center  content-padding corner-box">
					<div class="item-content">
						<div class="icon-styled fs-50">
							<a href="cancer.php" class="color-darkgrey ico ico-icon_cancer"></a>
						</div>
						<h5 class="mt-4 mt-lg-5 fs-20 links-maincolor2">
							<a href="cancer.php">Cancer</a>
						</h5>
						<p>
							Jun 21 - Jul 22
						</p>
					</div>
				</div>
			</div><!-- .col-* -->
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="vertical-item text-center  content-padding corner-box">
					<div class="item-content">
						<div class="icon-styled fs-50">
							<a href="leo.php" class="color-darkgrey ico ico-icon_leo"></a>
						</div>
						<h5 class="mt-4 mt-lg-5 fs-20 links-maincolor2">
							<a href="leo.php">Leo</a>
						</h5>
						<p>
							Jul 23 - Aug 22
						</p>
					</div>
				</div>
			</div><!-- .col-* -->
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="vertical-item text-center  content-padding corner-box">
					<div class="item-content">
						<div class="icon-styled fs-50">
							<a href="virgo.php" class="color-darkgrey ico ico-icon_virgo"></a>
						</div>
						<h5 class="mt-4 mt-lg-5 fs-20 links-maincolor2">
							<a href="virgo.php">Virgo</a>
						</h5>
						<p>
							Aug 23 - Sep 22
						</p>
					</div>
				</div>
			</div><!-- .col-* -->
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="vertical-item text-center  content-padding corner-box">
					<div class="item-content">
						<div class="icon-styled fs-50">
							<a href="libra.php" class="color-darkgrey ico ico-icon_libra"></a>
						</div>
						<h5 class="mt-4 mt-lg-5 fs-20 links-maincolor2">
							<a href="libra.php">Libra</a>
						</h5>
						<p>
							Sep 23 - Oct 22
						</p>
					</div>
				</div>
			</div><!-- .col-* -->
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="vertical-item text-center  content-padding corner-box">
					<div class="item-content">
						<div class="icon-styled fs-50">
							<a href="scorpio.php" class="color-darkgrey ico ico-icon_scorpio"></a>
						</div>
						<h5 class="mt-4 mt-lg-5 fs-20 links-maincolor2">
							<a href="scorpio.php">Scorpio</a>
						</h5>
						<p>
							Oct 23 - Nov 21
						</p>
					</div>
				</div>
			</div><!-- .col-* -->
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="vertical-item text-center  content-padding corner-box">
					<div class="item-content">
						<div class="icon-styled fs-50">
							<a href="sagittarius.php" class="color-darkgrey ico ico-icon_sagittarius"></a>
						</div>
						<h5 class="mt-4 mt-lg-5 fs-20 links-maincolor2">
							<a href="sagittarius.php">Sagittarius</a>
						</h5>
						<p>
							Nov 22 - Dec 21
						</p>
					</div>
				</div>
			</div><!-- .col-* -->
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="vertical-item text-center  content-padding corner-box">
					<div class="item-content">
						<div class="icon-styled fs-50">
							<a href="capricornius.php" class="color-darkgrey ico ico-icon_capricornius"></a>
						</div>
						<h5 class="mt-4 mt-lg-5 fs-20 links-maincolor2">
							<a href="capricornius.php">Capricornius</a>
						</h5>
						<p>
							Dec 22 - Jan 19
						</p>
					</div>
				</div>
			</div><!-- .col-* -->
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="vertical-item text-center  content-padding corner-box">
					<div class="item-content">
						<div class="icon-styled fs-50">
							<a href="aquarius.php" class="color-darkgrey ico ico-icon_aquarius"></a>
						</div>
						<h5 class="mt-4 mt-lg-5 fs-20 links-maincolor2">
							<a href="aquarius.php">Aquarius</a>
						</h5>
						<p>
							Jan 20 - Feb 18
						</p>
					</div>
				</div>
			</div><!-- .col-* -->
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="vertical-item text-center  content-padding corner-box">
					<div class="item-content">
						<div class="icon-styled fs-50">
							<a href="pisces.php" class="color-darkgrey ico ico-icon_pisces"></a>
						</div>
						<h5 class="mt-4 mt-lg-5 fs-20 links-maincolor2">
							<a href="pisces.php">Pisces</a>
						</h5>
						<p>
							Feb 19 - Mar 20
						</p>
					</div>
				</div>
			</div><!-- .col-* -->
		</div>
	</div>
</section>

<!-- Astrology Service Starts Here-------------------------------------->
<section id="shop" class="ds section-shop ">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 text-center">
				<h3 class="special-heading mt-2 fs-60 ">
					<span>Astrology Services</span>
				</h3>
				<div class="line"></div>
			</div>
			<div class="divider-55"></div>
		</div>
		<div class="row">
		    <div class="col-md-3">
		        <div class="product">

					<div class="product-inner">
						<a href="astrologer.php">
<?php

if($astrologycolrow > 0){
$row = mysqli_fetch_assoc($astrologyresult);
	

// print_r($row);

?>
							<!-- <img src="image/best-astrologer.webp" alt="img"> -->
<?php
	echo '<img src="../uploadimg/'.( $row['content_image'] ).'"/>';
?>


						</a>
						<div class="product-wrap">
							<h2 class="woocommerce-loop-product__title">
						

		<a href="astrologer.php"><?php echo $row['content_heading']; ?> </a>
<?php
	// }
}
else{
	echo "Section coming Soon";
}
?>
							</h2>
							<div class="price-wrap">
								<a href="tel:+91-9810288915" class="button product_type_simple add_to_cart_button"><i class="fa fa-phone"></i> Call Now</a>
							</div>
						</div>
					</div>
				</div>
		    </div>
		    <div class="col-md-3">
<?php
if($numerologycolrow > 0){
$numerologyrow = mysqli_fetch_assoc($numerologyresult);
// print_r($row);
?>

		        <div class="product">
					<div class="product-inner">
						<a href="numerologist.php">
							<!-- <img src="image/numerologist.jpg" alt="img"> -->
<?php
	echo '<img src="../uploadimg/'.( $numerologyrow['content_image'] ).'"/>';
?>
						</a>
						<div class="product-wrap">
							<h2 class="woocommerce-loop-product__title">
								<a href="numerologist.php"><?php echo $numerologyrow['content_heading']; ?> </a>
							</h2>
							<div class="price-wrap">
								<a href="tel:+91-9810288915" class="button product_type_simple add_to_cart_button"><i class="fa fa-phone"></i> Call Now</a>
							</div>
						</div>
					</div>
				</div>
<?php
	// }
}
else{
	echo "Section coming Soon";
}
?>

		    </div>
		    <div class="col-md-3">
<?php

if($vastucolrow > 0){
$vasturow = mysqli_fetch_assoc($vasturesult)
	

// print_r($row);

?>
		        <div class="product">
					<div class="product-inner">
						<a href="mahavastu.php">
							<!-- <img src="image/mahavastu.webp" alt="img"> -->
							<?php
	echo '<img src="../uploadimg/'.( $vasturow['content_image'] ).'"/>';
?>
						</a>
						<div class="product-wrap">
							<h2 class="woocommerce-loop-product__title">
								<a href="mahavastu.php"><?php echo $vasturow['content_heading']; ?>
</a>
							</h2>
							<div class="price-wrap">
								<a href="tel:+91-9810288915" class="button product_type_simple add_to_cart_button"><i class="fa fa-phone"></i> Call Now</a>
							</div>
						</div>
					</div>
				</div>
<?php
	// }
}
else{
	echo "Section coming Soon";
}
?>

		    </div>
		    <div class="col-md-3">
<?php


if($astrovastucolrow > 0){
$astrovasturow = mysqli_fetch_assoc($astrovasturesult)
	

// print_r($row);

?>
		        <div class="product">
					<div class="product-inner">
						<a href="mahavastu.php">
							<!-- <img src="image/astrovastu.png" alt="img"> -->
<?php
	echo '<img src="../uploadimg/'.( $astrovasturow['content_image'] ).'"/>';
?>
						</a>
						<div class="product-wrap">
							<h2 class="woocommerce-loop-product__title">
								<a href="astrovastu.php"><?php echo $astrovasturow['content_heading']; ?></a>
							</h2>
							<div class="price-wrap">
								<a href="tel:+91-9810288915" class="button product_type_simple add_to_cart_button"><i class="fa fa-phone"></i> Call Now</a>
							</div>
						</div>
					</div>
				</div>
<?php

}
else{
	echo "Section coming Soon";
}
?>
		    </div>
		    
		    
		</div>
		
	</div>
</section>

<!-- Astrology Service Completed Here-------------------------------------->


<!--<section id="services" class="ds section-service s-overlay mobile-overlay container-px-xl-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-5"></div>
			<div class="col-xl-3 col-lg-6">
				<h3 class="special-heading mt-2 fs-60 text-center text-md-left">
					<span>Let’s Make <br>Some Magic</span>
				</h3>
			</div>
			<div class="col-xl-3 col-lg-6 text-center text-md-left">
				
				<div class="divider-35"></div>
				<a href="contact.html" class="btn btn-outline-maincolor btn-medium">Book Reading Now</a>
			</div>
			<div class="col-xl-1"></div>
			<div class="col-xl-3"></div>
			<div class="col-xl-9">
				<div class="big-width">
					<div class="divider-55"></div>
					<div class="owl-carousel " data-responsive-lg="4" data-responsive-md="3" data-responsive-sm="2" data-responsive-xs="1" data-nav="false" data-margin="30" data-loop="true" data-autoplay="true">
						<div class="vertical-item service-layout-2 content-absolute box-shadow  content-padding">
							<div class="item-media">
								<img src="images/services/img_8.jpg" alt="img">
								<div class="media-links">
									<a class="abs-link" title="" href="#"></a>
								</div>
							</div>
						</div>
						<div class="vertical-item service-layout-2 content-absolute box-shadow  content-padding">
							<div class="item-media">
								<img src="images/services/img_9.jpg" alt="img">
								<div class="media-links">
									<a class="abs-link" title="" href="#"></a>
								</div>
							</div>
						</div>
						<div class="vertical-item service-layout-2 content-absolute box-shadow  content-padding">
							<div class="item-media">
								<img src="images/services/img_10.jpg" alt="img">
								<div class="media-links">
									<a class="abs-link" title="" href="#"></a>
								</div>
							</div>
						</div>
						<div class="vertical-item service-layout-2 content-absolute box-shadow  content-padding">
							<div class="item-media">
								<img src="images/services/img_11.jpg" alt="img">
								<div class="media-links">
									<a class="abs-link" title="" href="#"></a>
								</div>
							</div>
						</div>
						<div class="vertical-item service-layout-2 content-absolute box-shadow  content-padding">
							<div class="item-media">
								<img src="images/services/img_12.jpg" alt="img">
								<div class="media-links">
									<a class="abs-link" title="" href="#"></a>
								</div>
							</div>
						</div>
						<div class="vertical-item service-layout-2 content-absolute box-shadow  content-padding">
							<div class="item-media">
								<img src="images/services/img_13.jpg" alt="img">
								<div class="media-links">
									<a class="abs-link" title="" href="#"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="divider-35"></div>
					<div class="owl-custom-nav romb">
						<a href="#" class="owl-prev"><i class="ico ico-right-arrow"></i></a>
						<a href="#" class="owl-next"><i class="ico ico-right-arrow"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>-->

<div class="video_page">
    <div class="container">
        <div class="col-12 text-center">
				<h3 class="text-center mt-0 mb-2 special-heading fs-60 color-main">
					<span>Aachaarya  Prakarsh Ji</span>
				</h3>
				<div class="line"></div>
			
		</div>
        <div class="row">
            <div class="col-md-4">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/6Y55PLURVJ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-md-4">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/6Y55PLURVJ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-md-4">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/6Y55PLURVJ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <center class="view_more">
            <a href="video.php" class="btn btn-maincolor">View More</a>
        </center>
    </div>
</div>



<section id="faq" class="ds testimonials">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h3 class="text-center mt-0 mb-2 special-heading fs-60 color-main">
					<span>What Clients Are Saying</span>
				</h3>
				<div class="line"></div>
			
				<div class="divider-40 divider-xl-60"></div>

				<div class="owl-carousel quote-carousel owl-navigation" data-responsive-lg="3" data-responsive-md="3" data-responsive-sm="1" data-responsive-xs="1" data-nav="false" data-margin="50" data-loop="true" data-dots="false" data-autoplay="true" data-center="true">
					<div class="quote-item vertical quote-layout-2">
						<div class="wrap-img">
							<img src="images/gallery/quote_1.jpg" alt="img">
						</div>
						<div class="wrap-content">
							<div class="quote-image">
								<img src="images/team/comment5.png" alt="img">
							</div>
							<div class="quote-title">
								<h5 class="mb-0 color-main2 bold">Sonny V. Love</h5>
								<p class="mb-0 text-white">Happy Customer</p>
							</div>
							<div class="quote-content">
								<blockquote>
									<p>
										Writing case studies was a daunting task for us. We didn’t know where to begin or what questions to ask.
									</p>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="quote-item vertical quote-layout-2">
						<div class="wrap-img">
							<img src="images/gallery/quote_2.jpg" alt="img">
						</div>
						<div class="wrap-content">
							<div class="quote-image">
								<img src="images/team/comment6.png" alt="img">
							</div>
							<div class="quote-title">
								<h5 class="mb-0 color-main2 bold">Stephie J. Bellamy</h5>
								<p class="mb-0 text-white">Happy Customer</p>
							</div>
							<div class="quote-content">
								<blockquote>
									<p>
										Writing case studies was a daunting task for us. We didn’t know where to begin or what questions to ask.
									</p>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="quote-item vertical quote-layout-2">
						<div class="wrap-img">
							<img src="images/gallery/quote_3.jpg" alt="img">
						</div>
						<div class="wrap-content">
							<div class="quote-image">
								<img src="images/team/comment7.png" alt="img">
							</div>
							<div class="quote-title">
								<h5 class="mb-0 color-main2 bold">Karen J. Hogan</h5>
								<p class="mb-0 text-white">Happy Customer</p>
							</div>
							<div class="quote-content">
								<blockquote>
									<p>
										Writing case studies was a daunting task for us. We didn’t know where to begin or what questions to ask.
									</p>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="video_page">
    <div class="container">
        <div class="col-12 text-center">
				<h3 class="text-center mt-0 mb-2 special-heading fs-60 color-main">
					<span>Clients Video</span>
				</h3>
				<div class="line"></div>
			
		</div>
        <div class="row">
            <div class="col-md-4">
                <video width="100%" height="240" controls>
                  <source src="img/video-36.mp4" type="video/mp4">
                </video>
            </div>
            <div class="col-md-4">
                <video width="100%" height="240" controls>
                  <source src="img/video-35.mp4" type="video/mp4">
                </video>
            </div>
            <div class="col-md-4">
                <video width="100%" height="240" controls>
                  <source src="img/marriageproblemsolutions.mp4" type="video/mp4">
                </video>
            </div>
        </div>
        <center class="view_more">
            <a href="video.php" class="btn btn-maincolor">View More</a>
        </center>
    </div>
</div>
<!--<section id="blog" class="ds bs pattern ">
	<div class="container">
		<div class="row">
			<div class="col-xl-5 col-lg-6">
				
				<h3 class="special-heading mt-2 fs-60 text-center text-md-left">
					<span>Cash Study</span>
				</h3>
			</div>
			<div class="col-12">
				<div class="divider-55"></div>
				<div class="shortcode-post-grid-tilled-1">
					<div class="special-img">
						<img src="img/zodiac-history-astrology-signs.webp" alt="img">
					</div>
					<article class="vertical-item text-center text-md-left post type-post status-publish format-standard has-post-thumbnail mt-0">
						<div class="item-content">
							<header class="entry-header">
								<h4 class="entry-title mb-3 links-maincolor2">
									<a class="fs-30" href="blog-single-right.html" rel="bookmark">
										The Secret Revealed – Why Millennials Love Astrology
									</a>
								</h4>
							</header>
						

							<div class="entry-content mt-20">
								<p>
									Aged around 25, 26, 27, 28, 29, 30, 31, 32, 33, 34 - Millennials born 1986 through 1995, in their late twenties and early thirties, love
								</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
							
						</div>
					</article>
					
				</div>
		</div>

		</div>
	</div>
</section>-->



<?php include('footer.php'); ?>