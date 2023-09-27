<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="row">
        <div class="column">
            <img class="logo" src="assets/img/Logo.png" />
            <h1 class="welcoming">Welcome!</h1>
            <h3 class="description">Control Data Center of Rumah Kesejahteraan Indonesia (RKI) The first step towards success is through this gateway. Together, we will forge new achievements and realize dreams. Enter your credentials and let's embark on a journey towards boundless progress and innovation.</h3>
            <button onclick="window.location.href='https://rkicoop.co.id/'">Company Website</button>
        </div>
           
        <div class="column">
        <form method="POST" action="cek_login.php">
                <h2 style="text-align: right"> Login to your Account</h2>
                <hr class="right-align">

                <label style="text-align: right" for="username">Username</label>
                <input type="text" placeholder="User ID" id="username" name="username">

                <label style="text-align: right" for="password">Password</label>
                <input type="password" placeholder="Password" id="password" name="password">

                <button type="submit">Log In</button>
            </form>
        </div>
    </div>
</body>
</html>
