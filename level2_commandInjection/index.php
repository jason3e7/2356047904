<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>MyFirst CTF</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="login/css/bootstrap.min.css" rel="stylesheet">
	<link href="login/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/login.css" rel="stylesheet">
    <script src="login/js/jquery-1.11.1.min.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
</head>
<body>



<h2></h2>

    <div class="container">
	
        <div class="card card-container">
			<h2 class="text-center"><font color="black" >MyFirst CTF</font></h2>
	
            <p id="profile-name" class="profile-name-card"></p>
            <form method="post" class="form-signin" action="index.php">
        
                <input type="text" id="inpuID" name="string" class="form-control" placeholder="請輸入IP" >

                <button class="btn btn-lg btn-success btn-block btn-signin" type="submit">送出</button>

				<div class="alert alert-warning" >
	
					<?php 

					if( isset( $_POST[ 'string' ]  ) ) { 
						$target = $_REQUEST[ 'string' ]; 
						$cmd = shell_exec( 'nslookup ' . $target );
						echo  "<pre>{$cmd}</pre>"; 
					} 
					?> 
					
					</div>
            </form>

        </div>
    </div>
	
<script type="text/javascript">

</script>
</body>
</html>
