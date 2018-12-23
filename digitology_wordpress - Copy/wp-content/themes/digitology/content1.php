<?php get_header()?>
<script>
    $(document).ready(function(){
      function pink_remove(){
             $('#pink1').remove();
		$('#pink2').remove();
		$('#pink3').remove();
		$('#pink4').remove();
		$('#pink5').remove();
		$('#pink6').remove();
		$('#pink7').remove();
		$('#pink8').remove();
		$('#pink9').remove();
		$('#pink10').remove();
		$('#pink11').remove();
		$('#pink12').remove();
		$('#pink13').remove();
		$('#pink14').remove();
		$('#pink15').remove();
		$('#pink16').remove();
		$('#pink17').remove();
		$('#pink18').remove();
        }
        function blue_remove(){
            $('#blue1').remove();
            $('#blue2').remove();
		$('#blue3').remove();
		$('#blue4').remove();
		$('#blue5').remove();
		$('#blue6').remove();
		$('#blue7').remove();
		$('#blue8').remove();
		$('#blue9').remove();
		$('#blue10').remove();
		$('#blue11').remove();
		$('#blue12').remove();
		$('#blue13').remove();
		$('#blue14').remove();
		$('#blue15').remove();
		$('#blue16').remove();
		$('#blue17').remove();
		$('#blue18').remove();
		$('#blue19').remove();
        }
        function green_remove(){
            $('#green1').remove();
		$('#green2').remove();
		$('#green3').remove();
		$('#green4').remove();
		$('#green5').remove();
		$('#green6').remove();
		$('#green7').remove();
		$('#green8').remove();
		$('#green9').remove();
		$('#green10').remove();
		$('#green11').remove();
		$('#green12').remove();
		$('#green13').remove();
		$('#green14').remove();
		$('#green15').remove();
		$('#green16').remove();
		$('#green17').remove();
		$('#green18').remove(); 
        }
        function pink_css(){
             $("head").append($("<link id='pink1' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemePink/css/Template.css' />"));
		  $("head").append($("<link id='pink2' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemePink/css/Search.css' />")); 
		  $("head").append($("<link id='pink3' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemePink/css/normalize.css' />")); 
		  $("head").append($("<link id='pink4' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemePink/css/demo.css' />"));
		   $("head").append($("<link id='green4' rel='stylesheet' type='text/css' href=<?php echo get_template_directory_uri(); ?>/'ThemePink/css/forkit.css' />")); 
		  $("head").append($("<link id='pink6' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemePink/css/menu_bubble.css' />"));
		  $("head").append($("<link id='pink7' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemePink/css/animate.css' />"));
		  $("head").append($("<link id='pink8' href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>"));
		   $("head").append($("<link id='pink8' href='<?php echo get_template_directory_uri(); ?>/ThemePink/css/forkit.css' rel='stylesheet' type='text/css'>")); 
		   $("head").append($("<link id='pink10' rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' />")); 
		   $("head").append($("<link id='pink11' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemePink/css/normalize.css' />")); 
		   $("head").append($("<link id='pink12' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemePink/css/demo.css' />")); 
		   $("head").append($("<link id='pink13' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemePink/css/set1.css' />"));  
		   $("head").append($("<link id='pink14' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemePink/css/style2.css' />"));
		   $("head").append($("<link id='pink15' rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Economica:700,400italic' />"));
		   $("head").append($("<noscript><link id='pink16' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemePink/css/nojs.css' /></noscript>")); 
		   $("head").append($("<link id='pink17' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemePink/css/style.css' />")); 
		   $("head").append($("<link id='pink18' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemePink/SpryAssets/SpryTabbedPanels.css' />"));
        }
        function green_css(){
             $("head").append($("<link id='green1' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeGreen/css/Template.css' />"));
		  $("head").append($("<link rel='stylesheet' id='green18' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeGreen/css/Search.css' />"));
		  $("head").append($("<link id='green2' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeGreen/css/animate.css' />"));
		  $("head").append($("<link id='green3' rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italics' />")); 
		  $("head").append($("<link id='green4' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeGreen/css/forkit.css' />")); 
		  $("head").append($("<link id='green6' rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' />"));
		  $("head").append($("<link rel='stylesheet' id='green17' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeGreen/css/menu_bubble.css' />"));
		  $("head").append($("<link id='green7' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeGreen/css/normalize.css' />"));
		  $("head").append($("<link id='green8' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeGreen/css/demo.css' />"));
		  $("head").append($("<link id='green9' href='<?php echo get_template_directory_uri(); ?>/ThemeGreen/css/set1.css' rel='stylesheet' type='text/css'>"));
		  $("head").append($("<link id='green10' href='<?php echo get_template_directory_uri(); ?>/ThemeGreen/css/style2.css' rel='stylesheet' type='text/css'>")); 
		  $("head").append($("<link id='green11' rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Economica:700,400italic' />")); 
		  $("head").append($("<noscript><link id='green12' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeGreen/css/nojs.css' /></noscript>")); 
		  $("head").append($("<link id='green13' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeGreen/css/style.css' />"));  
		  $("head").append($("<link id='green14' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeGreen/SpryAssets/SpryTabbedPanels.css' />"));
		  $("head").append($("<link id='green15' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeGreen/css/global.1291388306.css' />"));
		  $("head").append($("<link id='green16' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeGreen/css/home.1291388306.css' />")); 
        }
        function blue_css(){
            $("head").append($("<link rel='stylesheet' id='blue1' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeBlue/css/Template.css' />"));
		 $("head").append($("<link rel='stylesheet' id='blue2' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeBlue/css/Search.css' />")); 
		 $("head").append($("<link rel='stylesheet' id='blue3' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeBlue/css/normalize.css' />")); 
		 $("head").append($("<link rel='stylesheet' id='blue4' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeBlue/css/demo.css' />")); 
		 $("head").append($("<link rel='stylesheet' id='blue6' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeBlue/css/menu_bubble.css' />"));
		 $("head").append($("<link rel='stylesheet' id='blue7' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeBlue/css/animate.css' />"));
		 $("head").append($("<link id='blue8' href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>"));
	     $("head").append($("<link id='blue9' href='<?php echo get_template_directory_uri(); ?>/ThemeBlue/css/forkit.css' rel='stylesheet' type='text/css'>")); 
		 $("head").append($("<link id='blue11' rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' />")); 
		 $("head").append($("<link id='blue12' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeBlue/css/normalize.css' />")); 
	     $("head").append($("<link id='blue13' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeBlue/css/demo.css' />")); 
		 $("head").append($("<link id='blue14' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeBlue/css/set1.css' />")); 
		 $("head").append($("<link id='blue15' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeBlue/css/style2.css' />")); 
		 $("head").append($("<link id='blue16' rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Economica:700,400italic' />"));  
		 $("head").append($("<noscript><link id='blue17' rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeBlue/css/nojs.css' /></noscript>"));
		 $("head").append($("<link rel='stylesheet' id='blue18' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeBlue/css/style.css' />"));
		 $("head").append($("<link rel='stylesheet' id='blue19' type='text/css' href='<?php echo get_template_directory_uri(); ?>/ThemeBlue/SpryAssets/SpryTabbedPanels.css' />"));
        }
        //blue _theme
      $("#blue_green a").click(function(){
          $("#div1").hide();
          $("#div2").fadeIn("fast");          
           //blue remove
		blue_remove();
                //pink remove
                pink_remove(); 
                green_css();      
               });
        $("#blue_red a").click(function(){
              $("#div1").hide();
          $("#div3").fadeIn("fast");
          //blue remove
          blue_remove();                 
                //green
            green_remove();           
             pink_css();             
                

        });
        //green_theme
           $("#green_blue a").click(function(){
               $("#div2").hide();
               $("#div1").fadeIn();
               green_remove();  
               pink_remove();
               blue_css();
           });
            $("#green_pink a").click(function(){
               $("#div2").hide();
               $("#div3").fadeIn();
               green_remove();  
               blue_remove();
               pink_css();
           });
       //Pink_theme
         $("#pink_blue a").click(function(){
               $("#div3").hide();
               $("#div1").fadeIn();
               green_remove();  
               pink_remove();
               blue_css();
           });
            $("#pink_green a").click(function(){
               $("#div3").hide();
               $("#div2").fadeIn();
               pink_remove();  
               blue_remove();
               green_css();
           });
    });
