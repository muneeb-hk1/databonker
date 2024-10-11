<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - Data Bonker</title>
    <?php include "inc/header-links.php" ?>
</head>

<body>

<?php include "inc/header.php"?>

<div class="form-box">
<div class="container mb-3">
    <div class="row">
        <div class="em_ver">
        <!-- <div class="col-sm-12 col-md-6 account">
            <div class="head-signup">
            <h2>Welcome to Databonker 
                    <br>
                    Community "Solve My Doubt".
                </h2>   
                <p class="mt-3"> Once you've entered this information, we'll ensure everything is set up smoothly for you. Looking forward to getting you started!</p>
            </div>
        </div> -->
        <div class="col-sm-12 col-md-6">
            <div class="signup-form mt-5">
            <h2 class="mb-4">Enter Your Email 
                    <br>
                    Verify it's you.
                </h2>   
                    <form action="#" method="post">
                    <label for="email">Enter Your Email</label>
                    <input type="email" placeholder="Email" required>
                    <button type="submit">Verify</button>
                    </form>

                <!-- <div class="already-account mb-1">
                <p>Already have an account? <a href="login.php" target="_blank" class="sign-in">Log in.</a></p>
                <p>By Signing Up, you are agreeing to this <br> "Community Rules and Guidelines".</p>
            </div> -->
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