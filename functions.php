<?php
//error_reporting(0);
include('config.php');

  class func extends Config
  {

    //For Registration
    public function registration($fname,$email,$password,$mobileno,$state,$gender,$dob,$qualification,$image)
      {
      $reg_query = "INSERT INTO user_info(username,email,password,mobileno,state,gender,dob,qualification,profile)
       VALUES ('$fname', '$email', '$password','$mobileno', $state', '$gender','$dob' , '$qualification','$image')" ;
      $result = $this->connect()->query($reg_query);
      return $result;
      }
      
      public function contact_feedback($fname,$lname,$state,$message)
      {
      $reg_query = "INSERT INTO contact_feedback(fname,lname,state,message)
       VALUES ('$fname', '$lname','$state','$message')" ;
      $result = $this->connect()->query($reg_query);
      return $result;
      }
    

      public function courses($cid,$cname,$cd,$category)
      {
      $reg_query = "INSERT INTO courses(course_id,course_name,duration,course_category)
       VALUES ('$cid', '$cname', '$cd','$category')" ;
      $result = $this->connect()->query($reg_query);
      return $result;
    }

 public function listing()
    {

      $listing_query = "SELECT * FROM user_info";
      $result = $this->connect()->query($listing_query);
      return $result;
    }

    public function listing1()
    {

      $listing_query = "SELECT * FROM contact_feedback";
      $result = $this->connect()->query($listing_query);
      return $result;
    }

public function enrollments()
    {

      $listing_query = "SELECT * FROM enrollments";
      $result = $this->connect()->query($listing_query);
      return $result;
    }

   

    public function delete($id)
    {


      $image = $_FILES['image']['name'];
      $filetmpname = $_FILES['image']['tmp_name'];
      $folder = 'upload/';
      $dimage ="SELECT profile from user_info WHERE id = '$id' ";
      $r1 = $this->connect()->query($dimage);

      $dimg = mysqli_fetch_array($r1);
      echo $fimg = $dimg['image'];
    

      $delete ="DELETE FROM user_info WHERE id = '$id' ";
      $result = $this->connect()->query($delete);
      if(file_exists($folder.$fimg))
          {
            unlink($folder.$fimg);
          }
      return $result;
    }


 public function update_details($fname,$email,$mobileno,$dob)
 {

      $id = $_GET['id'];
      $fname = $_POST['fname'];
      $email = $_POST['email'];
      $mobileno = $_POST['mobileno'];
      $dob=$_POST['dob'];
       $update_details ="UPDATE user_info SET 
          username = '$fname', 
          email = '$email',
          mobileno = '$mobileno',
          dob='$dob'
          WHERE id = '$id' " ;
          $result = $this->connect()->query($update_details);
          return $result;
}

  public function edit_details($id)
    {
    
      $edit_details = "SELECT * FROM user_info WHERE id = '$id' ";
      $result = $this->connect()->query($edit_details);
      return $result;
    }



    }
?>


