<?php

require_once('dbconfig.php');

class WORDPRESS_POSTS
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	public function getLastTenRrsearchSpotlishtIDList()
	{
		// Example SQL Statement:
		// SELECT object_id FROM  `wp_term_relationships` WHERE term_taxonomy_id =5 ORDER BY object_id desc LIMIT 1 , 10
		$sql = ' SELECT object_id FROM  `wp_term_relationships` WHERE term_taxonomy_id =5 ORDER BY object_id desc LIMIT 1 , 10';
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(array(':participant_name'=>$participant_name, ':participant_email'=>$participant_email));
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
		
	}
	
	
	public function getRrsearchSpotlishtContentFromID($id)
	{
		// Example SQL Statement:
		// SELECT post_date, post_content FROM  `wp_posts` WHERE ID =15286
		$sql = ' SELECT post_date, post_content FROM  `wp_posts` WHERE ID ='.$id.'' ;
		$stmt = $this->conn->prepare($sql);
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}
	
	
	
	// SELECT  a.id, a.post_title, a.post_content, a.post_date, a.post_status, b.term_taxonomy_id, b.object_id FROM `wp_posts` as a, `wp_term_relationships` as b  WHERE b.object_id = a.id AND b.term_taxonomy_id = '5' ORDER BY a.post_date DESC Limit 0, 10
	public function getPostContentList($category_id, $number_of_content_per_page)
	{
		// REF
		// PHP_ SQL Injection - Manual
		// http://php.net/manual/en/security.database.sql-injection.php

		settype($category_id, 'integer');
		settype($number_of_content_per_page, 'integer');
		
		
		$term_taxonomy_id = '';
		$query = sprintf("SELECT * FROM `wp_term_taxonomy` WHERE term_id = %d", $category_id);
		// print $query;
		$stmt = $this->conn->prepare($query);
		if ($stmt->execute()) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$term_taxonomy_id = $row['term_taxonomy_id'];
			}
		}
		
		
		// print 'term_taxonomy_id<br>';
		// print $term_taxonomy_id;
		
		// please note %d in the format string, using %s would be meaningless
		$query = sprintf("SELECT  a.id, a.post_title, a.post_content, a.post_date, a.post_status, b.term_taxonomy_id, b.object_id FROM `wp_posts` as a, `wp_term_relationships` as b  WHERE b.object_id = a.id AND b.term_taxonomy_id = '%d' AND a.post_status = 'publish' ORDER BY a.post_date DESC Limit 0, %d", $term_taxonomy_id, $number_of_content_per_page);
		
		
		$stmt = $this->conn->prepare($query);

		// initialise an array for the results 
		$results = array();
		if ($stmt->execute()) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$results[] = $row;
			}
		} 
		return $results;
	}


	// SELECT  a.id, a.post_title, a.post_content, a.post_date, a.post_status, b.term_taxonomy_id, b.object_id FROM `wp_posts` as a, `wp_term_relationships` as b  WHERE b.object_id = a.id AND b.term_taxonomy_id = '5' ORDER BY a.post_date DESC
	public function getPostContentListALL($category_id)
	{
		// REF
		// PHP_ SQL Injection - Manual
		// http://php.net/manual/en/security.database.sql-injection.php

		settype($category_id, 'integer');
		
		
		$term_taxonomy_id = '';
		$query = sprintf("SELECT * FROM `wp_term_taxonomy` WHERE term_id = %d", $category_id);
		// print $query;
		$stmt = $this->conn->prepare($query);
		if ($stmt->execute()) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$term_taxonomy_id = $row['term_taxonomy_id'];
			}
		}
		
		
		// print 'term_taxonomy_id<br>';
		// print $term_taxonomy_id;
		
		// please note %d in the format string, using %s would be meaningless
		$query = sprintf("SELECT  a.id, a.post_title, a.post_content, a.post_date, a.post_status, b.term_taxonomy_id, b.object_id FROM `wp_posts` as a, `wp_term_relationships` as b  WHERE b.object_id = a.id AND b.term_taxonomy_id = '%d' AND a.post_status = 'publish' ORDER BY a.post_date DESC", $term_taxonomy_id);
		
		
		$stmt = $this->conn->prepare($query);

		// initialise an array for the results 
		$results = array();
		if ($stmt->execute()) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$results[] = $row;
			}
		} 
		return $results;
	}

	public function getPostContent($post_id)
	{
		
		settype($post_id, 'integer');
		

		// please note %d in the format string, using %s would be meaningless
		$query = sprintf("SELECT * FROM `wp_posts` WHERE id = %d", $post_id);
		
		
		$stmt = $this->conn->prepare($query);

		// initialise an array for the results 
		$results = array();
		if ($stmt->execute()) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$results[] = $row;
			}
		}
		return $results;
	}	

	// SELECT a.term_id, a.name, b.term_taxonomy_id FROM `wp_terms` as a, `wp_term_taxonomy` as b WHERE b.taxonomy = '組別' AND a.term_id = b.term_id;
    // term_id	name	term_taxonomy_id
	// 14	海洋物理組	14
	// 15	海洋化學組	15
	// 16	海洋地質及地球物理組	16
	// 17	海洋生物及漁業組	17
	// 18	合聘教師	18
	// 19	兼任教師	19
	// 20	歷任教師	20
	// 34	歷屆所長	34
	public function getTermID_Name_TermTaxonomyID_List($taxonpmy_name)
	{
		// REF
		// PHP_ SQL Injection - Manual
		// http://php.net/manual/en/security.database.sql-injection.php

		settype($taxonpmy_name, 'string');
		
		// REF 
		// http://php.net/manual/en/function.sprintf.php
		$query = sprintf("SELECT a.term_id, a.name, b.term_taxonomy_id FROM `wp_terms` as a, `wp_term_taxonomy` as b WHERE b.taxonomy = '%s' AND a.term_id = b.term_id", $taxonpmy_name);
		// print $query;
		
		$stmt = $this->conn->prepare($query);

		// initialise an array for the results 
		$results = array();
		if ($stmt->execute()) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$results[] = $row;
			}
		} 
		return $results;
	}


	// SELECT * FROM `wp_postmeta` WHERE `post_id` = 14
	public function getPostMeta_List($post_id)
	{
		// REF
		// PHP_ SQL Injection - Manual
		// http://php.net/manual/en/security.database.sql-injection.php

		settype($post_id, 'integer');
		
		// REF 
		// http://php.net/manual/en/function.sprintf.php
		$query = sprintf("SELECT * FROM `wp_postmeta` WHERE `post_id` = %d", $post_id);
		// print $query;
		
		$stmt = $this->conn->prepare($query);

		// initialise an array for the results 
		$results = array();
		if ($stmt->execute()) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$results[] = $row;
			}
		} 
		return $results;
	}
	
	// SELECT * FROM `wp_posts` WHERE post_type = '%s'
	public function getPostContentListByPost_Type($post_type)
	{
		
		settype($post_type, 'string');
		

		// please note %d in the format string, using %s would be meaningless
		$query = sprintf("SELECT * FROM `wp_posts` WHERE post_type = '%s'", $post_type);
		
		
		$stmt = $this->conn->prepare($query);

		// initialise an array for the results 
		$results = array();
		if ($stmt->execute()) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$results[] = $row;
			}
		}
		return $results;
	}
	
	// SELECT * FROM `wp_posts` WHERE ID = '%d'
	public function getPostAttachmentContent($post_id)
	{
		
		settype($post_type, 'integer');
		

		// please note %d in the format string, using %s would be meaningless
		$query = sprintf("SELECT * FROM `wp_posts` WHERE ID = '%d'", $post_id);
		
		
		$stmt = $this->conn->prepare($query);

		// initialise an array for the results 
		$results = array();
		if ($stmt->execute()) {
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$results[] = $row;
			}
		}
		return $results;
	}	
	
}
?>