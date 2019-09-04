<div id="login redbg2" class="redbg2" style="height: 101%; margin-top: -30px">
        <h3 class="text-center text-white pt-5"></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="<?php echo base_url('CateringController/login')?>" method="post">
                            <h3 class="text-center textcolor">Login Catering Provider</h3>
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
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="<?php echo base_url('LandingPageController/register')?>" class="textcolor">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
