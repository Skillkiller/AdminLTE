 <?php
    session_start();

?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TheCoin | Anmeldung</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<?php
	
	
    if (isset($_POST["loginname"]))
        {
            
            # Userdaten korrekt - User ist eingeloggt
            # Login merken !
            $_SESSION["login"] = 1;
        
        }

		
		
    if (!isset($_SESSION["login"]) or $_SESSION["login"] != 1)
        {
        ?>
		<div class="" style="margin:auto;width: 450px;">
			<div class="box box-primary">
				<div class="box-header">
				<h3 class="box-title">Anmeldung</h3>
				</div>
				<form method="POST" action="index.php">
				<div class ="box-body">
					
					
					<div class="form-group">
						<label for="inputUsername" class="col-sm-2 control-label">Username</label>

						<div class="col-sm-10">
							<input class="form-control" id="inputUsername" placeholder="Username" name="loginname" type="text">
						</div>
					</div>
				</form> 
				</div>
				<div class="box-footer">
				Dies ist eine Test Anmeldung
				<button type="button" class="btn btn-danger pull-right">Anmelden</button>
				</div>
			</div>
		</div>
		<?php
        exit;
        }

    # User ist eingeloggt
	?>

<body class="hold-transition skin-blue sidebar-mini">
<center>
	<div class="box box-solid box-info">
		<div class="box-header">
          <h3 class="box-title">Weiterleitung</h3>
        </div>
		<div class="box-body">
          <p>Du wirst weitergeleitet weil du bereits angemeldet bist!
        </div>
	</div>
</center>
	
<meta http-equiv="refresh" content="5; URL=user"  />
</body>	
	
</html>