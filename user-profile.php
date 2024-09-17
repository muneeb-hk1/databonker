<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Dashboard - Data Bonker</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon-data-bonker.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/search.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- <?php include "header.php" ?> -->

    <div class="container-fluid full-dash">
        <div class="row">

            <?php include ("inc/sidebar.php"); ?>

            <div class="col-md-10">
                <div class="profile-board">
                    <div class="head">
                        <div class="board-detail">
                            <a href="#"><img src="assets/img/profile/shop.png" alt=""></a>
                            <a href=""><img src="assets/img/profile/notify.png" alt=""></a>
                            <a href="#">
                                <div class="user-menu">
                                    <img src="assets/img/community-3.png" alt="">
                                    <p class="mb-0">Anna Adame</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="content mt-4">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="user-board">
                                        <div class="user-head">
                                           <img src="assets/img/community-8.png" alt="">
                                           <a href="update-profile.php">
                                           <i class="fa-regular fa-pen-to-square" style="color:grey;"></i>Edit Profile</a>
                                        </div>
                                        <div class="user-detail mt-4">
                                            <div class="col-md-2">
                                                <div class="user-name">
                                                    <p>Anna Adame</p>
                                                    <p>California</p>
                                                </div>
                                            </div>
                                            <h2>Personal Information</h2>
                                            <form>
  <div class="form-row">

  <div class="form-group col-md-4">
      <label for="Fname">First Name</label>
      <input type="text" class="form-control" id="Fname" placeholder="First Name" readonly>
    </div>

    <div class="form-group col-md-4">
      <label for="Lname">Last Name</label>
      <input type="text" class="form-control" id="Lname" placeholder="Last Name" readonly>
    </div>

  <!-- <div class="form-group col-md-4">
    <label for="profilePic">Profile Pic</label> 
    <input type="file" id="profilePic" name="profilePic" accept="image/*" readonly>
    </div> -->

    <div class="form-group col-md-4">
      <label for="inputState">Profile Category</label>
      <input type="text" class="form-control" id="inputState" placeholder="Professional" readonly>
    </div>

    <div class="form-group col-md-4">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" readonly>
    </div>

    <div class="form-group col-md-4">
      <label for="gender">Gender</label>
      <input type="text" class="form-control" id="gender" placeholder="Male" readonly>
    </div>

    <div class="form-group col-md-4">
      <label for="education">Current Education or Role or Occupation</label>
      <input type="text" class="form-control" id="education" placeholder="Your Occupation" readonly>
    </div>

    <div class="form-group col-md-4">
      <label for="subject">Primary Subjects</label>
      <input type="text" class="form-control" id="subject" placeholder="Primary Subjects" readonly>
    </div>

    <div class="form-group col-md-4">
      <label for="Interests">Interests</label>
      <input type="text" class="form-control" id="Interests" placeholder="Interests" readonly> 
    </div>

    <div class="form-group col-md-4">
      <label for="career">Career Goal or Aspiration (Optional)</label>
      <input type="text" class="form-control" id="career" placeholder="Career Goal" readonly>
    </div>

    <div class="form-group col-md-4">
      <label for="LinkedIn">LinkedIn</label>
      <input type="text" class="form-control" id="LinkedIn" placeholder="LinkedIn" readonly>
    </div>

    <div class="form-group col-md-4">
      <label for="Twitter">Twitter</label>
      <input type="text" class="form-control" id="Twitter" placeholder="Twitter" readonly>
    </div>

    <div class="form-group col-md-4">
      <label for="industry">Current Industry (Optional)</label>
      <input type="text" class="form-control" id="industry" placeholder="Technology" readonly>
    </div>

    <div class="form-group col-md-4">
      <label for="community-goal">What is your goal within this community?</label>
      <input type="text" class="form-control" id="community-goal" placeholder="Finding career advice and guidance" readonly>
    </div>
    
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" readonly>
  </div>

  <div class="form-group">
    <label for="inputyourself">Tell about yourself (Optional)</label>
    <textarea placeholder="Yourself" id="inputyourself" cols="126" rows="3" readonly></textarea>
  </div>
</form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>



    <script src="assets/js/search.js"></script>

    <script src="assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/ce4d8f7c0c.js" crossorigin="anonymous"></script>



</body>

</html>