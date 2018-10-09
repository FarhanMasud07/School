<?php
    
$link = mysqli_connect("localhost","root","");
    mysqli_select_db($link,"sms");


if(isset ($_GET["id"]))
{
        
    
        $id = $_GET["id"];

        mysqli_query($link,"delete from student_class_info where id=$id");
    

?>


        <script type="text/javascript">

          window.location="demo.php";
            
           

        </script>
<?php
    
    
}

else

{
        
    ?>
    
           <script type="text/javascript">

            window.location="demo.php";

        </script>
    
    <?php

}
