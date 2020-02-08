<?php
echo "hii";
$connection=mysqli_connect("localhost","root","","hackerzdom");
 if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
echo "Connected successfully";

}

$sql = "SELECT inspector_id, email, name, expertise_id FROM inspector";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["inspector_id"]. " - Name: " . $row["email"]. " " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($connection);
?>