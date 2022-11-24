<?php 
    include_once('./dbcon/db.php'); 
    global $lim_err;
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <h2 class="text-center">Registration <span>Form</span></h2>
            <div id="line"></div>
            <div class="row form-edit">
                <div class="col-lg-5">
                    <form action="data.php" method="post" name="val_Form" class="form-group">
                        <label for="name">Name</label><span id="err-name">*</span>
                        <input type="text" class="form-control" name="name" id="name" autocomplete="off">

                        <label for="email">Email</label> <span id="err-email">*</span>
                        <input type="text" class="form-control" name="email" id="email" autocomplete="off">
                       
                        <label for="phone">Phone No.</label><span id="err-mob">*</span>
                        <input type="text" class="form-control" name="mob" id="mob" autocomplete="off">
                        
                        <label for="dob">Date of Birth</label><span id="err-dob">*</span>
                        <input type="date" class="form-control" name="dob" id="dob" autocomplete="off">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="submit" onclick="return(validate());" value="Submit" name="submit" class="form-control btn">
                            </div>
                            <div class="col-md-6">
                                <input type="reset" value="reset" name="reset" class="form-control btn">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-7">
                    <table class="table table-stripped table-hover">
                        <thead>
                            <th>Sr no.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone No.</th>
                            <th>Date of Birth</th>
                        </thead>
                        <tbody>
                            <?php
                                $val_query = "SELECT * from userinfo ORDER BY user_id DESC LIMIT 6";
                                $val_query_run = mysqli_query($con,$val_query);
                                if(mysqli_num_rows($val_query_run)>0)
                                {
                                    while($reg = mysqli_fetch_array($val_query_run))
                                    {
                                        $id = $reg['user_id'];
                                        $name = $reg['name'];
                                        $email = $reg['email'];
                                        $mob = $reg['mob'];
                                        $dob = getdate(strtotime($reg['dob']));
                                        $day = $dob['mday'];
                                        $month = $dob['month'];
                                        $year = $dob['year'];
                                    
                            ?>
                            <tr>
                                <td><?php echo $id;?></td>
                                <td><?php echo $name;?></td>
                                <td><?php echo $email;?></td>
                                <td><?php echo $mob;?></td>
                                <td><?php echo $day."-".$month."-".$year; ?></td>
                            </tr>
                            <?php
                                    }
                                }
                                else{
                                    echo "<h2>No Result Available!</h2>";
                                }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<!-- Script js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="./js/valid.js"></script>
<!-- Script js -->

</body>
</html>