</script>

<?php 
function put_placeholder($title)
	{
		
$sql = "select post_content from wp_posts where post_title like '".$title."' and post_status ='publish'";
$res = mysql_query($sql);
return $res;
	}
	
	//if(isset($_COOKIE["Current_User"])){
	//echo $_COOKIE["Current_User"]; }
	
	
	function excerpt($content,$numberOfWords){     
    $contentWords = substr_count($content," ") + 1;
    $words = explode(" ",$content,($numberOfWords+1));
    if( $contentWords > $numberOfWords ){
        $words[count($words) - 1] = '...]';
    }
    $excerpt = join(" ",$words);
    return $excerpt;
}

?>

<div id="loading" class="loader"></div>   
<!--<div class="loader"></div>	-->
<div id='container'>
    <div id='div1' class='display' style="">
    <!-- Menu -->
	 <?php include("ThemeGreen/menu.php");?>	
            <!-- Menu End -->
            <!-- Image Slide -->
            <div class="ImgSlide">
            <div class="SlideOne">
            <!-- Logo -->
            <div class="logo pull-left wow fadeInDown animated animated" data-wow-delay=".2s Animationz"><a href="<?php echo site_url(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/LogoNew.png"></a></div>
            <!-- Logo End-->
            <!--- Search Wraper -->
<<<<<<< .mine
            <div id="wrap" class="hidden">
            <div class="TextS sb-search" id="sb-search">
            <?php //get_search_form();?>
             
                <input id="search_Blue" name="search" type="text" placeholder="looking for ?" class="search sb-search-input" onkeyup="searchBlue(this.value)" ><input id="search_submit_blue" value="Rechercher" type="submit" class="sb-search-submit" onsubmit="searchBlue()">
                <span class="sb-icon-search" id="span-sb-icon-search"></span>
              
            </div></div>
