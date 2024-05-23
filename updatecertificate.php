<?php
include("code.php");
if(isset($_REQUEST['id']) && isset($_REQUEST['certificate']) && $_REQUEST['certificate'] == 'update'){
    $id = $_REQUEST['id'];
    $row = certificateEdit($conn , $id);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">
                <h2>Course Information Form</h2>
                </div>
                <div class="card-body">
                <div class="alert alert-success" id="message"></div>
                    <form method="post" action="code.php" id = "form">
                        <div class="form-group">
                            <label ><b>Course Title:</b></label>
                            <input type="text" class="form-control" id="courseTitle" name="course_title" value="<?php echo $row['course']; ?>">
                        </div>

                       

                        <div class="form-group">
                            <label for="year"><b>Year:</b></label>
                            <input type="date" class="form-control" id="year" name="year" value="<?php echo $row['year']; ?>">
                        </div>
                        <div class="form-group">
                            
                            <input type="hidden" class="form-control"  name="eid"value="<?php echo $row['id']; ?>" >
                        </div>

                        <div class="form-group">
                            <label for="oplanNo"><b>OPlan No.:</b></label>
                            <input type="text" class="form-control" id="oplanNo" name="oplan_no" value="<?php echo $row['oplan']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="startDate"><b>Start Date:</b></label>
                            <input type="date" class="form-control" id="startDate" name="start_date" value="<?php echo $row['startdate']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="endDate"><b>End Date:</b></label>
                            <input type="date" class="form-control" id="endDate" name="end_date" value="<?php echo $row['enddate']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="venue"><b>Venue:</b></label>
                            <input type="text" class="form-control" id="venue" name="venue" value="<?php echo $row['venue']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="coordinatingDept"><b>Coordinating Dept.:</b></label>
                            <input type="text" class="form-control" id="coordinatingDept" name="coordinating_dept" value="<?php echo $row['coordinatingdept']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="applId"><b>Appl.ID:</b></label>
                            <input type="text" class="form-control" id="applId" name="appl_id" value="<?php echo $row['applid']; ?>">
                        </div>
                        <input type="hidden" name = "updateBtn" value="updateform">
                        <button type="submit"  class="btn btn-primary">Update</button>
                    </form>
</div>
    
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</body>
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>

    <script>
    $(function(){
    
    $("#message").hide();

     $("#form").submit(function(e){
        e.preventDefault();
        $.ajax({
            method: "POST",
            url: "code.php",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(res){
               $("#message").show(); 
               $("#message").html(res);
               $("#form").trigger('reset');
               
                
            }

        })
    })

})
</script>

</html>