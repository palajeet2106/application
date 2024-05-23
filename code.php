<?php
include("connection.php");

if(isset($_POST['submit'])){
    create($conn);
}
if(isset($_POST['update'])){
    update($conn);
}
if(isset($_REQUEST['id']) && isset($_REQUEST['cmd']) && $_REQUEST['cmd'] == 'delete'){
    $id = $_REQUEST['id'];
    $row = delete($conn , $id);
}
if(isset($_POST['login'])){
    login($conn);
}

if(isset($_POST['submitbtn'])){
    createStc($conn);
}
if(isset($_POST['updatebtn'])){
    stcUpdate($conn);
}
if(isset($_REQUEST['id']) && isset($_REQUEST['up']) && $_REQUEST['up'] == 'delete'){
    $id = $_REQUEST['id'];
    $row = stcDelete($conn , $id);
}

if(isset($_POST['submitBtn'])){
    createCertificate($conn);
}
if(isset($_POST['updateBtn'])){
    updateCertificate($conn);
}
if(isset($_REQUEST['id']) && isset($_REQUEST['certificate']) && $_REQUEST['certificate'] == 'delete'){
    $id = $_REQUEST['id'];
    $row = certificateDelete($conn , $id);
}
function create($conn){
    $name = $_POST['name'];
    $email = mysqli_real_escape_string($conn , stripcslashes($_POST['email']));
    $contact = $_POST['contact'];
    $password = mysqli_real_escape_string($conn , stripcslashes(md5($_POST['password'])));
    $gender = $_POST['gender'];
    $file = $_FILES['pic']['name'];
    $folder = "images/";
    $path = $folder.basename($file);
    move_uploaded_file($_FILES['pic']['tmp_name'] , $path);
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
  
    $sql = "INSERT INTO `registration`(`name`, `email`, `contact`, `gender`, `pic`, `dob`, `religion`, `category`, `qualification`, `designation`, `department`, `interest`, `insname`, `insplace`, `insstate`, `insnature`, `instype`, `password`) VALUES ('$name','$email','$contact','$gender','$path','$dob','$religion','$category','$qualification','$designation','$department','$interest','$insName','$insPlace','$insState','$insNature','$insType','$password')";
   
    $res = $conn -> query($sql);

   
    if($res){
       
        $msg= "Registration Successful";
        echo $msg;
        ?>
        <script>
            alert("Registration Successful");
            window.location.href = "lrdc.php";
        </script>
        <?php

    }
    
}



function update($conn){
    $name = $_POST['name'];
    $email = mysqli_real_escape_string($conn , stripcslashes($_POST['email']));
    $contact = $_POST['contact'];
    $password = mysqli_real_escape_string($conn , stripcslashes(md5($_POST['password'])));
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
    $id = $_POST['userId'];

    $file = $_FILES['pic']['name'];
    if(!empty (basename($file))){
        $folder = "images/";
        $path = $folder.basename($file);
    }else{
        $path = $_POST['picdb'];
    }
    
    move_uploaded_file($_FILES['pic']['tmp_name'] , $path);

    $sql = "UPDATE registration SET name = '$name' , email = '$email' , contact = '$contact' , gender = '$gender' , pic = '$path' , dob = '$dob' ,religion = '$religion' , category = '$category' , qualification = '$qualification' , designation = '$designation' , department = '$department' ,interest = '$interest' , insname = '$insName' , insplace = '$insPlace', insstate = '$insState' , insnature = '$insNature' , instype = '$insType' WHERE id = '$id'  ";
   if( $res = $conn -> query($sql)){
    
     $msg= "Record Updated";
     echo $msg;
     ?>
    <script>
        alert("Record Update");
        window.location.href = "display.php";
    </script>
    <?php
   }

   
}

function edit($conn , $id){
    $sql = "SELECT * FROM registration WHERE id = '$id'";
    $res = $conn -> query($sql);
    $row = mysqli_fetch_assoc($res);
    return $row;


}
function delete($conn , $id){
    $sql = "DELETE FROM registration WHERE id = '$id'";
   if( $res = $conn -> query($sql)){
    ?>
    <script>
        alert("Record Deleted");
        window.location.href = "display.php";
    </script>
    <?php
   }else{
    ?>
    <script>
        window.location.href = "display.php";
    </script>
    <?php
   }
}

function login($conn){
    $email = mysqli_real_escape_string($conn , stripcslashes($_POST['email']));
    $password = mysqli_real_escape_string($conn , stripcslashes(md5($_POST['password'])));
    $sql = "SELECT * FROM registration WHERE email = '$email' AND password = '$password'";
    $res = mysqli_query($conn , $sql);
    if(mysqli_num_rows($res) == 1){
        $row = mysqli_fetch_assoc($res);
        $_SESSION['email'] = $row['name'];
        $_SESSION['user_id'] = $row['id'];
        ?>
        <script>
            window.location.href = "display.php";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Invalid email or password");
            window.location.href = "lrdc.php"
        </script>
        <?php
    }


}


function createStc($conn){
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

    $sql = "INSERT INTO `registration`(`course_title`, `cooradinator_name`, `year`, `oplan`, `startdate`, `enddate`, `venue`, `coordinatingdept`, `applid`, `aicte`, `teqip`, `appldate`, `occupation`) VALUES ('  $courseTitle','$coordinatorName','$year',' $oPlan','$startDate','$endDate','$venue',' $coordinatingDept',' $applId','    $aicte','   $teqip','  $applDate',' $occupation')";
    $res = $conn -> query($sql);
    if($res){

        $msg= "Record Updated";
        echo $msg;
        ?>
        <script>
            alert("Record Added");
            window.location.href = "stc.php";
        </script>
        <?php
    }
}



    
        

