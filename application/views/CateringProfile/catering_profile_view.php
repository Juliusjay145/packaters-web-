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
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		            </div>
		            		<div class="col-md-12 no-padding lib-item" data-category="view">
			                <div class="lib-panel">
                                    <?php  foreach($cater as $c): ?>

			                    <div class="row box-shadow">
				                        <div class="col-md-6" >
				                            <img src="<?php echo base_url('../upload/'. $c['logo']);?>" class="rounded-circle" />
				                        </div>
									<div class="w3-panel w3-card">
				                        <div class="col-md-6" style="margin-top: 10px; margin-right: 80px">
				                            <div class="lib-row lib-header">
				                                <h4><b><?php echo $c['cat_name']?></b></h4>
				                                <div class="lib-header-seperator"></div>
				                            </div>
				                            <div class="lib-row lib-desc">
				                               <?php echo $c['cat_details']?>
				                            </div>
				                            <hr>
				                        </div>
				                        <?php endforeach;?>
				                     </div>   
			                    </div>
			                </div>

						<center><h3>Our Services</h3></center>   	
			               <div class="lib-panel">
                                    <?php foreach($service as $s):?>   
				                     <?php foreach($cater as $c):?>
				                     	 <?php if($s['pack_caterer_id'] == $c['id']): ?>
			                    <div class="row box-shadow">
				                        <div class="col-md-6">
				                        </div>
									   
			                    </div>
			                </div>
			                <!-- 3rd row -->
			                <div class="w3-panel w3-card">
				                <div class="col-md-6" style="margin-top: 10px; margin-right: 80px">
				                            <div class="lib-row lib-header">
				                            	<img src="<?php echo base_url('../upload/'. $s['service_logo']);?>" class="rounded-circle" />
				                                <h4><b><a href=""><?php echo $s['service_name']?></a></b></h4>
				                                <div class="lib-header-seperator"></div>
				                            </div>
				                            <div class="lib-row lib-desc">
				                               <?php echo $c['cat_details']?>
				                            </div>
				                            <hr>
				                </div>        
				                        <?php endif;?>
				                        <?php endforeach;?>
				                        <?php endforeach;?>
				            </div>
				            <!-- end of 3rd row -->
		        </div>
		    </div>