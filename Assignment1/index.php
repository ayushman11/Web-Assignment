
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
    <title>Form</title>
  </head>
  <body>
    <img src="css/sports.png" alt="sports-logo" />
    <h1 class="heading">
      IITB SPORTS
    </h1>

    <form class="box" method="post" action="connect.php" autocomplete="off">
      <h1 class="title_form">
        FORM SUBMISSION
      </h1>
      <br><br>
      <input type="text" name="roll_no" placeholder="Roll Number">
      <input type="text" name="first_name" placeholder="First Name">
      <input type="text" name="last_name" placeholder="Last Name">
      <input type="submit" name="" value="Submit">
    </form>
    <div class="display_class">
      <table class="sticky">
        <tr>
          <th>Roll Number</th>
          <th>First Name</th>
          <th>Last Name</th>
        </tr>
        <?php
          $conn = mysqli_connect("localhost","root","","student");
          if($conn-> connect_error)
          {
            die("Connetion Failed: ". $conn-> connect_error);
          }
          $sql = "SELECT roll_no,first_name,last_name from student_info"; //SELECT query for table info
          $result = $conn->query($sql); // storing returned data in $result
// checking for already existing data
          if($result-> num_rows >0)
          {
            while($row = $result-> fetch_assoc())
            {
              echo "<tr><td>". $row["roll_no"] ."</td><td>". $row["first_name"] ."</td><td>". $row["last_name"] ."</td></tr>";
            }
            echo "</table>";
          }
          else
          {
            echo "0 result";
          }
          $conn-> close(); //closing connection
        ?>
      </table>
    </div>

  </body>
</html>
