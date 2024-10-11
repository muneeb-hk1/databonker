<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Data Bonker</title>
    <?php include "inc/header-links.php" ?>
</head>

<body>

    <?php include "inc/header.php" ?>

    <div class="side-tabs2" id="show_side_tabs">
                        <ul>
                            <li><i class="fa-solid fa-x" id="close_side_tab"></i></li>
                        <li><a href="user-profile.php"><img src="assets/img/category/profile.png" alt="">My Profile</a></li>
                        <li class="side-sort-drop">
                                    <a href="#" class="side-sort-drop"><img src="assets/img/category/group.png" alt=""> Join Group <i class="fa fa-angle-down"></i></a>
                                    <div class="side-sort-down-content">
                                        <a href="#">Newest</a>
                                        <a href="#">Oldest</a>
                                    </div>
                                </li><br>
                        <li class="side-sort-drop">
                                    <a href="#" class="side-sort-drop"><img src="assets/img/category/guide.png" alt=""> Questions <i class="fa fa-angle-down"></i></a>
                                    <div class="side-sort-down-content">
                                        <a href="#">Asked</a>
                                        <a href="#">Answer</a>
                                    </div>
                                </li>
                        <li><a href="#"><img src="assets/img/category/podcast.png" alt="">Comment Guidelines</a></li>
                        <li><a href="#"><img src="assets/img/category/thums-up.png" alt="">Articles</a></li>
                        <li><a href="update-profile.php"><img src="assets/img/category/settings.png" alt="">Settings</a></li>
                        <li><a href="#"><img src="assets/img/category/logout.png" alt="">Logout</a></li>
                        
                        </ul>
                    </div>


    <!-- Main Apperance-->

   <div id="main">

   <section class="blog-sec mt-5 mb-3">
        <div class="container">
            <div class="row">

                <div class="col-md-2">
                    <div class="side-tabs">
                        <ul>
                        <li><a href="user-profile.php"><img src="assets/img/category/profile.png" alt="">My Profile</a></li>
                        <li class="side-sort-drop">
                                    <a href="#" class="side-sort-drop"><img src="assets/img/category/group.png" alt=""> Join Group <i class="fa fa-angle-down"></i></a>
                                    <div class="side-sort-down-content">
                                        <a href="#">Newest</a>
                                        <a href="#">Oldest</a>
                                    </div>
                                </li>
                        <li class="side-sort-drop">
                                    <a href="#" class="side-sort-drop"><img src="assets/img/category/guide.png" alt=""> Questions <i class="fa fa-angle-down"></i></a>
                                    <div class="side-sort-down-content">
                                        <a href="#">Asked</a>
                                        <a href="#">Answer</a>
                                    </div>
                                </li>
                        <li><a href="#"><img src="assets/img/category/podcast.png" alt="">Comment Guidelines</a></li>
                        <li><a href="#"><img src="assets/img/category/thums-up.png" alt="">Articles</a></li>
                        <li><a href="update-profile.php"><img src="assets/img/category/settings.png" alt="">Settings</a></li>
                        <li><a href="#"><img src="assets/img/category/logout.png" alt="">Logout</a></li>
                        
                        </ul>
                    </div>
                </div>

                <div class="col-sm-12 col-md-7">
                    <div class="category-tabs">
                        <ul>
                            <div>
                                <li><a href="#" id="sidetab"><i class="fa-solid fa-bars"></i></a></li>
                                <li><a href="#">All Doubts</a></li>
                                <li><a href="#">Top Doubts</a></li>
                                <li><a href="#">Unanswered Doubts</a></li>
                            </div>
                            <div>
                                <span>Sort by:</span>
                                <li class="sort-drop">
                                    <button class="sort-drop"><a href="#">Newest <i class="fa fa-angle-down"></i></a>
                                    </button>
                                    <div class="sort-down-content">
                                        <a href="#">Newest</a>
                                        <a href="#">Oldest</a>
                                    </div>
                                </li>
                            </div>
                        </ul>
                    </div>

                    <div class="category-tabs d-none">
                        <ul>
                            <div>
                                <li><a href="#">All Doubts</a></li>
                                <li><a href="#">Related Doubts</a></li>
                                <li><a href="#">Top Doubts</a></li>
                                <li><a href="#">Unanswered Doubts</a></li>
                            </div>
                            <div>
                                <span>Sort by:</span>
                                <li class="sort-drop">
                                    <button class="sort-drop"><a href="#">Newest <i class="fa fa-angle-down"></i></a>
                                    </button>
                                    <div class="sort-down-content">
                                        <a href="#">Newest</a>
                                        <a href="#">Oldest</a>
                                    </div>
                                </li>
                            </div>
                        </ul>
                    </div>

                    <!-- <div class="blog-heading mt-4 mb-2">
                            <h1>Data Bonker Community</h1>
                        </div> -->

                    <div class="blog-cont">
                        <div class="blog-details">
                            <div class="row">
                                <div class="col-md-12 col-lg-2">
                                    <div class="user-question-profile">
                                        <a href="user-profile.php">
                                        <img src="assets/img/community-1.png" alt="" class="mb-2">
                                        <div>
                                            <p>Simmon</p>
                                            <p>Student</p>
                                            <p><img src="assets/img/location.png" alt=""> San Jose</p>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-10">
                                    <div class="question-box">
                                        <div class="question-network">
                                            <ul>
                                                <li>Asked
                                                    5 hours ago</li>
                                                <li>114 views</li>
                                                <li><a href="#">Translate</a></li>
                                                <li class="share-drop">
                                                    <a href="#">Share</a>
                                                    <div class="share-down-content">
                                                        <a href="#"><i class="fa-brands fa-whatsapp" ></i></a>
                                                        <a href="#"><i class="fa-solid fa-copy"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="question-bar mt-3">
                                            <a href="question.php">Understanding the `this` Keyword in JavaScript</a>
                                            <p>What are some good tips for hs students to start preparing for college?
                                                What are some of the best clubs to take and also extra circulars to be
                                                part of?</p>
                                        </div>
                                        <div class="blog-tags mt-2">
                                            <ul>
                                                <li><a href="#"><span>#</span>javascript</a></li>
                                                <li><a href="#"><span>#</span>webdev</a></li>
                                                <li><a href="#"><span>#</span>programming</a></li>
                                                <li><a href="#"><span>#</span>learning</a></li>
                                            </ul>
                                        </div>

                                        <div class="blog-reactions mt-2">
                                            <ul>
                                                <div>
                                                    <li>
                                                        <a href="#"><img src="assets/img/vote.png" alt="">3 vote</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="assets/img/comment.png" alt="">7
                                                            answers</a>
                                                    </li>
                                                </div>
                                                <div>
                                                    <li>
                                                        2 min read
                                                    </li>
                                                    <li><a href="#"><img src="assets/img/bookmark.png" alt=""></a></li>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="blog-cont mt-2">
                        <div class="blog-details">
                            <div class="row">
                                <div class="col-md-12 col-lg-2">
                                    <div class="user-question-profile">
                                        <a href="user-profile.php">
                                        <img src="assets/img/community-2.png" alt="" class="mb-2">
                                        <div>
                                            <p>Belinda</p>
                                            <p>Student</p>
                                            <p><img src="assets/img/location.png" alt=""> France</p>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-10">
                                    <div class="question-box">
                                        <div class="question-network">
                                            <ul>
                                                <li>Asked
                                                    1 hours ago</li>
                                                <li>114 views</li>
                                                <li><a href="#">Translate</a></li>
                                                <li class="share-drop">
                                                    <a href="#">Share</a>
                                                    <div class="share-down-content">
                                                        <a href="#"><i class="fa-brands fa-whatsapp" ></i></a>
                                                        <a href="#"><i class="fa-solid fa-copy"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="question-bar mt-3">
                                            <a href="question.php">What do i do? Confused</a>
                                            <p>hi i am Belinda..i have a passion for numbers and i also love draw..are
                                                there career options that allows me to do the two things i love?</p>
                                        </div>
                                        <div class="blog-tags mt-2">
                                            <ul>
                                                <li><a href="#"><span>#</span>javascript</a></li>
                                                <li><a href="#"><span>#</span>webdev</a></li>
                                                <li><a href="#"><span>#</span>programming</a></li>
                                                <li><a href="#"><span>#</span>learning</a></li>
                                            </ul>
                                        </div>

                                        <div class="blog-reactions mt-2">
                                            <ul>
                                                <div>
                                                    <li>
                                                        <a href="#"><img src="assets/img/vote.png" alt="">3 vote</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="assets/img/comment.png" alt="">7
                                                            answers</a>
                                                    </li>
                                                </div>
                                                <div>
                                                    <li>
                                                        2 min read
                                                    </li>
                                                    <li><a href="#"><img src="assets/img/bookmark.png" alt=""></a></li>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-cont mt-2">
                        <div class="blog-details">
                            <div class="row">
                                <div class="col-md-12 col-lg-2">
                                    <div class="user-question-profile">
                                        <a href="user-question-profile.php">
                                        <img src="assets/img/community-3.png" alt="" class="mb-2">
                                        <div>
                                            <p>Lisa</p>
                                            <p>Dietitian</p>
                                            <p><img src="assets/img/location.png" alt="">Norway</p>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-10">
                                    <div class="question-box">
                                        <div class="question-network">
                                            <ul>
                                                <li>Asked
                                                    5 hours ago</li>
                                                <li>114 views</li>
                                                <li><a href="#">Translate</a></li>
                                                <li class="share-drop">
                                                    <a href="#">Share</a>
                                                    <div class="share-down-content">
                                                        <a href="#"><i class="fa-brands fa-whatsapp" ></i></a>
                                                        <a href="#"><i class="fa-solid fa-copy"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="question-bar mt-3">
                                            <a href="question.php">Do I have a good chance of getting accepted to UCLA,
                                                Berkeley, UCSD, UCI, or UCSB for finance/actuary , if my classes are
                                                medical CTE?</a>
                                            <p>I have been taking a CTE pathway in medicine (3 years), only to realize
                                                that I want to apply to college in a more math/finance related side.
                                                (specifically actuary, as of now). I am planning on applying to UCs, I
                                                volunteer at a local hospital, but I don't do much finance related
                                                "things", do I have a good chance of getting accepted. I did an
                                                internship (for non profit) and am VP of our school's business club.</p>
                                        </div>
                                        <div class="blog-tags mt-2">
                                            <ul>
                                                <li><a href="#"><span>#</span>javascript</a></li>
                                                <li><a href="#"><span>#</span>webdev</a></li>
                                                <li><a href="#"><span>#</span>programming</a></li>
                                                <li><a href="#"><span>#</span>learning</a></li>
                                            </ul>
                                        </div>

                                        <div class="blog-reactions mt-2">
                                            <ul>
                                                <div>
                                                    <li>
                                                        <a href="#"><img src="assets/img/vote.png" alt="">3 vote</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="assets/img/comment.png" alt="">7
                                                            answers</a>
                                                    </li>
                                                </div>
                                                <div>
                                                    <li>
                                                        2 min read
                                                    </li>
                                                    <li><a href="#"><img src="assets/img/bookmark.png" alt=""></a></li>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-cont mt-2">
                        <div class="blog-details">
                            <div class="row">
                                <div class="col-md-12 col-lg-2">
                                    <div class="user-question-profile">
                                        <a href="user-question-profile.php">
                                        <img src="assets/img/community-4.png" alt="" class="mb-2">
                                        <div>
                                            <p>Frose</p>
                                            <p>Consultant </p>
                                            <p><img src="assets/img/location.png" alt="">Queensland, Australia</p>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-10">
                                    <div class="question-box">
                                        <div class="question-network">
                                            <ul>
                                                <li>Asked
                                                    5 hours ago</li>
                                                <li>114 views</li>
                                                <li><a href="#">Translate</a></li>
                                                <li class="share-drop">
                                                    <a href="#">Share</a>
                                                    <div class="share-down-content">
                                                        <a href="#"><i class="fa-brands fa-whatsapp" ></i></a>
                                                        <a href="#"><i class="fa-solid fa-copy"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="question-bar mt-3">
                                            <a href="question.php">What can I do to find a career ?</a>
                                            <p>Hello, I have trouble with figuring out what I want to do, I get
                                                overwhelmed by the options. Everyone always tell me don’t stress you’ll
                                                figure it out but I’m in 12th grade things are getting serious and I’m
                                                feeling behind.</p>
                                        </div>
                                        <div class="blog-tags mt-2">
                                            <ul>
                                                <li><a href="#"><span>#</span>javascript</a></li>
                                                <li><a href="#"><span>#</span>webdev</a></li>
                                                <li><a href="#"><span>#</span>programming</a></li>
                                                <li><a href="#"><span>#</span>learning</a></li>
                                            </ul>
                                        </div>

                                        <div class="blog-reactions mt-2">
                                            <ul>
                                                <div>
                                                    <li>
                                                        <a href="#"><img src="assets/img/vote.png" alt="">3 vote</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="assets/img/comment.png" alt="">7
                                                            answers</a>
                                                    </li>
                                                </div>
                                                <div>
                                                    <li>
                                                        2 min read
                                                    </li>
                                                    <li><a href="#"><img src="assets/img/bookmark.png" alt=""></a></li>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   


                </div>

                <!-- Right Side Bar -->


                <div class="col-md-3 col-md-px-0">
                    <div class="right-side-bar">
                        <div class="user-login">
                            <h2>"Solve My Doubt" is a community of 2,949,285 professionals</h2>
                            <p class="mt-3">"Solve My Doubt" is a community of Students, Learners, Job Seekers, Coaches,
                                Mentors and Providers to interact and solve their: <br>
                                - Career, Education, Jobs, Technology and Entrepreneurship related Doubts.
                            </p>
                            <div class="account">
                                <a href="signup.php" class="create-account">Create an Account</a>
                                <a href="login.php" class="log-in mt-2">Login</a>
                            </div>
                        </div>

                        <!-- Create Your Own Community -->
                        <div class="community-login mt-2 d-none">
                            <h2>Let's create your own community</h2>
                            <p>Share your thoughts and grow your career.</p>
                            <div class="account">
                                <a href="#" class="create-community">Create Community</a>
                            </div>
                        </div>

                        <!-- Active Discussions -->
                        <div class="discuss mt-2">
                            <div class="discussion-icon">
                                <img src="assets/img/community.png" alt="">
                            </div>
                            <div class="discuss-head mt-3">
                                <h2>Active Discussions</h2>
                                <p>Discussion threads targeting the whole community</p>
                            </div>
                            <div class="discuss-bars-cont">
                                <div class="discuss-bars">
                                    <a href="#defor">Latest Newsletter: This is Funworld (Issue #172)
                                        <span><img src="assets/img/comment.png" alt="">2 answers</span>
                                    </a>
                                </div>
                                <div class="discuss-bars">
                                    <a href="#defor">React JS vs. Angular: An In-Depth Analysis of Two Leading Front-End
                                        Frameworks
                                        <span><img src="assets/img/comment.png" alt="">1 answers</span>
                                    </a>
                                </div>
                                <div class="discuss-bars">
                                    <a href="#defor">Tips for popularising an open source project?
                                        <span><img src="assets/img/comment.png" alt="">7 answers</span>
                                    </a>
                                </div>
                                <div class="discuss-bars">
                                    <a href="#defor">Music Monday — What are you listening to?
                                        <span><img src="assets/img/comment.png" alt="">11 answers</span>
                                    </a>
                                </div>
                                <div class="discuss-bars">
                                    <a href="#defor">Latest Newsletter: This is Funworld (Issue #172)
                                        <span><img src="assets/img/comment.png" alt="">3 answers</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="trending-tags-main mt-2">
                            <h2 class="mb-3">Trending Tags</h2>
                            <div class="trending-tags">
                                <a href="#">#Web</a>
                                <a href="#">#software</a>
                                <a href="#">#compiling</a>
                                <a href="#">#json</a>
                                <a href="#">#parse</a>
                                <a href="#">#punch</a>
                                <a href="#">#git</a>
                                <a href="#">#clove</a>
                                <a href="#">#boat</a>
                                <a href="#">#development</a>
                            </div>
                        </div>

                        <div class="community-list-main mt-2">
                            <h2>Community List</h2>
                            <div class="community-list">
                                <ul>
                                    <li><a href="#">#Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum,
                                            molestias.</a></li>
                                    <li><a href="#">#Lorem ipsum dolor sit.</a></li>
                                    <li><a href="#">#Lorem ipsum dolor sit amet, consectetur adipisicing.</a></li>
                                    <li><a href="#">#Lorem, ipsum dolor.</a></li>
                                    <li><a href="#">#Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni,
                                            itaque provident!</a></li>
                                    <li><a href="#">#Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos.</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   </div>

    <?php include "inc/footer.php"?>
    <?php include "inc/footer-links.php"?>

    
    

    
</body>

</html>