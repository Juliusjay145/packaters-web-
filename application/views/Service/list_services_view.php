<?php

  if(! $this->session->userdata('username'))
  {
    redirect(base_url('LandingPageController/index'));
  }

?>




<div id="wrapper" class="card2" >
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
                <?php endif;  ?>
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
                    <div class="col-md-12">
                        <h1 class="page-header">
                            List of Service<small></small>
                        </h1>
                    </div>
            </div> 
                 <!-- /. ROW  -->

 
            <?php  foreach($service as $s): ?>
                <?php  foreach($catering as $c): ?> 
                    <?php  
                                    
                            if($s['pack_caterer_id'] == $c['id']):
                                if($c['username'] == $this->session->userdata('username')):?>
                            <?php if($c['id'] == $s['pack_caterer_id']):?>
                    

<div class="row">
    <div class="col-lg-6">
     <div class="our-team-main">
            <div >
            <div class="team-front">
            <img style="height: 300px; margin-top: 23px; margin-left:23%;" src="<?php echo base_url('../upload/'. $s['service_logo']);?>" class="rounded-circle">
                
                <center>  <?php echo $s['service_name']?> </center> 
                
            </div>
                <center>  <?php echo $s['service_description']?> </center>
            </div>
           <center> 
            <a href="<?php echo base_url('ServiceController/service_profile')?>" class="btn btn-primary">Edit</a>
            <a href="<?php echo base_url('CategoryController/menu')?>/<?php echo $s['id']?>" class="btn btn-success">View menu</a> | <a href="<?php echo base_url('ServiceController/delete_service')?>/<?php echo $s['id']?>" class="btn btn-danger">Delete</a>

        </div>
            </center>

    </div>
    <?php endif; ?>   
    <?php endif; ?> 
    <?php endif; ?> 
    <?php endforeach; ?>   
    <?php endforeach; ?>    
</div>