<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php require "libs.php"; ?>
	<style type="text/css">
		
		input{
			width: 100%;
			

			
		}
		label{
			padding-left: 40%;
		}
		.ff{
			margin-top: 20%;
			height: 90%;
		}

				
	</style>
</head>
<body class="bg-primary">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="card ff">
				<div class="card-body">
					<form>
						<h4 align="center" class="mb-4">Sign Up</h4>
						<label class="sr-only" for="inlineFormInputGroupUsername1">Nom Utilisateur</label>
      						<div class="input-group mb-3">
	        					
	        					<input type="text" class="form-control"id="nom" name="nom" placeholder="User Name">
	        					<div class="input-group-prepend">
	          					<div class="input-group-text">
	          						<i data-feather="at-sign" style="cursor: pointer"></i>
	          					</div>
	        					</div>
     						 </div>
     						 <label class="sr-only" for="inlineFormInputGroupUsername1">Prenom Utilisateur</label>
      						<div class="input-group mb-3">
	        					
	        					<input type="text" class="form-control" id="prenom" name="Prenom" placeholder="Surname">
	        					<div class="input-group-prepend">
	          					<div class="input-group-text">
	          						<i data-feather="at-sign" style="cursor: pointer"></i>
	          					</div>
	        					</div>
     						 </div>
     						 <label class="sr-only" for="Login">Login</label>
      						<div class="input-group mb-3 ">
	        					
	        					<input type="text" class="form-control" id="login" name="login" placeholder="Mot de passe">
	        					<div class="input-group-prepend">
	          					<div class="input-group-text">
	          						<i data-feather="at-sign" style="cursor: pointer"></i>
	          					</div>
	        					</div>
     						 </div>
     						 <label>Password</label>
      						<div class="input-group mb-3">
	        					
	        					<input class="form-control password" id="password" name="password" class="block mt-1 w-full" type="password" name="password" required placeholder="mot de passe" />
	        					<div class="input-group-prepend">
	          						 <span class="input-group-text togglePassword" id="">
              							<i data-feather="eye" style="cursor: pointer"></i>
          							</span>
	        					</div>
     						 </div>
     						 <label class="sr-only" for="Contact">Contact</label>
      						<div class="input-group mb-3">
	        					<input type="text" class="form-control" id="contact" name="contac" placeholder="Phone">
	        					<div class="input-group-prepend">
	          					<div class="input-group-text">
	          						<i data-feather="at-sign" style="cursor: pointer"></i>
	          					</div>
	        					</div>
     						 </div>
     						 	<nav align="center">
     						 		<button class="btn btn bg-danger bt" type="reset" >Reset</button>
     						 		<button class="btn btn bg-success bt" type="submit" >Login</button>
     						 	</nav>
     						 	<hr>
     						 	<div class="row mt-4">
     						 		<div class="col-sm-2"></div>
     						 		<div class="col-sm-5">j'ai deja un compte</div>
     						 		<div class="col-sm-3"><a href="index.php">Sign in!</a></div>
     						 		<div class="col-sm-2"></div>

     						 	</div>

						
						
					</form>
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