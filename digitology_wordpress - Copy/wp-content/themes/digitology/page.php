<?php get_header()?>
<div id='container'>
   <div id='div1' class='display' style="">
       
    <div class="FixedWrap">
    <div class="FixedWrapFloated">
    <ul>
    <li class="ContactIcon" style="list-style:none;"><a href="#">020 33719214</a></li>
    </ul>
    </div>
    </div>
    <!-- Menu -->
	 <?php include("ThemeGreen/menu.php");?>	
            <!-- Menu End -->
            <!-- Image Slide -->
             <div class="ImgSlide">
            <div class="SlideOne">
            <!-- Logo -->
            <div class="logo pull-left wow fadeInDown animated animated" data-wow-delay=".2s Animationz"><a href="<?php echo site_url(); ?>"><img alt="Digitology" title="Digitology" src="<?php echo get_template_directory_uri(); ?>/images/LogoNew.png"></a></div>
            <!-- Logo End-->
            
            <!--- Search Wraper -->
            <div id="wrap" class="hidden">
             <div class="TextS sb-search" id="sb-search_green">
               <?php //get_search_form();?>
     
                 <input id="search_Green" name="search" type="text" placeholder="looking for ?" class="search sb-search-input" ><input id="search_submit_Green" value="Rechercher" type="submit" class="sb-search-submit">
                 <span class="sb-icon-search search_submit timer_stop_start"></span>
    </div></div>
            <!--END SEARCH-->
             <div class="TitleMarginForHeading" id="text_gree_head">
                 <div class="TitleHeading TitleColorP headingmargin"><h1 class="h1strong"><div class="h1textheading">Website Development <img alt="Website Development" src="<?php echo get_template_directory_uri(); ?>/images/green tag.png" title="Website Development"/></div></h1></div>
            </div>
            <!--end title msg-->
            <div class="AboutContainer P-about pagecontent_digitology">
          <div id="contentGreenValue">  
          <p>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
          </p>
          </div>
            </div>
               <div class="CaptionContainer">
        <div class="CaptionInnerContainer">
         <!--- Slide Caption -->
            <h2 class="thumbnails_heading"> Check out some of our templates below...</h2>
       <div id="green_thumbnails_content">
           <div id="home-grid">
        <div id="mask"></div>
		<div id="grid-0" class="grid-box landscape educationpoland_digitology">
        <img   id="img_grid_educationpoland_digitology"></div>
        
		<div id="grid-1" class="grid-box landscape homecare_digitology"><img id="img_grid_homecare_digitology"></div> 
               
			<div id="grid-2" class="grid-box landscape sirioverseas_digitology"><img id="img_grid_sirioverseas_digitology" ></div> 
                    
		<div id="grid-3" class="grid-box landscape narne_digitology"><img id="img_grid_narne_digitology"></div>
        
        <div id="grid-4" class="grid-box landscape handyman_digitology">
                <img id="img_grid_handyman_digitology"></div>
                
		<div id="grid-5" class="grid-box landscape restaurant_digitology" ><img id="img_grid_restaurant_digitology" ></div> 
               
		<div id="grid-6" class="grid-box landscape shopping_digitology"><img id="img_grid_shopping_digitology"></div>   
            
        
		<div id="grid-7" class="grid-box landscape petgroomers_digitology"><img id="img_grid_petgroomers_digitology"></div>      
      
                <div id="grid-8" class="grid-box landscape restaurant1_digitology"><img id="img_grid_restaurant1_digitology"></div>   

        <div id="link-0" class="grid-link imgswap">The University of Texas Commission of 125</div>
		<div id="link-1" class="grid-link imgswap">Southwest Airlines</div>
		<div id="link-2" class="grid-link imgswap">Shiner</div>
		<div id="link-3" class="grid-link imgswap">Austin AdFed Identity</div>
        <div id="link-4" class="grid-link imgswap">University of Texas McCombs School of Business</div>
		<div id="link-5" class="grid-link imgswap">LIthographix</div>
		<div id="link-6" class="grid-link imgswap">South by Southwest (SXSW)</div>
        <div id="link-7" class="grid-link imgswap">Phi</div>
         <div id="link-8" class="grid-link imgswap">Phi</div>
        
           </div></div>
           <!-- <div id="home-grid">
        <div id="mask" style="position: absolute; left: 0px; top: 0px; width: 900px; height: 250px; opacity: 0; z-index: 1000; background: rgb(255, 255, 255);"></div>
		<div id="grid-0" class="grid-box landscape" style="z-index: 100; left: 0px; right: 675px; top: 0px; bottom: 0px;border: solid 5px #83AB16">
        <img src="<?php echo get_template_directory_uri(); ?>/ThemeGreen/img/img1.jpg" alt="Education in poland" title="Education in poland" style="left: -125px; top: -25px;"></div>
		<div id="grid-1" class="grid-box landscape" style="z-index: 100; left: 225px; right: 450px; top: 0px; bottom: 0px;border: solid 5px #83AB16"><img src="<?php echo get_template_directory_uri(); ?>/ThemeGreen/img/img2.jpg" alt="Care Home" title="Care Home" style="left: -125px; top: -45px;"></div>
        
		<div id="grid-2" class="grid-box landscape" style="z-index: 100; left: 450px; right: 225px; top: 0px; bottom: 0px;border: solid 5px #83AB16"><img src="<?php echo get_template_directory_uri(); ?>/ThemeGreen/img/img3.jpg" alt="Siri Ovserseas" title="Siri Ovserseas" style="left: -120px; top: -40px;"></div>       
        
		<div id="grid-3" class="grid-box landscape" style="z-index: 100; left: 675px; right: 0px; top: 0px; bottom: 0px;border: solid 5px #83AB16"><img src="<?php echo get_template_directory_uri(); ?>/ThemeGreen/img/img4.jpg" alt="Narne Estates" title="Narne Estates" style="left:-150px;top:-30px"></div>
