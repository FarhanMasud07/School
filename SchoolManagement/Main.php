<?php
	include "valo.php";
?>

<!DOCTYPE html>

<html>
	<head>
		<title>My First Login Page</title>	
		<link rel="stylesheet" href="../SchoolManagement/uff.css">
	</head>	
	<body>
              
                <ul>
		            <li><a href="StudentRegistration.php">Sign Up</a> </li>
		        </ul>
	    
		<div id = "frm">
			<form  method="post">
				<div >
					<p>
                       <i><b><label>Username</label> </b></i>
                       <input type ="text" name = "username" placeholder = "Enter username">
                       
                    </p>
				</div>
				
				<div >
				    <p>
                        <i><b><label>Password</label></b></i>
				        <input type ="password" name = "password" placeholder = "Enter password"></b>
				    </p>
					
				</div>
				
				<div >
					<input type ="submit" id = "btn" name = "submit" value="Login">
				</div>
				
				
				
					
				
			</form>
		</div>
		
		
	</body>
</html>

<?php

    

	if(isset($_POST['submit']))
	{
        
        
        
            $count = 0;
            $user = $_POST['username'];
            $psd = $_POST['password'];

            $query = mysqli_query($link,"select * from voda where user_name = '$user'  and pass_word = '$psd' ");

            $count = mysqli_num_rows($query);

            if($count==0)
            {
                ?><!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">

                     <link rel="stylesheet" href="../login/uff.css">
                </head>
                <body>
                    <div id="inv">
                       <strong id="la">Invalid</strong>
                        Username or Password
                    </div>
                </body>
                </html>


                <?php
            }
            else
            {
                ?>
                    <script type="text/javascript">
                        window.location = "demo.php";
                    </script>
                <?php
            }


            if(mysqli_num_rows($query))
            {

            }

        
        
		
		
	}
?>