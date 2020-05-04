<?php $this->load->view($header); ?>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<?php $this->load->view($sidebar); ?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	<h3> Registration</h3>
	<div class="well">
	<!--
	<div class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div> -->
	<!-- <form class="form-horizontal" > -->
    <?php echo form_open('Register/signup',['class'=>'form-horizontal']); ?>
		<h4>Your personal information</h4>
    <div class="control-group">
			<label class="control-label" for="inputFname1">User Name <sup>*</sup></label>
			<div class="controls">
			  <!-- <input type="text" id="inputFname1" placeholder="User Name"> -->
        <?php echo form_input(['name'=>'uname','id'=>'inputUname','placeholder'=>'User Name']); ?>
			</div>
		 </div>
    <div class="control-group">
			<label class="control-label" for="inputFname1">First Name <sup>*</sup></label>
			<div class="controls">
			  <!-- <input type="text" id="inputFname1" placeholder="First Name"> -->
        <?php echo form_input(['name'=>'fname','id'=>'inputFname','placeholder'=>'First Name']); ?>

			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
			<div class="controls">
			  <!-- <input type="text" id="inputLnam" placeholder="Last Name"> -->
        <?php echo form_input(['name'=>'lname','id'=>'inputLname','placeholder'=>'Last Name']); ?>

			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		  <!-- <input type="text" id="input_email" placeholder="Email"> -->
      <?php echo form_input(['name'=>'email','id'=>'inputEmail','placeholder'=>'Email']); ?>

		</div>
	  </div>
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
		<div class="controls">
		  <!-- <input type="password" id="inputPassword1" placeholder="Password"> -->
      <?php echo form_password(['name'=>'password','id'=>'inputPassword','placeholder'=>'Password']); ?>

		</div>
	  </div>

    <div class="control-group">
      <label class="control-label" for="Mobile">Mobile <sup>*</sup></label>
      <div class="controls">
        <!-- <input type="text" id="input_mobile" placeholder="Mobile"> -->
        <?php echo form_input(['name'=>'mobile','id'=>'inputMobile','placeholder'=>'Mobile']); ?>

      </div>
      </div>
	<!-- <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div> -->
	<div class="control-group">
			<div class="controls">
				<!-- <input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1"> -->
				<input class="btn btn-large btn-success" type="submit" value="Register" />
			</div>
		</div>
    <?php echo form_close(); ?>
	</form>
</div>

</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<?php $this->load->view($footer); ?>
