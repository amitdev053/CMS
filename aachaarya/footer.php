<footer class="page_footer ds">
	<div class="container">
		<div class="row align-center">
			<div class="col-lg-12 text-center animate" data-animation="fadeInUp">
				<a href="index.php" class="logo">
					<img src="image/aachaarya-logo.png" alt="img">
					<span class="logo-text color-darkgrey">Aachaarya <br> Prakarsh Ji</span>
				</a>
				<div class="divider-60 divider-lg-0"></div>
				<div class="footer_menu">
				    <a href="index.php">Home</a>
				    <a href="about.php">About Us</a>
				    <a href="video.php">Video</a>
				    <a href="story.php">Stories</a>
				    <a href="contact.php">Contact Us</a>
				</div>
				<div class="contact_details">
				    <ul>
				        <li><i class="fa fa-map-marker"></i> C-4 2nd floor Dayanand Colony Lajpat Nagar 4 Delhi 110024</li>
				        <li><a href="mailto:futurelifelinepoint2020@gmail.com"><i class="fa fa-envelope"></i> futurelifelinepoint2020@gmail.com</a></li>
				        <li><a href="tel:9810288915"><i class="fa fa-phone"></i> +91-9810288915</a></li>
				        <li><a href="tel:9810288915"><i class="fa fa-clock-o"></i> 10:00 AM to 7:00 PM</a></li>
				    </ul>
				</div>
				<div class="socail_icon">
				    <a href="https://www.facebook.com/aachaaryaprakarshji/" target="_blank"><img src="image/facebook.png"></a>
				    <a href="https://www.instagram.com/aachaaryaprakarshji/" target="_blank"><img src="image/instagram.png"></a>
				    <a href="https://www.youtube.com/@AachaaryaPrakarshJi/featured" target="_blank"><img src="image/youtube.png"></a>
				</div>
			</div>
		
		</div>
	</div>
</footer>
<section class="page_copyright ds ms s-py-25 s-bordertop-container">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-12 text-center">
				<p>&copy; Copyright <span class="copyright_year">2023</span> All Rights Reserved</p>
			</div>
		</div>
	</div>
</section>

<div class="whatsapp-icon">
    <a href="https://wa.link/hz9lg5" target="_blank"><i class="fa fa-whatsapp"></i></a>
</div>
<div class="phone-icon">
    <a href="tel:+91-9810288915"><i class="fa fa-phone"></i></a>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send Enquiry</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Full Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Date of Birth">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Time of Birth">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Place of Birth">
          </div>
          <div class="form-group">
			<select class="form-control" style="color: #363e6c !important;">
			    <option>Purpose of Meeting</option>
			    <option>Astrologer</option>
			    <option>Numerologist</option>
			    <option>Vastu</option>
			    <option>Astro Vastu</option>
			</select>
          </div>
          <center>
              <button style="padding: 12px;
    line-height: 24px;" type="submit" class="btn btn-primary btn-maincolor">Submit</button>
          </center>
          
        </form>
      </div>

    </div>
  </div>
</div>



	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<!--<script src="js/switcher.js"></script>-->
	
	<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	
	
<script>
$(document).ready(function(){

$('ul.tabs li').click(function(){
	var tab_id = $(this).attr('data-tab');

	$('ul.tabs li').removeClass('current');
	$('.tab-content').removeClass('current');

	$(this).addClass('current');
	$("#"+tab_id).addClass('current');
})

})
</script>
<script>
$(document).ready(function(){
  $(".tab-link").click(function(){
    $(".img-section").hide();
  });
 /* $("#show").click(function(){
    $("p").show();
  });*/
});
</script>
</body>
</html>