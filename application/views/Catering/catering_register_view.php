 <div id="redbg" class="redbg"> 
 <div id="login">
        <h3 class="text-center text-white pt-5"></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="<?php echo base_url('CateringController/add_register')?>" method="post">
                            <h3 class="text-center text-info">Register Catering Provider</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">First Name:</label><br>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Address:</label><br>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Phone Number:</label><br>
                                <input type="text" name="number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Catering Details:</label><br>
                                <textarea name="details" class="form-control" width="10%" height="20%"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Catering Logo:</label><br>
                                <input type="file" name="logo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-primary btn-lg btn3d" value="Register">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="<?php echo base_url('LandingPageController/register')?>" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
