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
		print "<div class=\"left\">\n";
			print "<div class=\"col-xs-12 col-sm-12 blog-content\">\n";
				print "<h2>".$page_title."</h2>\n";

	$PostMeta_List = $wordpress_posts->getPostMeta_List($post_id);
	if ( sizeof($PostMeta_List) >= 1 ) {
		
		
		$name = '';
		$faculty_degree = '';
		$tel1 = '';
		$tel2 = '';
		$fax ='';
		$room = '';
		$email = '';
		$website = '';
		$exp = '';
		$domain = '';
		$publishes = '';
		
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
				$email = $value3['meta_value'];
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
			
		}
		print $name."<br>\n";
		print $faculty_degree."<br>\n";
		print "電話一:".$tel1."<br>\n";
		print "電話二:".$tel2."<br>\n";
		print "傳真:".$fax."<br>\n";
		print "研究室:".$room."<br>\n";
		
		print "專長領域:".$domain."<br>\n";
		print "學經歷:".$exp."<br>\n";
		print "研究成果與著作:".$publishes."<br>\n";
		
		
		
	}
				
			print "</div>\n";
		print "</div>\n";
	print "</section>\n";	
	


?> 


    
<?php
	require_once('footer.html');

?>


     
 