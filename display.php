<?php
include("code.php");
if (!isset($_SESSION['email'])) {
?>
    <script>
        window.location.href = "lrdc.php";
    </script>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Bootstrap Registration Form</title>
</head>

<body>

    <div class="container-fluid mt-5 ">
        <div>
            <h2>Welcome <?php echo $_SESSION['email']; ?></h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h2>Links</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#form" class="text-decoration-none">View / Update profile</a></li>
                    <li class="list-group-item"><a href="#" class="text-decoration-none">Apply for STCs</a></li>
                    <li class="list-group-item"><a href="stc.php" class="text-decoration-none">STC Applied</a></li>
                    <li class="list-group-item"><a href="#" class="text-decoration-none">Upload your Institute ID Card / Sponsorship letter</a></li>
                    <li class="list-group-item"><a href="#" class="text-decoration-none">Pay Course Fee</a></li>
                    <li class="list-group-item"><a href="displaycertificate.php" class="text-decoration-none">Download certificate</a></li>
                    <li class="list-group-item"><a href="#" class="text-decoration-none">Download Course Material</a></li>
                    <li class="list-group-item"><a href="#" class="text-decoration-none">Change Password</a></li>
                    <li class="list-group-item"><a href="#" class="text-decoration-none">Write Query / issues</a></li>
                </ul>
            </div>
            <div class="col-md-8">
                
                <div class="card" id="form">

                    <div class="card-header bg-primary text-white">
                        <h2 class="text-center">Profile</h2>
                    </div>
                    <div class="card-body">

                        <form action="code.php" method="post" enctype="multipart/form-data">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <h2>User Profile for <?php echo $_SESSION['email']; ?></h2>
                                    <?php
                                    $user_id = $_SESSION['user_id'];
                                    $sql = "SELECT * FROM registration WHERE id = $user_id";

                                    $res = $conn->query($sql);
                                    while ($row = mysqli_fetch_assoc($res)) {




                                    ?>
                                        <tr>
                                            <td><label><b>Name </b></label></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><label><b>Photo </b></label></td>
                                            <td>
                                                <img src="<?php echo $row['pic']; ?>" alt="img" height="80px" width="80px"><br>

                                            </td>

                                        </tr>
                                        <tr>
                                            <td><label><b>Email</b></label></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><label><b>Contact </b></label></td>
                                            <td><?php echo $row['contact']; ?></td>


                                        </tr>
                                        <tr>

                                            <td><label><b>Gender </b></label></td>
                                            <td><?php echo $row['gender']; ?></td>
                                            <td><label><b>Religion</b></label></td>
                                            <td><?php echo $row['religion']; ?></td>
                                        </tr>
                                        <tr>

                                            <td><label><b>Category</b></label></td>
                                            <td><?php echo $row['category']; ?></td>
                                            <td><label><b>Highest Qualification</b></label></td>
                                            <td><?php echo $row['qualification']; ?></td>
                                        </tr>
                                        <tr>

                                            <td><label><b>Designation</b></label></td>
                                            <td><?php echo $row['designation']; ?></td>
                                            <td><label><b>Department</b></label></td>
                                            <td><?php echo $row['department']; ?></td>
                                        </tr>
                                        <tr>

                                            <td><label><b>Area of specialization/ Interest</b></label></td>
                                            <td><?php echo $row['interest']; ?></td>
                                            <td><label><b>Date Of Birth </b></label></td>
                                            <td><?php echo $row['dob']; ?></td>


                                        </tr>


                                        <tr>

                                            <td colspan="2"><label><b>Institute / Organization details</b></label></td>
                                            <td style="line-height : 50px">
                                                <label><b>Name :</b></label><br>
                                                <label><b>Place :</b></label><br>
                                                <label><b>State :</b></label><br>
                                                <label><b>Nature :</b></label><br>
                                                <label><b>Type :</b></label><br>
                                            </td>
                                            <td style="line-height : 58px">
                                                <?php echo $row['insname']; ?><br>
                                                <?php echo $row['insplace']; ?><br>
                                                <?php echo $row['insstate']; ?><br>
                                                <?php echo $row['insnature']; ?><br>
                                                <?php echo $row['instype']; ?><br>

                                            </td>
                                        <tr>

                                            <td colspan="4">

                                                <a href="update.php?id=<?php echo $row['id']; ?>&cmd=update" class=" btn btn-primary text-decoration-none text-white">Update / Edit</a>
                                                <a href="code.php?id=<?php echo $row['id']; ?>&cmd=delete" class=" btn btn-success text-decoration-none text-white" onclick="return confirm('Are you sure to delete this Record ?')">Delete</a>
                                                <a href="logout.php" class="  text-decoration-none text-white btn btn-danger">Log Out</a>
                                            </td>

                                        </tr>


                                        </tr>

                                    <?php
                                    }
                                    ?>


                                </tbody>

                            </table>


                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>



</body>
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>