||||||| .r213
            <div id="wrap" class="hidden">
            <div class="TextS">
            <?php //get_search_form();?>
 
     <input id="search_Blue" name="search" type="text" placeholder="looking for ?" class="search"><input id="search_submit" value="Rechercher" type="submit">
=======
            <div id="wrap">
                <div class="TextS">
               <?php //get_search_form();?>
     
      <input id="search_Green" name="search" type="text" placeholder="looking for ?" class="search"><input id="search_submit" value="Rechercher" type="submit">
      
    </div></div>
            </div>
            <div class="TitleMarginForHeading">
            <div class="TitleHeading TitleColorP">Trusted IT Vendor since 2008</div>
            </div>
             
            <!--- Slide Caption -->
            <div id="home-grid">
        <div id="mask" style="position: absolute; left: 0px; top: 0px; width: 900px; height: 250px; opacity: 0; z-index: 1000; background: rgb(255, 255, 255);"></div>
		<div id="grid-0" class="grid-box landscape" style="z-index: 100; left: 0px; right: 675px; top: 0px; bottom: 0px;border: solid 5px #83AB16">
        <img src="<?php echo get_template_directory_uri(); ?>/ThemeGreen/img/img1.jpg" alt="" style="left: -125px; top: -25px;"></div>
		<div id="grid-1" class="grid-box landscape" style="z-index: 100; left: 225px; right: 450px; top: 0px; bottom: 0px;border: solid 5px #83AB16"><img src="<?php echo get_template_directory_uri(); ?>/ThemeGreen/img/img2.jpg" alt="" style="left: -125px; top: -45px;"></div>
        
		<div id="grid-2" class="grid-box landscape" style="z-index: 100; left: 450px; right: 225px; top: 0px; bottom: 0px;border: solid 5px #83AB16"><img src="<?php echo get_template_directory_uri(); ?>/ThemeGreen/img/img3.jpg" alt="" style="left: -120px; top: -40px;"></div>       
        
		<div id="grid-3" class="grid-box landscape" style="z-index: 100; left: 675px; right: 0px; top: 0px; bottom: 0px;border: solid 5px #83AB16"><img src="<?php echo get_template_directory_uri(); ?>/ThemeGreen/img/img4.jpg" alt="" style="left:-150px;top:-30px"></div>
<div id="grid-4" class="grid-box landscape" style="z-index: 100; left: 0px; right: 675px; top: 200px; bottom: 0px;border: solid 5px #83AB16">
        <img src="<?php echo get_template_directory_uri(); ?>/ThemeGreen/img/img_5.jpg" alt="" style="left: -125px; top: 0px;"></div>
		<div id="grid-5" class="grid-box landscape" style="z-index: 100; left: 225px; right: 450px; top: 200px; bottom: 0px;border: solid 5px #83AB16"><img src="<?php echo get_template_directory_uri(); ?>/ThemeGreen/img/img_6.jpg" alt="" style="left: -125px; top: -45px;"></div>
        
		<div id="grid-6" class="grid-box landscape" style="z-index: 100; left: 450px; right: 225px; top: 200px; bottom: 0px;border: solid 5px #83AB16"><img src="<?php echo get_template_directory_uri(); ?>/ThemeGreen/img/img_7.jpg" alt="" style="left: -120px; top: -40px;"></div>       
        
		<div id="grid-7" class="grid-box landscape" style="z-index: 100; left: 675px; right: 0px; top: 200px; bottom: 0px;border: solid 5px #83AB16"><img src="<?php echo get_template_directory_uri(); ?>/ThemeGreen/img/img_8.jpg" alt="" style="left:-150px;top:-30px"></div>      
      
        
>>>>>>> .r220

<<<<<<< .mine
        <!--- Slide Caption -->
        <div class="CaptionContainer">
        <div class="CaptionInnerContainer"><span class="SliderTitleText SliderTitleTextColor pull-center wow fadeInDown animated animated" style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s; text-align:center;">Dashboard Development - automate your company processes.<br />we’re driven to build <br>your digital experience.<a href="#" class="dottedReadMore hvr-sweep-to-top">...</a></span>
        <div class="BtnContainer">
  <!--<div class="BtnWraper BtnResponse BtnMargin">
        <a href="#" class="btn left lg wow fadeInRight animated animated" >
        <span class="left icon icon-gear " id="themeBlueContainer"></span>
        <span class="right title"><span class="arrow-right"></span>Change Settings</span>
      </a>
      </div>-->
 <div class="BtnWraper BtnMargin" id="requestQuote">
||||||| .r213
</div></div>

        <!--- Slide Caption -->
        <div class="CaptionContainer">
        <div class="CaptionInnerContainer"><span class="SliderTitleText SliderTitleTextColor pull-center wow fadeInDown animated animated" style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s; text-align:center;">Dashboard Development - automate your company processes.<br />we’re driven to build <br>your digital experience.<a href="#" class="dottedReadMore hvr-sweep-to-top">...</a></span>
        <div class="BtnContainer">
  <!--<div class="BtnWraper BtnResponse BtnMargin">
        <a href="#" class="btn left lg wow fadeInRight animated animated" >
        <span class="left icon icon-gear " id="themeBlueContainer"></span>
        <span class="right title"><span class="arrow-right"></span>Change Settings</span>
      </a>
      </div>-->
 <div class="BtnWraper BtnMargin" id="requestQuote">
