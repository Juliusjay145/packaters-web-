<?php
  if(! $this->session->userdata('username'))
  {
    redirect(base_url('LandingPageController/index'));
  }
?>
<style>
    .grid-container {
  display: grid;
  height: 500px;
  width: 400px;
  margin-left: 100px;
  align-content: center;
  grid-template-columns: auto auto auto;
  grid-gap: 10px;
   border-radius: 25px;
  border: 1.1px solid #000000;
  background-color: #fefefe;
  padding: 10px;
   box-shadow: 5px 10px #888888;
}

.grid-container > div {
 text-align: center;
  padding: 20px 0;
  font-size: 10px;
}

* {
  box-sizing: border-box;
}

.header {
  border: 1px solid red;
  padding: 15px;
}

.menu {
  width: 25%;
  float: left;
  padding: 15px;
  border: 1px solid red;
}

.main {
  width: 75%;
  float: left;
  padding: 15px;
  border: 1px solid black;
  border-radius: 25px;

}
    
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

                <img src="<?php echo base_url('../bootstrap/img/newlogopackaters.png')?>" style="margin-left: 10px; height: 50px; width: 50px; margin-top: -30px; margin-bottom: -70px " alt="" class="img-fluid">

                <a href="<?php echo base_url('CateringController/home')?>"><h2 style="margin-left: 300px; margin-top: -10px"><?php echo $c['cat_name']; ?></h2>
                <?php endif; ?>
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
                        <a href="<?php echo base_url('CateringController/transaction_reports')?>"><i class="fa fa-bar-chart-o"></i> Reports History</a>
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
                                if($c['username'] == $this->session->userdata('username')):
                                    
                                    ?>


                            <?php if($c['id'] == $s['pack_caterer_id']):?>
<!-- Listview -->                                


<div class="column">
            <div class="col-sm-6"><br>
               
                <div class="box-part text-center">
                        
                       
                        
                    <div class="grid-container main">

                        <div> </div>
                            <div style="margin-top: 50px">
                                <img class="card-img-top" src="<?php echo base_url('../upload/'. $s['service_logo']);?>">

                            </div>
                        <div> </div> 

                          <div> </div>
                            <div> <h3 style="margin-top:-30px" class="card-title"><b><?php echo $s['service_name']?></b></h3></div>
                          <div> </div>  

                         <div> </div>
                            <div style="margin-top: -30px">
                            <label style="margin-right: 50%; margin-bottom: -100px"><h5><b>Menu Description:</b></h5></label>  
                                <span>
                                    <p class="card-text main" style="margin-top: 28px; margin-left: 50px; "><i><?php echo $s['service_description']?></i></p>
                                </span> 
                            </div>
                        <div> </div>

                        <div></div>
                        <div></div>
                        <div> </div>
                        <div> </div>
                        
                        <div class="footer" style="margin-top: -100px">
                            <a href="<?php echo base_url('CategoryController/category')?>/<?php echo $s['id']?>"class="btn btn-primary">Add Menu</a>
                             <a href="<?php echo base_url('ServiceController/service_profile')?>/<?php echo $s['id']?>" class="btn btn-primary">Edit</a>
                             <br>
                             <br>
                            <a href="<?php echo base_url('CategoryController/menu')?>/<?php echo $s['id']?>" class="btn btn-success">View menu</a>
                            <a onclick="reload()" href="<?php echo base_url('ServiceController/delete_service')?>/<?php echo $s['id']?>" class="btn btn-danger">Delete</a>

                        </div>


                    </div>

                </div>
            </div>    
</div>                     

<!-- <script>
    function reload(){
        location.reload();
    }
</script> -->


            <?php endif; ?>   
            <?php endif; ?> 
            <?php endif; ?> 
            <?php endforeach; ?>   
            <?php endforeach; ?>             
<!-- end of listview-->
            
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
