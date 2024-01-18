<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="../vendors/css/login.css">
	<?php require "libs.php"; ?>
	<style type="text/css">
		
		.bt{
			color: white;

		}
		input{
			width: 100%;
		}
		label{
			padding-left: 40%;
		}
		.ff{
			margin-top: 30%;
			height: 80%;
		}
	</style>
</head>
<body class="bg-primary">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4 mt-3">
				<div class="card ff">
					<div class="card-body" style="border: none;">
						<form>
						<h4 align="center">sign in</h4>

							<label class="sr-only" for="inlineFormInputGroupUsername1">Login</label>
      						<div class="input-group mb-3">
	        					
	        					<input type="text" class="form-control" id="inlineFormInputGroupUsername1" placeholder="login">
	        					<div class="input-group-prepend">
	          					<div class="input-group-text">
	          						<i data-feather="at-sign" style="cursor: pointer"></i>
	          					</div>
	        					</div>
     						 </div>

     						 <label>Password</label>
      						<div class="input-group mb-3">
	        					
	        					<input class="form-control password" id="password" class="block mt-1 w-full" type="password" name="password" required placeholder="mot de passe" />
	        					<div class="input-group-prepend">
	          						 <span class="input-group-text togglePassword" id="">
              							<i data-feather="eye" style="cursor: pointer"></i>
          							</span>
	        					</div>
     						 </div>
     						 
     						 	<nav align="center">
     						 		<button class="btn btn bg-danger bt" type="reset" >Reset</button>
     						 		<button class="btn btn bg-success bt" type="submit" >Login</button>
     						 	</nav>
						</form>
					</div>
					<hr>
						<div class="row">
							<div class="col-sm-1"></div>
							<div class="col-sm-7"><p>Creer un compte gratuitement </p></div>
							<div class="col-sm-3"><a href="signup.php">Sign up</a></div>
							<div class="col-sm-1"></div>

						</div>
				</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</body>
</html>
<script type="text/javascript">
	  feather.replace({ 'aria-hidden': 'true' });

$(".togglePassword").click(function (e) {
      e.preventDefault();
      var type = $(this).parent().parent().find(".password").attr("type");
      console.log(type);
      if(type == "password"){
          $("svg.feather.feather-eye").replaceWith(feather.icons["eye-off"].toSvg());
          $(this).parent().parent().find(".password").attr("type","text");
      }else if(type == "text"){
          $("svg.feather.feather-eye-off").replaceWith(feather.icons["eye"].toSvg());
          $(this).parent().parent().find(".password").attr("type","password");
      }
  });
</script>