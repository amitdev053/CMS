<?php include('header.php'); ?>
<section class="banner_main_pages">
    <img src="img/banner_main_pages-4.jpg">
    <h1>Astrologer</h1>
</section>
<section class="ds woocommerce service-pade">
	<div class="container">
		<div class="row">
			<main class="col-lg-8 order-lg-2">
<?php
require '../lib/cms.php';
$astrologer_content = get_cms_content("astrologer_page", "Astrologer");
// print_r($about_content);
?>
				<div class="img-section">
				    <!-- <img src="image/best-astrologer.webp" alt=""> -->
<?php
	echo '<img src="../uploadimg/'.( $astrologer_content['content_image'] ).'" >';
?>
				    <h3><?php echo $astrologer_content['content_heading'];?></h3>
				    <p><?php echo $astrologer_content['content_discripation'];?></p>
				    <h3>KP Astrology</h3>
				    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <h3>Vedic Astrology</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <h3>Lal Kitab</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				
				<div class="tab_all">
				    <div id="tab-1" class="tab-content">
				        
				        <img src="img/New-Project-2022-05-27T182632.233.jpg">
				        <h3>Marital life</h3>
                		<p>Marriage is a beautiful bond that brings two people together, binding them with feelings of love, respect, and harmony. It is indeed a bond that everybody wants to cherish as it has the potential to transform our lives, filling them with joy and contentment.</p>
                	    <p>Astrology can offer some help as it studies the planetary positions in the birth chart of the couple to come up with remedies that can bring back the lost charm of married life. Astrology, coupled with sincere efforts from both spouses, can bring peace and harmony into the relationship.</p>
                	</div>
                	<div id="tab-2" class="tab-content">
                	    <h3>Love & Relationship</h3>
                		 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                	</div>
                	<div id="tab-3" class="tab-content">
                	    <h3>Cheating & Affair</h3>
                		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                	</div>
                	<div id="tab-4" class="tab-content">
                	    <h3>break up & divorce</h3>
                		Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                	</div>
                	<div id="tab-5" class="tab-content">
                	    <h3>kundali matching</h3>
                		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                	</div>
                	<div id="tab-6" class="tab-content">
                	    <h3>janam kundali</h3>
                		 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                	</div>
                	<div id="tab-7" class="tab-content">
                	    <h3>dosh</h3>
                		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                	</div>
                	<div id="tab-8" class="tab-content">
                	    <h3>health & disease</h3>
                		Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                	</div>
                	<div id="tab-9" class="tab-content">
                	    <h3>finance & business</h3>
                		Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                	</div>
                	<div id="tab-10" class="tab-content">
                	    <h3>career & job</h3>
                		Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                	</div>
				</div>
				
				
			</main>
			<aside class="col-lg-4 order-lg-1">
			

				<div class="widget woocommerce widget_product_categories">
					<h3 class="widget-title">Astrology Services</h3>
					
						<ul class="tabs product-categories">
                    		<li class="tab-link cat-item cat-parent" data-tab="tab-1">Marital life</li>
                    		<li class="tab-link cat-item cat-parent" data-tab="tab-2">Love & Relationship</li>
                    		<li class="tab-link cat-item cat-parent" data-tab="tab-3">Cheating & Affair</li>
                    		<li class="tab-link cat-item cat-parent" data-tab="tab-4">break up & divorce</li>
                    		<li class="tab-link cat-item cat-parent" data-tab="tab-5">kundali matching</li>
                    		<li class="tab-link cat-item cat-parent" data-tab="tab-6">janam kundali</li>
                    		<li class="tab-link cat-item cat-parent" data-tab="tab-7">dosh</li>
                    		<li class="tab-link cat-item cat-parent" data-tab="tab-8">health & disease</li>
                    		<li class="tab-link cat-item cat-parent" data-tab="tab-9">finance & business</li>
                    		<li class="tab-link cat-item cat-parent" data-tab="tab-10">career & job</li>
                    	</ul>
			
					
				</div>

			</aside>
		</div>

	</div>
</section>
			
<section class="ds bs service-pade-form">
	<div class="container">
        
		<div class="row">
            
            <h3>Connect for more personalized details predictions</h3>
			<div class="btn_contact">
			    <div class="whatsapp-icon1">
                        <a href="https://wa.link/hz9lg5" target="_blank"><i class="fa fa-whatsapp"></i> Chat</a>
                    </div>
                    <div class="phone-icon1">
                        <a href="tel:+91-9810288915"><i class="fa fa-phone"></i> Talk to</a>
                    </div>
			</div>
			<div class="btn_contact">
			    <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-maincolor btn-medium">
					Book Session
				</a>
			</div>

		</div>
	</div>
</section>
			
<?php include('footer.php'); ?>