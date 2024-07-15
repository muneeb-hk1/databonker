<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - Data Bonker</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon-data-bonker.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/search.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/account.css">
</head>

<body>

<?php include "header.php"?>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-12 account">
            <div class="head-signup">
                <h2>Welcome to Databonker <img src="assets/img/sign-up.png" alt=""> 
                    <br>
                    Let’s set up your account.
                </h2>
            </div>
            <div class="signup-form mt-5">
                            <div class="signup-container">
                    <form class="signup-form" action="#" method="post">
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
                    <label for="password-checkbox">Show Password</label>
                    </div>
                    <button type="submit">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "footer.php"?>

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

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>



    <script src="assets/js/search.js"></script>

    <script src="assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/ce4d8f7c0c.js" crossorigin="anonymous"></script>
</body>

</html>