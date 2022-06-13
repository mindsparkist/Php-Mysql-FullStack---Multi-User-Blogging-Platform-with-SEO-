<?php
  class Post
  {
      // DB stuff
      private $conn;
      private $table = 'posts';

      // Post Properties
      public $id;
      public $datetime;
      public $title;
      public $category;
      public $author;
      public $post;

      // Constructor with DB
      public function __construct($db)
      {
          $this->conn = $db;
      }

      // Get Posts
      public function read()
      {
          // Create query
          $query = 'SELECT `id`, `datetime`, `title`, `category`, `author`, `post` FROM `new_post`';
      
          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Execute query
          $stmt->execute();

          return $stmt;
      }

      // Get Single Post
      public function read_single()
      {
          // Create query
          $query = "SELECT id, datetime, title, category, author, post FROM new_post WHERE id = ? LIMIT 0,1";

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Bind ID
          $stmt->bindParam(1, $this->id);

          // Execute query
          $stmt->execute();

          $row = $stmt->fetch(PDO::FETCH_ASSOC);

          // Set properties
          $this->title = $row['title'];
          $this->post = $row['post'];
          $this->author = $row['author'];
          $this->category = $row['category'];
          $this->datetime = $row['datetime'];
      }

      // Delete Post
      public function delete()
      {
          // Create query
          $query = 'DELETE FROM new_post WHERE id = :id';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->id = htmlspecialchars(strip_tags($this->id));

          // Bind data
          $stmt->bindParam(':id', $this->id);

          // Execute query
          if ($stmt->execute()) {
              return true;
          }

          // Print error if something goes wrong
          printf("Error: %s.\n", $stmt->error);

          return false;
      }
  }
