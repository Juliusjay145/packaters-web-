<div id="login redbg2" class="redbg2" style="height: 120%; margin-top: -30px">
        <h3 class="text-center text-white pt-5"></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

<head>
    <title>My Awesome Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
    <div class="container h-100" style="margin-top: 100px">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card" style="margin-top: 10px">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="<?php echo base_url('../bootstrap/img/newlogopackaters.png')?>" alt="" class="img-fluid" style="width: 400px;margin-left: 10px; margin-top: -20%">
                    </div>
                </div>


                <div class="d-flex justify-content-center form_container">
                    <!-- forms -->
                    <form id="login-form" class="form" action="<?php echo base_url('CateringController/login')?>" method="post">
                            <h3 class="text-center textcolor" style="margin-top: 60px;">Login Catering Provider</h3>
                            <div class="form-group" style="width: 150%; margin-left: -25%">
                                <label for="username" class="textcolor" style=" font-size: 15px">Username:</label><br>
                                <input type="text" style="height: 40px; width: 100%;" name="username" class="form-control" autofocus=>
                            </div>
                            <div class="form-group" style="width: 150%; margin-left: -25%">
                                <label for="password" class="textcolor" style=" font-size: 15px">Password:</label><br>
                                <input type="password" style="height: 40px" name="password" class="form-control">
                            </div>


                            <div class="form-group" style="width: 150%; margin-left: -25%">
                                <label for="remember-me" class="textcolor w3-right"><span style=" font-size: 10px">Remember me</span> 
                                    <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" style="width: 100%; height: 40px; font-size: 15px" class="btn btn-info btn-md" value="Login">
                            </div>
                            <div class="mt-4">
                                <div class="d-flex justify-content-center links textcolor" id="register-link" style="font-size: 15px">
                                    Don't have an account? <a href="<?php echo base_url('LandingPageController/register')?>" class="textcolor">&nbsp;Register here</a>
                                </div>
                            </div>
                        </form>
                     <!-- end of forms -->   
                </div>
            </div>
        </div>
    </div>
</body>







                    </div>
                </div>
            </div>
        </div>
    </div>

