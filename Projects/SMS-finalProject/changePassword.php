	/* change password */
	if($_POST['action'] == 'changePassword' && $mi['username'] != $adminConfig['adminUsername']){
		if(!csrf_token(true)){
			echo $Translation['error:'];
			exit;
		}

		/* process inputs */
		$oldPassword=$_POST['oldPassword'];
		$newPassword=$_POST['newPassword'];

		/* validate password */
		if(md5($oldPassword) != sqlValue("SELECT `passMD5` FROM `membership_users` WHERE memberID='{$mi['username']}'")){
			echo "{$Translation['error:']} {$Translation['Wrong password']}";
			echo "<script>$$('label[for=\"old-password\"]')[0].pulsate({ pulses: 10, duration: 4 }); $('old-password').activate();</script>";
			exit;
		}
		if(strlen($newPassword) < 4){
			echo "{$Translation['error:']} {$Translation['password invalid']}";
			echo "<script>$$('label[for=\"new-password\"]')[0].pulsate({ pulses: 10, duration: 4 }); $('new-password').activate();</script>";
			exit;      
		}

		/* update password */
		$updateDT = date($adminConfig['PHPDateTimeFormat']);
		sql("UPDATE `membership_users` set `passMD5`='".md5($newPassword)."', `comments`=CONCAT_WS('\\n', comments, 'member changed his password on $updateDT from IP address {$mi[IP]}') WHERE memberID='{$mi['username']}'", $eo);

		// hook: member_activity
		if(function_exists('member_activity')){
			$args=array();
			member_activity($mi, 'password', $args);
		}

		exit;
	}			
            
            
            
            <?php if($mi['username'] != $adminConfig['adminUsername']){ ?>
			
				<!-- change password -->
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">
							<i class="glyphicon glyphicon-asterisk"></i><i class="glyphicon glyphicon-asterisk"></i>
							<?php echo $Translation['Change your password']; ?>
						</h3>
					</div>
					<div class="panel-body">
						<fieldset id="change-password">
							<div id="password-change-form">

								<div class="form-group">
									<label for="old-password"><?php echo $Translation['Old password']; ?></label>
									<input type="password" id="old-password" autocomplete="off" class="form-control">
								</div>

								<div class="form-group">
									<label for="new-password"><?php echo $Translation['new password']; ?></label>
									<input type="password" id="new-password" autocomplete="off" class="form-control">
									<p id="password-strength" class="help-block"></p>
								</div>

								<div class="form-group">
									<label for="confirm-password"><?php echo $Translation['confirm password']; ?></label>
									<input type="password" id="confirm-password" autocomplete="off" class="form-control">
									<p id="confirm-status" class="help-block"></p>
								</div>

								<div class="row">
									<div class="col-md-4 col-md-offset-4">
										<button id="update-password" class="btn btn-success btn-block" type="button"><i class="glyphicon glyphicon-ok"></i> <?php echo $Translation['Update password']; ?></button>
									</div>
								</div>

							</div>
						</fieldset>
					</div>
				</div>
			<?php } ?>