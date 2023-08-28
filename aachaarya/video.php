<?php include('header.php'); ?>
<style>
    .video_page {
    padding: 150px 0 50px;
}
</style>
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
    </div>
</div>

<div class="video_page pt-0">
    <div class="container">
        <div class="col-12 text-center">
				<h3 class="text-center mt-0 mb-2 special-heading fs-60 color-main">
					<span>Clients Video</span>
				</h3>
				<div class="line"></div>
			
		</div>
        <div class="row">
<?php
require '../lib/cms.php';

if($videocolrow > 0){
while($videorow = mysqli_fetch_assoc($videoresult)){

// print_r($row);

?>
            <div class="col-md-4">
                <video width="100%" height="240" controls>
                  <source  src="../uploadimg/<?php echo $videorow['content_video']; ?>" type="video/mp4">
                </video>
            </div>
<?php
	}
}
else{
	echo "Section coming Soon";
}
?>
            <!-- <div class="col-md-4">
                <video width="100%" height="240" controls>
                  <source src="img/video-35.mp4" type="video/mp4">
                </video>
            </div>
            <div class="col-md-4">
                <video width="100%" height="240" controls>
                  <source src="img/marriageproblemsolutions.mp4" type="video/mp4">
                </video>
            </div> -->
        </div>
    </div>
</div>
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