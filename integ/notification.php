<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="x-icon" href="images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification - MSC Online Payment System</title>
    <link rel="stylesheet" href="css/notif.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
    .profile{
        text-align: center;
    }
    .upper {
    text-align: center;
    border: 2px;
    border-radius: 5px;
    background-color: white;
    width: 80%;
    height: 45rem;
    margin-top: 20px;
    margin-left: 30px;
}
.upper .notif{
   
   border: 2px;
   border-radius: 50px;
   background-color:whitesmoke;
   width: 90%;
   height: 5rem;
   margin-left: 50px;
   margin-top: 30px;
}
</style>
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
        
        echo "$name";
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
            <br>
            <div class="upper">
                <div class="notif"> </div>
                <div class="notif"> </div>
                <div class="notif"> </div>
                <div class="notif"> </div>
            </div>
        </form>
    </div>

    <script src="pay.js"></script>
    <script>
        window.addEventListener('message', function(event) {
            // Check if the message type is 'payment'
            if (event.data.type === 'payment') {
                // Display the payment notification
                displayNotification(event.data.content);
            }
        });

        function displayNotification(message) {
            // Create a notification element
            var notificationElement = document.createElement('div');
            notificationElement.classList.add('notification');
            notificationElement.textContent = message;

            // Append the notification to the notification container
            var notificationContainer = document.querySelector('.notif');
            notificationContainer.appendChild(notificationElement);
        }
    </script>

</body>
</html>