<?php 

    // แสดงข้อมูลผู้ใช้ในฐานข้อมูล
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
	//echo "Connected successfully";
    mysqli_set_charset($conn, "utf8");
    error_reporting(~E_NOTICE );
        error_reporting(error_reporting() & ~E_NOTICE); 
    
    $suid = $_GET["suid"]; 
        if($suid){
            echo "Has value<br/>";
        
            $sql = "DELETE from tutor where id='$suid'";
            
            if ($conn->query($sql) === TRUE) {
                echo "Deleting successfully";
            } else {
                echo "Error deleting: " . $conn->error;
            }        
        }
    echo "<center><h2> Tutor PooM </h2></center>";
    echo "<table style=\"width:100%\" cellspacing=\"0\" bgcolor=\"#ccccff\">";
    echo"<tr>";
      echo"<th> ID </th>";
      echo"<th> Username </th>";
      echo"<th> Lastname </th>";
      echo"<th> gender </th>";
      echo"<th> subject </th>";
      echo"<th> province </th>";
      echo"<th> Edit </th>";
    echo"</tr>";
    // $sql = "SELECT * FROM tutor";
    $sql = "SELECT * FROM tutor";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo "id: " . $row["id"]. " - Name: " . $row["name"]. "- Lastname " . $row["lastname"]. "<br>";
            if($row["id"]%2==0){
                echo "<tr>";
                echo "<td bgcolor=\"pink\"><center><font color=\"#ff0066\"><a href=\"http://localhost/60224090109/show.php?suid=".$row["id"]."\">".$row["id"]."</a></font></center></td>";
                echo "<td bgcolor=\"#ffffcc\"><center>".$row["name"]."</center></td>";
                echo "<td bgcolor=\"#ffffcc\"><center>".$row["lastname"]."</center></td>";
                echo "<td bgcolor=\"#ffffcc\"><center>".$row["gender"]."</center></td>";
                echo "<td bgcolor=\"#ffffcc\"><center>".$row["subject"]."</center></td>";
                echo "<td bgcolor=\"#ffffcc\"><center>".$row["province"]."</center></td>";
                echo "<td bgcolor=\"#ffffcc\"><center>\"<font color=\"#ffffcc\"><a href=\"http://localhost/60224090109/edit.php?suid=".$row["id"]."\"><img width=\"50\" height=\"50\" src=\"./img/dinsor.jpg\"></a><center></td>";
                echo "</tr>";
            }else{
                echo "<tr>";
                echo "<td bgcolor=\"red\"><center><font color=\"#ffffff\"> <a href=\"http://localhost/60224090109/show.php?suid=".$row["id"]."\">".$row["id"]."</a></font></center></td>";
                echo "<td bgcolor=\"#e6f9ff\"><center>".$row["name"]."</center></td>";
                echo "<td bgcolor=\"#e6f9ff\"><center>".$row["lastname"]."</center></td>";
                echo "<td bgcolor=\"#e6f9ff\"><center>".$row["gender"]."</center></td>";
                echo "<td bgcolor=\"#e6f9ff\"><center>".$row["subject"]."</center></td>";
                echo "<td bgcolor=\"#e6f9ff\"><center>".$row["province"]."</center></td>";
                echo "<td bgcolor=\"#e6f9ff\"><center>\"<font color=\"#e6f9ff\"><a href=\"http://localhost/60224090109/edit.php?suid=".$row["id"]."\"><img width=\"50\" height=\"50\" src=\"./img/dinsor.jpg\"></a><center></td>";
                echo "</tr>"; 
            }
        }
    } else {
        echo "0 results";
    }
    echo "</table>";
	
	$conn->close();
    echo"<a href=\"http://localhost/60224090109/formtest.html\">หน้าฟอร์ม</a>";



?>