=======
        <a id="link-0" class="grid-link imgswap" href="#" target="_blank">The University of Texas Commission of 125</a>
		<a id="link-1" class="grid-link imgswap" href="#">Southwest Airlines</a>
		<a id="link-2" class="grid-link imgswap" href="#">Shiner</a>
		<a id="link-3" class="grid-link imgswap" href="#">Austin AdFed Identity</a>
        <a id="link-4" class="grid-link imgswap" href="#">University of Texas McCombs School of Business</a>
		<a id="link-5" class="grid-link imgswap" href="#">LIthographix</a>
		<a id="link-6" class="grid-link imgswap" href="#">South by Southwest (SXSW)</a>
        <a id="link-7" class="grid-link imgswap" href="#">Phi</a>
	</div>
    <div class="BtnWraper BtnMargin" id="requestQuote">
>>>>>>> .r220
        <a href="#" class="btn left lg wow fadeInRight animated animated">
        <span class="left icon icon-gear iconz"></span>
        <span class="right title"><span class="arrow-right"></span>request a quote</span>
      </a>
      </div>  
        <div id="feed_win" class="feed_win">
              <div class="ContactFormWraper" id="RequestForm">
              <div id="blueRequestMessage"></div>
                <?php //echo do_shortcode('[contact-form-7 id="81" title="Requestquote"]'); ?>
              <div id="requestQuoteHideBlue" class="Request_div" style="width:80%;">
                  
<div class="div_1" style="width:20%;float:left">
<div class="FormInputWraper">
<input class="FormInputWraperz refresh" name="name" placeholder="Full Name" type="text" id="fullNameBlue" />
</div>
<div class="FormInputWraper">
    <input class="FormInputWraperz refresh" name="email" placeholder="Your Email" type="text" id="emailBlue" onblur="emailCheckOnblur(this.id,this.value)" /><br><span id="erroremailBlue" class="contacterror"></span>
</div>
</div>
<div class="div_2" style="width:20%;float:left">
<div class="FormInputWraper">
    <input class="FormInputWraperz refresh" name="phone" placeholder="Your Phone" type="text" id="phoneNumberBlue" onblur="phonenumberOnblur(this.id,this.value)" /><br><span id="errorphoneNumberBlue" class="contacterror"></span>
</div>
<<<<<<< .mine
<div class="FormInputWraper refresh"><input type="text" name="company_organization" class="FormInputWraperz" placeholder="Company / Organization" id="companyorganizationBlue" /></div>
||||||| .r213
<div class="FormInputWraper"><input type="text" name="company_organization" class="FormInputWraperz" placeholder="Company / Organization" id="companyorganizationBlue" /></div>
=======z
<div class="FormInputWraper"><input type="text" name="company_organisation" class="FormInputWraperz" placeholder="Company / Organization" id="companyorganizationBlue" /></div>
>>>>>>> .r220
</div>

<div class="div_3" style="width:20%;float:left;margin-left:5px;">
<div class="FormInputWraper FormInputWraperz col3 "><span>contact me by:</span></div>
<div class="FormInputWraper FormInputWraperz col3">Phone : <input type="radio" class="contactBlue" name="contact_type" value="P"  id="contactBlue" />
Email : <input type="radio" class="contactBlue" name="contact_type" value="E" /></div>
</div>

<div class="div_4" style="width:20%;float:left">
<div class="FormInputWraper captchaform"><img src="<?php bloginfo('template_directory'); ?>/randomImageforblue.php" width="60" height="30" alt="Image CAPTCHA" title="Image CAPTCHA" class="captcha-image"/></div>
<div class="FormInputWraper captchaform captchaform_text" id="textbox_captchar"><input type="text" name="user_captcha" id="user_captchaBlue" value="" class="FormInputWraperz wpcf7-captchar refresh" placeholder="Enter Security Code"/></div>
</div>

<div class="div_5" style="width:60%;">

<div class="FormInputWraper"><textarea name="comments" class="wpcf7-textarea refresh" placeholder="Your Message" id="commentsBlue"></textarea> </div>

</div>
<div class="div_6" style="width:20%;float:left">
<div class="SubmitWraper">
    <p><input class="SubmitBtn"  type="submit" value="Send" onclick="ajaxSubmitRequestBlue(this.value)"/></p>
