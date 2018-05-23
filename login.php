<?php include ("functions.php"); ?>
<?php include ("header.php"); ?>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_POST["username"] == "alex") { redirect("keys"); }
    }
?>

<h1>Login</h1>

<div class="container">
    <div class="row">

	<form role="form" method="post">
	    <div class="form-group">
		<label for="username">Username</label>
		<input type="text" class="form-control" id="username"
		    placeholder="Enter username" name="username" autofocus>
	    </div>
	    <div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" 
		    id="password" name="password" placeholder="Password">
	    </div>

	    <button type="submit" class="btn btn-default" value="Login">Login</button>
	</form>



    </div>
</div>

<?php include ("header.php"); ?>
