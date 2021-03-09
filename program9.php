<?php
  $con = mysqli_connect("localhost","root","");
  if (!$con) {
    die('Could not connect: ' . mysql_error());
  }
  mysqli_select_db( $con,"test");
  $xml = simplexml_load_file("program9_xml.xml");
  $aa = "";
  foreach($xml->children() as $child) {
     foreach($child->children() as $childs) {
       $aa .= "'".$childs ."',";
     }
     $aa = substr_replace($aa, "", -1);
     $sql = "INSERT into student_xml (usn,name,college,branch,year,email) values ( $aa )";
     $aa = "";
     $rr = mysqli_query($con,$sql);
  }

  if ($rr){
   echo "data successfully captured from XML and inserted in db";
  } else {
    echo "sorry no data insertion";
  }

  $que="select * from student_xml";
  $rr = mysqli_query($con,$que);
  
  if ($rr->num_rows > 0) {
     // output data of each row
     while($row = $rr->fetch_assoc()) {
        echo "<br>Usn: " . $row["usn"]. " <br>Name: " . $row["name"]. "<br>College: " . $row["college"]. "<br>Branch: " . $row["branch"]. "<br>Year: " . $row["year"]. " <br>Email: " . $row["email"]. "<br>";
     }
  } else {
    echo "0 results";
  }
  mysqli_close($con);
?>
