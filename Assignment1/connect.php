<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student";

//storing returned value from form in variables
$roll_no = $_POST['roll_no'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

//checking for empty input in roll_no AND first_name
//roll_no set as primary key in student_info table
if(!empty($roll_no))
{
  if(!empty($first_name))
  {
      $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
      $check_duplicate = "SELECT roll_no FROM student_info WHERE roll_no = '$roll_no' ";
      $result = mysqli_query($conn, $check_duplicate);
      $count = mysqli_num_rows($result);
      if($count>0)
      {
        echo'
        <script type="text/JavaScript">
          alert("Roll Number already registered");
          window.location.href = "index.php";
        </script>';
        //Roll number already existing
        // JS used to echo message
        die();
      }
      if(mysqli_connect_error())
      {
        //if connection error then die()
        die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
      }
      else
      {
        //else inserting data into student_info table using INSERT INTO command
        $sql = "INSERT INTO student_info (Roll_No, First_Name, Last_Name)
        values ('$roll_no','$first_name','$last_name')";
      }

      if($conn->query($sql))
      {
        echo'
        <script type="text/JavaScript">
          alert("New Record Submitted Successfully!");
          window.location.href = "index.php";
        </script>';
        //Rercord successfully submitted
      }
      else
      {
        echo "Error: ". $sql ."<br>". $conn->error;
      }
      $conn->close();
      // closing connection
  }
  else
  {
    echo'
    <script type="text/JavaScript">
      alert("First Name should not be empty");
      window.location.href = "index.php";
    </script>';
    //First name shouldn't be empty
      die();
  }
}
else
{
  echo'
  <script type="text/JavaScript">
    alert("Roll Number should not be empty");
    window.location.href = "index.php";
  </script>';
  //Roll number already existing
  die();
}
?>
