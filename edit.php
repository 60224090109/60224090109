<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Edit Page</title>
</head>
<body>
<?php
     $keyword = $_GET["suid"];
     //echo $keyword;
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "tutorpoom";
 
    //echo $suid;
     // Create connection
     $conn = new mysqli($servername, $username, $password,$dbname);
 
     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     //echo "Connected successfully";
     mysqli_set_charset($conn, "utf8");
     
     $sql = "SELECT * FROM tutor WHERE id='$keyword' ";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          
            $gname = $row["name"];
            
            $glastname = $row["lastname"];
          
            $ggender = $row["gender"];
           
            
            $gsubject = $row["subject"];
           
            $gprovince = $row["province"]; 

            $gtel = $row["tel"];

            $gexperience = $row["experience"];

        }
     }
 
    echo"<center><h2>แก้ไขข้อมูลติวเตอร์ ".$keyword."</h2></center>";
    echo "<form method=\"post\" action=\"update.php\">";
    echo "<input type=\"hidden\"  name=\"suid\" value=\"$keyword\">";

    echo "เพศ : <br />";
    if($ggender=="male"){
        echo"<input type=\"radio\" name=\"gender\" value=\"male\" checked> ชาย<br>";
        echo"<input type=\"radio\" name=\"gender\" value=\"female\" > หญิง<br>";
        echo"<input type=\"radio\" name=\"gender\" value=\"other\"> อื่นๆ <br>";
    }else if($ggender=="female"){
        echo"<input type=\"radio\" name=\"gender\" value=\"male\" > ชาย<br>";
        echo"<input type=\"radio\" name=\"gender\" value=\"female\" checked > หญิง<br>";
        echo"<input type=\"radio\" name=\"gender\" value=\"other\"> อื่นๆ <br>";
    }
    echo "ชื่อ : <br />";
    echo"<input type=\"text\" name=\"name\" value=\"$gname\" placeholder=\"กรุณาพิมพ์ภาษาไทย\" /><br />";

    echo "นามสกุล : <br/>";
    echo "<input type=\"text\" name=\"lastname\" value=\"$glastname\" placeholder=\"กรุณาพิมพ์ภาษาไทย\" /><br />";

    echo "วิชา : <br />";
    echo"<select name=\"subject\">";
    if($gsubject=="คณิตศาสตร์"){
        echo"<option value=\"คณิตศาสตร์\"selected>Mathematics</option>";
        echo"<option value=\"วิทยาศาสตร์\" >Science</option>";
        echo"<option value=\"อังกฤษ\" >English</option>";
        echo"<option value=\"ภาษาไทย\" >Thai</option>";
    }else if($gsubject=="วิทยาศาสตร์"){
        echo"<option value=\"คณิตศาสตร์\" >Mathematics</option>";
        echo"<option value=\"วิทยาศาสตร์\" selected>Science</option>";
        echo"<option value=\"อังกฤษ\" >English</option>";
        echo"<option value=\"ภาษาไทย\" >Thai</option>";
    }else if($gsubject=="อังกฤษ"){
        echo"<option value=\"คณิตศาสตร์\" >Mathematics</option>";
        echo"<option value=\"วิทยาศาสตร์\" >Science</option>";
        echo"<option value=\"อังกฤษ\" selected>English</option>";
        echo"<option value=\"ภาษาไทย\" >Thai</option>";
    }else{
        echo"<option value=\"คณิตศาสตร์\" >Mathematics</option>";
        echo"<option value=\"วิทยาศาสตร์\" >Science</option>";
        echo"<option value=\"อังกฤษ\" >English</option>";
        echo"<option value=\"ภาษาไทย\" selected>Thai</option>";
    }
    echo "</select> <br />";
    echo "จังหวัด : <br />";
    echo"<select name=\"province\">";
    if($gprovince=="กาญจนบุรี"){
        echo"<option value=\"กาญจนบุรี\"selected>Kanchanaburi</option>";
        echo"<option value=\"นครปฐม\" >Nakhon Pathom</option>";
        echo"<option value=\"ราชบุรี\" >Ratchaburi</option>";
        echo"<option value=\"สุพรรณบุรี\" >Suphanburi</option>";
    }else if($gprovince=="นครปฐม"){
        echo"<option value=\"กาญจนบุรี\" >Kanchanaburi</option>";
        echo"<option value=\"นครปฐม\" selected>Nakhon Pathom</option>";
        echo"<option value=\"ราชบุรี\" >Ratchaburi</option>";
        echo"<option value=\"สุพรรณบุรี\" >Suphanburi</option>";
    }else if($gprovince=="ราชบุรี"){
        echo"<option value=\"กาญจนบุรี\" >Kanchanaburi</option>";
        echo"<option value=\"นครปฐม\" >Nakhon Pathom</option>";
        echo"<option value=\"ราชบุรี\" selected>Ratchaburi</option>";
        echo"<option value=\"สุพรรณบุรี\" >Suphanburi</option>";
    }else{
        echo"<option value=\"กาญจนบุรี\" >Kanchanaburi</option>";
        echo"<option value=\"นครปฐม\" >Nakhon Pathom</option>";
        echo"<option value=\"ราชบุรี\" >Ratchaburi</option>";
        echo"<option value=\"สุพรรณบุรี\" selected>Suphanburi</option>";
    }
        echo "</select></br>";
        echo "เบอร์โทร :<br />";
        echo  "<input type=\"mobile_number\" name=\"tel\"value=\"$gtel\" /><br />";

        echo "ประสบการณ์ <br/>";
        echo "<textarea rows=\"10\" cols=\"100\" name = \"experience\"value=\"$gexperience\"></textarea>";
        echo "</br>";
        echo "</select> <br />";

        echo "<input type=\"submit\" value=\"อัพเดทข้อมูล\">";
        echo "</form>";
?>
</body>
</html>