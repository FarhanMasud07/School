<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration Form </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">PRD SCHOOL</h1>
</div>


<body class="login" style="margin-top: -20px;">



    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="post">
                    <h2>Student Registration Form</h2><br>

                    <div>
                        <input type="text" class="form-control" placeholder="FirstName" name="firstname" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="LastName" name="lastname" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder="Username" name="username" required=""/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name="password" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Email" name="email" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Contact" name="contact" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Class" name="class" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Enrollment No" name="enrollmentno" required=""/>
                    </div>
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit1" value="Register">
                    </div>

                </form>
            </section>



    </div>

    


</body>
</html>

<?php
        
    

    if(isset($_POST["submit1"]) )
    {
        if(strlen($_POST["password"]<10) )
        {
           echo "<center>Password Should be more then 9 character</center>"; 
        }
        else{
          $link = mysqli_connect("localhost","root","");
            mysqli_select_db($link,"sms");

                $fname=$_POST["firstname"];
                $lname=$_POST["lastname"];
                $uname=$_POST["username"];
                $pass=$_POST["password"];
                $ema=$_POST["email"];
                $cont=$_POST["contact"];
                $cl=$_POST["class"];
                $enrn=$_POST["enrollmentno"];


            mysqli_query($link, "insert into student_registration(firstname,lastname,username,password,email,contact,class,enrollment) values(' $fname','$lname','$uname','$pass','$ema','$cont','$cl','$enrn')");

             ?>
                <div class="alert alert-success col-lg-6 col-lg-push-3">
                    Registration successfully, You will get email when your account is approved
               </div>

            <?php
            
        }
    }
?>


