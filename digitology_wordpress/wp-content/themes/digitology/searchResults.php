<?php include("db.php"); ?>

<?php
$server=$_SERVER['SERVER_NAME'];
$title = $_GET['search'];
$word='%'.$title.'%';
$sql = "select post_title,post_content from wp_posts where post_title like '".$word."' and post_status ='publish'";
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
					 }
?>