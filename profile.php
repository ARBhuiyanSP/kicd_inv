<?php 
include 'header.php';
//include 'includes/login_process.php';
 ?>
 <style type="text/css">
.error{
margin-top: 6px;
margin-bottom: 0;
color: #fff;
background-color: #D65C4F;
display: table;
padding: 5px 8px;
font-size: 11px;
font-weight: 600;
line-height: 14px;
  }
.green{
margin-top: 6px;
margin-bottom: 0;
color: #fff;
background-color: green;
display: table;
padding: 5px 8px;
font-size: 11px;
font-weight: 600;
line-height: 14px;
  }
</style>

<?php
  if(isset($_POST['submit'])):
	extract($_POST);
	if($old_password!="" && $password!="" && $confirm_pwd!="") :
	$id = $_SESSION['logged']['user_id'];// sesssion id
	$old_pwd=md5(mysqli_real_escape_string($conn,$_POST['old_password']));
	$pwd=md5(mysqli_real_escape_string($conn,$_POST['password']));
	$c_pwd=md5(mysqli_real_escape_string($conn,$_POST['confirm_pwd']));
	if($pwd == $c_pwd) :
	if($pwd!=$old_pwd) :
    $sql="SELECT * FROM `users` WHERE `id`='$id' AND `password` ='$old_pwd'";
    $db_check=$conn->query($sql);
    $count=mysqli_num_rows($db_check);
	if($count==1) :
    $fetch=$conn->query("UPDATE `users` SET `password` = '$pwd' WHERE `id`='$id'");
    $old_password=''; $password =''; $confirm_pwd = '';
    $msg_sucess = "Your new password update successfully.";
	else:
    $error = "The old password you gave is incorrect.";
	  endif;
	  else :
		$error = "Old password new password same Please try again.";
	  endif;
	  else:
		$error = "New password and confirm password do not matched";
	  endif;
	  else :
		$error = "Please fil all the fields";
	  endif;   
	  endif;
?>
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">User Profile</li>
    </ol>
    <!-- DataTables Example -->
    <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <center><img class="profile-user-img img-responsive img-circle" src="images/user.png" alt="User profile picture" height="75px"></center>

              <h3 class="profile-username text-center"><?php echo $_SESSION['logged']['user_name']; ?></h3>

              <p class="text-muted text-center">[<?php echo $_SESSION['logged']['user_type']; ?>]</p>

              <a href="includes/logout.php" class="btn btn-primary btn-block"><b>Logout</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-8">
			<h5>Change Password</h5>
			<form method="post" autocomplete="off" id="password_form">
				<div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Old Password</label>

                    <div class="col-sm-10" style="padding-bottom:10px;">
                      <input type="text" class="form-control" name="old_password" id="inputName" placeholder="Type Old Password">
                    </div>
                </div>
				<div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">New Password</label>

                    <div class="col-sm-10" style="padding-bottom:10px;">
                      <input type="text" class="form-control ser" name="password" id="password" placeholder="Type New Password">
                    </div>
                </div>
				<div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Confirm Password</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control ser" name="confirm_pwd" id="confirm_pwd" placeholder="Type New Password">
                    </div>
                </div>
				<div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" required> I confirm to change the password</a>
                        </label>
                      </div>
                    </div>
                </div>
				<div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10" style="padding-bottom:10px;">
                      <button type="submit" name="submit" class="btn btn-danger submit">Change Password</button>
                    </div>
                </div>
				<div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10" style="padding-bottom:10px;">
						<div class="<?=(@$msg_sucess=="") ? 'error' : 'green' ; ?>" id="logerror">
							<?php echo @$error; ?><?php echo @$msg_sucess; ?>
						</div>
                    </div>
                </div>
			</form>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</div>
<!-- /.container-fluid -->
<?php include 'footer.php' ?>