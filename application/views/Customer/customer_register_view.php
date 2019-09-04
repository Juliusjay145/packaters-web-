<div id="redbg" class="redbg"> 
 <div id="login redbg">
        <h3 class="text-center text-white pt-5">Register form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="<?php echo base_url('CustomerController/add_register')?>" method="post">
                            <h3 class="text-center textcolor">Register Customer</h3>
                            <div class="form-group">
                                <label for="username" class="textcolor">First Name:</label><br>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="textcolor">Lastname:</label><br>
                                <input type="text" name="lastname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="textcolor">Address:</label><br>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="textcolor">Phone Number:</label><br>
                                <input type="text" name="number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="textcolor">Profile Picture:</label><br>
                                <input type="file "  name="picture"  style="height: 40px" class="form-control " >
                            </div>
                            <div class="form-group">
                                <label for="username" class="textcolor">Username:</label><br>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="textcolor">Password:</label><br>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="textcolor"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" style="width: 100%" class="btn btn-primary btn-lg btn3d" value="Login">
                            </div>
                            <div id="register-link " class="text-right" style="margin-bottom: 10%">
                                <a href="<?php echo base_url('LandingPageController/register')?>"  class="textcolor">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
