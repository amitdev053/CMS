<?php include('header.php'); ?>

<div class="story_page ds bs">
    <div class="container">
     <div class="row">
     <?php
require '../lib/cms.php';
if($colrowone > 0){
while($rowstory = mysqli_fetch_assoc($storyresult)){
// print_r($rowone);

?>
            <div class="col-md-4">
                <div class="video-box">
                <video width="100%" height="240" controls>
 <source src="../uploadimg/<?php echo $rowstory['content_video']; ?>" type="video/mp4">
                </video>
                <p><?php echo $rowstory['content_heading']; ?></p>
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
                <div class="video-box">
                <video width="100%" height="240" controls>
                  <source src="img/story-2.mp4" type="video/mp4">
                </video>
                <p>धन प्राप्ति के लिए!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="video-box">
                <video width="100%" height="240" controls>
                  <source src="img/story-3.mp4" type="video/mp4">
                </video>
                <p>किसी भी  काम में दिक्कत/ काम काज में मंडी आदि</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="video-box">
                <video width="100%" height="240" controls>
                  <source src="img/story-4.mp4" type="video/mp4">
                </video>
               <p>किसी शुभ काम से बहार जाने से पहले यह कार्य  करे आपकी यात्रा शुभ होगी</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="video-box">
                <video width="100%" height="240" controls>
                  <source src="img/story-5.mp4" type="video/mp4">
                </video>
               <p>उच्च शिक्षा के लिए</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="video-box">
                <video width="100%" height="240" controls>
                  <source src="img/story-6.mp4" type="video/mp4">
                </video>
                <p>किसी भी शुभ कार्य के लिए जाने से पहले</p>
                </div>
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