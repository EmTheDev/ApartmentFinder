<?php

class database_api extends Controller
{

	/**
     *  Get all users from database
	 *	I think this might be wrong. Doesn't match DB table.
     */
    // public function getAllUsers()
    // {
        // $sql = "SELECT id, user_name, user_type FROM user";
        // $query = $this->db->prepare($sql);
        // $query->execute();
        // return $query->fetchAll();
    // }
	
	public function getOneUser($searchParam)
	{
		$sql = "SELECT user_id, firstname, lastname, email, password FROM Users WHERE firstname = :firstname";
		$preparedStatement = $this->db->prepare($sql);
		$preparedStatement->execute(array(':firstname' => $searchParam));
		$fetchallArray = $preparedStatement->fetchAll();
		echo json_encode($fetchallArray);
	}
	
	public function getPicture()
	{
		$sql = "SELECT picture_id, image_file FROM Picture WHERE picture_id = 1";
		$query = $this->db->prepare($sql);
		$query->execute();
		
		$result = $query->fetchall();
		echo json_encode($result);
	}
	/**
	 * CRUD
	 * Create
	 * Read
	 * Update
	 * Delete
	 */
	
	
     /**
	  * CRUD functions for adress table
	  */
	 public function addAddress()
	 {
		 
	 }
	 
	 public function getAddress()
	 {
		 
	 }
	 
	 public function updateAddress()
	 {
		 
	 }
	 
	 public function deleteAddress()
	 {
		 
	 }
	 
	 /**
	  * CRUD functions for LeaseHolder table
	  */
	 public function addLeaseHolder()
	 {
		 
	 }
	 
	 public function getLeaseHolder()
	 {
		 
	 }
	 
	 public function updateLeaseHolder()
	 {
		 
	 }
	 
	 public function deleteLeaseHolder()
	 {
		 
	 }
	 
	 /**
	  * CRUD functions for Listings table
	  */
	 public function addListing()
	 {
		 
	 }
	 
	 public function getListing()
	 {
		 
	 }
	 
	 public function updateListing()
	 {
		 
	 }
	 
	 public function deleteListing()
	 {
		 
	 }
	 
	 /**
	  * CRUD functions for Picture table
	  */
	 public function addPicture()
	 {
		 
	 }
	 
	 public function getPicture()
	 {
		 
	 }
	 
	 public function updatePicture()
	 {
		 
	 }
	 
	 public function deletePicture()
	 {
		 
	 }
	 
	 /**
	  * CRUD functions for RoomateInfo table
	  */
	 public function addRoomateInfo()
	 {
		 
	 }
	 
	 public function getRoomateInfo()
	 {
		 
	 }
	 
	 public function updateRoomateInfo()
	 {
		 
	 }
	 
	 public function deleteRoomateInfo()
	 {
		 
	 }
	 
	 /**
	  * CRUD functions for Student table
	  */
	 public function addStudent()
	 {
		 
	 }
	 
	 public function getStudent()
	 {
		 
	 }
	 
	 public function updateStudent()
	 {
		 
	 }
	 
	 public function deleteStudent()
	 {
		 
	 }
	 
	 /**
	  * CRUD functions for Users table
	  */
	 public function addUser()
	 {
		 
	 }
	 
	 public function getUser()
	 {
		 
	 }
	 
	 public function updateUser()
	 {
		 
	 }
	 
	 public function deleteUser()
	 {
		 
	 } 

	
	/**
	 * Depricated function
	 */
    // public function doSomething($searchq)
    // {   
        // $sql = "SELECT id, numBed, numBath, numOfTenants, Rent, leaseTime, relDist, image FROM listing WHERE numBed LIKE '%$searchq%'";
        // $query = $this->db->prepare($sql);
        // $query->execute();
        // return $query->fetchAll();
    // }
	
	/**
	 * Depricated function
	 */
    // public function searchPlace($searchq)
    // {   
        // $sql = "SELECT id, numBed, numBath, numOfTenants, Rent, leaseTime, relDist, image FROM listing WHERE numBed LIKE '%$searchq%'";
        // $query = $this->db->prepare($sql);
        // $query->execute();
        // return $query->fetchAll();
    // }
}