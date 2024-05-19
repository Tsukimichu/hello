
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - MSC Online Payment System</title>
    <link rel="stylesheet" href="css/home.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form class ="hello" action="">
          <div class="dashboard">
            <div class="profile">
              <img src="images/user.png">
              <p>
              <?php
session_start();

include "connect.php";

if(isset($_SESSION['name'])) {
    
    $name = $_SESSION['name'];
    
    
    $sql = "SELECT * FROM users WHERE name = '$name'";
    $result = mysqli_query($conn, $sql);

    
    if ($result && mysqli_num_rows($result) > 0) {
        
        $user = mysqli_fetch_assoc($result);
        $name = $user['name']; 
        
        echo "<p> $name!</p>";
    } else {
        echo "User data not found.";
    }
} else {
    echo "You are not logged in.";
}

mysqli_close($conn);
?>
                student
              </p> <br>
            </div>
            <ul>
              <li><a href="home.php"><i class='bx bxs-home'>&nbsp;</i><b>Home</b></a></li> <br>
              <li><a href="notification.php"><i class='bx bxs-notification'></i>&nbsp;<b>Notification</b></a></li> <br>
              <li><a href="fees.php"><i class='bx bx-coin'>&nbsp;</i><b>Fees</b></a></li> <br>
              <li><a href="payment.php"><i class='bx bxs-receipt'>&nbsp;</i><b>Payment</b></a></li> <br>
              <li><a href="settings.php"><i class='bx bxs-cog'></i>&nbsp;<b>Settings</b></a></li> <br>
              <li><a href="logout.php"><i class='bx bx-log-in'></i>&nbsp;<b>Logout</b></a></li>
            </ul>
          </div>
          <br>
          <div class="upper">
            <div class="mv">
              <img src="images/logo.png.png"><br>
            <div>
              <div><h3><b>Vision</b></h3>
                <p>An advanced and adaptive university pursuing quality education, <br>lifelong gender-sensitive learning environment, responsive research-based <br> community programs,and transparent governance with sustainable resource generation by 2025.</p></div><br>
              <div>
                <h3><b>Mission</b></h3>
              <p>To provide excellence in instruction, research, extension, and <br>production that magnifies W.I.S.D.O.M. in leadership through a total<br> quality management system responsive to the challenges of 21th century education.</p>
              </div><br>
            </div><br>
            <div class="one"> <h4>Outstanding Balance: <b>120</b></h4></div>
          </div>
          <div class="scroll">
            <div class="tbls">
              <table>
                <thead>
                  <tr>
                    <th>Name </th>
                    <th>Amount</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                <td>Tuition Fee</td>
                <td><a><b>3,140.00</b></a></td>
                </tr>
                <tr>
                <td>Athletic Fee</td>
                <td><a><b>100.00</b></a></td>
                </tr>
                <tr>
                <td>Library</td>
                <td><a><b>150.00</b></a></td>
                </tr>
                <tr>
                <td>ORF/COR</td>
                <td><a><b>100.00</b></a></td>
                </tr>
                <tr>
                <td>SCUAA Fee</td>
                <td><a><b>100.00</b></a></td>
                </tr>
                <tr>
                <td>AVR Fee</td>
                <td><a><b>100.00</b></a></td>
                </tr>
                <tr>
                <td>Culture and Arts Fee</td>
                <td><a><b>90.00 </b></a></td>
                </tr>
                <tr>
                <td>SSF/SSC/Pub</td>
                <td><a><b>70.00</b></a></td>
                </tr>
                <tr>
                <td>Medical/Dental Fee</td>
                <td><a><b>75.00 </b></a></td>
                </tr>
                <tr>
                <td>Internet Fee</td>
                <td><a><b>400.00</b></a></td>
                </tr>
                <tr>
                <td>Computer Lab Fee</td>
                <td><a><b>2000.00 </b></a></td>
                </tr>
                <tr>
                <td><b>Others</b></td>
                </tr>
                <tr>
                <td>CLass Card</td>
                <td><a><b>50.00</b> </a></td>
                </tr>
                <tr>
                  <td>Testing Material</td>
                  <td><a><b>70.00</b></a></td>
                  </tr> 
                </tbody>
                </table>
            </div>
          </div>
        </form>

  </div>
    </div>
    
    
</body>
</html>