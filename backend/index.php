<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    
    <div class="container" style="margin-top:50px">
        <div class="row">
            <div class="col-md-12 text-left">
                <img class="logo" src="assets/img/Logo.png" alt="Company Logo">
             </div>
        </div>
             

    <br> <br>

    <div class="row">
        
            <div class="col-md-6 text-left" style="margin-top:100px">
                <h1 class="welcoming">Welcome!</h1>
                <p class="description" style="margin-top:50px">Control Data Center of Rumah Kesejahteraan Indonesia (RKI) The first step towards success is through this gateway. Together, we will forge new achievements and realize dreams. Enter your credentials and let's embark on a journey towards boundless progress and innovation.</p>
            </div>

            <div class="col-md-3"></div>
            
            <div class="col-md-3 text-right" style="margin-top:150px">
                <form method="POST" action="cek_login.php">
                    <h2 class="text-right login">Login to your account</h2>
                    <hr class="line-text">

                    <br><br>

                    <div class="form-group text-right">
                        <label class="text-right formlogin" for="username">Username</label><br>
                        <input type="text" class="type field" id="username" name="username" placeholder="User ID">
                    </div>

                    <br>

                    <div class="form-group text-right">
                        <label class="formlogin" style="text-align= right" for="password">Password</label><br>
                        <input type="password" class="type field" id="password" name="password" placeholder="Password">
                    </div>

                    <br>

                    <button class="btnlogin" type="submit">Log In</button>
                </form>
            </div>
    </div>       
</div>

</body>

</html>
