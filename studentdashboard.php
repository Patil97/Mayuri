<?php 
session_start();
$email= $_SESSION['e_id'];
include('../config.php');

if($_SESSION['stu_id']=="" && $_SESSION['name']=="")
{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Time table Staff Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar bg-primary navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
              <h4 style="margin-left: 10px"> Hello Student : <?php echo $_SESSION['name'];?></h4>

               

            </div>
            <div class="navbar-header" style="margin-left: 1090px">
                
             <p></p>
                <a href="logout.php" class="btn btn-danger">Logout</a>

            </div>
            
            <!-- Top Menu Items -->
                            <?php
								$arr=scandir("image/$email");
								$img=$arr[2];
								$path="image/".$email."/".$img;
							?>                  
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" >
                 <li>
                        <img src="<?php  echo $path;?>" width="150" height="100" alt="Profile pic not found" style="margin-left: 20px"/>
                    </li>
                    <li>
                        <a href="studentdashboard.php?info=timeschedule"><i class="fa fa-fw fa-dashboard"></i>Time Schedule</a>
                    </li>
                    <li>
                        <a href="studentdashboard.php?info=updateprofile&img=<?php echo $img;?>"><i class="fa fa-fw fa-bar-chart-o"></i>Update Profile</a>
                    </li>
                    <li>
                        <a href="studentdashboard.php?info=updatepassword"><i class="fa fa-fw fa-table"></i>Update Password</a>
                    </li>
                   
                    
                </ul>
                       

            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                   
                   
               
                
                <?php 
				@$info=$_REQUEST['info'];
				if($info!="")
				{
				if($info=="updatepassword")
				{
					include('updatepassword.php');
					}
				elseif($info=="updateprofile")
				{
					include('updateprofile.php');
					}
					
				elseif($info=="timeschedule")
				{
					include('timeschedule.php');
				}
				
					}
				else
				{
				?>
                  
                  
                       
                      <img src="img/online-practice-exams.jpg" class="img-responsive" alt="Cinque Terre" width="500" height="500" style="margin-top: 10px; margin-left: 303px;">
                <?php }?>
                
                
                
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
