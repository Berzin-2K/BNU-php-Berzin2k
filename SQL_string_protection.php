<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

if (isset($_POST['submit'])) {
    $studentid = $conn->real_escape_string($_POST['txtid']);
    $firstname = $conn->real_escape_string($_POST['txtfirstname']);
    $lastname = $conn->real_escape_string($_POST['txtlastname']);
    $dob = $conn->real_escape_string($_POST['txtdob']);
    $house = $conn->real_escape_string($_POST['txthouse']);
    $town = $conn->real_escape_string($_POST['txttown']);
    $county = $conn->real_escape_string($_POST['txtcounty']);
    $country = $conn->real_escape_string($_POST['txtcountry']);
    $postcode = $conn->real_escape_string($_POST['txtpostcode']);

    if ($password)
    {
        $passwordhash = password_hash($password, PASSWORD_DEFAULT);
    }

    $sql = "INSERT INTO student (studentid, dob, firstname, lastname, house, town, county, country, postcode,) 
            VALUES('$studentid', '$passwordhash', '$dob', '$firstname', '$lastname', '$house', '$town', '$county', '$country', '$postcode')";
    $result = mysqli_query($conn,$sql);

    header("Location: student.php");
}

?>