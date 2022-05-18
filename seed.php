<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   if (isset($_SESSION['id'])) {
      //Data 1
      $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode)
      VALUES('34547589', 'E8>MNgQvhtte#;,Z', '1959-08-12', 'Alan', 'Walker', '13 hutchins street', 'Houston', 'Texas', 'USA', '77001')";
      $result = mysqli_query($conn,$sql);

      //Data 2
      $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode)
      VALUES('08415696', '4V+d;tDh2hzcSj', '1991-10-11', 'Boz', 'Ber', '20 Hughenden Road', 'High Wycombe', 'Buckinghamshire', 'UK', ' HP13 5HS')";
      $result = mysqli_query($conn,$sql);

      //Data 3
      $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode)
      VALUES('21905650', 'cVnq:w>d>.w3B:>@', '2000-10-17', 'Berzin', 'Daruwala', 'Hughenden park student village', 'High Wycombe', 'Buckinghamshire', 'UK', 'HP11 2JZ')";
      $result = mysqli_query($conn,$sql);

      //Data 4
      $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode)
      VALUES('20215796', 'Hh/)hE=HNy`#3mR', '1899-05-20', 'Dodi', 'Jackson', 'Las Vegas Boulevard', 'Las Vegas', 'California', 'United States', '89109')";
      $result = mysqli_query($conn,$sql);

      //Data 5
      $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode)
      VALUES('01789486', 'F3~Z4F})yy[n]#u+', '1965-11-98', 'Amelia', 'West', 'goodsprings', 'Nevada', 'California', 'United States', '89019')";
      $result = mysqli_query($conn,$sql);

    }
    foreach ($array_student as $key => $student)
      $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode) 
      VALUES ('{$student["studentid"]}','{$student["password"]}', '{$student["dob"]}', '{$student["firstname"]}', '{$student["lastname"]}',' {$student["house"]}','{$student["town"]}', '{$student["county"]}', '{$student["country"]}','{$student["postcode"]}')";
      echo $sql;
      $result = mysqli_query($conn,$sql);

      header("Location: student.php");
?>