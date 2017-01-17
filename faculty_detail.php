<?php
	$title_text = "師資介紹";
?>

<?php
	require_once('header.html');
?>




<?php
	require_once('class.wordpress_posts.php');
	$wordpress_posts = new WORDPRESS_POSTS();
	ini_set('display_errors', 1);
	error_reporting(~0);
	
	$post_id = '';
	if ( isset($_GET['i']) ) {
		$post_id = base64_decode($_GET['i']);
	}
	
	$page_title = '師資介紹';

	
	
	print "<section id=\"post_list_by_category\" class=\"container\">\n";
		print "<div class=\"center\">\n";
			print "<div class=\"col-xs-12 col-sm-12 blog-content\">\n";
				print "<h3>".$page_title."</h3>\n";
			print "</div>\n";
	$PostMeta_List = $wordpress_posts->getPostMeta_List($post_id);
	if ( sizeof($PostMeta_List) >= 1 ) {
		
		// print_r($PostMeta_List);
		
		$name = '';
		$faculty_degree = '';
		$tel1 = '';
		$tel2 = '';
		$fax ='';
		$room = '';
		$email1 = '';
		$email2 = '';
		$website = '';
		$exp = '';
		$domain = '';
		$publishes = '';
		$image_photo_id = '';
		
		foreach ($PostMeta_List as $key3 => $value3) {
			// print_r($value3);
			if ( $value3['meta_key'] == 'name') {
				$name = $value3['meta_value'];
			}
			if ( $value3['meta_key'] == 'degree') {
				$faculty_degree = $value3['meta_value'];
			}
			if ( $value3['meta_key'] == 'tel1') {
				$tel1 = $value3['meta_value'];
			}
			if ( $value3['meta_key'] == 'tel2') {
				$tel2 = $value3['meta_value'];
			}
			if ( $value3['meta_key'] == 'fax') {
				$fax = $value3['meta_value'];
			}			
			if ( $value3['meta_key'] == 'room') {
				$room = $value3['meta_value'];
			}
			if ( $value3['meta_key'] == 'email') {
				$email1 = $value3['meta_value'];
			}
			if ( $value3['meta_key'] == 'email2') {
				$email2 = $value3['meta_value'];
			}
			if ( $value3['meta_key'] == 'website') {
				$website = $value3['meta_value'];
			}
			if ( $value3['meta_key'] == 'exp') {
				$exp = $value3['meta_value'];
			}
			if ( $value3['meta_key'] == 'domain') {
				$domain = $value3['meta_value'];
			}
			if ( $value3['meta_key'] == 'publishes') {
				$publishes = $value3['meta_value'];
			}
			if ( $value3['meta_key'] == 'photo') {
				$image_photo_id = $value3['meta_value'];
			}
			
		}
		// print $image_photo_id;
		$PostAttachmentContent = $wordpress_posts->getPostAttachmentContent($image_photo_id);
		// print_r($PostAttachmentContent);
		
			print "<div class=\"col-xs-4 col-sm-4 blog-content\">\n";
				print "<img src=\"".$PostAttachmentContent[0]['guid']."\" width=\"300\"><br>\n";
			print "</div>\n";
			print "<div class=\"col-xs-8 col-sm-8 blog-content\">\n";
				print "<h3 style=\"text-align:left;\">".$name." ".$faculty_degree."</h3>\n";
				print "<p style=\"text-align:left;\">";
				print "<b>電話一: </b>".$tel1."<br>\n";
				print "<b>電話二: </b>".$tel2."<br>\n";
				print "<b>傳真: </b>".$fax."<br>\n";
				print "<b>電子郵件一: </b>".$email1."<br>\n";
				print "<b>電子郵件二: </b>".$email2."<br>\n";
				print "<b>網站: </b>".$website."<br>\n";
				print "<b>研究室: </b>".$room."<br>\n";
				print "</p>";
			print "</div>\n";
		
		print "</div>\n";
		
		print "<div class=\"center\">\n";
			print "<div class=\"col-xs-12 col-sm-12 blog-content\">\n";
				print "<br><br>";
			print "</div>\n";
				
		print "</div>";
		
		print "<div class=\"left\">\n";
			print "<div class=\"col-xs-10 col-sm-10 blog-content\">";
				// print "<p style=\"text-align:left;  border-bottom-style: double;\">";
				print "<b>專長領域: </b><br>".$domain."<br>\n";
				print "<b>學經歷: </b><br>".$exp."<br>\n";
				print "<b>研究成果與著作: </b><br>".$publishes."<br>\n";
				// print "</p>";
			print "</div>\n";
		print "</div>\n";
	}			
		
	print "</section>\n";	
	


?> 


    
<?php
	require_once('footer.html');

?>


     
 