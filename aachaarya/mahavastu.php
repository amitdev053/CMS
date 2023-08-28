<?php include('header.php'); ?>
<section class="banner_main_pages">
    <img src="img/banner_main_pages-2.jpg">
    <h1>Vastu</h1>
</section>
<section class="ds woocommerce service-pade">
	<div class="container">
		<div class="row">
			<main class="col-lg-8 order-lg-2">
<?php
require '../lib/cms.php';
if($vastucolrow > 0){
$vasturow = mysqli_fetch_assoc($vasturesult);

// print_r($row);

?>

				<div class="img-section">
				    <!-- <img src="image/mahavastu.webp" alt=""> -->
					<?php
					echo '<img src="../uploadimg/'.( $vasturow['content_image'] ).'"/>';
					?>
				    <h3><?php echo $vasturow['content_heading']; ?></h3>
				    <p><?php echo $vasturow['content_discripation']; ?></p>
                   
                    
              
				</div>
				<?php

}
else{
	echo "Section coming Soon";
}
?>
				<div class="tab_all">
				    <div id="tab-1" class="tab-content">
				        <h3>House</h3>
                		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                	</div>
                	<div id="tab-2" class="tab-content">
                	    <h3>Shop</h3>
                		 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                	</div>
                	<div id="tab-3" class="tab-content">
                	    <h3>Office</h3>
                		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                	</div>
                	<div id="tab-4" class="tab-content">
                	    <h3>factorise</h3>
                		Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                	</div>
                	<div id="tab-5" class="tab-content">
                	    <h3>farm house</h3>
                		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                	</div>
                	<div id="tab-6" class="tab-content">
                	    <h3>School</h3>
                		 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                	</div>
                	<div id="tab-7" class="tab-content">
                	    <h3>Hotels</h3>
                		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                	</div>
                	<div id="tab-8" class="tab-content">
                	    <h3>Coaching institute</h3>
                		Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                	</div>
                	<div id="tab-9" class="tab-content">
                	    <h3>Vastu for New House</h3>
                		Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                	</div>
                
				</div>
				
			</main>
			<aside class="col-lg-4 order-lg-1">
			

				<div class="widget woocommerce widget_product_categories">
					<h3 class="widget-title">Astrology Services</h3>
					
					<ul class="tabs product-categories">
                		<li class="tab-link cat-item cat-parent" data-tab="tab-1">Vastu for Home</li>
                		<li class="tab-link cat-item cat-parent" data-tab="tab-9">Vastu for New House</li>
                		<li class="tab-link cat-item cat-parent" data-tab="tab-2">Shop</li>
                		<li class="tab-link cat-item cat-parent" data-tab="tab-3">Office</li>
                		<li class="tab-link cat-item cat-parent" data-tab="tab-4">factorise</li>
                		<li class="tab-link cat-item cat-parent" data-tab="tab-5">farm house</li>
                		<li class="tab-link cat-item cat-parent" data-tab="tab-6">School</li>
                		<li class="tab-link cat-item cat-parent" data-tab="tab-7">Hotels</li>
                		<li class="tab-link cat-item cat-parent" data-tab="tab-8">Coaching institute</li>
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