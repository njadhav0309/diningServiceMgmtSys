<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dining Service Management</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" />
  <style>
  	.nav-item {
  		background: #fff;
  	}
  	.sidebar .nav.sub-menu{
  		background: #fff !important;
  	}
  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img style="height:65px;" src="<?php echo base_url();?>assets/images/logo_2.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img style="height:65px;" src="<?php echo base_url();?>assets/images/logo_2.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0" style="color:#3e2cc7">DINING SERVICE MANAGEMENT</h3>
      </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
	    <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-image: url(<?php echo base_url();?>assets/images/bk.jpg);">
	        <ul class="nav">
	          <!-- <li class="nav-item">
	            <a class="nav-link" href="index.html">
	              <i class="ti-shield menu-icon"></i>
	              <span class="menu-title">Dashboard</span>
	            </a>
	          </li> -->

	          <li class="nav-item">
	            <a class="nav-link" href="<?php echo base_url();?>index.php/diningservicemgmt/departmentlist">
	              <i class="ti-layout-column3 menu-icon"></i>
	              <span class="menu-title">University Departments</span>
	            </a>
	          </li>

	          <li class="nav-item">
	            <a class="nav-link" href="<?php echo base_url();?>index.php/diningservicemgmt/liststudent">
	              <i class="ti-user menu-icon"></i>
	              <span class="menu-title">Students</span>
	            </a>
	          </li>

	          <li class="nav-item">
	            <a class="nav-link" href="<?php echo base_url();?>index.php/diningservicemgmt/listdiningunit">
	              <i class="ti-user menu-icon"></i>
	              <span class="menu-title">Dining Units</span>
	            </a>
	          </li>

	          <li class="nav-item">
	            <a class="nav-link" href="<?php echo base_url();?>index.php/diningservicemgmt/listopsmgr">
	              <i class="ti-user menu-icon"></i>
	              <span class="menu-title">Operation Manager</span>
	            </a>
	          </li>

	          <li class="nav-item" id="reportsid">
	            <a class="nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="#ui-basic" href="#subReportMenu">
	            <!-- <ahref="<?php //echo base_url();?>index.php/diningservicemgmt/reports" > -->
	              <i class="ti-bar-chart-alt menu-icon"></i>
	              <span class="menu-title">Reports</span>
	              <i class="menu-arrow"></i>
	            </a>
	            <div class="collapse" id="subReportMenu">
              		<ul class="nav flex-column sub-menu">
	                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/diningservicemgmt/reports/active_students">Active Students</a></li>

	                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/diningservicemgmt/reports/employed_students">Employed Students</a></li>

	                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/diningservicemgmt/reports/total_working_hours">Student's Working Hours</a></li>

	                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/diningservicemgmt/reports/gt_20_hours">Student Exceeded 20 Hrs</a></li>

	                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/diningservicemgmt/reports/student_details_ssn">Student with SSN[decrypt]</a></li>

	                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/diningservicemgmt/reports/salary_calculate">Salary Calculation</a></li>

	                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/diningservicemgmt/reports/du_all_staff">Dining Unit Staff</a></li>

	                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/diningservicemgmt/reports/du_details">Dining Unit Details</a></li>

	                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/diningservicemgmt/reports/schedule_matches">Schedule Matches</a></li>

	                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>index.php/diningservicemgmt/reports/work_strikes">Work Strikes</a></li>

	              </ul>
	            </div>
	          </li>
	        </ul>
	      </nav>
	    <!-- partial -->
	    <div class="main-panel" >
        <div class="content-wrapper" style="background-image: url(<?php echo base_url();?>assets/images/bk.jpg);">
        	<div class="row">
	            <div class="col-md-12 grid-margin">
	              <div class="d-flex justify-content-between align-items-center">
	                <div>
	                  <h4 class="font-weight-bold mb-0"><?php echo $heading; ?></h4>
	                </div>
	              </div>
	            </div>
          	</div>