</div>  
       
    </div>  
                      
         </div>
         </div>
    </div>
            <!--- Slide Caption End -->
            </div>
            <!-- Image Slide End -->
            <!--- Aboutus -->
             <div class="AboutContainer P-about" id="themeGreen_about">
            <div class="AboutLeftContainer AboutLeftContainerBg AboutLeftMinSize col-lg-7 grid-left wow fadeInLeft animated" data-wow-delay="1.2s"></div>
            <div class="AboutRightContainer">
             <section id="demo">

      <article>
      <div class="col-md-5 grid-right wow fadeInRight animated" data-wow-delay="1.6s">
             <?php $res=put_placeholder('ThemeGreen_about');
					 while($data=mysql_fetch_array($res))
					 {
						 //echo $data[0];
						 //echo excerpt($data[0],70);
						// $about_string = $data[0];
						// $about_result = explode('<!--more-->', $about_string);
						 echo $data[0];
						 
					 }
					
					 ?> 
          </div>
 </article>
 </section>
            </div></div>
            <?php //include("ThemeGreen/aboutus.php"); ?>
            <!--- Aboutus End -->
            <!--- Our Process --->
                  <div class="OurProcessWraper">
              <?php $res=put_placeholder('ThemeGreen_OurProcess');
					 while($data=mysql_fetch_array($res))
					 {
						 //echo $data[0];
						 //echo excerpt($data[0],70);
						 $about_string = $data[0];
						 $about_result = explode('<!--more-->', $about_string);
						 echo $about_result[0];
						 
					 }
					
					 ?> 
                  </div>
           <?php //include("ThemeGreen/ourprocess.php"); ?>
            <!--- Our Process End -->
            <!--- Services --->
              <?php $res=put_placeholder('ThemeGreen_Services');
					 while($data=mysql_fetch_array($res))
					 {
						 //echo $data[0];
						 //echo excerpt($data[0],70);
						 $about_string = $data[0];
						 $about_result = explode('<!--more-->', $about_string);
						 echo $about_result[0];
						 
					 }
					
					 ?> 
           <?php //include("ThemeGreen/services.php"); ?>
            <!--- Services End --->
            <!--- TestimonialsWraper  --->
                     <div class="TestimonialsWraper">
            <div class="TestiMonialLeftWraper">
            <div class="TestiMonialLeftInnerWraper">
             
             <?php $res=put_placeholder('ThemeGreen_Testimonials');
					 while($data=mysql_fetch_array($res))
					 {
						 //echo $data[0];
						 //echo excerpt($data[0],70);
						 $about_string = $data[0];
						 $about_result = explode('<!--more-->', $about_string);
						 echo $about_result[0];
						 
					 }
					
					 ?> 
                
         <?php //include("ThemeBlue/testimonials.php"); ?>
                 <div class="TestimonalTitleWrap"><span class="TestimonalsTitleWht">LOTS</span><span class="TestimonalsTitlePink"> of </span><br>

<span class="TestimonalsTitleBlack">HIGH FIVES</span></div>
            </div></div></div>
             
           <?php //include("ThemeGreen/testimonials.php"); ?>
            <!--- TestimonialsWraper End --->
            <!--- Social Contianer -->
             <?php $res=put_placeholder('ThemeGreen_Social');
					 while($data=mysql_fetch_array($res))
					 {
						 //echo $data[0];
						 //echo excerpt($data[0],70);
						 $about_string = $data[0];
						 $about_result = explode('<!--more-->', $about_string);
						 echo $about_result[0];
						 
					 }
					
					 ?> 
            <?php// include("ThemeGreen/social.php"); ?>
            <!-- Social Container End --->
             <div id="contentGreenValue" style="" class="AboutContainer P-about"></div>
            <!--- Footer Container -->
            <?php include("ThemeGreen/footer.php");?>
    </div>
    <div id='div2' class='display' style="">
    <!-- Menu -->
	<?php include 'ThemeBlue/menu.php';?>		
            <!-- Menu End -->
            <!-- Image Slide -->
            <div class="ImgSlide">
            <div class="SlideOne">
            <!-- Logo -->
            <div class="logo pull-left wow fadeInDown animated animated" data-wow-delay=".2s Animationz"><a href="<?php echo site_url(); ?>" target="_blank"><img id="logo1" src="<?php echo get_template_directory_uri(); ?>/images/LogoNew.png"></a></div>
            <!-- Logo End-->
            <!--- Search Wraper -->
            <div id="wrap">
            <div class="TextS">
            <?php //get_search_form();?>
 
     <input id="search_Blue" name="search" type="text" placeholder="looking for ?" class="search"><input id="search_submit" value="Rechercher" type="submit">

</div>
</div>
<div class="TitleMarginForHeading">
            <div class="TitleHeading TitleColorP">Trusted IT Vendor since 2008</div>
            </div>

        <!--- Slide Caption -->
        <div class="CaptionContainer">
        <div class="CaptionInnerContainer"><span class="SliderTitleText SliderTitleTextColor pull-center wow fadeInDown animated animated" style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s; text-align:center;">Dashboard Development - automate your company processes.<br />we’re driven to build <br>your digital experience.<a href="#" class="dottedReadMore hvr-sweep-to-top">...</a></span>
        <div class="BtnContainer">
  <!--<div class="BtnWraper BtnResponse BtnMargin">
        <a href="#" class="btn left lg wow fadeInRight animated animated" >
        <span class="left icon icon-gear " id="themeBlueContainer"></span>
        <span class="right title"><span class="arrow-right"></span>Change Settings</span>
      </a>
      </div>-->
 <div class="BtnWraper BtnMargin" id="requestQuote">
        <a href="#" class="btn left lg wow fadeInRight animated animated">
        <span class="left icon icon-gear iconz"></span>
        <span class="right title"><span class="arrow-right"></span>request a quote</span>
      </a>
      </div>
          
