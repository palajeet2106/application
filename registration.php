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

    <div class="container mt-5 ">
        <div class="card">
        <div class="card-header bg-primary text-white">
        <h2 class="text-center">Registration Form</h2>
        </div>
        <div class="card-body">
        <div class="alert alert-success" id="message"></div>
        <form  id = "form"action="code.php" method="post" enctype="multipart/form-data">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td><label><b>Name </b></label></td>
                        
                        <td><input type="text" class="form-control" name="name" placeholder="Enter your name" autocomplete="off" required></td>
                       
                        <td ><label><b>Photo</b></label></td>
                        <td > <input type="file" class="form-control-file" name = "pic" accept="image/*"></td>
                       
                    </tr>
                    <tr>
                    <td><label><b>Email </b></label></td>
                        <td><input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off" required></td>

                        <td><label><b>Contact </b></label></td>
                        <td><input type="number" class="form-control" name="contact" placeholder="Enter your contact" autocomplete="off" required></td>
                        
                    </tr>
                    <tr>

                        <td><label><b>Gender </b></label></td>
                        <td>
                            <input type="radio" name="gender" value="male"> Male
                            <input type="radio" name="gender" value="female"> Female
                        </td>
                        <td><label><b>Religion</b></label></td>
                        <td>
                            <input type="text" name="religion" class="form-control" placeholder=" Enter Religion" autocomplete="off">
                        </td>
                    </tr>
                    <tr>

                        <td><label><b>Category</b></label></td>
                        <td> <input type="text" name="category" class="form-control" placeholder="Enter category" ></td>
                        <td><label><b>Highest Qualification</b></label></td>
                        <td><input type="text" class="form-control" name="qualification" placeholder="Enter your qualification" autocomplete="off"></td>
                    </tr>
                    <tr>

                        <td><label><b>Designation</b></label></td>
                        <td><input type="text" class="form-control" name="designation" placeholder="Enter your designation" autocomplete="off"></td>
                        <td><label><b>Department</b></label></td>
                        <td><input type="text" class="form-control" name="department" placeholder="Enter your department" autocomplete="off"></td>
                    </tr>
                    <tr>

                        <td ><label><b>Area of specialization/ Interest</b></label></td>
                        <td ><input type="text" class="form-control" name="interest" placeholder="Enter your interest" autocomplete="off"></td>
                        <td><label><b>Date Of Birth </b></label></td>
                        <td><input type="date" class="form-control" name="dob"></td>
                        
                    </tr>
                    <tr>

                        <td colspan ="2"><label><b>Institute / Organization details</b></label></td>
                        <td style = "line-height : 45px">
                        <label><b>Name :</b></label><br>
                        <label><b>Place :</b></label><br>
                        <label><b>State :</b></label><br>
                        <label><b>Nature :</b></label><br>
                        <label><b>Type :</b></label><br>
                        </td>
                        <td>
                        <input type="text" class="form-control" name="insanme" autocomplete="off"><br>
                        <input type="text" class="form-control" name="insplace" autocomplete="off"><br>
                        <input type="text" class="form-control" name="insstate" autocomplete="off"><br>
                        <input type="text" class="form-control" name="insnature" autocomplete="off"><br>
                        <input type="text" class="form-control" name="instype" autocomplete="off"><br>
                        </td>
                       
                    </tr>
                    <tr>

                    <td colspan = "2"><label><b>Password</b></label></td>
                    <td colspan = "2"><input type="password" class="form-control" name="password" placeholder="Enter your password" autocomplete="off" required></td>
                    
                    </tr>
                    <tr>
                        <td colspan="4" class="text-center">
                        <input type="hidden" name = "submit" value="register">
                            <input type="submit" class="btn btn-primary "  value = "Register Now">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        </div>
        </div>
       
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