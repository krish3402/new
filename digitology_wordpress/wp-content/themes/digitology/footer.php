 <!--Menu-->
		<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
               
        
		<script src="<?php echo get_template_directory_uri(); ?>/js/main4.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main-green.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main-pink.js"></script>
        <!--Menu End-->
        <!--- Expender --->
   <!--      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
-->
  <!--<script src="<?php echo get_template_directory_uri(); ?>/js/readmore.js"></script>-->
  
  
 <script type="text/javascript">
       $(document).ready(function(){
            var includeDiv = $("#forkit-mousehover");
			var requestQuoteDiv = $("#requestQuote");
			var showHide_contactDiv = $("#showHide_contact");
            $(window).on('hashchange', function() {
                var href = location.hash.slice(1) +".html";
                includeDiv.load('forkit-mousehover/' + href);
				requestQuoteDiv.load('requestQuote/' + href);
				showHide_contactDiv.load('requestQuote/' + href);
            });
        });
        </script> 
<script type="text/javascript">
 
$(document).ready(function() {
  $("#tabs_about .tab-links-about a").click(function () {
  });
}); // end ready
</script>
  <script>
  jQuery(document).ready(function ($) {
    $('#info').readmore({
      moreLink: '<a href="#">Usage, examples, and options</a>',
      collapsedHeight: 384,
      afterToggle: function(trigger, element, expanded) {
        if(! expanded) { // The "Close" link was clicked
          $('html, body').animate({scrollTop: $(element).offset().top}, {duration: 100});
        }
      }
    });
  });
   jQuery(document).ready(function ($) {
    $('article').readmore({speed: 500});
   });
  </script>
        <!--- Expender End -->
        <!-- Hvr Effects -->
        <script>
			// For Demo purposes only (show hover effect on mobile devices)
			[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
				el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
			} );
		</script>
        <!-- Hvr Effects End -->
        <!-- Testimonals -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery1.7.1/jquery.min.js">
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.cslider.js">
</script>
		<script type="text/javascript">
			$(function() {
			
				$('.da-slider').cslider({
					autoplay	: false,
					bgincrement	: 450
				});
			
			});
		</script>	
        <!-- Testimonals End -->
        <!--- Social Container -->
        <script>
         $('.holdingbox').hover(function(){
        $('.rightbox').animate({width: '556px'}, 1000)
    }, function(){
        $('.rightbox').animate({width: '1'}, 1000)
    });
       </script>
        <!--- Social Container End --->
         <!-- Page Scroll -->
<script src="<?php echo get_template_directory_uri(); ?>/js/main5.js"></script> <!-- Gem jQuery -->

        <!-- Page Scroll End -->
   <script  type="text/javascript">
$(function() {
	/*
$(".searchbychar").click(function(event) {
$('html,body').animate({ scrollTop: $(document).height()}, 'slow');
}); */
/*$(".searchbychar").click(function () {
            $('html, body').animate({ scrollTop: 3100 }, 400);
        });
$(".searchbycharFooter").click(function () {
            $('html, body').animate({ scrollTop: 3100 }, 400);
        });*/
        /*menu list links */
   $(".searchbycharBlue").click(function () {
          /*  $('html, body').animate({ scrollTop: 2750 }, 400);*/
          $('html, body').animate({
        'scrollTop' : $("#contentBlueValue").position().top
    });
        });
        $(".searchbycharPink").click(function () {
          /*  $('html, body').animate({ scrollTop: 2750 }, 400);*/
          $('html, body').animate({
        'scrollTop' : $("#contentPinkValue").position().top
    });
        });
$(".searchbycharGreen").click(function () {
          /*  $('html, body').animate({ scrollTop: 2750 }, 400);*/
           $('html, body').animate({
        'scrollTop' : $("#contentGreenValue").position().top
    });
        });
      /* end menu list links */
      /* footer list links */
  $(".searchbycharPinkFooter").click(function () {
          /*  $('html, body').animate({ scrollTop: 2750 }, 400);*/
           $('html, body').animate({
        'scrollTop' : $("#contentPinkValue").position().top
    });
        });      
$(".searchbycharBlueFooter").click(function () {
          /*  $('html, body').animate({ scrollTop: 2750 }, 400);*/
     $('html, body').animate({
        'scrollTop' : $("#contentBlueValue").position().top
    });
        });	
        $(".searchbycharGreenFooter").click(function () {
          /*  $('html, body').animate({ scrollTop: 2750 }, 400);*/
           $('html, body').animate({
        'scrollTop' : $("#contentGreenValue").position().top
    });
        });
     /* footer list links */   
});
</script>     
    <!-- Request query form-->            
  <script>