</div>
</div>
        
                
           
                        
          <div id="feed_win" class="feed_win">
              <div class="ContactFormWraper" id="RequestForm">
              <div id="blueRequestMessage"></div>
                <?php //echo do_shortcode('[contact-form-7 id="81" title="Requestquote"]'); ?>
              <div id="requestQuoteHideBlue" class="Request_div" style="width:80%;">
                  
<div class="div_1" style="width:20%;float:left">
<div class="FormInputWraper">
<input class="FormInputWraperz" name="name" placeholder="Full Name" type="text" id="fullNameBlue" />
</div>
<div class="FormInputWraper">
    <input class="FormInputWraperz" name="email" placeholder="Your Email" type="text" id="emailBlue" onblur="emailCheckOnblur(this.id,this.value)" /><br><span id="erroremailBlue" class="contacterror"></span>
</div>
</div>
<div class="div_2" style="width:20%;float:left">
<div class="FormInputWraper">
    <input class="FormInputWraperz" name="phone" placeholder="Your Phone" type="text" id="phoneNumberBlue" onblur="phonenumberOnblur(this.id,this.value)" /><br><span id="errorphoneNumberBlue" class="contacterror"></span>
</div>
<div class="FormInputWraper"><input type="text" name="company_organisation" class="FormInputWraperz" placeholder="Company / Organization" id="companyorganizationBlue" /></div>
</div>

<div class="div_3" style="width:20%;float:left;margin-left:5px;">
<div class="FormInputWraper FormInputWraperz col3 "><span>contact me by:</span></div>
<div class="FormInputWraper FormInputWraperz col3">Phone : <input type="radio" class="contactBlue" name="contact_type" value="P" checked="checked" />
Email : <input type="radio" class="contactBlue" name="contact_type" value="E" /></div>
</div>

<div class="div_4" style="width:20%;float:left">
<div class="FormInputWraper captchaform"><img src="<?php bloginfo('template_directory'); ?>/randomImageforblue.php" width="60" height="30" alt="Image CAPTCHA" title="Image CAPTCHA" class="captcha-image"/></div>
<div class="FormInputWraper captchaform captchaform_text" id="textbox_captchar"><input type="text" name="user_captcha" id="user_captchaBlue" value="" class="FormInputWraperz wpcf7-captchar " placeholder="Enter Security Code"/></div>
</div>

<div class="div_5" style="width:60%;">

<div class="FormInputWraper"><textarea name="comments" class="wpcf7-textarea" placeholder="Your Message" id="commentsBlue"></textarea> </div>

</div>
<div class="div_6" style="width:20%;float:left">
<div class="SubmitWraper">
    <p><input class="SubmitBtn"  type="submit" value="Send" onclick="ajaxSubmitRequestBlue(this.value)"/></p>
</div>  
       
    </div>  
                      
         </div>
         </div>
    </div>
        
        </div>
                <!--- Slide Caption End -->
            </div></div>
            <!-- Image Slide End -->
            <!--- Aboutus -->
            <div class="AboutContainer P-about" id="themeBlue_about">

            <div class="AboutLeftContainer AboutLeftContainerBg AboutLeftMinSize col-lg-7 grid-left wow fadeInLeft animated" data-wow-delay="1.2s"></div>
            <div class="AboutRightContainer">
             <section id="demo">

      <article>
      <div class="col-md-5 grid-right wow fadeInRight animated" data-wow-delay="1.6s">
             <?php $res=put_placeholder('ThemeBlue_about');
					 while($data=mysql_fetch_array($res))
					 {
						 //echo $data[0];
						 //echo excerpt($data[0],70);
						// $about_string = $data[0];
						// $about_result = explode('<!--more-->', $about_string);
						 echo $data[0];
						 
					 }
					
					 ?> 
          </div>
 </article>
 </section>
            </div></div>
     <?php //include 'ThemeBlue/aboutus.php'?>
            <!--- Aboutus End -->
            <!--- Our Process --->
                  <div class="OurProcessWraper">
             <?php $res=put_placeholder('ThemeBlue_OurProcess');
					 while($data=mysql_fetch_array($res))
					 {
						 //echo $data[0];
						 //echo excerpt($data[0],70);
						 $about_string = $data[0];
						 $about_result = explode('<!--more-->', $about_string);
						 echo $about_result[0];
						 
					 }
					
					 ?> 
                  </div>
       <?php// include 'ThemeBlue/ourprocess.php'?>
            <!--- Our Process End -->
             <!--- Services --->
             
              <?php $res=put_placeholder('ThemeBlue_Services');
					 while($data=mysql_fetch_array($res))
					 {
						 //echo $data[0];
						 //echo excerpt($data[0],70);
						 $about_string = $data[0];
						 $about_result = explode('<!--more-->', $about_string);
						 echo $about_result[0];
						 
					 }
					
					 ?> 
         <?php //include 'ThemeBlue/services.php'?>
            <!--- Services End --->
             <!--- TestimonialsWraper  --->
                  <div class="TestimonialsWraper">
            <div class="TestiMonialLeftWraper">
            <div class="TestiMonialLeftInnerWraper">
              
              <?php $res=put_placeholder('ThemeBlue_Testimonials');
					 while($data=mysql_fetch_array($res))
					 {
						 //echo $data[0];
						 //echo excerpt($data[0],70);
						 $about_string = $data[0];
						 $about_result = explode('<!--more-->', $about_string);
						 echo $about_result[0];
						 
					 }
					
					 ?> 
               
         <?php //include("ThemeBlue/testimonials.php"); ?>
                 <div class="TestimonalTitleWrap"><span class="TestimonalsTitleWht">LOTS</span><span class="TestimonalsTitlePink"> of </span><br>

