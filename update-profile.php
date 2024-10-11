<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Dashboard - Data Bonker</title>
    <?php include "inc/header-links.php"?>

</head>

<body>
<div class="profile-bar" id="show_profile_bar">
        <ul class="mb-0">
        <li class="cls_tab"><i class="fa-solid fa-x" id="close_side_tab"></i></li>
        <li class="log">
        <a href="index.php"><img src="assets/img/logo.png" alt=""></a>
        </li>
            <li>
                <label class="profile">
                    <div class="dd-button">
                        <i class="fa-solid fa-user-group" style="color:white;"></i>Groups
                    </div>

                    <input type="checkbox" class="dd-input" id="test">
                    <ul class="dd-menu">
                        <li><a href="#">Career <span>>></span></a></li>
                        <li><a href="#">Personal Growth <span>>></span></a></li>
                        <li><a href="#">Education <span>>></span></a></li>
                        <li><a href="#">Finance <span>>></span></a></li>
                        <li><a href="#">Arts <span>>></span></a></li>
                        <li><a href="#">Business <span>>></span></a></li>

                    </ul>
                </label>
            </li>

            <li>
                <label class="profile">
                    <div class="dd-button">
                        
                    <i class="fa fa-retweet"></i>Following Tags
                    </div>

                    <input type="checkbox" class="dd-input" id="test">
                    <ul class="dd-menu">
                        <li><a href="user-profile.php">#productivity</a></li>
                        <li><a href="user-profile.php">#career</a></li>
                        <li><a href="user-profile.php">#aws</a></li>
                        <li><a href="user-profile.php">#startup</a></li>

                    </ul>
                </label>
            </li>

            <li><a href="#community_profile" class="act"> 
            <i class="fa fa-rocket" style="color:white;"></i>
                    Question Asked </a></li>

            <li><a href="#community_profile" class="act"> 
            <i class="fa-solid fa-comments" style="color:white;"></i>
                    Answer Given </a></li>

                    <li><a href="#community_profile" class="act"> 
            <!-- <i class="fa-solid fa-comments" style="color:white;"></i> -->
            <i class="fa fa-champagne-glasses" style="color:white;"></i>
                    Total Points </a></li>

                    <li><a href="#community_profile" class="act"> 
            <i class="fa fa-ranking-star" style="color:white;"></i>
                    Ranking </a></li>
           
        </ul>
    </div>

    <div id="main">

    <div class="container-fluid full-dash">
        <div class="row">

            <?php include ("inc/sidebar.php"); ?>

            <div class="col-md-12 col-lg-10">
                <div class="profile-board">
                <div class="head">
                        <div class="side_tab_open">
                        <a href="#" id="user_show_toggle"><i class="fa-solid fa-bars" id=""></i></a>
                        </div>
                        <div class="board-detail">
                      
                            <!-- <a href="#"><img src="assets/img/profile/shop.png" alt=""></a>
                            <a href=""><img src="assets/img/profile/notify.png" alt=""></a> -->
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
      <input type="text" class="form-control" id="Fname" placeholder="First Name">
    </div>

    <div class="form-group col-md-4">
      <label for="Lname">Last Name</label>
      <input type="text" class="form-control" id="Lname" placeholder="Last Name">
    </div>

  <div class="form-group col-md-4">
    <label for="profilePic">Profile Pic</label> 
    <input type="file" id="profilePic" name="profilePic" accept="image/*">
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Profile Category</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option value="student">Student</option>
        <option value="Job Seeker">Job Seeker</option>
        <option value="Aspiring Entrepreneur">Aspiring Entrepreneur</option>
        <option value="Technology Enthusiast">Technology Enthusiast</option>
        <option value="Learner">Learner</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Gender</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="other">Other</option>
        <option value="Prefer not to say">Prefer not to say</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="education">Current Education or Role or Occupation</label>
      <input type="text" class="form-control" id="education" placeholder="Your Occupation">
    </div>

    <div class="form-group col-md-4">
      <label for="subject">Primary Subjects</label>
      <input type="text" class="form-control" id="subject" placeholder="Primary Subjects">
    </div>

    <div class="form-group col-md-4">
      <label for="Interests">Interests</label>
      <input type="text" class="form-control" id="Interests" placeholder="Interests">
    </div>

    <div class="form-group col-md-4">
      <label for="career">Career Goal or Aspiration (Optional)</label>
      <input type="text" class="form-control" id="career" placeholder="Career Goal">
    </div>

    <div class="form-group col-md-4">
      <label for="LinkedIn">LinkedIn</label>
      <input type="text" class="form-control" id="LinkedIn" placeholder="LinkedIn">
    </div>

    <div class="form-group col-md-4">
      <label for="Twitter">Twitter</label>
      <input type="text" class="form-control" id="Twitter" placeholder="Twitter">
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Current Industry</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option value="Technology">Technology</option>
        <option value="Finance">Finance</option>
        <option value="Healthcare">Healthcare</option>
        <option value="Education">Education</option>
        <option value="Manufacturing">Manufacturing</option>
        <option value="Retail">Retail</option>
        <option value="Other">Other</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">What is your goal within this community?</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option value="">Finding career advice and guidance</option>
        <option value="">Learning about job search strategies</option>
        <option value="">Connecting with mentors or coaches</option>
        <option value="">Networking with professionals</option>
        <option value="">Gaining insights into different industries</option>
        <option value="">Sharing or finding educational resources</option>
        <option value="">Looking for Technology help</option>
        <option value="">Discussing entrepreneurship and startups</option>
        <option value="">Participating in community events and webinars</option>
        <option value="">Other</option>
      </select>
    </div>

  </div>

  <div class="form-row">
  <div class="form-group col-md-3">
    <h3>Join Group</h3>
    <div class="join-check"><a href="join-group.php">Add More Groups</a></div>
    </div>

    <div class="form-group col-md-3">
        <h3>Follow Tags</h3>

        <div class="join-check">
              <a href="follow-tags.php">Follow More Tags</a>
            </div>
        </div>
    </div>
  

  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>

  <div class="form-group">
    <label for="inputyourself">Tell about yourself (Optional)</label>
    <textarea placeholder="Yourself" id="inputyourself" cols="126" rows="3"></textarea>
  </div>

  

  
  <!-- <button type="submit" class="save-btn">Save Now</button> -->
  <a href="user-profile.php" class="save-btn">Save Now</a>
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

    </div>

    <script>
      document.getElementById('user_show_toggle').addEventListener('click',function(){
    document.getElementById('show_profile_bar').style.display = "block";
    document.getElementById('main').style.filter = 'blur(2px)';
})

document.getElementById('close_side_tab').addEventListener('click',function(){
    document.getElementById('show_profile_bar').style.display = "none";
    document.getElementById('main').style.filter = 'blur(0px)';
})

    </script>


    <?php include "inc/footer-links.php"?>


</body>

</html>