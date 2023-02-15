
<aside class="main-sidebar">
  <?php include 'includes/header.php'; ?>
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-square" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
          <a><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">REPORTS</li>
        <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="header">MANAGE</li>
     
            <li><a target="_blank" rel="noopener noreferrer" href="../index/webpage1.html"><i class="fa fa-globe"></i>Order(1)</a></li>
            <li><a target="_blank" rel="noopener noreferrer" href="../index/webpage2.php"><i class="fa fa-globe"></i>Payroll</a></li>
            <li><a target="_blank" rel="noopener noreferrer" href="../index/webpage3.html"><i class="fa fa-globe"></i>Order(2)</a></li>
      
        <li><a href="employee.php"><i class="fa fa-circle-o"></i> Employee List</a></li>
        <li><a href="position.php"><i class="fa fa-suitcase"></i> Positions</a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>