<?php
    include('connection.php');

    $sql = "CREATE DATABASE peopledb";
        if (mysqli_query($db, $sql)) {
        echo "Codered Connected Successfully .\n";
        } else {
        echo "Error creating database: " . mysqli_error($db);
        }
        mysqli_select_db($db, 'peopledb' ) or die(mysqli_error($db));

    $people = "CREATE TABLE IF NOT EXISTS `people` (
        `people_id` int(11) NOT NULL AUTO_INCREMENT,
        `Student_No` varchar(30) NOT NULL,
        `Name` varchar(30) NOT NULL,
        `Birthday` varchar(30) NOT NULL,
        `Course` varchar(30) NOT NULL,
        `Email` varchar(30) NOT NULL,
        `comment` text NOT NULL,
        PRIMARY KEY (`people_id`)
        ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;";

                if (mysqli_query($db, $people)) {
                echo "\nTable People created successfully.";
                } else {
                echo "Error creating table: " . mysqli_error($db);
                }

    $people1 = "INSERT INTO `people` (`people_id`, `Student_No`, `Name`, `Birthday`, `Course`, `Email`, `comment`) VALUES
                (1, '2019-106321', 'Lawrence B Perez', 'September 08,1999', 'bachelor of science information technology', 'lbperez@rtu.edu.ph', 'Programming is fun!')";


                if (mysqli_query($db, $people1)) {
                    echo "\nNew record created successfully.";

                    } else {
                    echo "\nError creating table: " . mysqli_error($db);
                    }
     $users = "CREATE TABLE IF NOT EXISTS `users` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `firstname` varchar(50) NOT NULL,
            `lastname` varchar(50) NOT NULL,
            `email` varchar(50) NOT NULL,
            `password` varchar(50) NOT NULL,
            `gender` varchar(9) check (gender in ('Female','Male')),
            `phone_no` varchar(11) NOT NULL,
            `Birth_Date` date,
            `username` varchar(50) NOT NULL,
            PRIMARY KEY (`id`)
            )";
                if (mysqli_query($db, $users)) {
                    echo "\nTable Users created successfully.";
                    } else {
                    echo "Error creating table: " . mysqli_error($db);
                    }
    $users1 = "INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `gender`, `phone_no`, `Birth_Date`, `username`) VALUES
                (1, 'Admin', 'Codered', 'Codered@rtu.edu.ph', 'Administrator123', 'Male', '123456789', 'November 12,2021', 'Administrator')";

                 if (mysqli_query($db, $users1)) {
                    echo "\nNew record created successfully.";
                    } else {
                    echo "Error creating table: " . mysqli_error($db);
                    }

?>

