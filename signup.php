<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - Data Bonker</title>
    <?php include "inc/header-links.php"?>
</head>

<body>

<?php include "inc/header.php"?>

<div class="form-box">
<div class="container mb-3">
    <div class="row">
        <div class="col-sm-12 col-md-6 account">
            <div class="head-signup">
                <img src="assets/img/signup-community.png" alt="" class="mb-2">
            <h2>Welcome to Databonker 
                    <br>
                    Community "Solve My Doubt".
                </h2>   
                <p class="mt-3"> Once you've entered this information, we'll ensure everything is set up smoothly for you. Looking forward to getting you started!</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="signup-form mt-5">

            <!-- <div class="mb-4" style="background-color: #228B22;padding: 8px 20px;border-radius: 8px 8px 0px 0px;">
                        <img src="assets/img/community.png">
                    </div> -->

                    <form action="#" method="post">
                        <label for="name">Enter Your Name</label>
                    <input type="text" placeholder="Full Name" required>
                    <label for="email">Enter Your Email</label>
                    <input type="email" placeholder="Email" required>
                    <label for="number">Enter Your Number</label>
                    <input type="number" placeholder="Number" required>
                    <label for="password">Enter Your Password</label>
                    <input type="password" placeholder="Password" id="box1" required>
                    <div class="password-checkbox">
                    <input type="checkbox" onclick="Click()" id="password-checkbox">
                    <label for="password-checkbox" class="password-check">Show Password</label>
                    </div>
                    <!-- <label for="category" class="mb-4">Select Your Category </label>
                    <div class="form-group">
                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1">
                    <label class="form-check-label" for="radio1">Student, Job Seeker</label>
                    </div>
                    <div class="form-group">
                    <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
                    <label class="form-check-label" for="radio2">Coaches, Teacher</label>
                    </div>
                    <div class="form-group">
                    <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3">
                    <label class="form-check-label" for="radio3">Providers</label>
                    </div> -->
                    
                    <button type="submit">Sign Up</button>
                    </form>

                <div class="already-account mb-1">
                <p>Already have an account? <a href="login.php" target="_blank" class="sign-in">Log in.</a></p>
                <p>By Signing Up, you are agreeing to this <br> "Community Rules and Guidelines".</p>
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