$(document).ready(function(e) {

   $( "div[id=feed_win]" ).css({display:"none"});
    $( "div[id=requestQuote]" ).click(function() {
   $( "div[id=feed_win]" ).fadeToggle().css({width:"100%"});
  $('.refresh').val("");
  $('.refresh').focus().css({border:"none"});
  $('#erroremailBlue, #errorphoneNumberBlue').html('');
   $('#erroremailRed, #errorphoneNumberRed').html('');
    $('#erroremailGreen, #errorphoneNumberGreen').html('');
    });
    
   });

</script>

<!--end Request query form-->
<script>
    /*    function goToByScroll(id){
          // Reove "link" from the ID
        id = id.replace("link", "");
          // Scroll
        $('html,body').animate({
            scrollTop: $("#"+'toppage_content').offset().top},
            'slow');
    }

    $(".FtrColumnMenu > ul > li > a").click(function(e) { 
          // Prevent a page reload when a link is pressed
        e.preventDefault(); 
          // Call the scroll function
        goToByScroll($(this).attr("id"));           
    });*/
</script>
<script type="text/javascript">
    $(document).ready(function(){
        //blue
       $('#search_submit_blue').click(function(){
           
             var blue1= $('#search_Blue').val();
             if(blue1!=" "){
           $('html, body').animate({
        'scrollTop' : $("#contentBlueValue").position().top
    });
           searchBlue();}
       else{
            $('html, body').animate({ scrollTop:0 });   
            
       }
       });
        $('#search_Blue').keyup(function(e) {     
         var blue1= $('#search_Blue').val();
                  if(e.keyCode == 13 && blue1!=" ") {
                    $('html, body').animate({
        'scrollTop' : $("#contentBlueValue").position().top
			});
                        searchBlue();          
    
                      }
                      else  if(e.keyCode == 13 && blue1.length<1) {
                            $('html, body').animate({ scrollTop:0 });   
                               //  alert('Please Enter')
                            }
    
                  });
          //end
          //green
       $('#search_submit_Green').click(function(){
             var green1=$('#search_Green').val();
             if(green1!=" ")
             {
                  $('html, body').animate({
        'scrollTop' : $("#contentGreenValue").position().top
    });
                    searchGreen();
             }
             else
             {
                 $('html, body').animate({ scrollTop:0 });   
               
             }
         
       });
         $('#search_Green').keyup(function(e) {  
             var green1=$('#search_Green').val();
                         if(e.keyCode == 13 && green1!=" ") {
                       $('html, body').animate({
        'scrollTop' : $("#contentGreenValue").position().top
    });
                        searchGreen();
                        
                      }
                        else  if(e.keyCode == 13 && green1.length<1) {
                            $('html, body').animate({ scrollTop:0 });   
                         
                     //    alert('Please Enter')
                            }
                  });
                  //end
                  //red
                $('#search_submit_Red').click(function(){
                     var red1=$('#search_Pink').val();
                     if(red1!=" "){
                        $('html, body').animate({
        'scrollTop' : $("#contentPinkValue").position().top
    });
                            searchRed();
                     }
                     else
                     {
                         $('html, body').animate({ scrollTop:0 });   
                        // alert('Please Enter')  
                     }
                  
               });                    
                   $('#search_Pink').keyup(function(e) {    
                        var red1=$('#search_Pink').val();
                  if(e.keyCode == 13 && red1!=" ") {
                       $('html, body').animate({
        'scrollTop' : $("#contentPinkValue").position().top
    });
                        searchPink();
                        
                      }
                        if(e.keyCode == 13 && red1.length<1) {
                             $('html, body').animate({ scrollTop:0 });   
                        // alert('Please Enter')
                        }
                  });  
                  //end
         function searchBlue(){
             var title=$("#search_Blue").val();

                      if(title!=" "){
                         
                //   $("#contentBlueValue").html("<img alt="ajax search" src='<?php echo get_template_directory_uri(); ?>/images/ajax-loader.gif'/>");
                    
                  
                         $.ajax({
                            type:"POST",
                            url:"<?php echo get_template_directory_uri(); ?>/searchResults_Blue.php",
                            data:"title="+title,
                            success:function(data){
                                $("#contentBlueValue").html(data);
                                $("#search_Blue").val("");
                             }
                          });
                      }  
                                            
         }    
          function searchGreen(){
             var title=$("#search_Green").val();

                      if(title!=" "){
                         
                //   $("#contentBlueValue").html("<img alt="ajax search" src='<?php echo get_template_directory_uri(); ?>/images/ajax-loader.gif'/>");
                    
                  
                         $.ajax({
                            type:"POST",
                            url:"<?php echo get_template_directory_uri(); ?>/searchResults_Green.php",
                            data:"title="+title,
                            success:function(data){
                                $("#contentGreenValue").html(data);
                                $("#search_Green").val("");
                             }
                          });
                      }
                       
         }    
          function searchPink(){
             var title=$("#search_Pink").val();

                      if(title!=" "){
                         
                //   $("#contentBlueValue").html("<img alt="ajax search" src='<?php echo get_template_directory_uri(); ?>/images/ajax-loader.gif'/>");
                    
                  
                         $.ajax({
                            type:"POST",
                            url:"<?php echo get_template_directory_uri(); ?>/searchResults_pink.php",
                            data:"title="+title,
                            success:function(data){
                                $("#contentPinkValue").html(data);
                                $("#search_Pink").val("");
                             }
                          });
                      }else{                      
                        $('html, body').animate({ scrollTop: 0 }, 400);
                      }
                       
         }
       
        
              
                  
            });
		</script>
              <script>
			new UISearch( document.getElementById( 'sb-search_blue' ) );
                        new UISearch( document.getElementById( 'sb-search_green' ) );
                         new UISearch( document.getElementById( 'sb-search_red' ) );
		</script>
                     <script type="text/javascript">
 


