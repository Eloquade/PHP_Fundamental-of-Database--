<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
			$zz = $_POST['id'];
			$student = $_POST['Student_No'];
		    $name = $_POST['Name'];
			$birthday = $_POST['Birthday'];
			$course = $_POST['Course'];
			$email = $_POST['Email'];
			$comment = $_POST['comment'];

	   include('connection.php');

	 			$query = 'UPDATE people set Student_No ="'.$student.'",
					Name ="'.$name.'", Birthday="'.$birthday.'",
					Course="'.$course.'", Email="'.$email.'",
					comment="'.$comment.'" WHERE
					people_id ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));

?>
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "assignment1.php";
		</script>
 </body>
</html>
