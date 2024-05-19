<!DOCTYPE html>
<html lang="me">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="x-icon" href="images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - MSC Online Payment System</title>
    <link rel="stylesheet" href="css/pay.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form class ="hello" action="">
          <div class="dashboard">
            <div class="profile">
              <img src="images/user.png">
              <p>Jiro Elijah Aguilar</p> <br>
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
           <div class="pay">
            <div class="bal"><b>Outstanding Balance: 120</b></div><br>
            <div class="method">
              <h2>Payment-Method</h2>
                <div class="money">
                  <div><img src="images/gcash.png"></div>&nbsp;
                 <div><img src="images/paypal.png"></div>&nbsp;
                 <div><img src="images/credit card.png"></div>&nbsp;
                </div><br>     
                <div class="ref"> 
                  <input type="tel" placeholder="Number" name="number" required>
                  <input type="text" placeholder="Name" name="name" required>
                </div>
                <div class="confirm"> 
                  <button>Confirm</button>
                </div>
            </div>
            
           </div>
           <div id="paymentProcessingPopbox" class="popbox">
            <h2>Payment Processing</h2>
        
        </div>
    
        <div id="thankYouPopbox" class="popbox">
            <h2>Thank You!</h2>
            <button class="button">Ok</button>
        </div>
    
    
        <script src="payment.js"></script>
        
        </form>
    </div>