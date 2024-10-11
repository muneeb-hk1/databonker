<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Understanding the `this` Keyword in JavaScript - Data Bonker</title>
    <?php include "inc/header-links.php"?>
</head>

<body>

    <?php include "inc/header.php" ?>

    <div class="popup-form-box" id="show-form">
        <form action="#" method="post" class="popup-form">
        <i class="fa-solid fa-xmark form_cut" onclick="hidepop()"></i>
        <h1>Comment Here</h1>
            <!-- <label for="answer">Post Your Answer</label> -->
            <textarea name="answer" rows="4"></textarea>
            <button type="submit" class="sign-btn mt-2">Send</button>
        </form>
    </div>
   
    <div id="pop-body">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12 col-lg-2">
                    <div class="user-question-profile">
                        <img src="assets/img/community-1.png" alt="" class="mb-2">
                        <div>
                            <p>Simmon</p>
                            <p>Student</p>
                            <p><img src="assets/img/location.png" alt=""> San Jose</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-10 mt-3">
                    <div class="question-box">
                        <div class="question-network">
                            <ul>
                                <li>Asked
                                    5 hours ago</li>
                                <li>114 views</li>
                                <li><a href="#">Translate</a></li>
                                <li><a href="#">Share</a></li>
                            </ul>
                        </div>
                        <div class="question-bar mt-4">
                            <p>Understanding the `this` Keyword in JavaScript</p>
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
                            <p>What are some good tips for hs students to start preparing for college? What are some of the
                                best clubs to take and also extra circulars to be part of?</p>
                        </div>
                        <!-- <div class="blog-tags mt-2">
                            <ul>
                                <li><a href="#"><span>#</span>javascript</a></li>
                                <li><a href="#"><span>#</span>webdev</a></li>
                                <li><a href="#"><span>#</span>programming</a></li>
                                <li><a href="#"><span>#</span>learning</a></li>
                            </ul>
                        </div> -->

                        <hr>

                        <!-- <a href="#" class="answer-btn mt-1" onclick="answer()">Answer This</a> -->

                    </div>
                </div>

                <div class="col-md-12 mt-5">
                    <div class="question-login">
                        <div>
                            <img src="assets/img/answer.png" alt="">
                            <p>Sharing specific examples can help illustrate your point and make your answer more compelling.</p>
                            <a href="#" onclick="answer()"> Comment</a>
                    </div>
                    </div>
                </div>

            </div>

            <!-- Answer Profile -->

            <div class="row mt-4">
                <div class="col-md-12 answer mt-3 mb-5">
                    <h2>Answers</h2>
                    <hr>
                </div>
                <div class="col-md-12 col-lg-2">
                    <div class="user-answer-profile">
                        <img src="assets/img/community-2.png" alt="" class="mb-2">
                        <div>
                            <p>Isabel Dominguez</p>
                            <p>Developer</p>
                            <p><img src="assets/img/location.png" alt=""> Canada</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-10">
                    <div class="answer-box">
                        <div class="answer-network">
                            <ul>
                                <li>Asked
                                    5 hours ago</li>
                                <li>114 views</li>
                                <li><a href="#">Translate</a></li>
                                <li><a href="#">Share</a></li>
                            </ul>
                        </div>
                        <div class="answer-bar mt-4">
                            <h2>Isabel’s Dominguez</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia labore eius, asperiores sit,
                                animi doloremque exercitationem est, aliquid nihil voluptate aut maiores suscipit porro
                                dolor! Fugiat eius cupiditate quisquam optio ipsa omnis, repellendus possimus ut deserunt
                                atque delectus sit eligendi consequuntur culpa, ex quo. Nulla fuga, officia nobis in
                                blanditiis corrupti adipisci quam quas natus ab placeat asperiores repellendus quia.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt aspernatur fuga minima
                                sequi, dignissimos reprehenderit non omnis facere tenetur architecto distinctio quo hic
                                quae, aliquam cupiditate. Provident magnam quo sit excepturi totam perspiciatis deserunt
                                cumque nulla maxime. Numquam commodi a doloribus consequuntur odit natus culpa inventore
                                cumque dicta animi nihil assumenda praesentium perferendis sit impedit nostrum reiciendis,
                                doloremque at repellat provident! Quaerat, accusamus iure fugiat delectus harum eius
                                possimus, natus iusto quis nihil minus, voluptate qui saepe.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include "inc/footer.php" ?>

    <script>
        function answer() {
    // alert('Post Your Answer');
    document.getElementById('show-form').style.display = "block";
    document.getElementById('pop-body').style.filter = 'blur(4px)';
}

function hidepop(){
    document.getElementById('show-form').style.display = "none";
    document.getElementById('pop-body').style.filter = 'blur(0px)';
}
    </script>


<?php include "inc/footer-links.php"?>

</body>

</html>