<span class="TestimonalsTitleBlack">HIGH FIVES</span></div>
            </div></div></div>
            <!--- TestimonialsWraper End --->
             <!--- Social Contianer -->
              <?php $res=put_placeholder('ThemeBlue_Social');
					 while($data=mysql_fetch_array($res))
					 {
						 //echo $data[0];
						 //echo excerpt($data[0],70);
						 $about_string = $data[0];
						 $about_result = explode('<!--more-->', $about_string);
						 echo $about_result[0];
						 
					 }
					
					 ?> 
             <?php //include("ThemeBlue/social.php"); ?>
            <!-- Social Container End --->
          
            <div id="contentBlueValue" class="AboutContainer P-about">
                <section id="demo"></section>
        
            </div>
               
            <!--- Footer Container -->
           <?php include("ThemeBlue/footer.php"); ?>
            <!-- container -->
            
    </div>
    <div id='div3' class='display' style="">
     <?php include("ThemePink/menu.php");?>
            <!-- Image Slide -->
            <div class="ImgSlide">
            <div class="SlideOne">
            <!-- Logo -->
            <div class="logo pull-left wow fadeInDown animated animated" data-wow-delay=".2s Animationz"><a href="<?php echo site_url(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/LogoNew.png"></a></div>
            <!-- Logo End-->
            <!--- Search Wraper -->
            <div id="wrap">
            <div class="TextS">
           <?php //get_search_form();?>

                <input id="search_Pink" name="search" type="text" placeholder="looking for ?" class="search"><input id="search_submit" value="Rechercher" type="submit">
  
</div>
</div>
<div class="TitleMarginForHeading">
            <div class="TitleHeading TitleColorP">Trusted IT Vendor since 2008</div>
            </div>
        <!--- Slide Caption -->
        <div class="CaptionContainer">
        <div class="CaptionInnerContainer"><span class="SliderTitleText SliderTitleTextColor pull-center wow fadeInDown animated animated" style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s; text-align:center;">Website Development - automate your company processes.<br />we’re driven to build <br>your digital experience.<a href="#" class="dottedReadMore hvr-sweep-to-top">...</a></span>
        <div class="BtnContainer">
 <!-- <div class="BtnWraper BtnResponse BtnMargin">
        <a href="#" class="btn left lg wow fadeInRight animated animated">
        <span class="left icon icon-gear "></span>
        <span class="right title"><span class="arrow-right"></span>Change Settings</span>
      </a>
      </div>-->
 <div class="BtnWraper BtnMargin" id="requestQuote">
        <a href="#" class="btn left lg wow fadeInRight animated animated">
        <span class="left icon icon-gear iconz"></span>
        <span class="right title"><span class="arrow-right"></span>request a quote</span>
      </a>
      </div>
</div>
</div>

       <!-- reqyest form -->
            <div id="feed_win" class="feed_win">
              <div class="ContactFormWraper pinkhover" id="RequestForm">
              <div id="redOnRequestMouseHover">
              <div id="redRequestMessage"></div>
              <div id="requestQuoteHideRed" class="Request_div" style="width:80%;">
<div class="div_1" style="width:20%;float:left">
<div class="FormInputWraper">
<input class="FormInputWraperz" name="name" placeholder="Full Name" type="text" id="fullNameRed" />
</div>
<div class="FormInputWraper">
    <input class="FormInputWraperz" name="email" placeholder="Your Email" type="text" id="emailRed" onblur="emailCheckOnblur(this.id,this.value)"/><br><span id="erroremailRed" class="contacterror"></span>
</div>
</div>
<div class="div_2" style="width:20%;float:left">
<div class="FormInputWraper">
    <input class="FormInputWraperz" name="phone" placeholder="Your Phone" type="text" id="phoneNumberRed" onblur="phonenumberOnblur(this.id,this.value)"/><br><span id="errorphoneNumberRed" class="contacterror"></span>
</div>
<div class="FormInputWraper"><input type="text" name="company_organization" class="FormInputWraperz" placeholder="Company / Organisation" id="companyorganizationRed" /></div>
</div>

