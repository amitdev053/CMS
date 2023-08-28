<?php include('header.php'); ?>

<section id="about" class="ds c-gutter-50 pt-100">
	<div class="container">
<?php
require '../lib/cms.php';
$about_content = get_cms_content("about_us", "About Us");
// print_r($about_content);
?>
		<div class="row align-center">
			<div class="col-lg-6">
			    <div class="about-img">
			        <img src="image/about-img.jpg" alt="img">
			    </div>
			</div>
			<div class="col-lg-6 text-center text-md-left">
				<div class="divider-60 divider-lg-0 "></div>
				<h3 class="special-heading mt-2 fs-60 text-center text-md-left">
					<span><?php echo $about_content['content_heading'];?></span>
				</h3>
				<div class="divider-35"></div>
				<p>
					<!-- Aachaarya prakarsh ji has been practicing vedic astrology, numerology and vaastu for over 27 years. he expanded his business across the country. being an astrologer he has served thousands of people he completed 10000+ cases in astrology,, 5000+ cases in vaastu and 6000+ cases in numerology. he inspired to spread vedic knowledge by free yogdaan at every thursday also. he has thausand of satisfied clients all over the world. they are connected to aachaarya prakarsh ji for a very long time & their generation's also connected with him. -->
					<?php echo $about_content['content_discripation'];?>
				</p>
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

	</div>
</section>

<section class="ds bs box-vision-mission">
	<div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="box-vision">
                    <img src="image/mission2.png">
                    <h3>Mission</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                </div>
            </div>
            <div class="col-md-4">
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
        </div>
	</div>
</section>


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

<?php include('footer.php'); ?>