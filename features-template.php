<?php
/**
 * Template Name: Features
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>
    <div class="container">
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/header' ) ); ?>
<br clear="all">
  <div class="subnav">
			<?php wp_nav_menu( array( 'theme_location' => 'features-menu', 'menu_class' => 'container' ) ); ?>
  </div>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<!-- insert wordpress content here -->
	<?php the_content(); ?>
	<?php comments_template( '', true ); ?>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer') ); ?>

  <script src="<?php bloginfo('template_directory') ?>/js/jquery-1.7.1.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/jquery.gsap.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/TweenMax.min.js"></script>
  <script>
  		
		currentSlide = 0;
		totalSlide=9;
  		$(window).bind("load resize", function() {
			for(i=0;i<totalSlide;i++){
		 	 TweenLite.to($( ".slide"+i ), 1, {opacity:1, delay:1});
		  	}
		 	changeSlide()
			changeHowWeWork()
		});
  		
  		$( "#start" ).click(function() {
		  currentSlide = 1;
		  TweenLite.to($( ".start" ), .5, {left: $(window).width()});
		  for(i=0;i<totalSlide;i++){
		 	 TweenLite.to($( ".slide"+i ), .5, {left: ($(window).width()*(i))-(currentSlide*$(window).width())});
		  }
		 
		});
		changeSlide= function(){
			for(i=0;i<totalSlide;i++){
				TweenLite.to($( ".slide"+i ), .5, {left: ($(window).width()*(i))-(currentSlide*$(window).width())});
			}
		}
		$( ".feature_btn").click(function() {
		   console.log("this last char"+$(this).attr('class').substr($(this).attr('class').length - 1))
		   currentSlide = $(this).attr('class').substr($(this).attr('class').length - 1);
		   changeSlide();
		});
		$( ".icon-prev").click(function() {
			if(currentSlide>1){
				currentSlide--;
				changeSlide();
			}
		   
		});
		$( ".icon-next").click(function() {
			if(currentSlide < (totalSlide-1)){
		  	  currentSlide++;
		      changeSlide();
			}else{
			  currentSlide=1;
			  changeSlide();
			}
			
		});
		console.log('$(window).width() :'+$(window).width() );
		
		
		currentHowWework = 1;
		TweenLite.to($(".howwework"), 0, {opacity: 0});
		TweenLite.to($(".howwework"), .5, {opacity: 1, delay:2});
			
		changeHowWeWork=function(){
			console.log('changeHowWeWork');
			for(i=0;i<5;i++){
				TweenLite.to($( ".work"+i ), .5, {left: ($(window).width()*(i))-(currentHowWework*$(window).width())});
			}
			TweenLite.to([$("#howwework-Send-Badge"),$("#howwework-Ask-Badge")] , 0, {scale: .1, opacity: 0});
			TweenLite.to([$("#howwework-Send-Badge"),$("#howwework-Ask-Badge")] , .5, {scale: .8, delay:.5, opacity: 1});
		}
		changeHowWeWork();
		$('.btn-askformoney').click(function() {
			currentHowWework =2;
			changeHowWeWork();
		});
		$('.btn-sendMoney').click(function() {
			currentHowWework = 0;
			changeHowWeWork();
		});
		if ($(window).width() > '400'){
			currentStep = 1;
			
		
			changeSendStep=function(){
				var src = "images/howwework-send"+currentStep+"-badge.png";
          		$("#howwework-Send-Badge img").attr("src", src);
				
				TweenLite.to($("#howwework-Send-Badge"), .5, {scale: .1, opacity: 0});
				TweenLite.to($("#howwework-Send-Badge"), .5, {scale: .8, delay:.5, opacity: 1});
			
				  
				imageURL = 'images/howwework-send'+currentStep+'.png'
				$('#howwework-Send-Background').css('background-image', 'url(' + imageURL + ')');
				console.log('changebackground: '+imageURL);
				
				for(i=1;i<5;i++){
					console.log($("#send_step"+i));
					$("#send_step"+i).parent('li').removeClass('current');
					
				}
				$("#send_step"+currentStep).parent('li').addClass('current');
			}
			
			changeAskStep=function(){
				var src = "images/howwework-ask"+currentStep+"-badge.png";
          		$("#howwework-Ask-Badge img").attr("src", src);
								
				TweenLite.to($("#howwework-Ask-Badge"), .5, {scale: .1, opacity: 0});
				TweenLite.to($("#howwework-Ask-Badge"), .5, {scale: .8, delay:.5, opacity: 1});
				
				imageURL = 'images/howwework-ask'+currentStep+'.png'
				$('#howwework-Ask-Background').css('background-image', 'url(' + imageURL + ')');
				console.log('changebackground: '+imageURL);
				
				for(i=1;i<5;i++){
					$("#ask_step"+i).parent('li').removeClass('current');
					
				}
				$("#ask_step"+currentStep).parent('li').addClass('current');
			}
			for(i=1;i<5;i++){
				$("#send_step"+i).click(function() {
					currentStep = $(this).attr('id').substr($(this).attr('id').length - 1);
					console.log('currentStep='+currentStep);
					changeSendStep()
				});
		   
				TweenLite.to($( "#send_step"+i ), .5, {left: ($(window).width()*(i))-(currentSlide*$(window).width())});
				
				$("#ask_step"+i).click(function() {
					currentStep = $(this).attr('id').substr($(this).attr('id').length - 1);
					changeAskStep()
				});
			}
			
			$('ul.steps li:first-child').addClass('current');
		}else{
			$('ul.steps li').addClass('current');
		}
		
  </script>




<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-footer' ) ); ?>

