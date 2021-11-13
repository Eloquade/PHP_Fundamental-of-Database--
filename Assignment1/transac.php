
<?php

       include('connection.php');
       include('header.php');

        ?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">PHP Fundamentals of Database System</a>
            </div>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard fa-2x"></i> Dashboard</a>
                        <a href="../homepage/index2.html"><i class="fa fa-home fa-fw fa-2x"></i> Home Page</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           <small>Group Project and Quiz #1</small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->


             <div class="col-lg-12">
                <?php
						$student = $_POST['Student_No'];
					    $name = $_POST['Name'];
						$birthday = $_POST['Birthday'];
						$course = $_POST['Course'];
						$email = $_POST['Email'];
						$comment = $_POST['comment'];

					switch($_GET['action']){
						case 'add':
								$query = "INSERT INTO people
								(people_id,Student_No, Name, Birthday, Course,Email, comment)
								VALUES ('Null','".$student."','".$name."','".$birthday."','".$course."','$email','".$comment."')";
								mysqli_query($db,$query)or die ('Error in updating Database');

						break;

						}
				?>
    	<script type="text/javascript">
			alert("Data Saved Successfully");
			window.location = "assignment1.php";
		</script>
                    </div>
                </div>

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

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