<div id="grid-4" class="grid-box landscape" style="z-index: 100; left: 0px; right: 675px; top: 200px; bottom: 0px;border: solid 5px #83AB16">
        <img src="<?php echo get_template_directory_uri(); ?>/ThemeGreen/img/img_5.jpg" alt="Handy Man" title="Handy Man" style="left: -125px; top: 0px;"></div>
		<div id="grid-5" class="grid-box landscape" style="z-index: 100; left: 225px; right: 450px; top: 200px; bottom: 0px;border: solid 5px #83AB16"><img src="<?php echo get_template_directory_uri(); ?>/ThemeGreen/img/img_6.jpg" alt="Restaurant" title="Restaurant" style="left: -125px; top: -45px;"></div>
        
		<div id="grid-6" class="grid-box landscape" style="z-index: 100; left: 450px; right: 225px; top: 200px; bottom: 0px;border: solid 5px #83AB16"><img src="<?php echo get_template_directory_uri(); ?>/ThemeGreen/img/img_7.jpg" alt="Shoppig Reef" title="Shoppig Reef" style="left: -120px; top: -40px;"></div>       
        
		<div id="grid-7" class="grid-box landscape" style="z-index: 100; left: 675px; right: 0px; top: 200px; bottom: 0px;border: solid 5px #83AB16"><img src="<?php echo get_template_directory_uri(); ?>/ThemeGreen/img/img_8.jpg" alt="Pet Groomers" title="Pet Groomers" style="left:-150px;top:-30px"></div>      
      
        

        <div id="link-0" class="grid-link imgswap">The University of Texas Commission of 125</div>
		<div id="link-1" class="grid-link imgswap">Southwest Airlines</div>
		<div id="link-2" class="grid-link imgswap">Shiner</div>
		<div id="link-3" class="grid-link imgswap">Austin AdFed Identity</div>
        <div id="link-4" class="grid-link imgswap">University of Texas McCombs School of Business</div>
		<div id="link-5" class="grid-link imgswap">LIthographix</div>
		<div id="link-6" class="grid-link imgswap">South by Southwest (SXSW)</div>
        <div id="link-7" class="grid-link imgswap">Phi</div>
        
	</div>-->
        
            <!--- Slide Caption End -->
        <div class="BtnContainer timer_stop_start">
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
              <div id="greenRequestMessage"></div>
                <?php //echo do_shortcode('[contact-form-7 id="81" title="Requestquote"]'); ?>
              <div id="requestQuoteHideGreen" class="Request_div" style="width:80%;">
                  
