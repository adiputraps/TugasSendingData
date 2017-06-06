<?php 
	$mysqli = new mysqli("mhs.rey1024.com","u7039630_mhspti1", "akuBisa","u7039630_mhspti17");

    $username=$_GET['username'];
    $email=$_GET['email'];
    $password=$_GET['password'];

    $id = array();

    $mysqli->query("INSERT INTO adi_pelanggan VALUES ('$username', '$email', '$password')");

    $new_id_query = $mysqli->query("SELECT username FROM adi_pelanggan WHERE username='$username'");
   
if (mysqli_num_rows($new_id_query)>0){
    while($row = $new_id_query->fetch_array(MYSQLI_ASSOC)) {
           $id = array('id' => $row["username"]);
    }
    
    } else {
    	$id = array('id' => -1);
    }
echo json_encode($id);

$result->close();
$mysqli->close();   
 ?>