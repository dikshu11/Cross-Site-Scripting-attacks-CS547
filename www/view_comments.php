<?php
$con = mysqli_connect("db","user","test","myDb");
$sql = "SELECT comment FROM comments";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td style='width:35%;padding:10px'>Comment #".$row["id"]."<br /><hr />".$row["comment"]."<br /></td></tr>";
    }
} else {
    echo "<tr><td style='width:35%'>No Comments!</td></tr>";
}
$conn->close(); 

?>