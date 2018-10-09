<?php
    include "header.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Home Page</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add Student Information</h2>
                                     <label class="text-danger">  

                                    </label>  

                                <div class="clearfix"></div>
                                
                         <form method="post">
                                    </div>
                            <div>
                             
                               <label>Class No</label>
                                <input type="text" id="cl" name="Class" placeholder="---Class---">
                            </div>
                            
                            <div >
                               <label>Student Count</label>
                                <input type="text" id="sc" name="count" placeholder="---Count---">
                            </div>
                            
                            <div>
                               <label>Section</label>
                                <input type="text" id="sec" name="section" placeholder="---Section---">
                            </div>
                            
                            
                            <br/>
                            
                            <div>
                               
                                <input type="submit" id="log" name="Submit" value="Submit">
                            </div>
                                                                           
                        </form>
                         
                         <br/>
                         <br/>
                         
                         
                         
             <!-- *******************  FOR INSERT *******************   -->                      
                          
                           
        <?php
            
           $link = mysqli_connect("localhost","root","");
             mysqli_select_db($link,"sms");
                            
                
                            
               
            
            if(isset ($_POST["Submit"]))
            {
                if(empty($_POST["Class"]))
                {
                    echo "Class Cannot be Empty";
                }
                else{
                $count = 0;
                
                $clsno =$_POST["Class"];
                $stdc = $_POST["count"];
                $sec = $_POST["section"];
                
                $query = mysqli_query($link,"select * from  student_class_info where class = '$clsno'");
                
                $count = mysqli_num_rows($query);
                
                        if( $count > 0)
                        {
                            ?>
                                   <div class="alert alert-success col-lg-6 col-lg-push-3">
                                    Information Already Exits
                                   </div>
                                   <br/>
                                   
                            <?php
                        }
                        else
                        {
                             mysqli_query($link,"insert into student_class_info(class,std_count,section) values(' $clsno ','$stdc',' $sec')");
                            
                            
                                ?>
                                   <div class="alert alert-success col-lg-6 col-lg-push-3">
                                    Added Successfully
                                   </div>
                                   
                                <?php
                        }
                  
               
                
                }
                     
                
            }
                else
                {
                    echo "OPPS";
                    
                }
                
               
                
                
                
            
                                
                         
                           
                   // *******************  FOR DELETE *******************
                            
                            
                            
                            
              $link = mysqli_connect("localhost","root","");
                mysqli_select_db($link,"sms");
                $query = mysqli_query ($link,"select * from student_class_info") ;
                            
             echo "<table class = 'table table-bordered'>";
                            echo "<th>"; echo "Class"; echo "</th>";
                             echo "<th>"; echo "Total Student"; echo "</th>";
                             echo "<th>"; echo "Section"; echo "</th>";
                            echo "<th>"; echo "Delete Row"; echo "</th>";
                            
                            while($row = mysqli_fetch_array($query))
                            {
                               echo "<tr>";
                                
                                 echo "<td>"; echo $row["class"]; echo "</td>";
                                 echo "<td>"; echo $row["std_count"]; echo "</td>";
                                 echo "<td>"; echo $row["section"]; echo "</td>";
                        echo "<td>"; 
                                
                            ?>   
                                   
                                   
                              <a href="delete.php?id=
                                
                                    <?php 
                                            echo $row["id"];


                                    ?>
                                    
                                " >Delete</a> 
                                
                                
                            <?php   
                                
                                
                        echo "</td>";
                                
                                
                               echo "</tr>";
                            }
            
            echo "</table>"; 
                        
                           
                             
                        

        ?>                
                           
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
        
        
       
<?php
    include "footer.php";
?>
