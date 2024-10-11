<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Data Bonker</title>
    <?php include "inc/header-links.php"?>
</head>

<body>

<?php include "inc/header.php"?>


<div class="form-box">
<div class="container mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 account">
            <div class="head-signup">
                <h2>Welcome to Databonker  
                    <br>
                    Community "Solve My Doubt".
                </h2>
                <p class="mt-3">Once logged in, you'll have access to your account features and settings. Enjoy your access!</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="signup-form mt-5">

                    <form action="#" method="post">
                    <label for="email">Enter Your Email</label>
                    <input type="email" placeholder="Email" required>
                    <label for="password">Enter Your Password</label>
                    <input type="password" placeholder="Password" id="box1" required>
                    <div class="password-checkbox">
                    <input type="checkbox" onclick="Click()" id="password-checkbox">
                    <label for="password-checkbox" class="password-check">Show Password</label>
                    </div>
                    <button type="submit">Sign Up</button>
                    </form>

                <div class="already-account mt-3 mb-0">
                <p>Create account? <a href="signup.php" target="_blank" class="sign-in">Sign up.</a></p>
                <div>
                <a href="email-verify.php" class="forget_pass">Forget Password</a>
                </div>
            </div>
            </div>

        </div>
    </div>
</div>
</div>


<?php include "inc/footer.php"?>

<script>
    function Click()
	{
		var pass = document.getElementById("box1");
		if(pass.type == 'password'){ 
			pass.type = 'text';   
		}
		else{
			pass.type = 'password';         
		}
	}
	
	
	function mouseDown(){
	
		document.getElementById("box1").type = "text"; 
		
	}
	function mouseUp(){
	
		document.getElementById("box1").type = "password";
		
	}
</script>

<?php include "inc/footer-links.php"?>
</body>

</html>