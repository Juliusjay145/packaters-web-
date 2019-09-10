<?php

  if(! $this->session->userdata('username'))
  {
    redirect(base_url('LandingPageController/index'));
  }

?>

<div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php foreach($catering as $c): ?>
                 
                 <?php
                    if($this->session->userdata('username') == $c['username']):
                    
                        $c['cat_name'];
                        //$id = $pestcontrol['pestcontrol_id'];
                 ?>

                
                <a class="navbar-brand" href="index.html"><b><?php echo $c['cat_name']; ?>
                <?php endif ?>
                <?php endforeach; ?>
            </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <ul class="dropdown-menu dropdown-messages">
                        <li class="divider"></li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('CateringController/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="<?php echo base_url('CateringController/home')?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('ServiceController/service')?>" ><i class="fa fa-desktop"></i>Add Service</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('CateringController/transaction')?>"><i class="fa fa-bar-chart-o"></i> Transaction</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('CateringController/transaction_completed')?>"><i class="fa fa-bar-chart-o"></i> Confirmed Transaction</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('CateringController/transaction_reports')?>"><i class="fa fa-bar-chart-o"></i> Reports Transaction</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('CommentController/comment')?>"><i class="fa fa-comments-o"></i>Feedback</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Category<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('ServiceController/listservice')?>" class="active-menu">List of Service</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                </div> 
                 <!-- /. ROW  -->



            <?php  foreach($service as $s): ?>
                <?php  foreach($menu as $m): ?> 
                    <?php  
                                    
                            if($s['id'] == $m['service_id']):
                                
                                if($m['status'] == "Active"):



                                ?>

           <div class="row">
              <div class="col-sm-6">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url('../upload/'. $m['logo']);?>">
                    <br/>
                  <div class="card-body">
                    <h5 class="card-title"><b><?php echo $m['menu_name']?></b></h5>
                    <p class="card-text"><?php echo $m['menu_description']?></p>
                    <a href="<?php echo base_url('CategoryController/menu_profile')?>/<?php echo $m['id']?>" class="btn btn-primary">Edit</a>
                    | <a href="<?php echo base_url('CategoryController/delete')?>/<?php echo $m['id']?>" class="btn btn-danger">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <br/>
            <?php endif; ?>
            <?php endif; ?>
            <?php endforeach; ?>   
            <?php endforeach; ?>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->