<div class="div_3" style="width:20%;float:left;margin-left:5px;">
<div class="FormInputWraper FormInputWraperz col3 "><span>contact me by:</span></div>
<div class="FormInputWraper FormInputWraperz col3">Phone : <input type="radio" class="contactRed" name="contact_type" value="P" checked="checked" id="contactRed"/>
Email : <input type="radio" class="contactRed" name="contact_type" value="E" id="contactRed"/></div>
</div>

<div class="div_4" style="width:20%;float:left">
<div class="FormInputWraper captchaform"><img src="<?php bloginfo('template_directory'); ?>/randomImageforred.php" width="60" height="30" alt="Image CAPTCHA" title="Image CAPTCHA" class="captcha-image"/></div>
<div class="FormInputWraper captchaform" id="textbox_captchar"><input type="text" name="user_captcha" id="user_captchaRed" value="" class="FormInputWraperz wpcf7-captchar" placeholder="Enter Security Code"/></div>
</div>

<div class="div_5" style="width:60%;">

<div class="FormInputWraper"><textarea name="comments" class="wpcf7-textarea" placeholder="Your Message" id="commentsRed"></textarea> </div>

</div>
<div class="div_6" style="width:20%;float:left">
<div class="SubmitWraper">
<p><input class="SubmitBtn" onclick="ajaxSubmitRequestQuotePink(this.value)" type="submit" value="Send" /></p>
</div>  
       
    </div>     
         </div>
              <?php // echo do_shortcode('[contact-form-7 id="81" title="Requestquote"]'); ?>
       </div>
    </div>     
         </div>
<!-- end request form-->      
</div>
                <!--- Slide Caption End -->
            </div></div>
            <!-- Image Slide End -->
            <!--- Aboutus -->
             <div class="AboutContainer P-about" id="themePink_about">
            <div class="AboutLeftContainer AboutLeftContainerBg AboutLeftMinSize col-lg-7 grid-left wow fadeInLeft animated" data-wow-delay="1.2s"></div>
            <div class="AboutRightContainer">
             <section id="demo">

      <article>
      <div class="col-md-5 grid-right wow fadeInRight animated" data-wow-delay="1.6s">
            <?php $res=put_placeholder('ThemePink_about');
					 while($data=mysql_fetch_array($res))
					 {
						 //echo $data[0];
						 //echo excerpt($data[0],70);
						 $about_string = $data[0];
						 $about_result = explode('<!--more-->', $about_string);
						 echo $data[0];
						 
					 }
					
					 ?> 
          </div>
 </article>
 </section>
            </div></div>
           <?php //include("ThemePink/aboutus.php");?>
            <!--- Aboutus End -->
            <!--- Our Process --->
             <div class="OurProcessWraper">
               <?php $res=put_placeholder('ThemePink_OurProcess');
					 while($data=mysql_fetch_array($res))
					 {
						 //echo $data[0];
						 //echo excerpt($data[0],70);
						 $about_string = $data[0];
						 $about_result = explode('<!--more-->', $about_string);
						 echo $about_result[0];
						 
					 }
					
					 ?> 
             </div>
            
            <?php //include("ThemePink/ourProcess.php");?>
            <!--- Our Process End -->
              <!--- Services --->
 <?php $res=put_placeholder('ThemePink_Services');
					 while($data=mysql_fetch_array($res))
					 {
						 //echo $data[0];
						 //echo excerpt($data[0],70);
						 $about_string = $data[0];
						 $about_result = explode('<!--more-->', $about_string);
						 echo $about_result[0];
						 
					 }
					
					 ?> 
           <?php //include("ThemePink/services.php"); ?>

            <!--- Services End --->
            <!--- TestimonialsWraper  --->
            <div class="TestimonialsWraper">
            <div class="TestiMonialLeftWraper">
            <div class="TestiMonialLeftInnerWraper">
             
            <?php $res=put_placeholder('ThemePink_Testimonials');
					 while($data=mysql_fetch_array($res))
					 {
						 //echo $data[0];
						 //echo excerpt($data[0],70);
						 $about_string = $data[0];
						 $about_result = explode('<!--more-->', $about_string);
						 echo $about_result[0];
						 
					 }
					
					 ?> 
         
             <?php //include("ThemePink/testimonials.php"); ?>
                      <div class="TestimonalTitleWrap"><span class="TestimonalsTitleWht">LOTS</span><span class="TestimonalsTitlePink"> of </span><br>

<span class="TestimonalsTitleBlack">HIGH FIVES</span></div>
            </div></div></div>
            <!--- TestimonialsWraper End --->
              <!--- Social Contianer -->
              <?php $res=put_placeholder('ThemePink_Social');
					 while($data=mysql_fetch_array($res))
					 {
						 //echo $data[0];
						 //echo excerpt($data[0],70);
						 $about_string = $data[0];
						 $about_result = explode('<!--more-->', $about_string);
						 echo $about_result[0];
						 
					 }
					
					 ?> 
            <?php //include("ThemePink/social.php"); ?>
              <div id="contentPinkValue" style="" class="AboutContainer P-about"></div>
            <!-- Social Container End --->
           <?php include("ThemePink/footer.php");?>
        <!-- container -->
    </div>
</div>
 <?php get_footer(); ?>