<div class="div_1" style="width:20%;float:left">
<div class="FormInputWraper">
<input class="FormInputWraperz refresh" name="name" placeholder="Full Name" type="text" id="fullNameGreen" />
</div>
<div class="FormInputWraper">
    <input class="FormInputWraperz refresh" name="email" placeholder="Your Email" type="text" id="emailGreen" onblur="emailCheckOnblur(this.id,this.value)" /><br><span id="erroremailGreen" class="contacterror"></span>
</div>
</div>
<div class="div_2" style="width:20%;float:left">
<div class="FormInputWraper">
    <input class="FormInputWraperz refresh" name="phone" placeholder="Your Phone" type="text" id="phoneNumberGreen" onblur="phonenumberOnblur(this.id,this.value)" /><br><span id="errorphoneNumberGreen" class="contacterror"></span>
</div>
<div class="FormInputWraper"><input type="text" name="company_organisation" class="FormInputWraperz refresh" placeholder="Company / Organization" id="companyorganizationGreen" /></div>
</div>

<div class="div_3" style="width:20%;float:left;margin-left:5px;">
<div class="FormInputWraper FormInputWraperz col3 "><span class="left">contact me by:</span></div>
<div class="FormInputWraper FormInputWraperz col3 right">Phone : <input type="radio" class="contactGreen" name="contact_type_green" value="P" checked='checked' />
        Email : <input type="radio" class="contactGreen" name="contact_type_green" value="E" /></div>
</div>

<div class="div_4" style="width:20%;float:left">
<div class="FormInputWraper captchaform"><img src="<?php bloginfo('template_directory'); ?>/randomImageforgreen.php" width="100" height="30" alt="Image CAPTCHA" title="Image CAPTCHA" class="captcha-image"/></div>
<div class="FormInputWraper captchaform captchaform_text" id="textbox_captchar"><div id="captcha_text_box"><input type="text" name="user_captcha" id="user_captchaGreen" value="" class="FormInputWraperz refresh" placeholder="Security Code"/></div></div>
</div>

<div class="div_5" style="width:61%;">

<div class="FormInputWraper"><textarea name="comments" class="wpcf7-textarea refresh" placeholder="Your Message" id="commentsGreen"></textarea> </div>

</div>
<div class="div_6" style="width:20%;float:left">
<div class="SubmitWraper">
    <p><input class="SubmitBtn submitIcon"  type="submit" value="Send" onclick="ajaxSubmitRequestGreen(this.value)"/></p>
