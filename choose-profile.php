<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Profile - Data Bonker</title>
    <?php include "inc/header-links.php"?>
</head>

<body>

<?php include "inc/header.php"?>


<div class="form-box">
<div class="container mb-5">
    <div class="row">
        <div class="col-md-12 mb-4">
            <h1 class="cp_h1">Select your user type.</h1>
        </div>
        <div class="col-md-12 col-lg-4">
            <label for="student">
                <div class="profile_category_box">
                <p>Student, Job Seeker</p>
                        <img src="assets/img/community-1.png" alt="">
                        <p>Ask Questions and get answer.</p>
                        <div>
                            <input type="radio" id="student" name="ChooseProfile" value="Student, Job Seeker">
                        </div>
                </div>
            </label>
        </div>

        <div class="col-md-12 col-lg-4">
            <label for="Coaches">
                <div class="profile_category_box">
                <p>Coaches, Teacher</p>
                        <img src="assets/img/community-2.png" alt="">
                        <p>Give career advice to students.</p>
                        <div>
                            <input type="radio" id="Coaches" name="ChooseProfile" value="Coaches, Teacher">
                        </div>
                </div>
            </label>
        </div>

        <div class="col-md-12 col-lg-4">
            <label for="Provider">
                <div class="profile_category_box">
                <p>Provider</p>
                        <img src="assets/img/community-3.png" alt="">
                        <p>Support your students on their career journeys.</p>
                        <div>
                            <input type="radio" id="Provider" name="ChooseProfile" value="Provider">
                        </div>
                </div>
            </label>
        </div>
        <div class="col-md-12 mt-4">
        <div class="profile_nxt">
        <a href="follow-tags.php" class="btn">Next</a>
        </div>
        </div>
    </div>
</div>
</div>


<!--   <label for="html">HTML</label> -->


<?php include "inc/footer.php"?>


<?php include "inc/footer-links.php"?>
</body>

</html>