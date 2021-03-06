<!-- <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/MDB/css/bootstrap.min.css"> -->
</head>
<header>
<img id="non-printable" src="<?php echo base_url();?>assets/images/EVSU_banner.png" height="100" class="img-responsive" alt="EVSU | College of Engineering | On the Job Training Monitoring and Grading System"> 
	
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
		<li><a href="<?php echo base_url();?>Login/supervisor_chat_message"><span class="fa fa-comments"></span> Chat Us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle text-capitalize" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user"></span><?php 
				if (isset($_SESSION['username'])) { ?>
				<?php echo $_SESSION['fname'].' '.$_SESSION['lname'];	
				$user = $_SESSION['username'];	 
				$course = $_SESSION['course']; 
				$fname = $_SESSION['fname']; 
				$lname = $_SESSION['lname'];  
				$stud_num = $_SESSION['stud_num']; 
				$stud_id = $_SESSION['stud_num']; 
				

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
<div id="mySidenav" class="sidenav " >
	<a href="javascript:void(0)" class="closebtn avatarBody" onclick="closeNav()"
	 style="position: absolute; float: left;">×</a>
	<div class="panel-heading avatar1" style="padding-bottom: 
	25px">
		<h3 style="color: #000; font-weight: bold;">Welcome!</h3>
		<!-- <span class="fa fa-user-circle  fa-5x" style="color: #000;"></span> -->
		<img data-toggle="modal" data-target="#myModal_add_admin" src="<?php echo base_url();?>assets/images/avatar_img.jpg" style="height:90px;width:90px" alt="avatar" >
		
	</div>
	<?php $dataqwe = $this->Login_user_model->getcnameqwe($stud_id)

	 ?>
	 <!-- <?php echo $dataqwe['cname']; ?> -->
	<span class="text-capitalize nav_span col-sm-12">Student Number: <?php echo $stud_num;  ?></span>
	<span class="text-capitalize nav_span col-sm-12">Name: <?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?></span>
	<span class="text-capitalize nav_span col-sm-12">Course: <?php echo $course;  ?></span>
	<span class="text-capitalize nav_span col-sm-12">Username: <?php echo $user;  ?></span>		
	<span class=" nav_span col-sm-12">Agency Assigned: <?php echo $dataqwe['cname']  ?></span>	
		
	<div class="add_admin_cdr">
		<button type="button" class="btn btn-primary col-sm-2 btnProfile" data-toggle="modal" data-target="#myModal_edit"><span class="fa fa-user-plus"></span> Edit Profile</button>
		<button type="button" class="btn btn-primary col-sm-2 btnProfile" data-toggle="modal" data-target="#myModal_cdr"><span class="fa fa-cloud-upload"></span> Upload File</button>
		<!-- <button onclick="window.location='<?php echo base_url();?>Student/journal';" type="button" class="btn btn-primary col-sm-2 btnProfile"><span class="fa fa-newspaper-o"></span> Journal</button> -->
		<button onclick="window.location='<?php echo base_url();?>Student/grades';" type="button" class="btn btn-primary col-sm-2 btnProfile"><span class="fa fa-calculator"></span> Grades</button>
		<button style="font-size: 14px;" onclick="window.location='<?= base_url(); ?>Login/PTPgrades?studID=<?= $stud_id ?>/'" type="button" class="btn btn-primary col-sm-2 btnProfile"><span class="fa fa-thumbs-up"></span> Rate Your Self</button>
	</div>
</div>

<div id="main">
	<span  style="font-size:30px;cursor:pointer;float: left; z-index: 1; background: #c9302c;" onclick="openNav()"  class="btn_nav btn btn-md btn-circle btn_circle">
		<span id="#non-printable" style="color: #fff" class="fa fa-tasks"></span>
	</span>
<body class="img-responsive" style="
background:url('<?php echo base_url();?>assets/images/background.png') no-repeat;
background-size: 100% 90%; padding: 0px 0px 0px 0px" >

<div class="container" style="font-size:14pt; margin-top: 10px; margin-bottom: 12px;">
		<?= $this->session->flashdata('message') ?>
<div class="container">


<div class="" style="margin: 10px;" >
	<div style="margin: 30px 0px 20px 0px">
	<div class="" style="text-align: center;">
		<div id="non-printable">
			<button type="button" onclick="window.location='<?= base_url();?>Login/student_profile_page';" style=" margin:0px 30px 50px 0px; border-radius: 120px; box-shadow: 0 9px 18px 0 rgba(0, 0, 0, 0.21), 0 3px 10px 0 rgba(0, 0, 0, 0.19); float: right; position: fixed; z-index: 1; right: 0; bottom: 0;background: #db4437" class="btn btn-sm"><span style="color: #fff; font-size: 40px; padding-top: 5px; padding-bottom: 5px;" class="fa fa-hand-o-left"></span>
			</button>
		</div>
	<div>
		<p class="" style="text-align: center; font-size: 18px;">
			Republic of the Philippines<br>
			EASTERN VISAYAS STATE UNIVERSITY<br>
			Tacloban City
		</p>
	</div>
	<div style="margin-top: 30px; font-size: 15px; " >
		<b>TRAINEE'S EVALUATION RECORD</b>
	</div>
	</div>
	<?php 
		$studentID = $_GET['studID'];
		$info = $this->Login_user_model->get_stud_info($studentID); 
		$hash = $info['hash'];

	?>	
	<div class="row" style="margin-top: 60px;"> 
		<div  class="col-md-8" >
			<div class="form-group">
				<label class="control-label col-md-7 text-capitalize" style="font-weight: normal; text-align: center; font-size: 15px; margin-left: -25px;" ><?php echo $info['lname'].', '.$info['fname'];  ?>
			</label>
			</div>
			<div class="form-group">
				<label class="control-label col-md-6" style="text-align: center; font-size: 15px; border-top: 1px solid #000;">Trainee's Name
				</label>
			</div>				
		</div>
		<div class="" style="float: right; margin: -20px 90px 0px 0px;">
			<label class="control-label col-sm-12" style="font-size: 15px; border-bottom: 1px solid #000; ">Rating Systems</label>
		</div>
	</div>
	<div class="row" style="font-size: 15px;margin:40px 0px 0px 10px;">
		<div class="form-group">
			<label class="control-label col-sm-7">Name of Agency: <?= $info['cname']?></label>
			
				
		</div>
		<div>
			<label class="control-label col-sm-7 text-capitalize">Agency Address: <?= $info['agency_address']?></label>
		</div>
		<div class="" style="float: right;margin:-100px 50px 0px 0px;">
			<p>
			<span style="margin-right: 50px;">1.0-1.5</span><span>Excellent</span><br>
			<span style="margin-right: 50px;">1.6-2.0</span><span>Very Good</span><br>
			<span style="margin-right: 50px;">2.1-2.5</span><span>Good</span><br>
			<span style="margin-right: 50px;">2.6-3.0</span><span>Fair</span><br>
			<span style="margin-right: 50px;">3.1-4.0</span><span>Poor</span><br>
			<span style="margin-right: 50px;">4.1-5.0</span><span>Very Poor</span><br>		
			</p>
		</div>
	</div>
</div>
	<!-- <?php $info = $this->Login_user_model->get_stud_data($studentID)  ?>	 -->
	<div style="font-" class="table_grades">
	<form action="<?php echo base_url();?>Login/compute_grades_PTP" method="post">
		
		<table class="table table-bordered table-hover" class="table_grades">
				<?php $studData = $this->Login_user_model->get_gradesPTP($hash);?>
			<thead>
				<tr>
					<th style="padding-bottom: 15px;text-align: center;">TRAINER'S CHARACTERISTICS</th>
					<th width="100">RATING<br>(1.0 - 5.0)</th>
					<!-- <th>Action</th> -->
				</tr>			
			</thead>

				<?php foreach ($this->Login_user_model->get_criteria() as $criteria) { ?>
			<tbody>
				<tr>
					<td>
						<p><?= $criteria['c1']?></p>
					</td>
						
					<td>	
						<input type="hidden" name="hash" value="<?= $hash ?>">
						<input type="hidden" name="fullname" value="<?php echo $info['lname'].', '.$info['fname'];  ?>">
						<input type="hidden" name="stud_id" value="<?= $studentID?>">	
						<input type="hidden" name="graded_by" value="<?= $stud_id ?>">				
						<input type="number" name="answer_1" step="any" class="col-sm-12 form-control" value="" required>
					</td>
					
				</tr>
				<tr>
					<td>
						<p><?= $criteria['c2']?></p>
					</td>
					<td>
						<input type="number" max="5" min="1" step=".1" name="answer_2" value="" class="col-sm-12 form-control" required>
					</td>
				</tr>
				<tr>
					<td>
						<p><?= $criteria['c3']?></p>
					</td>
					<td>
						<input type="number" name="answer_3" max="5" min="1" step=".1" class="col-sm-12 form-control" value="" required>
					</td>
				</tr>
				<tr>
					<td>
						<p><?= $criteria['c4']?></p>
					</td>
					<td>
						<input type="number" name="answer_4" max="5" min="1" step=".1" class="col-sm-12 form-control" value="" required >
					</td>
				</tr>
				<tr>
					<td>
						<p><?= $criteria['c5']?></p>
					</td>
					<td>
						<input type="number" name="answer_5" max="5" min="1" step=".1" class="col-sm-12 form-control" value="" required>
					</td>
				</tr>
				<tr>
					<td>
						<p><?= $criteria['c6']?></p>
					</td>
					<td>
						<input type="number" name="answer_6" max="5" min="1" step=".1" class="col-sm-12 form-control" value="" required>
					</td>
				</tr>
				<tr>
					<td>
						<p><?= $criteria['c7']?></p>
					</td>
					<td>
						<input type="number" name="answer_7" max="5" min="1" step=".1" class="col-sm-12 form-control" value="" required>
					</td>
				</tr>
				<tr>
					<td>
						<p><?= $criteria['c8']?> </p>
					</td>
					<td>
						<input type="number" name="answer_8" max="5" min="1" step=".1" class="col-sm-12 form-control" value="" required>
					</td>
				</tr>
				<tr>
					<td>
						<p><?= $criteria['c9']?></p>
					</td>
					<td>
						<input type="number" name="answer_9" max="5" min="1" step=".1" class="col-sm-12 form-control" value="" required>
					</td>
				</tr>
				<tr>
					<td>
						<p><?= $criteria['c10']?></p>
					</td>
					<td>
						<input type="number" name="answer_10" max="5" min="1" step=".1" class="col-sm-12 form-control" value="" required>
					</td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
		<div>
			<button type="submit" class="btn btn-primary btnCompGrades" style="float: right;" id="grades"><span class="fa fa-calculator"></span> Compute Grades</button><br>
				<?php $data = $this->Login_user_model->get_gradesPTP($hash);?>

			<div id="total" style="float: right; margin-right: -190px; margin-top: 50px;">
				<label class="label-control">Total Grades:</label><br>
				<input type="text" class="col-sm-3 form-control" value="">
			</div>
		</div>
	</form>
		<?php 
			if (isset($_SESSION['username'])) { ?>				    
			
		<div class="row">
		<div class="col-sm-6" style="margin-top: 35px;">
			<label style="margin-left: 35px;">Evaluated by:</label>
			<div style="margin-top: 30px" align="center">
				<label class="col-sm-4 text-capitalize" style="font-weight: normal; border-bottom: 1px solid #000; width: 120;"><?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?></label><br>
			</div>
		</div>
			<?php } ?>
		<!-- <div class="col-sm-6" style="float: right; clear:left; margin-top: -125px;">
			<label >Noted by:</label>
			<div style="margin-top: 75px">
				<label style="col-sm-7" style="border-top: 1px solid #000;width="";text-align: center; ">Follow-Up Instructor</label>
			</div>
		</div> -->
	</div>
	</div>
	<div style="margin-left: 10px; margin-top: 50px;">
		<button id="printables" class="btn btn-primary btnPrint" onClick="window.print()"><span class="glyphicon glyphicon-print"></span> Print this page</button>
	</div>

	<!-- Modal Edit -->
  <div class="modal fade" id="myModal_edit" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header edit_profile_modal">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         	<div class="">
				<h2><span class="fa fa-edit"></span> Edit Profile</h2>
			</div>
        </div>
        <div class="modal-body" id="login_reg">
			<div class="container">
				<div class="col-sm-6 " id="login_user">
					<div id="" class="">
						<div class="">
							<form class="form-horizontal" action="<?php echo base_url();?>Login/update_student_pass" method="POST">	
									<input type="hidden" name="stud_id" value="<?= $_SESSION['stud_num']; ?>">
									<div class="form-group">	
										<label class="col-sm-3 control-label">New Password</label>
										<div class="col-sm-8">
											<input type="password" name="password" class="form-control" placeholder="New Password" required>
										</div>
									</div>
									<div class="form-group">	
										<label class="col-sm-3 control-label">Confirm Password</label>
										<div class="col-sm-8">
											<input type="password" name="password" class="form-control" placeholder="Comfirm Password" required>
										</div>
									</div>
									<div class="pull-right" style="margin-right: 50px; margin-bottom: 20px; ">
										<button type="submit" class="btn btn-info btn-xm signin_button"><span class="glyphicon glyphicon-share"></span> Update</button>
									</div>
							</form>
						</div>
					</div>
				</div>
        	</div>
        	<div >
        <div class="modal-footer" style="margin-right: 30px;">
          <button type="button" class="btn btn-primary" data-dismiss="modal" >Close</button>
        </div>        		
        	</div>
      </div>     
    </div>
  </div> 
</div>
<!--Modal  -->

</div>
</div>
</div>	
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<div class="container">	</div>






	