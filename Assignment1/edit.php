<!DOCTYPE html>
<html lang="en">


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
                <a class="navbar-brand" href=dashboard.php">PHP Fundamentals of Database System</a>
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
                           PHP <small>Group Project and Quiz #1</small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->
<?php
$query = 'SELECT * FROM people
              WHERE
              people_id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {
                $zz= $row['people_id'];
                $i= $row['Student_No'];
                $a=$row['Name'];
                $b=$row['Birthday'];
                $c=$row['Course'];
                $d=$row['Email'];
                $e=$row['comment'];

              }

              $id = $_GET['id'];

?>

             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="edit1.php">

                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Student No" name="Student_No" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Name" name="Name" value="<?php echo $a; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Birthday" name="Birthday" value="<?php echo $b; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Course" name="Course" value="<?php echo $c; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Email" name="Email" value="<?php echo $d; ?>">
                            </div>
                            <div class="form-group">
                             <label>Comment</label>
                              <textarea class="form-control" rows="3"  name="comment"><?php echo $e; ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Update Record</button>



                      </form>
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

