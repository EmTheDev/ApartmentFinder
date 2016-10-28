<?php

include 'database_api.php';

class database extends Controller
{
	/**
	 * This function is for demonstration purposes for the vertical prototype
	 */
	public function call_getOneUser($searchParam)
	{
		$json = getOneUser($searchParam);
		echo $json;
	}
	
	/**
	 * This function is for demonstration purposes for the vertical prototype
	 */
	public function call_getPicture()
	{
		$json = getPicture();
		echo $json;
	}
	
	/**
	 * CRUD function calls for adress table
	 */
	 public function call_addAddress()
	 {
		 $json = addAddress();
		 echo $json;
	 }
	 
	 public function call_getAddress()
	 {
		 $json = getAddress();
		 echo $json;
	 }
	 
	 public function call_updateAddress()
	 {
		 $json = updateAddress();
		 echo $json;
	 }
	 
	 public function call_deleteAddress()
	 {
		 $json = deleteAddress();
		 echo $json;
	 }
	 
	 /**
	 * CRUD function calls for LeaseHolder table
	 */
	 public function call_addLeaseHolder()
	 {
		 $json = addLeaseHolder();
		 echo $json;
	 }
	 
	 public function call_getLeaseHolder()
	 {
		 $json = getLeaseHolder();
		 echo $json;
	 }
	 
	 public function call_updateLeaseHolder()
	 {
		 $json = updateLeaseHolder();
		 echo $json;
	 }
	 
	 public function call_deleteLeaseHolder()
	 {
		 $json = updateLeaseHolder();
		 echo $json;
	 }
	 
	 /**
	 * CRUD function calls for Listings table
	 */
	 public function call_addListing()
	 {
		 $json = addListing();
		 echo $json;
	 }
	 
	 public function call_getListing()
	 {
		 $json = getListing();
		 echo $json;
	 }
	 
	 public function call_updateListing()
	 {
		 $json = updateListing();
		 echo $json;
	 }
	 
	 public function call_deleteListing()
	 {
		 $json = deleteListing();
		 echo $json;
	 }
	 
	 /**
	 * CRUD function calls for Picture table
	 */
	 public function call_addPicture()
	 {
		 $json = addPicture();
		 echo $json;
	 }
	 
	 public function call_getPicture()
	 {
		 $json = getPicture();
		 echo $json;
	 }
	 
	 public function call_updatePicture()
	 {
		 $json = updatePicture();
		 echo $json;
	 }
	 
	 public function call_deletePicture()
	 {
		 $json = deletePicture();
		 echo $json;
	 }
	 
	 /**
	 * CRUD function calls for RoomateInfo table
	 */
	 public function call_addRoomateInfo()
	 {
		 $json = addRoomateInfo();
		 echo $json;
	 }
	 
	 public function call_getRoomateInfo()
	 {
		 $json = getRoomateInfo();
		 echo $json;
	 }
	 
	 public function call_updateRoomateInfo()
	 {
		 $json = updateRoomateInfo();
		 echo $json;
	 }
	 
	 public function call_deleteRoomateInfo()
	 {
		 $json = deleteRoomateInfo();
		 echo $json;
	 }
	 
	 /**
	 * CRUD function calls for Student table
	 */
	 public function call_addStudent()
	 {
		 $json = addStudent();
		 echo $json;
	 }
	 
	 public function call_getStudent()
	 {
		 $json = getStudent();
		 echo $json;
	 }
	 
	 public function call_updateStudent()
	 {
		 $json = updateStudent();
		 echo $json;
	 }
	 
	 public function call_deleteStudent()
	 {
		 $json = deleteStudent();
		 echo $json;
	 }
	 
	 /**
	 * CRUD function calls for Users table
	 */
	 public function call_addUser()
	 {
		 $json = addUser();
		 echo $json;
	 }
	 
	 public function call_getUser()
	 {
		 $json = getUser();
		 echo $json;
	 }
	 
	 public function call_updateUser()
	 {
		 $json = updateUser();
		 echo $json;
	 }
	 
	 public function call_deleteUser()
	 {
		 $json = deleteUser();
		 echo $json;
	 } 
}