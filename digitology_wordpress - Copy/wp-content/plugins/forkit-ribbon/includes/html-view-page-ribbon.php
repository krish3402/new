<?php
/**
 * Frontend View: Template - Ribbon
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$options = get_option( 'forkit_ribbon_options' );

// Ribbon and Detached default text
$ribbon_text   = empty( $options['ribbon_text'] ) ? __( 'Request a Quote', 'forkit-ribbon' ) : $options['ribbon_text'];
$detached_text = empty( $options['detached_text'] ) ? __( 'Drag down >', 'forkit-ribbon' ) : $options['detached_text'];

?>
<a class="forkit" data-text="<?php echo $ribbon_text; ?>" data-text-detached="<?php echo $detached_text; ?>" href="<?php echo $options['ribbon_link']; ?>"></a>

<?php if ( '' !== strip_tags( $options['curtain_content'] ) ) : ?>
	<div class="forkit-curtain" id="forkit-mousehover">
		<!--<div class="close-button"></div>-->
		<?php  echo $options['curtain_content']; ?>
        <div id="contactusMessage"></div>
<div class="showhide" id="showHide_contact">
<div class="FormInputWraper"><input class="FormInputWraperz" name="name" placeholder="Full Name" type="text" id="fullName" /></div>

<div class="FormInputWraper"><input class="FormInputWraperz" name="phone" placeholder="Your Phone" type="text" id="phoneNumber" onblur="phonenumberOnblur(this.id,this.value)" /><br><span id="errorphoneNumber" class="contacterror"></span></div>

<div class="FormInputWraper"><input class="FormInputWraperz" name="email" placeholder="Your Email" type="text" id="email" onblur="emailCheckOnblur(this.id,this.value)" /><br><span id="erroremail" class="contacterror"></span></div>

<div class="FormTitleWraper"><span class="left_contactus">Contact Type</span><span class="right_contactus">Phone : <input type="radio" class="contact" name="contact_type_desktop" value="P" checked="" />
Email : <input type="radio" class="contact" name="contact_type_desktop" value="E" /></span></div>
<!--<div class="FormInputWraper contactType col3">
Phone : <input type="radio" class="contact" name="contact_type_desktop" value="P" checked="" />
Email : <input type="radio" class="contact" name="contact_type_desktop" value="E" /></div>-->

<div class="FormInputWraper">
<input type="text" name="company_organization" class="FormInputWraperz" placeholder="Company / Organisation" id="companyorganization" /></div>

<div class="FormInputWraper textAreaType">
<textarea name="comments" class="FormTextAreaWraperz" placeholder="Your Message" id="comments"></textarea></div>
<div><div class="captchaform img_text"><img src="<?php bloginfo('template_directory'); ?>/randomImage.php" width="60" height="30" alt="Image CAPTCHA" title="Image CAPTCHA" class="captcha-image"/> </div> <div class="FormInputWraper captchaform_text">
<input type="text" name="user_captcha" id="user_captcha_desktop" value="" class="FormInputWraperz" placeholder="Enter Security Code"/>
       </div></div>
<div class="SubmitWraper">
<p><input class="SubmitBtn" onclick="ajaxSubmitContactUs(this.value)" type="submit" value="Send" /></p>
</div>
</div>

<?php // echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
<!--<div class="FormTitleWraper">name</div>
<div class="FormInputWraper"><input class="FormInputWraperz" type="text" /></div>
<div class="FormTitleWraper">E-Mail</div>
<div class="FormInputWraper"><input class="FormInputWraperz" type="text" /></div>
<div class="FormTitleWraper">Phone</div>
<div class="FormInputWraper"><input class="FormInputWraperz" type="text" /></div>
<div class="FormTitleWraper">Message</div>
<div class="FormInputWraper"><textarea class="FormTextAreaWraperz"></textarea></div>
<div class="SubmitWraper"><input class="SubmitBtn" type="submit" /></div>-->
</div>
</div>
</div>
<!--- Contact Left Container End-->
<!--- Contact Right Container --->
<div class="ContactRightContaner">
<div class="ContactRightInnerContaner">
<div class="ContactBodyContainer">
<div class="ContactBodyInnerContainer">
<div class="ContactBodyLeftContainer">
<div class="ContactRightTitleWrap"><span class="ContactTitleTxt">Offices & Locations</span></div>
<div class="ContactSubTitleWrap"><span class="ContactTitleTwoTxt">Digitology</span>
<br />
<span class="CountryText">UK</span>
<br />
<span class="CountryDetailsText">201 Jerounds</span><br />
<span class="CountryDetailsText">Harlow</span><br />
<span class="CountryDetailsText">Essex</span><br />
<span class="CountryDetailsText">CM19 4HJ</span> 
<!--<span class="ContactTitleTwoTxt">Development Centers</span>
<span class="CountryText">India</span>
<span class="CountryDetailsText">149/20 Vijaypuri Colony,
Tarnaka,Secunderabad,
Hyderabad-500 017
Andhra Pradesh</span>--></div>
</div>
<div class="ContactBodyRightContainer">
<div class="ContactRightTitleWrap"><span class="ContactTitleTxt">Phone & Email</span></div>
<div class="ContactSubTitleWrap"><span class="ContactTitleTwoTxt">For Sales!</span>
<br />
<span class="CountryText">UK</span>
<br />
<span class="CountryDetailsText"><a href="mailto:info@digitology.co.uk" target="_blank">info@digitology.co.uk</a></span>
<br />
<span class="CountryDetailsText">Ph: 020 33719214</span>
<br />
<span class="CountryDetailsText">FAX:  01279 420815</span>
<!--<span class="CountryText">India</span>
<span class="CountryDetailsText"><a href="mailto:sales@digitology.co.uk">sales@digitology.co.uk</a>
Ph: +1 (714) 726 2485
Fax: 01279 4208</span>--></div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--- Contact Right Container End --->
<!--- Content Place Holder End -->
<!--- Mobile Tabbed --->
<div class="TabbedContactWraper">
<div id="TabbedPanels1" class="TabbedPanels">
<ul class="TabbedPanelsTabGroup">
	<li class="TabbedPanelsTab" tabindex="0">Enquiry</li>
	<li class="TabbedPanelsTab" tabindex="0">Reach us</li>
</ul>
<div class="TabbedPanelsContentGroup">
<div class="TabbedPanelsContent">

<!--- Contact Left Container -->
<div class="ContactLeftContainer">
<div class="ContactLeftInnerContainer">
<div class="ContactFormTitle">Hello! How can i help you</div>
<div class="ContactFormWraper">
 <div id="contactusMessageMobile"></div>
<div class="showhide" id="showHide_contact_mobile">
<div class="FormInputWraper"><input class="FormInputWraperz" name="name" placeholder="Full Name" type="text" id="fullNameMobile" /></div>

<div class="FormInputWraper"><input class="FormInputWraperz" name="phone" placeholder="Your Phone" type="text" id="phoneNumberMobile" onblur="phonenumberOnblur(this.id,this.value)" /><br><span id="errorphoneNumberMobile" class="contacterror"></span></div>

<div class="FormInputWraper"><input class="FormInputWraperz" name="email" placeholder="Your Email" type="text" id="emailMobile" onblur="emailCheckOnblur(this.id,this.value)" /><br><span id="erroremailMobile" class="contacterror"></span></div>

<div class="FormTitleWraper"><span class="left_contactus_mobile">Contact Type</span><span class="right_contactus_mobile">Phone : <input type="radio" class="contactMobile" name="contact_type_mobile" value="P" checked="" />
Email : <input type="radio" class="contactMobile" name="contact_type_mobile" value="E" /></span></div>
<!--<div class="FormInputWraper contactType">
Phone : <input type="radio" class="contactMobile" name="contact_type_mobile" value="P" checked="" />
Email : <input type="radio" class="contactMobile" name="contact_type_mobile" value="E" /></div>-->

<div class="FormInputWraper">
<input type="text" name="company_organization" class="FormInputWraperz" placeholder="Company / Organisation" id="companyorganizationMobile" /></div>

<div class="FormInputWraper textAreaType">
<textarea name="comments" class="FormTextAreaWraperz" placeholder="Your Message" id="commentsMobile"></textarea></div>
<div>
<div class="captchaform img_text"><img src="<?php bloginfo('template_directory'); ?>/randomImageForMobile.php" width="60" height="30" alt="Image CAPTCHA" title="Image CAPTCHA" class="captcha-image"/></div><div class="FormInputWraper captchaform_text">
<input type="text" name="user_captcha" id="user_captcha_Mobile" value="" class="FormInputWraperz" placeholder="Enter Security Code"/>
</div>
</div>
<div class="SubmitWraper">
<p><input class="SubmitBtn" onclick="ajaxSubmitContactUsMobile(this.value)" type="submit" value="Send" /></p>
</div>
</div>
<?php //echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
</div>
</div>
</div>
<!--- Contact Left Container End-->

</div>
<div class="TabbedPanelsContent">

<!--- Contact Right Container --->
<div class="ContactRightContaner">
<div class="ContactRightInnerContaner">
<div class="ContactBodyContainer">
<div class="ContactBodyInnerContainer">
<div class="ContactBodyLeftContainer">
<div class="ContactRightTitleWrap"><span class="ContactTitleTxt">Offices & Locations</span></div>
<div class="ContactSubTitleWrap"><span class="ContactTitleTwoTxt">Digitology</span>
<br />
<span class="CountryText">UK</span>
<br />
<span class="CountryDetailsText">201 Jerounds</span><br />
<span class="CountryDetailsText">Harlow</span><br />
<span class="CountryDetailsText">Essex</span><br />
<span class="CountryDetailsText">CM19 4HJ</span> 
<!--<span class="ContactTitleTwoTxt">Development Centers</span>  - <span class="CountryText">India</span>
<span class="CountryDetailsText">149/20 Vijaypuri Colony, Tarnaka,Secunderabad,
Hyderabad-500 017 Andhra Pradesh</span>--></div>
</div>
<div class="ContactBodyRightContainer">
<div class="ContactRightTitleWrap"><span class="ContactTitleTxt">Phone & Email</span></div>
<div class="ContactSubTitleWrap"><span class="ContactTitleTwoTxt">For Sales!</span>
<br />
<span class="CountryText">UK</span>
<br />
<span class="CountryDetailsText"><a href="mailto:info@digitology.co.uk" target="_blank">info@digitology.co.uk</a></span>
<br />
<span class="CountryDetailsText">Ph: 020 33719214</span>
<br />
<span class="CountryDetailsText">FAX: 01279 420815</span>
<!--<span class="CountryText">India</span>
<span class="CountryDetailsText"><a href="mailto:sales@digitology.co.uk">sales@digitology.co.uk</a>
Ph: +1 (714) 726 2485   Fax: 01279 4208</span>---></div>
</div>
</div>
</div>
</div>
</div>
<!--- Contact Right Container End --->

</div>
</div>
</div>
</div>
<!--- Mobile Tabbed End -->
	
</div> 
  <!--- Tabeed Mobile --->
      
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
		<!--- Tabbed Mobile end -->   
<?php endif; ?>