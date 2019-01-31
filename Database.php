<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "myDB";

$con = mysqli_connect($serverName, $userName, $password, $dbName);

// checking database connection

if (!$con)
    die("something is wrong" . mysqli_connect_error()) . "<br>";
else
    echo "connected successfully <br>";

// creating database

/*$sql = "CREATE DATABASE myDB";

if (mysqli_query($con, $sql))
    echo "Database created";
else
    echo "Don't created";*/

// insert data into database

$query = "insert into students (name, dept, student_id) values ('tamzid', 'cse', 33)";

if(mysqli_query($con, $query))
    echo "data inserted <br>";
else
    echo "not inserted <br>" . mysqli_error($con);

$query = "select * from students";

$result = mysqli_query($con, $query);

while ($DataRows = mysqli_fetch_array($result)) {
    $studentName = $DataRows["name"];
    $studentDept = $DataRows["dept"];
    $studentID = $DataRows["student_id"];

    echo $studentName . " " . $studentDept . " " . $studentID . "<br>";
}

