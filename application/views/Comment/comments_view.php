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

                <a class="navbar-brand" href="index.html"><b><?php echo $c['cat_name']; ?></a>
                    <?php endif; ?>
                    <?php endforeach; ?>

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
                        <a class="" href="<?php echo base_url('CateringController/home')?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('ServiceController/service')?>"><i class="fa fa-desktop"></i> Add Service</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('CateringController/transaction')?>"><i class="fa fa-bar-chart-o"></i>Transaction <span class="badge badge-primary"></span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('CommentController/comment')?>" class="active-menu"><i class="fa fa-comments-o"></i>Feedback <span class="badge badge-primary"></span></a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> My Service<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('ServiceController/listservice')?>">List of Services</a>
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
                            Add Service<small></small>
                        </h1>
                    </div>
                </div>
                 <!-- /. ROW  -->



            <?php  foreach($comment as $s): ?>
                <?php  foreach($catering as $c): ?> 
                    <?php  
                                    
                            if($s['pack_caterer_id'] == $c['id']):
                                if($c['username'] == $this->session->userdata('username')):
                                    
                                    ?>


                            <?php if($c['id'] == $s['pack_caterer_id']):?>
        <div class="container">                        
           <div class="row">
              <div class="tab-content">
                <div class="tab-pane active" id="comments-logout">                
                    <ul class="media-list">
                      <li class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews"><?php echo $s['pack_customer_name']?> <?php echo $s['pack_customer_lname']?></h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd">22</li>
                                <li class="mm">09</li>
                                <li class="aaaa">2014</li>
                              </ul>
                              <p class="media-comment">
                                <?php echo $s['comment']?>
                              </p>
                              <a class="btn btn-danger text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                          </div>              
                        </div>  
                      </li>
                </div>
            </div>
           </div>    
           </div>
           <?php endif; ?>   
           <?php endif; ?> 
           <?php endif; ?> 
           <?php endforeach; ?>   
           <?php endforeach; ?>    
            
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->