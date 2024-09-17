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

    <?php include "header.php" ?>


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
                        <div class="user-board">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="das-title">
                                        <i class="fa-solid fa-gauge"></i>
                                        <h2>Dashboard</h2>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="user-box">
                                        <div class="heading">
                                            <h3>Students</h3>
                                        </div>
                                        <div class="count">
                                            <p>18422+</p>
                                            <span>Completed</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="user-box">
                                        <div class="heading">
                                            <h3>Teacher/Professional/School</h3>
                                        </div>
                                        <div class="count">
                                            <p class="teacher">8422+</p>
                                            <span>Completed</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="user-box">
                                        <div class="heading">
                                            <h3>Community</h3>
                                        </div>
                                        <div class="count">
                                            <p class="comm">6422+</p>
                                            <span>Completed</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="user-box">
                                        <div class="heading">
                                            <h3>Post</h3>
                                        </div>
                                        <div class="count">
                                            <p class="post">98422+</p>
                                            <span>Completed</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="das-title">
                                        <i class="fa-regular fa-calendar-days"></i>
                                        <h2>Recent Activity</h2>
                                    </div>
                                    <div class="activity-table">
                                        <table>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Last Login</th>
                                                <th>Joined</th>
                                                <th>Type</th>
                                                <th>Status</th>
                                            </tr>
                                            <tr>
                                                <td>Raman</td>
                                                <td>ramankumar432@gmail.com</td>
                                                <td>08-08-2024</td>
                                                <td>08-08-2024</td>
                                                <td>New</td>
                                                <td>Liked</td>
                                            </tr>
                                            <tr>
                                                <td>Raman</td>
                                                <td>ramankumar432@gmail.com</td>
                                                <td>08-08-2024</td>
                                                <td>08-08-2024</td>
                                                <td>New</td>
                                                <td>Liked</td>
                                            </tr>
                                            <tr>
                                                <td>Raman</td>
                                                <td>ramankumar432@gmail.com</td>
                                                <td>08-08-2024</td>
                                                <td>08-08-2024</td>
                                                <td>New</td>
                                                <td>Liked</td>
                                            </tr>
                                            <tr>
                                                <td>Raman</td>
                                                <td>ramankumar432@gmail.com</td>
                                                <td>08-08-2024</td>
                                                <td>08-08-2024</td>
                                                <td>New</td>
                                                <td>Liked</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php" ?>

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

    <script>
        /* When the user clicks on the button, 
toggle between hiding and showing the profile content */
        function myFunction() {
            document.getElementById("profiledrop").classList.toggle("show");
        }

        // Close the profile if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.profilebtn')) {
                var profiles = document.getElementsByClassName("profile-content");
                var i;
                for (i = 0; i < script profiles.length; i++) {
                    var openprofile = profiles[i];
                    if (openprofile.classList.contains('show')) {
                        openprofile.classList.remove('show');
                    }
                }
            }
        }
    </script>

</body>

</html>