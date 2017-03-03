<!DOCTYPE html>
<html>
<head>
	<title>EVSU | College of Engineering | On the Job Training Monitoring and Grading System< </title>
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/bootstrap-datepicker.css">
</head>

<body>
<header>
<img src="<?php echo base_url();?>assets/images/EVSU_banner.png" height="100" class="img-responsive" alt="EVSU | College of Engineering | On the Job Training Monitoring and Grading System"> 
	
</header>
<nav class="navbar navbar-inverse" id="nav2">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" >
        <span class="sr-only" >Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
			<!-- <img src="/EVSU_OJT/assets/images/EVSU_logo.png" width="50" height="50"> -->
      <a class="navbar-brand" href="#"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        

      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li class="#"><a href="<?php echo base_url();?>"><span class="fa fa-home"></span> Home </a></li>
        <li><a href="#about" data-toggle="modal" data-target="#myModal_about" id="#about"><span class="fa fa-info-circle"></span> About</a></li>
		<li><a href="#contact_us"><span class="fa fa-envelope"></span> Contact Us</a></li>
		<li><a href="<?php echo base_url();?>Login/admin_chat_message"><span class="fa fa-comments"></span> Chat Us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user"></span><?php 
				if (isset($_SESSION['username'])) { ?>
				<span class="text-capitalize"><?php echo $_SESSION['fname'].' '.$_SESSION['lname'];?></span>	
				<?php $user = $_SESSION['username'];	    
				}?><span class="caret"></span>
          <ul class="dropdown-menu">
            <li><a style="color: #000;"  href="#"><span class="fa fa-cog"></span> Settings</a></li>
            <li><a style="color: #000;"  href="<?php echo base_url();?>Member/logout/<?= md5($_SESSION['username']);?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container" style="font-size:14pt; margin-top: 10px; margin-bottom: -12px;">
		<?= $this->session->flashdata('message', 2) ?>
</div>
<div class="container">


<!-- Modal add coordinator-->
  <div class="modal fade" id="myModal_cdr" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" id="">
        <div class="modal-header panel_head">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         	<div class="">
				<h2>Add Coordinator</h2>
			</div>
        </div>
        <div class="modal-body" id="">
			<div class="container">
				<div class="col-sm-6 " id="=">
					<div id="" class="">
						<div class="">
							<div class="message_alert">
								<?= $this->session->flashdata('message', 2) ?>
							</div>	
							<form class="form-horizontal" action="<?php echo base_url();?>Control/register_coordinator" method="POST">	
									<div class="form-group">	
										<label class="col-sm-3 control-label">Username</label>
										<div class="col-sm-8">
											<input type="text" name="reg_username" class="form-control text-capitalize" placeholder="Username" autofocus required>
											<label><small style="font-weight: normal;">*as your(lastname)&(firstname) ex.delacruzjuan</small></label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Last Name</label>						
										<div class="col-sm-8">
											<input type="text" name="reg_lname" class="form-control text-capitalize" placeholder="Last Name"  required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">First Name</label>						
										<div class="col-sm-8">
											<input type="text" name="reg_fname" class="form-control text-capitalize" placeholder="First Name" "" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Course</label>						
										<div class="col-sm-8">
											<select name="reg_course" class="input-xs" value="Course">
												<option value="BSIT">BSIT</option>
												<option value="BSCE">BSCE</option>
												<option value="BSME">BSME</option>
												<option value="BSECE">BSECE</option>
												<option value="BSECE">BSCHE</option>
												<option value="BSEE">BSEE</option>
												<option value="BSIE">BSIE</option>
											</select>
										</div>
									</div>
									<div class="form-group">	
										<label class="col-sm-3 control-label">Password</label>		
										<div class="col-sm-8">
											<input type="password" name="reg_pass" class="form-control" placeholder="Password" required>
										</div>
									</div>
									<div class="form-group">	
										<label class="col-sm-3 control-label">Repeat Password</label>		
										<div class="col-sm-8">
											<input type="password" name="confirm_pass" class="form-control" placeholder="Repeat Password"  required>
										</div>
									</div>																											
									<div class="pull-right" style="margin-right: 50px; margin-bottom: 10px; margin-top: -15px;">
										<button type="submit" class="btn btn-info reg_button"><span class="glyphicon glyphicon-cloud"></span> Add Coordinator</button>
									</div>
									
							</form>
						</div>
					</div>
				</div>
        	</div>
        	<div >
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" style="margin-right: 33px;">Close</button>
        </div>        		
        	</div>
      </div>     
    </div>
  </div> 
