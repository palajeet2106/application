<?php

class connect{
  function __construct(){
    $this ->conn = mysqli_connect("localhost" , "root" , "", "project");
  }

  function admin(){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $res  = mysqli_query($this -> conn , $sql);
    if(mysqli_num_rows($res) == 1){
      $row = mysqli_fetch_assoc($res);
      $msg= "success";
    }else{
      $msg= "Invalid Username Or Password";
    }
    return $msg;
    }

    function view(){
      $sql = "SELECT * FROM registration";
     $res  = mysqli_query($this -> conn , $sql);
     return $res;
    }

    function update($id){
      $name = $_POST['name'];
      $email = mysqli_real_escape_string($this -> conn , stripcslashes($_POST['email']));
      $contact = $_POST['contact'];
      $password = mysqli_real_escape_string($this -> conn , stripcslashes(md5($_POST['password'])));
      $gender = $_POST['gender'];
      $religion = $_POST['religion'];
      $dob = $_POST['dob'];
      $category = $_POST['category'];
      $designation = $_POST['designation'];
      $qualification = $_POST['qualification'];
      $department = $_POST['department'];
      $interest = $_POST['interest'];
      $insName = $_POST['insanme'];
      $insPlace = $_POST['insplace'];
      $insState = $_POST['insstate'];
      $insNature = $_POST['insnature'];
      $insType = $_POST['instype'];

      $file = $_FILES['pic']['name'];
      if(!empty (basename($file))){
          $folder = "images/";
          $path = $folder.basename($file);
      }else{
          $path = $_POST['picdb'];
      }

      move_uploaded_file($_FILES['pic']['tmp_name'] , $path);

      $sql = "UPDATE registration SET name = '$name' , email = '$email' , contact = '$contact' , gender = '$gender' , pic = '$path' , dob = '$dob' ,religion = '$religion' , category = '$category' , qualification = '$qualification' , designation = '$designation' , department = '$department' ,interest = '$interest' , insname = '$insName' , insplace = '$insPlace', insstate = '$insState' , insnature = '$insNature' , instype = '$insType' WHERE id = '$id' ";
     if( $res = mysqli_query($this -> conn , $sql)){

       $msg= "Record Updated";
       echo $msg;
     }


  }

  function edit( $id){
      $sql = "SELECT * FROM registration WHERE id = '$id'";
      $res = mysqli_query($this -> conn , $sql);
      $row = mysqli_fetch_assoc($res);
      return $row;


  }
  function delete($id){
      $sql = "DELETE FROM registration WHERE id = '$id'";
     if( $res = mysqli_query($this -> conn , $sql)){
      ?>
      <script>
          alert("Record Deleted");
          window.location.href = "view.php";
      </script>
      <?php
     }else{
      ?>
      <script>
          window.location.href = "view.php";
      </script>
      <?php
     }
  }

  function stcUpdate($id){
    $courseTitle = $_POST['course_title'];
    $coordinatorName = $_POST['coordinator_name'];
    $year = $_POST['year'];
    $oPlan = $_POST['oplan_no'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];
    $venue= $_POST['venue'];
    $coordinatingDept= $_POST['coordinating_dept'];
    $applId = $_POST['appl_id'];
    $aicte = $_POST['aicte'];
    $teqip = $_POST['teqip'];
    $applDate = $_POST['appl_date'];
    $occupation = $_POST['occupation'];


    $sql = "UPDATE registration SET course_title = '$courseTitle' ,cooradinator_name = '$coordinatorName' , year = '$year',oplan = '$oPlan' , startdate = '$startDate' , enddate = '$endDate' , venue = '$venue' ,coordinatingdept = '$coordinatingDept' ,  applid = '$applId' , aicte = '$aicte' , teqip = '$teqip' , appldate = '$applDate' , occupation = '$occupation' WHERE id = '$id'";

    if($res = mysqli_query($this ->conn , $sql)){

         $msg= "Record Updated";
         echo $msg;
         ?>
        <script>
            alert("Record updated");
            // window.location.href = "stc.php";
        </script>
        <?php
    }

}
function stcDelete($id){
  $sql = "DELETE FROM registration WHERE id = '$id'";
 if( $res = mysqli_query($this->conn , $sql)){
  ?>
  <script>
      alert("Record Deleted");
      window.location.href = "view-stc.php";
  </script>
  <?php
 }else{
  ?>
  <script>
      window.location.href = "view-stc.php";
  </script>
  <?php
 }
 return $res;
}


  }




$user = new connect();
?>
