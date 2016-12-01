<?php
	require_once('header.html');
?>




<?php
	require_once('class.wordpress_posts.php');
	$wordpress_posts = new WORDPRESS_POSTS();
	ini_set('display_errors', 1);
	error_reporting(~0);
	
	
	
	$page_title = '師資介紹';

	
	
	$TermID_Name_TermTaxonomyID_List = $wordpress_posts->getTermID_Name_TermTaxonomyID_List('組別');
	
	// print_r($TermID_Name_TermTaxonomyID_List);
	
	print "<section id=\"professor_list\" class=\"container\">\n";
		print "<div class=\"center\">\n";
			print "<div class=\"col-xs-12 col-sm-12 blog-content\">\n";
				print "<h2>".$page_title."</h2>\n";
				print "<h3 style=\"text-align:left;font-size:20px;\">各組師資</h3>\n";
				print "<ul style=\"list-style-type:square;text-align:left;\">\n";
				
				print "<div class=\"accordion\">\n";
					print "\t<div class=\"panel-group\" id=\"accordion1\">\n";
					
					if ( sizeof($TermID_Name_TermTaxonomyID_List) >= 1 ) {
						$counter = 1;			
						foreach ($TermID_Name_TermTaxonomyID_List as $key => $value) {
							
							print "\t\t<div class=\"panel panel-default\">\n";
							if ( $counter == 1 ) { 
								print "\t\t\t<div class=\"panel-heading active\">\n";
							} else { 
								print "\t\t\t<div class=\"panel-heading\">\n"; 
							}
									print "\t\t\t\t<h3 class=\"panel-title\">\n";
									print "\t\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapse_".$counter."\">\n";
									print $value['name'];
									print "\t\t\t\t<i class=\"fa fa-angle-right pull-right\"></i>\n";
									print "\t\t\t\t</a>\n";
									print "\t\t\t\t</h3>\n";
							if ( $counter == 1 ) { print "\t\t\t</div>\n"; } else { print "\t\t\t</div>\n"; }
								
							
							
							if ( $counter == 1 ) { 
								print "\t\t\t<div id=\"collapse_".$counter."\" class=\"panel-collapse collapse in\">\n"; 
							} else { 
								print "\t\t\t<div id=\"collapse_".$counter."\" class=\"panel-collapse collapse\">\n"; 
							}
									print "\t\t\t\t<div class=\"panel-body\">\n";
							if ( $counter == 1 ) { 
										print "\t\t\t\t\t<div class=\"media accordion-inner\">\n";
										
										print "\t\t\t\t\t\t<div class=\"pull-left\">\n";
											// print "\t\t\t<img class=\"img-responsive\" src=\"images/20160625039.jpg\">>\n";
										print "\t\t\t\t\t\t</div>\n";

										print "\t\t\t\t\t\t<div class=\"media-body\">\n";
										print "\t\t\t\t\t\t</div>\n";
										print "\t\t\t\t\t</div>\n";
							} else {
											
							}									
									
							// Table Content
							
										print "\t\t\t\t\t<table>\n";
							
							$PostContentList = $wordpress_posts->getPostContentListALL($value['term_taxonomy_id']);
							if ( sizeof($PostContentList) >= 1 ) {
								
								if ( $value['name'] == '歷屆所長') {
											print "\n";
											print "\t\t\t\t\t\t<tr>\n";
												print "\t\t\t\t\t\t\t<th style=\"background-color:#d6e6f2; color:black;\">姓名</th>\n";
												print "\t\t\t\t\t\t\t<th style=\"background-color:#d6e6f2; color:black;\">職稱</th>\n";
												print "\t\t\t\t\t\t\t<th style=\"background-color:#d6e6f2; color:black;\">任期</th>\n";
												print "\t\t\t\t\t\t\t<th style=\"background-color:#d6e6f2; color:black;\">電子郵件</th>\n";

											print "\t\t\t\t\t\t</tr>\n";
											
									foreach ($PostContentList as $key2 => $value2) {
										
										// print_r($value2);
										// print $value2['id'];
										
										
										$PostMeta_List = $wordpress_posts->getPostMeta_List($value2['id']);
										if ( sizeof($PostMeta_List) >= 1 ) {
											
											
											$name = '';
											$faculty_degree = '';
											$dirno = '';
											$dirtime = '';
											$email = '';
											foreach ($PostMeta_List as $key3 => $value3) {
												// print_r($value3);
												if ( $value3['meta_key'] == 'name') {
													$name = $value3['meta_value'];
												}
												if ( $value3['meta_key'] == 'degree') {
													$faculty_degree = $value3['meta_value'];
												}
												if ( $value3['meta_key'] == 'dirno') {
													$dirno = $value3['meta_value'];
												}
												if ( $value3['meta_key'] == 'dirtime') {
													$dirtime = $value3['meta_value'];
												}
												if ( $value3['meta_key'] == 'email') {
													$email = $value3['meta_value'];
												}												
											
											}
											print "\t\t\t\t\t\t</tr>\n";
												print "<td><a href=\"faculty_detail.php?i=".base64_encode($value2['id'])."\">".$name."</a></td>\n";
												print "<td>".$faculty_degree."</td>\n";
												print "<td> * 第 ".$dirno." 任所長 (".$dirtime.")</td>\n";
												print "<td>".$email."</td>\n";

											print "\t\t\t\t\t\t</tr>\n";
										}
										
									}
									
								} else {

											print "\n";
											print "\t\t\t\t\t\t<tr>\n";
												print "\t\t\t\t\t\t\t<th style=\"background-color:#d6e6f2; color:black;\">姓名</th>\n";
												print "\t\t\t\t\t\t\t<th style=\"background-color:#d6e6f2; color:black;\">職稱</th>\n";
												print "\t\t\t\t\t\t\t<th style=\"background-color:#d6e6f2; color:black;\">電話</th>\n";
												print "\t\t\t\t\t\t\t<th style=\"background-color:#d6e6f2; color:black;\">研究室</th>\n";
												print "\t\t\t\t\t\t\t<th style=\"background-color:#d6e6f2; color:black;\">電子郵件</th>\n";

											print "\t\t\t\t\t\t</tr>\n";
											
									foreach ($PostContentList as $key2 => $value2) {
										
										// print_r($value2);
										// print $value2['id'];
										
										
										$PostMeta_List = $wordpress_posts->getPostMeta_List($value2['id']);
										if ( sizeof($PostMeta_List) >= 1 ) {
											
											
											$name = '';
											$faculty_degree = '';
											$tel1 = '';
											$room = '';
											$email = '';
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
												if ( $value3['meta_key'] == 'room') {
													$room = $value3['meta_value'];
												}
												if ( $value3['meta_key'] == 'email') {
													$email = $value3['meta_value'];
												}												
											
											}
											print "\t\t\t\t\t\t</tr>\n";
												print "<td><a href=\"faculty_detail.php?i=".base64_encode($value2['id'])."\">".$name."</a></td>\n";
												print "<td>".$faculty_degree."</td>\n";
												print "<td>".$tel1."</td>\n";
												print "<td>".$room."</td>\n";
												print "<td>".$email."</td>\n";

											print "\t\t\t\t\t\t</tr>\n";
										}
										
									}								
								
								}	
							}		
										print "\t\t\t\t\t</table>\n";
							// Table Content							
									
									print "\t\t\t\t</div>\n";
	
								print "\t\t\t</div>\n";
							print "\t\t</div>\n";							
							$counter+=1;
						}
					}
					print "\t</div>\n";
				print "</div>\n";					
				// print "</ul>\n";	
			print "</div>\n";
		print "</div>\n";
	print "</section>\n";

	

?> 


    
<?php
	require_once('footer.html');

?>


     
 