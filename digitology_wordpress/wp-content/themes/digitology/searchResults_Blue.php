<?php //include("db.php");
 include_once "../../../wp-load.php";?>

<?php
$server=$_SERVER['SERVER_NAME'];
echo $title = $_GET['search'];
$word='%'.$title.'%';
/*$sql = "select post_title,post_content from wp_posts where post_title like '".$word."' and post_status ='publish'";
//echo "select post_content from wp_posts where post_title like '$word' and post_status ='publish'";
$res = mysql_query($sql);
//echo mysql_num_rows($res);
while($data=mysql_fetch_array($res))
{
// print_r($data);
$string = $data[0];
$string1 = $data[1];
  ?>
<a href="#" onclick="showBlueMenuContent(this.id)" id="<?php echo $string;?>"><?php echo $string; ?></a>
<p><?php  echo $string1;?></p>
<?php 
}*/
//echo wordlimit($string, 20);

   
//include "db.php";
 
 $title=$_POST["title"];
 
  
 $result=mysql_query("SELECT * FROM wp_posts where post_title like '%$title%' and post_status='publish'");
 $found=mysql_num_rows($result);
 echo "<section id='demo'><div class='TitleHeading TitleColorP TitleMargin' style='padding-top:10px'>Search Results For :$title</div>";
 
 if($found>0){
    while($row=mysql_fetch_array($result)){
         $string=$row[post_content];
        $string1 = substr(strip_tags($string),0,200).'...'; 
        $parentparentdir=site_url().'/'.$row[post_title];
        $site=site_url().'/'.$row[post_title].'/';
    echo "<p class='NormalText NormalPcolor search_Blue_page' id='search_content_ul'><span class='SocialSubTitle'><a href='#' onclick='showBlueMenuContent(this.id)' id='$row[post_title]' class='searchpagecontent_blue'>$row[post_title]</a><br><p class='NormalPcolor NormalText'>$site</p></span></br>
            <p class='NormalText NormalPcolor'> $string1</p></p>";

    }   
 }else{
   echo "<p class='NormalText NormalPcolor'>Search Result Not  Found</p>";
 }
 // ajax search
echo '</section>';

?>
<script>
    $(document).ready(function(){
          /* footer list links */
  	
        $(".search_Blue_page a").click(function () {
          /*  $('html, body').animate({ scrollTop: 2750 }, 400);*/
           $('html, body').animate({
        'scrollTop' : $("#contentBlueValue").position().top
    });
        });
     /* footer list links */   
    });
</script>