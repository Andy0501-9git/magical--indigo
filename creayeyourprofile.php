<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Magical Indigo</title>

        <!-- Favicons -->
        <link href="assets/img/party.png" rel="icon">

        <!-- MATERIAL DESIGN ICONIC FONT -->
        <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

        <!-- STYLE CSS -->
        <link rel="stylesheet" href="assets/css/createprofile.css">

    </head>

    <body>
        <?php include './navigationbar.php'; ?>

        <div class="wrapper" style="background-image: url('assets/img/bg-registration-form-1.jpg');">
            <div class="inner">
                <div class="image-holder">
                    <img src="assets/img/registration-form-1.jpg" alt="">
                </div>
                <form action="">
                    <h3>Create Your Profile</h3>
                    <div class="form-group">
                        <input type="text" placeholder="First Name" class="form-control">
                        <input type="text" placeholder="Last Name" class="form-control">
                    </div>
                    <div class="form-wrapper">
                        <input type="text" placeholder="Username" class="form-control">
                        <i class="zmdi zmdi-account"></i>
                    </div>
                    <div class="form-wrapper">
                        <input type="text" placeholder="Email Address" class="form-control">
                        <i class="zmdi zmdi-email"></i>
                    </div>
                    <div class="form-wrapper">
                        <input type="text" placeholder="Telephone No" class="form-control">
                        <i class="zmdi zmdi-email"></i>
                    </div>
                    
                    <div class="form-wrapper">
                        <input type="password" placeholder="Password" class="form-control">
                        <i class="zmdi zmdi-lock"></i>
                    </div>
                    <div class="form-wrapper">
                        <input type="password" placeholder="Confirm Password" class="form-control">
                        <i class="zmdi zmdi-lock"></i>
                    </div>
                    <br>
                    <button>Create Profile
                        <i class="zmdi zmdi-arrow-right"></i>
                    </button>
                    <br><br>
                    <p>If you already have an account &nbsp;&nbsp;<a href="signin.php">Sign In</a></p>
                </form>
                
            </div>
        </div>
        <!--Include Footer-->
        <?php include './footer.php'; ?>
    </body>
</html>