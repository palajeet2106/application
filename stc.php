<?php
include("code.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STC</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid mt-5 ">
        <div>
            <h2>Welcome <?php echo $_SESSION['email']; ?></h2>
        </div>
        <div class="row">
            <div class="col-md-2">
                <h2>Links</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="display.php" class="text-decoration-none">View / Update profile</a></li>
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

            <div class="col-md-10">
                <a href="logout.php" class=" float-end m-1 mb-2 btn btn-danger text-decoration-none text-white">Log Out</a>
                <a href="addstc.php" class=" m-1 float-end mb-2 btn btn-primary text-decoration-none text-white">Add STC Record</a>


                <table class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th colspan="15" class="text-center bg-primary text-white">List of Complete Application for Short Term course</th>

                        </tr>
                        <tr>
                            <th>SNo</th>
                            <th>Course Title</th>
                            <th>Course Coordinator's Name</th>
                            <th>Year</th>
                            <th>OPlan No.</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Venue</th>
                            <th>Coordinating Dept.</th>
                            <th>Appl.ID</th>
                            <th>AICTE</th>
                            <th>Teqip</th>
                            <th>Appl.date</th>
                            <th>Occupation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sn = 1;
                        $user_id = $_SESSION['user_id'];
                        $sql = "SELECT * FROM registration WHERE id = '$user_id'";
                        $res = $conn->query($sql);
                        while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                            <tr>
                                <td>
                                    <?php echo $sn; ?>
                                </td>
                                <td>
                                    <?php echo $row['course_title'] ?>
                                </td>
                                <td>
                                    <?php echo $row['cooradinator_name'] ?>
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
                                    <?php echo $row['aicte'] ?>
                                </td>
                                <td>
                                    <?php echo $row['teqip'] ?>
                                </td>
                                <td>
                                    <?php echo $row['appldate'] ?>
                                </td>
                                <td>
                                    <?php echo $row['occupation'] ?>
                                </td>
                                <td>
                                    <a href="stcupdate.php?id=<?php echo $row['id']; ?>&up=update">Update</a>
                                    <a href="code.php?id=<?php echo $row['id']; ?>&up=delete" onclick="return confirm('Are you sure to delete this record ?')">Delete</a>


                                </td>


                            </tr>
                        <?php
                            $sn++;
                        }



                        ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    </table>

</body>
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>