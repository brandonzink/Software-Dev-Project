<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>

<?php

$mysqli = mysqli_connect("localhost","root","","test");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


 $query = "SELECT text FROM test;";

if ($result = $mysqli->query($query)) {

    /* fetch object array */
    $i = 0;
    while ($row = $result->fetch_row()) {
        echo "<a href='https://www.google.com'><p id='".$i."'>".$row[0]."</p></a><hr>";
        $i++;
    }

    /* free result set */
    $result->close();
}

/* close connection */
$mysqli->close();

?>



<script type="text/javascript">
	
	document.getElementById("0").style = "color:red; margin-left: 100px;";
	

</script>

</body>
</html>
