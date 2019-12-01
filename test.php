<?php 
 
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
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    mysqli_set_charset($conn, "utf8");
    //$sql = "INSERT INTO user (suuid, sugender, suname, suprovince, sumyfcolor, susize, sumobile_number, supwd, suintro) VALUES (NULL, 'male', 'สมชาย', 'กาญจนบุรี', '#00ff00', '5', '0800213178', '0800213178', 'สวัสดี')";
    $sql = "INSERT INTO tutor (name,lastname,gender,subject,province,tel,experience) VALUES ('$name', '$lastname', '$gender', '$subject', '$province', '$tel', '$experience')";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
    
    $conn->close();

?>