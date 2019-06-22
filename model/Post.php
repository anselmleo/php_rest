<?php
	class Post
	{
		//for db
		private $conn;
		private $table = 'posts';

   	//post properties
		protected $id;
		protected $category_id;
		protected $category_name;
		protected $title;
		protected $body;
		protected $author;
		protected $created_at;


		public function __construct($db)
		{
			$this->conn = $db;
		}

		public function getPostsFromDB()
		{
			$query = "SELECT * FROM " . $this->table;
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			return $stmt;
		}

	}

	