</div>  
       
    </div>  
                      
         </div>
         </div>
    </div>
        
        </div>
            
            
            
            </div>
           
             
          
          
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
            <?php // include("ThemeGreen/social.php"); ?>
            <!-- Social Container End --->
         
           
            
            <!--- Footer Container -->
            <?php include("ThemeGreen/footer.php");?>
    </div>
  <div id='div2' class='display' style="">
    <div class="FixedWrap">
    <div class="FixedWrapFloated">
    <ul>
    <li class="ContactIcon" style="list-style:none;"><a href="#">020 33719214</a></li>
    </ul>
    </div>
    </div>
    <!-- Menu -->
	<?php include 'ThemeBlue/menu.php';?>		
            <!-- Menu End -->
            <!-- Image Slide -->
            <div class="ImgSlide   pagecaptionContainer">
                <div class="SlideOne">
            <!-- Logo -->
            <div class="logo pull-left wow fadeInDown animated animated" data-wow-delay=".2s Animationz"><a href="<?php echo site_url(); ?>"><img alt="Digitology" title="Digitology" id="logo1" src="<?php echo get_template_directory_uri(); ?>/images/LogoNew.png"></a></div>
            <!-- Logo End-->
            <!--- Search Wraper -->
        
                 <div id="wrap" class="hidden">
            <div class="TextS sb-search" id="sb-search_blue">
            <?php //get_search_form();?>
             
                <input id="search_Blue" name="search" type="text" placeholder="looking for ?" class="search sb-search-input timer_stop_start"><input id="search_submit_blue" value="Rechercher" type="submit" class="sb-search-submit">
                <span class="sb-icon-search search_submit timer_stop_start" id="span-sb-icon-search"></span>
              
            </div></div>

            <div class="TitleMarginForHeading">
            <div class="TitleHeading TitleColorP"><h1 class="h1strong">dashboard Development</h1></div>
            </div>

        <!--- Slide Caption -->
          <div class="AboutContainer P-about pagecontent_digitology">
            <div id="contentBlueValue">
          
          <p>
        <?php while ( have_posts() ) : the_post(); ?>
       <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
          </p>
          
            </div>
                 </div>
        <div class="CaptionContainer pagecontainer_title">                   
        <div class="CaptionInnerContainer"><span class="SliderTitleText SliderTitleTextColor pull-center wow fadeInDown animated animated" style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s; text-align:center;">automate your company processes.<br />we’re driven to build <br>your digital experience.<a href="#" class="dottedReadMore hvr-sweep-to-top">...</a></span>
        <div class="BtnContainer timer_stop_start">
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
<input class="FormInputWraperz refresh" name="name" placeholder="Full Name" type="text" id="fullNameBlue"/>
</div>
<div class="FormInputWraper">
    <input class="FormInputWraperz refresh" name="email" placeholder="Your Email" type="text" id="emailBlue" onblur="emailCheckOnblur(this.id,this.value)" /><br><span id="erroremailBlue" class="contacterror"></span>
</div>
</div>
<div class="div_2" style="width:20%;float:left">
<div class="FormInputWraper">
    <input class="FormInputWraperz refresh" name="phone" placeholder="Your Phone" type="text" id="phoneNumberBlue" onblur="phonenumberOnblur(this.id,this.value)" /><br><span id="errorphoneNumberBlue" class="contacterror"></span>
</div>
<div class="FormInputWraper"><input type="text" name="company_organisation" class="FormInputWraperz refresh" placeholder="Company / Organization" id="companyorganizationBlue" /></div>
</div>

<div class="div_3" style="width:20%;float:left;margin-left:5px;">
<div class="FormInputWraper FormInputWraperz col3 "><span>contact me by:</span></div>
<div class="FormInputWraper FormInputWraperz col3 right">Phone : <input type="radio" class="contactBlue" name="contact_type_blue" value="P" checked=''/>
Email : <input type="radio" class="contactBlue" name="contact_type_blue" value="E" /></div>
</div>

<div class="div_4" style="width:20%;float:left">
<div class="FormInputWraper captchaform"><img src="<?php bloginfo('template_directory'); ?>/randomImageforblue.php" width="100" height="30" alt="Image CAPTCHA" title="Image CAPTCHA" class="captcha-image"/></div>
<div class="FormInputWraper captchaform captchaform_text" id="textbox_captchar"><div id="captcha_text_box_blue"><input type="text" name="user_captcha" id="user_captchaBlue" value="" class="FormInputWraperz wpcf7-captchar refresh" placeholder="Security Code"/></div></div>
</div>

