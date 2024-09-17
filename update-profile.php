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

  <div class="form-group col-md-12">
    <h3>Join Group</h3>

    <div class="row">
      <div class="col-md-3">
        <div class="join-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Careers
          </label>
        </div>
      </div>

      <div class="col-md-3">
        <div class="join-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
          <label class="form-check-label" for="defaultCheck2">
            Admission
          </label>
        </div>
      </div>

      <div class="col-md-3">
        <div class="join-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
          <label class="form-check-label" for="defaultCheck3">
            Job
          </label>
        </div>
      </div>

      <div class="col-md-3">
        <div class="join-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
          <label class="form-check-label" for="defaultCheck4">
            Visa and Immigration
          </label>
        </div>
      </div>


      <div class="col-md-3">
        <div class="join-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Special Education
          </label>
        </div>
      </div>


      <div class="col-md-3">
        <div class="join-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
          <label class="form-check-label" for="defaultCheck5">
            Admission Guidance
          </label>
        </div>
      </div>

      <div class="col-md-3">
        <div class="join-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
          <label class="form-check-label" for="defaultCheck6">
          Individualized Education Programs 
          </label>
        </div>
      </div>

    </div>
</div>

<div class="form-group col-md-12">
    <h3>Follow Tags</h3>

    <div class="row">
      <div class="col-md-3">
        <div class="join-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck7">
          <label class="form-check-label" for="defaultCheck7">
          #careercounselling
          </label>
        </div>
      </div>

      <div class="col-md-3">
        <div class="join-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck8">
          <label class="form-check-label" for="defaultCheck8">
            #courses
          </label>
        </div>
      </div>

      <div class="col-md-3">
        <div class="join-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck9">
          <label class="form-check-label" for="defaultCheck9">
            #specialeducation
          </label>
        </div>
      </div>

      <div class="col-md-3">
        <div class="join-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
          <label class="form-check-label" for="defaultCheck10">
            #IEP
          </label>
        </div>
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