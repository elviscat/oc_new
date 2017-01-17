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
	
	$page_title = '博士後研究員';

	
	
	print "<section id=\"post_list_by_category\" class=\"container\">\n";
		print "<div class=\"center\">\n";
			print "<div class=\"col-xs-12 col-sm-12 blog-content\">\n";
				print "<h3>".$page_title."</h3>\n";
			print "</div>\n";
	

	$PostMeta_List = $wordpress_posts->getPostMeta_List($post_id);
	if ( sizeof($PostMeta_List) >= 1 ) {
		
		// print_r($PostMeta_List);
		
		$name = '';
		$supervisor = '';
		$room = '';
		$email = '';
		$researches = '';
		$image_photo_id = '';
		$real_post_id = '';
		foreach ($PostMeta_List as $key3 => $value3) {
			// print_r($value3);
			if ( $value3['meta_key'] == 'name') {
				$name = $value3['meta_value'];
				
				preg_match("/(.*)id=(.*)\"/", $name, $output_array);
				$real_post_id = $output_array[2];
				
				$name = strip_tags ($name);
			}
			if ( $value3['meta_key'] == 'supervisor') {
				$supervisor = $value3['meta_value'];
			}			
			if ( $value3['meta_key'] == 'room') {
				$room = $value3['meta_value'];
			}
			if ( $value3['meta_key'] == 'email') {
				$email = $value3['meta_value'];
			}
			if ( $value3['meta_key'] == 'researches') {
				$researches = $value3['meta_value'];
			}
			if ( $value3['meta_key'] == 'image') {
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
				print "<b>Supervisor: </b>".$supervisor."<br>\n";
				print "<b>研究室: </b>".$room."<br>\n";
				print "<b>E-mail:</b> ".$email."<br>\n";
				print "<b>研究專長:</b> ".$researches."<br>\n";
				print "</p>";
			print "</div>\n";
		print "</div>";
		
		print "<div class=\"center\">\n";
			print "<div class=\"col-xs-12 col-sm-12 blog-content\">\n";
				print "<br><br>";
			print "</div>\n";
				
		print "</div>";
		
		
		// print "<h2>著作目錄</h2>\n";

		$Post_List = $wordpress_posts->getPostContent($real_post_id);
		// print_r($Post_List);
		// print $Post_List[0]['post_content']."<br>\n";
		// print $Post_List[0]['post_content']."<br>\n";
		$publication = $Post_List[0]['post_content'];
		
		
		$publication = str_replace("\n","", $publication);
		// <!--:tw--><!--:--><!--:en--><!--:-->
		preg_match("/(.*)<!--:tw-->(.*)<!--:--><!--:en-->(.*)<!--:-->(.*)/", $publication, $publication_regex_output_array);
		// print $publication;
		// print_r($publication_regex_output_array);
		
		// print $publication_regex_output_array[3];
		
		$publication_list = explode('著作目錄',$publication_regex_output_array[2]);
		// $publication_list = explode('著作目錄',$publication);
		$publication_text = $publication_list[1];
		// print $publication_text;
		
		/*
		$publication_text = strip_tags ($publication_text);
		// print $publication_text;
		$publication_text_array = explode(PHP_EOL, $publication_text);
		// print sizeof($publication_text_array);
		foreach ($publication_text_array as $value_of_publication_text_array) {
			// print $value_of_publication_text_array.'<br>';
			print "<p style=\"text-align:left;\">".$value_of_publication_text_array."</p>\n";	
		}
		*/
		print "<div class=\"left\">\n";
			print "<div class=\"col-xs-10 col-sm-10 blog-content\">";
				print "<h2>著作目錄</h2>\n";
				print $publication_text;
			print "</div>\n";
		print "</div>\n";
	}
	print "</section>\n";	
	


?> 


    
<?php
	require_once('footer.html');

?>


     
 