<div class="div_5" style="width:61%;">

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
       <?php //include 'ThemeBlue/ourprocess.php'?>
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
      
            <!--- Footer Container -->
           <?php include("ThemeBlue/footer.php"); ?>
            <!-- container -->
            
    </div>
   <div id='div3' class='display' style="">
    <div class="FixedWrap">
    <div class="FixedWrapFloated">
    <ul>
    <li class="ContactIcon" style="list-style:none;"><a href="#">020 33719214</a></li>
    </ul>
    </div>
    </div>
     <?php include("ThemePink/menu.php");?>
            <!-- Image Slide -->
            <div class="ImgSlide pagecaptionContainer" >
            <div class="SlideOne">
            <!-- Logo -->
            <div class="logo pull-left wow fadeInDown animated animated" data-wow-delay=".2s Animationz"><a href="<?php echo site_url(); ?>"><img alt="Digitology" title="Digitology" src="<?php echo get_template_directory_uri(); ?>/images/LogoNew.png"></a></div>
            <!-- Logo End-->
            <!--- Search Wraper -->
            <div id="wrap" class="hidden">
           	<div id="sb-search_red" class="sb-search TextS">
           <?php //get_search_form();?>

                    <input id="search_Pink" name="search" type="text" placeholder="looking for ?" class="search sb-search-input"><input id="search_submit_Red" value="Rechercher" type="submit" class="sb-search-submit">
                 <span class="sb-icon-search search_submit timer_stop_start"></span>
</div>
</div>
<div class="TitleMarginForHeading">
            <div class="TitleHeading TitleColorP"><h1 class="h1strong">web Development</h1></div>
            </div>
        <!--- Slide Caption -->
         <div class="AboutContainer P-about pagecontent_digitology">
           <div id="contentPinkValue">  
              
                  <p>
                <?php while ( have_posts() ) : the_post(); ?>
                 <?php the_content(); ?>
                <?php endwhile; // end of the loop. ?>
                  </p>
               
           
           </div></div>
        <div class="CaptionContainer pagecontainer_title">
        <div class="CaptionInnerContainer"><span class="SliderTitleText SliderTitleTextColor pull-center wow fadeInDown animated animated" style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s; text-align:center;">automate your company processes.<br />we’re driven to build <br>your digital experience.<a href="#" class="dottedReadMore hvr-sweep-to-top">...</a></span>
        <div class="BtnContainer timer_stop_start">
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
<input class="FormInputWraperz refresh" name="name" placeholder="Full Name" type="text" id="fullNameRed" />
</div>
<div class="FormInputWraper">
    <input class="FormInputWraperz refresh" name="email" placeholder="Your Email" type="text" id="emailRed" onblur="emailCheckOnblur(this.id,this.value)"/><br><span id="erroremailRed" class="contacterror"></span>
</div>
</div>
<div class="div_2" style="width:20%;float:left">
<div class="FormInputWraper">
    <input class="FormInputWraperz refresh" name="phone" placeholder="Your Phone" type="text" id="phoneNumberRed" onblur="phonenumberOnblur(this.id,this.value)"/><br><span id="errorphoneNumberRed" class="contacterror"></span>
</div>
<div class="FormInputWraper"><input type="text" name="company_organization" class="FormInputWraperz refresh" placeholder="Company / Organisation" id="companyorganizationRed" /></div>
</div>

<div class="div_3" style="width:20%;float:left;margin-left:5px;">
<div class="FormInputWraper FormInputWraperz col3 "><span>contact me by:</span></div>
<div class="FormInputWraper FormInputWraperz col3 right">Phone : <input type="radio" class="contactRed" name="contact_type_red" value="P" checked />
Email : <input type="radio" class="contactRed" name="contact_type_red" value="E" /></div>
</div>

<div class="div_4" style="width:20%;float:left">
<div class="FormInputWraper captchaform"><img src="<?php bloginfo('template_directory'); ?>/randomImageforred.php" width="100" height="30" alt="Image CAPTCHA" title="Image CAPTCHA" class="captcha-image"/></div>
<div class="FormInputWraper captchaform captchaform_text" id="textbox_captchar"><div id="captcha_text_box_red"><input type="text" name="user_captcha" id="user_captchaRed" value="" class="FormInputWraperz refresh" placeholder="Security Code"/></div></div>
</div>

<div class="div_5" style="width:61%;">

<div class="FormInputWraper"><textarea name="comments" class="wpcf7-textarea refresh" placeholder="Your Message" id="commentsRed"></textarea> </div>

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
           
            <!-- Social Container End --->
           <?php include("ThemePink/footer.php");?>
        <!-- container -->
    </div>
</div>
<script>
    
</script>
    
 <?php get_footer(); ?>