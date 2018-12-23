<?php
include_once "../../../wp-load.php";
include_once "../../../wp-includes/shortcodes.php";
global $wpdb;
?>
<?php
$title = $_GET['postTitle'];
$sql="select post_content from wp_posts where post_title like '".$title."' and post_status ='publish'";
$posts = $wpdb->get_results($sql);
foreach ($posts as $post)
                    {
                        print($post->post_content);
                    }
mysql_close()								 			
?>					 
