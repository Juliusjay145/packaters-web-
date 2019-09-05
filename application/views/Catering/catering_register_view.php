<div id="login redbg2" class="redbg2" style="height: 170%; margin-top: -30px">
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
            <div class="user_carddiamond" style="margin-top: 10px">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="<?php echo base_url('../bootstrap/img/newlogopackaters.png')?>" alt="" class="img-fluid" style="width: 400px;margin-left: 10px; margin-top: -20%">
                    </div>
                </div>


                <div class="d-flex justify-content-center form_container">
                    <!-- forms -->
                    <form id="login-form" class="form" action="<?php echo base_url('CateringController/add_register')?>" method="post">
                            <h3 class="text-center textcolor">Diamond Catering Provider Registration</h3>

                            <div class="form-group" style="height: 40px; width: 100%;">
                                <label for="username" class="textcolor" style="font-size: 15px">First Name:</label><br>
                                <input type="text"  style="height: 40px; width: 100%; font-size: 15px" name="name" class="form-control" autofocus>
                            </div>
                            <div class="form-group" style="height: 40px; width: 100%; margin-top: 50px">
                                <label for="username" class="textcolor" style="font-size: 15px">Address:</label><br>
                                <input type="text"  style="height: 40px; width: 100%; font-size: 15px" name="address" class="form-control">
                            </div>
                            <div class="form-group" style="height: 40px; width: 100%; margin-top: 50px">
                                <label for="username" class="textcolor" style="font-size: 15px">Phone Number:</label><br>
                                <input type="text"  style="height: 40px; width: 100%; font-size: 15px" name="number" class="form-control">
                            </div>
                            <div class="form-group" style="height: 40px; width: 100%; margin-top: 50px">
                                <label for="username" class="textcolor" style="font-size: 15px">Catering Details:</label><br>
                                <textarea name="details"  style="height: 40px; width: 100%; font-size: 15px" class="form-control" width="10%" height="20%"></textarea>
                            </div>
                            <div class="form-group" style="height: 40px; width: 100%; margin-top: 50px">
                                <label for="username" class="textcolor" style="font-size: 15px">Catering Logo:</label><br>
                                <input type="file"  style="height: 40px; width: 100%; font-size: 15px" name="logo" class="form-control">
                            </div>
                            <div class="form-group" style="height: 40px; width: 100%; margin-top: 50px">
                                <label for="username" class="textcolor" style="font-size: 15px">Username:</label><br>
                                <input type="text"  style="height: 40px; width: 100%; font-size: 15px" name="username" class="form-control">
                            </div>
                            <div class="form-group" style="height: 40px; width: 100%; margin-top: 50px">
                                <label for="password" class="textcolor" style="font-size: 15px">Password:</label><br>
                                <input type="text"  style="height: 40px; width: 100%; font-size: 15px" name="password" class="form-control">
                            </div>


                            <div class="form-group" style="height: 40px; width: 100%; margin-top: 50px">
                            <div class="form-group">
                                <input type="submit" style="width: 100%; height: 40px; font-size: 15px; margin-top: 15px" name="submit" class="btn btn-primary btn-lg btn3d" value="Register">
                            </div>

                            <div class="mt-4">
                                <div class="d-flex justify-content-center links textcolor" id="register-link" style="font-size: 15px">
                                   Login now!? <a href="<?php echo base_url('LandingPageController/subscription')?>" class="textcolor">&nbsp;Click here!</a>
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
