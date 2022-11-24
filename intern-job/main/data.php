                    <?php
                        include_once("./dbcon/db.php");

                        if(isset($_POST['submit']))
                        {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $mob = $_POST['mob'];
                            $dob = $_POST['dob'];

                            $today = date("y-m-d");
                            $diff = date_diff(date_create($dob),date_create($today));
                            echo "Age is ".$diff->format('%y')."<br>";
                            $lim = $diff->format('%y');

                            if($lim>=18)
                            {
                                $insert_query = "INSERT INTO `userinfo` (`user_id`, `name`, `email`, `mob`, `dob`) VALUES (NULL, '$name', '$email', '$mob', '
                                $dob')";
                                $insert_query_run = mysqli_query($con,$insert_query);
                                if($insert_query_run)
                                {
                                    echo "yes";
                                }
                                else{
                                    echo "NO";
                                }
                            }
                            else{
                               $lim_err = "18+ Only Fill this form.";
                            }
                            
                        }
                        echo $lim_err;
                        header('location:index.php');
                    ?>
                    
                    
