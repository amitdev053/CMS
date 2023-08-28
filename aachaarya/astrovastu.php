<?php include('header.php'); ?>

<section class="banner_main_pages">
    <img src="img/banner_main_pages-1.png">
    <h1>Astro Vastu</h1>
</section>

<section class="ds woocommerce service-pade">
	<div class="container">
		<div class="row">
			<main class="col-lg-8 order-lg-2">
<?php
require '../lib/cms.php';
if($astrovastucolrow > 0){
$astrovasturow = mysqli_fetch_assoc($astrovasturesult);
// print_r($row);

?>
				<div class="img-section">
				    <!-- <img src="image/astrovastu.png" alt=""> -->
<?php
	echo '<img src="../uploadimg/'.( $astrovasturow['content_image'] ).'"/>';
?>
				    <h3><?php echo $astrovasturow['content_heading']; ?></h3>
				    <p><?php echo $astrovasturow['content_discripation']; ?></p>
                   
               
				</div>
<?php

}
else{
	echo "Section coming Soon";
}
?>
				<div class="tab_all">
				    <div id="tab-1" class="tab-content">
				        <h3>Vastu</h3>
                		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                	</div>
                	<div id="tab-2" class="tab-content">
				        <h3>Maha Vastu Expert</h3>
                		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                	</div>
                	
                
				</div>
				
			</main>
			<aside class="col-lg-4 order-lg-1">
			

				<div class="widget woocommerce widget_product_categories">
					<h3 class="widget-title">Astrology Services</h3>
					
					<ul class="tabs product-categories">
					    <li class="tab-link cat-item cat-parent" data-tab="tab-1"> Vastu</li>
                		<li class="tab-link cat-item cat-parent" data-tab="tab-2">Maha Vastu Expert</li>
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