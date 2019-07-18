<?php

  if(! $this->session->userdata('username'))
  {
    redirect(base_url('LandingPageController/index'));
  }
?>


<div class="container">
  <div class="row">
    <div class="col-md-3 ">
      <br/>
         <div class="list-group ">
          <center><img src="http://localhost/packaters/upload/debut.JPG" class="rounded-circle" /></center>
          <?php foreach($customer as $customers): ?>
            <?php
              if($this->session->userdata('username') == $customers['username'])
              {
                $customers['cust_name'];
              }
             ?>
          <center><h3><?php echo $customers['cust_name'];?>, <?php echo $customers['cust_lastname'];?></h3></center>
          <?php endforeach; ?></h3>
          <br/>
              <a href="#" class="list-group-item list-group-item-action">Dashboard</a>
              <a href="<?php echo base_url('CustomerController/details')?>" class="list-group-item list-group-item-action">Details</a>
              <a href="#" class="list-group-item list-group-item-action">Reports</a>
              <div class="dropdown">
          <button class="list-group-item list-group-item-action" type="button" data-toggle="dropdown">Settings
          <span class="caret"></span></button>
          <ul class="dropdown-menu">
                  <a href="<?php echo base_url('CustomerController/settings')?>" 
                  class="list-group-item list-group-item-action active">Profile</a>
                  <a href="<?php echo base_url('CustomerController/logout')?>" 
                  class="list-group-item list-group-item-action">Logout</a>
                </ul>
          </div>
              
              
            </div> 
    </div>
    <div class="col-md-9">
      <br/>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Your Profile</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="<?php echo base_url('CustomerController/update_profile')?>">
                          <input type="hidden" name="id" class="form-control" value="<?php echo $customer[0]['id']; ?>">
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">First Name</label> 
                                <div class="col-8">
                                  <input name="name" placeholder="First Name" class="form-control here" type="text" value="<?php echo $customer[0]['cust_name']; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Last Name</label> 
                                <div class="col-8">
                                  <input name="lastname" placeholder="Last Name" class="form-control here" type="text" value="<?php echo $customer[0]['cust_lastname']; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Last Name</label> 
                                <div class="col-8">
                                  <input name="address" placeholder="Last Name" class="form-control here" type="text" value="<?php echo $customer[0]['cust_address']; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">Old Password</label> 
                                <div class="col-8">
                                  <input name="pass" placeholder="Old Password" class="form-control here" type="text" value="<?php echo $customer[0]['password']; ?>">
                                </div>
                              </div> 
                              <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">New Password</label>
                                <div class="col-8">
                                  <input name="newpass" placeholder="New Password" class="form-control here" type="text">
                                </div>
                              </div> 
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                                </div>
                              </div>
                            </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
  </div>
</div>