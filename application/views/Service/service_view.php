<?php

  if(! $this->session->userdata('username'))
  {
    redirect(base_url('LandingPageController/index'));
  }

?>

<style>
    p.double 
    {
        box-shadow:0 0 0 1px #31c300 inset, 
        0 0 0 2px rgba(255,255,255,0.15) 
        inset, 0 8px 0 0 #5eb924, 0 8px 8px 1px rgba(0,0,0,0.5);
        background-color:#78d739;
        width: 100px;
        color: white;
    }
    .btn-glyphicon { padding:4px; margin-top: 4px; background:#ffffff; margin-right:4px; }
.icon-btn { padding: 1px 15px 3px 2px; border-radius:50px;}
</style>

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
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Add Service<small></small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Service
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="<?php echo base_url('ServiceController/add_service')?>" method="post">
                                        <div class="form-group">
                                            <label>Service Name</label>
                                            <input class="form-control" name="service_name" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                                <input type="file" name="logo" class="form-control btn btn-success btn-lg btn3d"><br/> 
                                                <p class="double" style="height: 30px" class="btn btn-success btn-lg btn3d">
                                                    <h6 style="margin-top: -40px; margin-left: 10px; width: 200px; ">
                                                        <b style="color: white; margin-top: 10px; height: 100px;">Choose file  <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span></b></h6>
                                                </p>
                                        </div>
                                        <div class="form-group">
                                            <label>Service Description</label>
                                            <textarea class="form-control" name="service_description" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Service Price</label>
                                            <input type="number" class="form-control" name="service_price">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Service</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6" style="margin-left: -100px">
                                    <img src="<?php echo base_url('../bootstrapV3/img/icon.png')?>" width="150%"height="150%" >
                                </div>

                                <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Services
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Service Name</th>   
                                            <th>Action</th>   
                                        </tr>
                                    </thead>


                                    <?php  foreach($service as $s): ?>
                                    <?php  foreach($catering as $c): ?> 
                                    <?php  
                                    
                                        if($s['pack_caterer_id'] == $c['id']):

                                            if($c['username'] == $this->session->userdata('username')):
                                    
                                    ?> 


                                        <?php if($c['id'] == $s['pack_caterer_id']):?>

                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td><?php echo $s['service_name']?></td>
                                                <td class="center">
                                                <a href="<?php echo base_url('CategoryController/category')?>/<?php echo $s['id']?>"><i class="fa fa-pencil fa-fw"></i> |</a>
                                                    <a href="<?php echo base_url('ServiceController/delete_service')?>/<?php echo $s['id']?>"><i class="fa fa-minus-square fa-fw"></i></a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>   
                                            <?php endif; ?> 
                                            <?php endif; ?> 
                                    <?php endforeach; ?>   
                                    <?php endforeach; ?>   
                                              
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->