<?php
	$title_text = "行政人員介紹";
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
	
	$page_title = '行政人員介紹';

	
	
	print "<section id=\"post_list_by_category\" class=\"container\">\n";
		print "<div class=\"center\">\n";
			print "<div class=\"col-xs-12 col-sm-12 blog-content\">\n";
				print "<h3>".$page_title."</h3>\n";
			print "</div>\n";

	$PostMeta_List = $wordpress_posts->getPostMeta_List($post_id);
	if ( sizeof($PostMeta_List) >= 1 ) {
		
		// print_r($PostMeta_List);
		
		$name = '';
		$position = '';
		$office= '';
		$tel = '';
		$email ='';
		$dealing = '';
		$image_photo_id = '';
		
		foreach ($PostMeta_List as $key3 => $value3) {
			// print_r($value3);
			if ( $value3['meta_key'] == 'name') {
				$name = $value3['meta_value'];
			}
			if ( $value3['meta_key'] == 'position') {
				$position = $value3['meta_value'];
			}
			if ( $value3['meta_key'] == 'office') {
				$office = $value3['meta_value'];
			}
			if ( $value3['meta_key'] == 'tel') {
				$tel = $value3['meta_value'];
			}
			if ( $value3['meta_key'] == 'email') {
				$email = $value3['meta_value'];
			}			
			if ( $value3['meta_key'] == 'dealing') {
				$dealing = $value3['meta_value'];
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
				// print "<h2>".$name."</h2>\n";
				// print "<b>姓名:</b> ".$name."<br>\n";
				print "<h3 style=\"text-align:left;\">".$name."</h3>\n";
				print "<p style=\"text-align:left;\">";
				// print "<img src=\"".$PostAttachmentContent[0]['guid']."\"><br>\n";
				print "<b>職稱: </b>".$position."</h3><br>\n";
				print "<b>辦公室: </b>".$office."<br>\n";
				print "<b>電話: </b>".$tel."<br>\n";
				print "<b>E-mail: </b>".$email."<br>\n";
				print "<b>業務內容: </b>".$dealing."<br>\n";
				print "</p>";
			print "</div>\n";
		print "</div>";
		
		print "<div class=\"center\">\n";
			print "<div class=\"col-xs-12 col-sm-12 blog-content\">\n";
				print "<br><br>";
			print "</div>\n";
				
		print "</div>";
		
	}
				
			print "</div>\n";
		print "</div>\n";
	print "</section>\n";	
	


?> 


    
<?php
	require_once('footer.html');

?>


     
 