</div>
<!--Modal end -->

<?php $info = $this->Login_user_model->get_cdr_info($cdr_id); ?>	

<div class="" id="table_list" style="background: #fff; border-radius: 2px; box-shadow: 0 1px 2px 1px rgba(0, 0, 0, 0.2), 0 1px 2px 0 rgba(0, 0, 0, 0.1); margin: 5px 5px 5px"  >
	<div>
		<h1 style="font-weight: ; padding: 20px 40px 10px 50px; margin-top: 10px; "><span class="glyphicon glyphicon-share"></span> Update Profile</h1>
	</div>	<div class="panel-body">
			<form  class="form-horizontal" action="<?php echo base_url();?>Login/update_cdr" method="POST">							
					<input type="hidden" name="cdr_id" value="<?php echo $cdr_id ?>">		 
					<div class="form-group">	
						<label class="col-sm-3 control-label">First Name</label>
						<div class="col-sm-8">
							<input type="text" name="fname" class="form-control text-capitalize" value="<?= $info['fname'];?>"  >
						</div>
					</div>
					<div class="form-group">	
						<label class="col-sm-3 control-label">Last Name</label>
						<div class="col-sm-8">
							<input type="text" name="lname" class="form-control text-capitalize" value="<?= $info['lname']?>"  >
						</div>
					</div>
					<div class="form-group">	
						<label class="col-sm-3 control-label">Username</label>
						<div class="col-sm-8">
							<input type="text" name="username" class="form-control text-capitalize" value="<?= $info['username']?> " readonly>
						</div>
					</div>
					<div class="form-group">	
						<label class="col-sm-3 control-label">Email Address</label>
						<div class="col-sm-7">

						<div class="input-group">
								<span class="input-group-addon">
										<span>@</span>
							    </span>		
								<input type="email" name="email" class="form-control " value="<?= $info['email']?> " required>
							</div> 
						</div>
					</div>
					<div class="form-group">	
						<label class="col-sm-3 control-label">Mobile Number</label>
						<div class="col-sm-7">

						<div class="input-group">
								<span class="input-group-addon">
										<span>+63</span>
							    </span>		
								<input type="text" maxlength="10" minlength="10" name="contact" class="form-control " value="<?= $info['contactNum']?> ">
							</div> 
							<label><small style="font-weight: normal;">*must be valid mobile number.</small></label>
						</div>
					</div>
					<div class="form-group date" data-provide="datepicker">	
						<label class="col-sm-3 control-label">Birthday</label>		
						<div class='col-sm-8 ' id='datetimepicker1'>
							<div class="input-group">
								<input type='text' name="birthday" class="form-control" value="<?= $info['birthday']?>" />
							    <span class="input-group-addon">
							            <span class="glyphicon glyphicon-calendar"></span>
							    </span>
							</div>	
							<label><small style="font-weight: normal;">*Month/Day/Year</small></label>

						</div>
						<script type="text/javascript">
							$('#datetimepicker').data("DateTimePicker").FUNCTION();
						</script>

					</div>

					
					<div class="form-group">	
						<label class="col-sm-3 control-label">Current Address</label>
						<div class="col-sm-8">
							<input type="text" name="address" class="form-control text-capitalize" value="<?= $info['address']?> ">
						</div>
					</div>
					<div class="form-group">	
						<label class="col-sm-3 control-label">New Password</label>
						<div class="col-sm-8">
							<input type="password" name="password" class="form-control" placeholder="New Password" required>
						</div>
					</div>
					<div class="form-group">	
						<label class="col-sm-3 control-label">Confirm Password</label>
						<div class="col-sm-8">
							<input type="password" name="confirm" class="form-control" placeholder="Confirm Password" required>
						</div>
					</div>
					<div class="pull-right" style="margin-right: 95px; margin-bottom: 20px; ">
						<a href=""><button type="submit" class="btn btn-primary btn-lg btnUpdateAdmin"><span class="glyphicon glyphicon-share"></span> Update</button></a>
						<a href="<?php echo base_url();?>Login/coordinator_lists"><button type="button" class="btn btn-danger btn-lg btnCancel"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button></td></a>
					</div>	
		</form>	
	</div>
</div>

</div>





<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/af.js"></script>
<div class="container">	
</div>

