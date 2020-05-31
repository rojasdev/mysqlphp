<?php
class Book{
	public $db;
	// constructor for database connection purposes
	public function __construct(){
        // creating 'db' as mysqli connection object
		$this->db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
		if(mysqli_connect_errno()){
			echo "Database Could Not Connect.";
			exit;
		}
	}
    // Retrieve all records from the database table books
    public function get_book_list(){
		$sql = "SELECT * FROM tbl_books";
		$result = mysqli_query($this->db,$sql);
		while($row = mysqli_fetch_assoc($result)){
			$list[] = $row;
        }
        $this->db->close();
		return $list;
    }
    // Adding a new record to the database
	public function add_book($title,$a,$authorl,$year){
		$sql = "INSERT into tbl_books(bk_title,bk_author,bk_year)
				VALUES('$title','$author','$year')";
        $result=mysqli_query($this->db,$sql);
        $this->db->close();
		return;
	}
}