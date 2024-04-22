<?php require('config.php')?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Job Application</title>
<link rel="stylesheet" href="style.css">
</head>


<body>
    <div class="container">
        <div class="apply_box">
            <h1>
                Job Application
                <span style="font-size: 20px;">(web)</span>
            </h1
        
            <form action="post">
                <div class="form_container">
                    <div class="form_control">
                        <label for="First_Name">First Name</label>
                        <input id="First_Name"
                        name="First_Name"
                        placeholder="Enter Your First Name ">
                    </div>

                    <div class="form_control">
                        <label for="last">Last Name</label>
                        <input id="last"
                        name="last"\
                        placeholder="Enter Your last Name ">
                    </div>

                    <div class="form_control">
                        <label for="E-mail">E-mail</label>
                        <input
                        type="email" 
                        id="E-mail"
                        name="Email"
                        placeholder="Enter Your E-mail">
                    </div>

                    <div class="form_control">
                        <label for="job_role">Job Role </label>
                        <select id="job_role" name="job_role">
                            <option value="v">Secle Job Role</option>
                            <option value="Frontend">Frontend Developer</option>
                            <option value="Backend">Backend Developer</option>
                            <option value="Full Stack">Full Stack Developer</option>
                            <option value="ui ux"> UX UI Designer</option>
                        </select>
                    </div>

                    <div class="form1_control">
                        <label for="address">Enter Address</label>
                        <textarea
                            id="address" 
                            name="address" 
                            rows="4"
                            cols="40" 
                         placeholder="Enter addreess"></textarea> 
                    </div>

                    <div class="form_control">
                        <label for="city">City</label>
                        <input
                        id="city"
                        name="city"
                        placeholder="Enter Your city name">
                    </div>

                    <div class="form_control">
                        <label for="pin-code">pin-code</label>
                        <input
                        type="number"
                        id="pin-code"
                        name="pincode"
                        placeholder="Enter Your pin-code">
                    </div>

                    <div class="form_control">
                        <label for="date">Date</label>
                        <input
                        type="date"
                        id="date"
                        name="date">
                    </div>

                    <div class="form_control">
                        <label for="file">File</label>
                        <input
                        type="file"
                        id="upload"
                        name="upload">
                    </div>
                </div>
                <br>
                <div class="button_container">
                    <button type="submit" name='Appl_ynow'>submit</button>
                </div>
            </form>
            <?php
            if(isset($_POST ['Apply_now'])){
                $First_Name=$_POST['First_Name'];
                $last=$_POST['last'];
                $Email=$_POST['Email'];
                $job_role=$_POST['job_role'];
                $address=$_POST['address'];
                $city=$_POST['city'];
                $pincode=$_POST['pin-code'];
                $date=$_POST['date'];
                $upload=$_POST['upload'];
                $sql="INSERT INTO user (First_Name,last,Email,job_role,address,city,pincode,date,upload) VALUE ('$First_Name','$last','$Email','$job_role','$address','$city','$pincode','$date','$upload' )";
                mysqli_query($con,$sql)or die (mysqli_error($con));
                echo $res;
                if($res==1){
                    ?>
                    <div class="alert alert-success">
                        your registration is successfull

                    </div>
                    <?php
                }else{
                    ?>
                    <div class="alert alert-success">
                        your registration is not successfull

                    </div>
                    <?php
                }

            }
            
            ?>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

    
</body>
</html>