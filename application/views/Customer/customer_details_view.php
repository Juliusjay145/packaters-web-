<?php

  if(! $this->session->userdata('username'))
  {
    redirect(base_url('LandingPageController/index'));
  }
?>


<br/><br/><br/><br/>

<div class="container">
  <div class="row">
    <div class="col-md-3 ">
         <div class="list-group ">
          <center><img src="http://localhost/packaters/upload/debut.JPG" class="rounded-circle" /></center>
          <?php foreach($customer as $customers): ?>
            <?php
              if($this->session->userdata('username') == $customers['username'])
              {
                $customers['cust_name'];
              }
             ?>
         <?php endforeach; ?>
          <center><h3><?php echo $customers['cust_name'];?>, <?php echo $customers['cust_lastname'];?></h3></center>
          </h3>
          <br/>
              <a href="#" class="list-group-item list-group-item-action">Dashboard</a>
              <a href="<?php echo base_url('CustomerController/details')?>" class="list-group-item list-group-item-action active">Details</a>
              <a href="#" class="list-group-item list-group-item-action">Reports</a>
              <div class="dropdown">
          <button class="list-group-item list-group-item-action" type="button" data-toggle="dropdown">Settings
          <span class="caret"></span></button>
          <ul class="dropdown-menu">
                  <a href="<?php echo base_url('CustomerController/profile')?>/<?php echo $customers['id']?>"
                  class="list-group-item list-group-item-action">Profile</a>
                  <a href="<?php echo base_url('CustomerController/logout')?>" 
                  class="list-group-item list-group-item-action">Logout</a>
                </ul>
          </div>
              
              
            </div> 
    </div>


    <div class="col-md-9">
      <br/><br/><br/><br/><br/><br/><br/><br/>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <table class="table table-hover" id="dev-table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Package Service</th>
                <th>Status</th>
                <th>Price</th>
              </tr>
            </thead>

            <?php foreach($book as $b):?>
              <?php foreach($customer as $c):?>
                <?php if($b['customer_id'] == $c['id']):?>
                  <?php if($c['username'] == $this->session->userdata('username')):?>

            <tbody>
              <tr>
                    <td><?php echo $b['customer_fname']?>, <?php echo $b['customer_lname']?></td>
                    <td><?php echo $b['pack_date']?></td>
                    <td><?php echo $b['pack_time'] ?></td>
                    <td><?php echo $b['package_name'] ?></td>
                    <td><?php echo $b['status']?></td>
                    <td><?php echo $b['price'] ?></td>
              </tr>
              <?php endif; ?>
              <?php endif; ?>
              <?php endforeach; ?>
                <?php endforeach; ?> 
            </tbody>  
          </table>
        </div>
      </div>
            
    </div><!---end of row-->
  </div>
</div>