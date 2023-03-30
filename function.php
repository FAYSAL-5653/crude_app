<?php
class Crude
{

 private $con;

 public function __construct()
 {
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpassword = "";
   $dbname = "crudeapp";
   $this->con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
   $conReport = (!$this->con) ? " Sorry !!! connection is not created" : " yeahoo!!!!!connection is created successfully ";
   echo $conReport;
 }

 public function insertData($data)
 {
   $Name = $data['name'];
   $Email = $data['email'];
   $Password = $data['password'];
   $img_Name = $_FILES['profile_pic']['name'];
   $img_Tmpname = $_FILES['profile_pic']['tmp_name'];
   $qeary = "INSERT INTO students(uname,email,pass,img) VALUES ('$Name','$Email','$Password','$img_Name')";
   $setData = mysqli_query($this->con, $qeary);
   if ($setData) {
     move_uploaded_file($img_Tmpname, 'uplods/' . $img_Name);
     return "information insert successfully";
   } else {
     echo "image upload fail";
   }
 }

 public function displayData()
 {
   $qeary =  "SELECT * FROM students ";
   $getData = mysqli_query($this->con, $qeary);
   if ($getData) {
     return $getData;
   }
 }

 public function updateData($id)
 {
   $qeary =  "SELECT * FROM students WHERE id='$id' ";
   $get_update_Data = mysqli_query($this->con, $qeary);
   if ($get_update_Data) {
     $singleData = mysqli_fetch_assoc($get_update_Data);
     return $singleData;
   }
 }

 public function updateInfo($data)
 {
   $idNum = $data['u_id'];
   $e_Name = $data['u_name'];
   $e_Email = $data['u_email'];
   $e_Password = $data['u_password'];
   $e_img_Name = $_FILES['u_profile_pic']['name'];
   $e_img_Tmpname = $_FILES['u_profile_pic']['tmp_name'];
   $qeary = "UPDATE students SET uname='$e_Name ',email='$e_Email ',pass='$e_Password ',img='$e_img_Name ' WHERE id=$idNum";
   $get_update_Info_Data = mysqli_query($this->con, $qeary);
   if ($get_update_Info_Data) {
     move_uploaded_file($e_img_Tmpname, 'uplods/' . $e_img_Name);
     echo "Information update successfully";
   }
 }

 public function deleteData($id)
 {
   $qeary =  "SELECT * FROM students WHERE id='$id' ";
   $get_find_Data = mysqli_query($this->con, $qeary);
   $singleData = mysqli_fetch_assoc($get_find_Data);
   $get_img = $singleData['img'];
   $del_qeary =  "DELETE FROM students WHERE id='$id' ";
   $delete_Data = mysqli_query($this->con, $del_qeary);
   if ($delete_Data !== false) {
     unlink('uplods/' . $get_img);
     return "Delete done";
   }
 }
}