var width = $(window).width();
 if($(this).width() > 900){
	   $.getScript('<?php echo get_template_directory_uri(); ?>/ThemeGreen/js/home.1291388333.js');
    	 
   }
    if($(this).width() > 600 && $(this).width() < 900){
	   $.getScript('<?php echo get_template_directory_uri(); ?>/ThemeGreen/js/home_tab.js');
    	 
   }
    if($(this).width() > 300 && $(this).width() < 600){
	 $.getScript('<?php echo get_template_directory_uri(); ?>/ThemeGreen/js/home_mobile.js');
    	 
   }
$(window).resize(function(){
   if($(this).width() > 900){
	   $.getScript('<?php echo get_template_directory_uri(); ?>/ThemeGreen/js/home.1291388333.js');
    	 
   }
    if($(this).width() > 600 && $(this).width() < 900){
	   $.getScript('<?php echo get_template_directory_uri(); ?>/ThemeGreen/js/home_tab.js');
    	 
   }
    if($(this).width() > 300 && $(this).width() < 600){
	 $.getScript('<?php echo get_template_directory_uri(); ?>/ThemeGreen/js/home_mobile.js');
    	 
   }
});



/* var screen_width=screen.width;
if(screen_width>900){
	alert('above 900');	
	
	}
 if(screen_width>600 && screen_width<900)
	{
		alert('above 600');	
		}	
 if(screen_width>300 && screen_width<600){
			alert('below 600');	
			}
*/
		</script>
<?php wp_footer(); ?>
<div style="display:none">  
<?php wp_nav_menu( array( 'menu' => 'Main Menu','container' => false, 'items_wrap' => '<ul class="sf-menu   sf-js-enabled sf-arrows">%3$s</ul>' ) ); ?>    
</div>
</body>
</html>