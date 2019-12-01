<?php

$keyword = $_POST["suid"];
echo $keyword;
echo "<br>";  

$name = $_POST["name"];
echo $name;
echo "<br>";   

$lastname = $_POST["lastname"];
echo $lastname;
echo "<br>";   

$gender = $_POST["gender"];
echo $gender;
echo "<br/>";

$subject = $_POST["subject"];
echo $subject;
echo "<br/>";

$province = $_POST["province"];
echo $province;
echo "<br/>";

$tel = $_POST["tel"];
echo $tel;
echo "<br/>";

$experience = $_POST["experience"];
echo $experience;
echo "<br/>";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tutorpoom";
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    mysqli_set_charset($conn,"utf8");
    //$sql = "INSERT INTO user (suuid, sugender, suname, suprovince, sufavcolor, susize, sumobile_number, supwd, suintro) VALUES (NULL, 'male', 'สมศรี', 'กาญจนบุรี', '#00f00', '5', '12345', '9876543210','Hello')";
    //$sql = "UPDATE user SET sugender=$ (sugender, suname, suage, subloodgroup, sumedicalrights, sunumber, sumobilenumber, suintro) VALUES ('$type', '$fullname', '$age', '$bg', '$mr', '$number', '$mnb','$intro')";
    $sql = "UPDATE tutor 
     SET gender = '$gender', name = '$name', lastname = '$lastname', gender = '$gender', subject = '$subject', province = '$province', tel = '$tel', experience = '$experience'
     WHERE id = $keyword
    ";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    echo"<a href=\"http://localhost/60224090109/formtest.html\">หน้าฟอร์ม</a>";