function stcUpdate($conn){
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
    $id = $_POST['userid'];

    $sql = "UPDATE registration SET course_title = '$courseTitle' ,cooradinator_name = '$coordinatorName' , year = '$year',oplan = '$oPlan' , startdate = '$startDate' , enddate = '$endDate' , venue = '$venue' ,coordinatingdept = '$coordinatingDept' ,  applid = '$applId' , aicte = '$aicte' , teqip = '$teqip' , appldate = '$applDate' , occupation = '$occupation' WHERE id = '$id'";
    
    if(mysqli_query($conn , $sql)){
        
         $msg= "Record Updated";
         echo $msg;
         ?>
        <script>
            alert("Record updated");
            window.location.href = "stc.php";
        </script>
        <?php
    }

}

function stcEdit($conn , $id){
    $sql = "SELECT  * FROM registration WHERE id = '$id'";
    $res = $conn -> query($sql);
    $row = mysqli_fetch_assoc($res);
    return $row;

}

function stcDelete($conn , $id){
    $sql = "DELETE FROM registration WHERE id = '$id'";
   if( $res = $conn -> query($sql)){
    ?>
    <script>
        alert("Record Deleted");
        window.location.href = "stc.php";
    </script>
    <?php
   }else{
    ?>
    <script>
        window.location.href = "stc.php";
    </script>
    <?php
   }
}

function createCertificate($conn){
    $courseTitle = $_POST['course_title'];
    $year = $_POST['year'];
    $oPlan = $_POST['oplan_no'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];
    $venue= $_POST['venue'];
    $coordinatingDept= $_POST['coordinating_dept'];
    $applId = $_POST['appl_id'];

    $sql = "INSERT INTO `registration`(`course`, `year`, `oplan`, `startdate`, `enddate`, `venue`, `coordinatingdept`, `applid`) VALUES ('$courseTitle','$year',' $oPlan',' $startDate',' $endDate','$venue','$coordinatingDept','    $applId')";
    $res = $conn -> query($sql);
    if($res){

         $msg= "Record Updated";
         echo $msg;
         ?>
         <script>
             alert("Record Added");
             window.location.href = "displaycertificate.php";
         </script>
         <?php
    }
}

function displayCertificate($conn){
        $sn = 1;
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT * FROM registration WHERE id = '$user_id'";
        $res = $conn -> query($sql);
        while($row = mysqli_fetch_assoc($res)){
            ?>
            <tr>
                 <td>
                 <?php echo $sn; ?>
                 </td>
                 <td>
                 <?php echo $row['course'] ?>
                 </td>
                 <td>
                 <?php echo $row['year'] ?>
                 </td>
                 <td>
                 <?php echo $row['oplan'] ?>
                 </td>
                 <td>
                 <?php echo $row['startdate'] ?>
                 </td>
                 <td>
                 <?php echo $row['enddate'] ?>
                 </td>
                 <td>
                 <?php echo $row['venue'] ?>
                 </td>
                 <td>
                 <?php echo $row['coordinatingdept'] ?>
                 </td>
                 <td>
                 <?php echo $row['applid'] ?>
                 </td>
                 <td>
                    <a href="">Download</a><br>
                 </td>
                 <td>
                    <a href="updatecertificate.php?id=<?php echo $row['id']; ?>&certificate=update">Update</a>
                    <a href="code.php?id=<?php echo $row['id']; ?>&certificate=delete" onclick="return confirm('Are you sure to delete this record ?')">Delete</a>
                    
                  
                 </td>
                 
                 
            </tr>
            <?php
      $sn++;  }
    }
function updateCertificate($conn){
    $courseTitle = $_POST['course_title'];
    $year = $_POST['year'];
    $oPlan = $_POST['oplan_no'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];
    $venue= $_POST['venue'];
    $coordinatingDept= $_POST['coordinating_dept'];
    $applId = $_POST['appl_id'];
    $id = $_POST['eid'];

    $sql = "UPDATE registration SET course = '$courseTitle' , year = '$year',oplan = '$oPlan' , startdate = '$startDate' , enddate = '$endDate' , venue = '$venue' ,coordinatingdept = '$coordinatingDept' ,  applid = '$applId'  WHERE id = '$id'";
    
    if(mysqli_query($conn , $sql)){
        
        $msg= "Record Updated";
        echo $msg;
        ?>
        <script>
            alert("Record updated");
            window.location.href = "displaycertificate.php";
        </script>
        <?php
    }

}

function certificateEdit($conn , $id){
    $sql = "SELECT  * FROM registration WHERE id = '$id'";
    $res = $conn -> query($sql);
    $row = mysqli_fetch_assoc($res);
    return $row;

}

function certificateDelete($conn , $id){
    $sql = "DELETE FROM registration WHERE id = '$id'";
   if( $res = $conn -> query($sql)){
    ?>
    <script>
        alert("Record Deleted");
        window.location.href = "displaycertificate.php";
    </script>
    <?php
   }else{
    ?>
    <script>
        window.location.href = "displaycertificate.php";
    </script>
    <?php
   }
}

?>