
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="x-icon" href="images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="css/logout.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
    
    .profile , .profile p{
        text-align: center;
    }
</style>
<body>
    <form class ="hello" action="sure.php">
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
    echo "Student";
}

mysqli_close($conn);
?>
            
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
           <div class="upper">
           <div class="logout-container">
                 <h2>Are you sure you want to logout?</h2>
              <button class="logout-button">Yes</button> 
    </div>
           </div>
    </form>
</body>
</html>
