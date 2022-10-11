<?php
include "header.php";
?>




<!-- Featured articles -->
<section class="featured-articles section section-header-offset">

<div class="featured-articles-container container d-grid">

    <div class="featured-content d-grid">

        <div class="headline-banner">
            <h3 class="headline fancy-border">
                <span class="place-items-center">Notice</span>
            </h3>
            <span class="headline-description">Exam has been announced.....</span>
        </div>

        <a href="./post.php" class="article featured-article featured-article-1">
            <img src="./assets/images/featured/featured-1.jpg" alt="" class="article-image">
            <span class="article-category">Basic Info</span>

            <div class="article-data-container">

                <div class="article-data">
                    <span>Dec 5th 2021</span>
                    <span class="article-data-spacer"></span>
                    <span>8 Min read</span>
                </div>

                <h3 class="title article-title">Basic Info about the course</h3>

            </div>
        </a>

        <a href="./post2.php" class="article featured-article featured-article-2">
            <img src="./assets/images/featured/featured-2.jpg" alt="" class="article-image">
            <span class="article-category">Scope of the course</span>

            <div class="article-data-container">

                <div class="article-data">
                    <span>Dec 6th 2021</span>
                    <span class="article-data-spacer"></span>
                    <span>4 Min read</span>
                </div>

                <h3 class="title article-title">Scope of the course</h3>

            </div>
        </a>

        <a href="./post3.php" class="article featured-article featured-article-3">
            <img src="./assets/images/featured/featured-3.jpg" alt="" class="article-image">
            <span class="article-category">Objectives and Eligibilty</span>

            <div class="article-data-container">

                <div class="article-data">
                    <span>Dec 5th 2021</span>
                    <span class="article-data-spacer"></span>
                    <span>5 Min read</span>
                </div>

                <h3 class="title article-title">Objectives and Eligibilty</h3>  

            </div>
        </a>

    </div>
    </div>
</section>
   

       
<!-- Newsletter -->
<section class="newsletter section">

<div class="container">


    <div class="form-container-inner">
        <h6 class="title newsletter-title">Subscribe to Bictinfoo</h6>
        <p class="newsletter-description">Give your Feedback here</p>
        </div>

<div class="rut">
    

    <button class="open-button" onclick="openForm()"><i class="ri-mail-send-line"></i></button>

</div>
<div class="form-popup" id="myForm">
<form action=" " class="form-container">
<h1>Give Your Feedback</h1>


<div class="id">
<input type="text" placeholder="Full name">
<i class="fa-regular fa-user"></i>
</div>

<div class="id">
<input type="text" placeholder="Email Address">
<i class="fa-regular fa-user"></i>
</div>


<div>
<i class="fa-regular fa-envelope"></i>
<textarea cols="15" rows="5" placeholder="Enter your opinions here..."></textarea>
</div>


<button type="submit" class="btn">Send</button>
<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
</form>
</div>
</div>


</section>


<?php
include "footer.php";
?>
</body>
</html>