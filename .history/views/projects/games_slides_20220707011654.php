<div class="card">
    <div class="card-info">
        <h2 class="footer-h2"> Games ::: </h2> <br>
        <p>Most of these games are programmed using Javascript, some Java</p> <br>
        <p>Check them out on github or play live on the browser</p>
        <P>I am still developing them and adding more for fun!</P>
        <br>
        <div class="slideshow-container">

        <div class="mySlides fade active">
            <div class="numbertext">1</div>
            <img class="img-curve" src="<?php URLROOT; ?>public/images/slides/whack.png"  width="600px" height="400px" alt="" style="width:100%">
            <div class="text">whack A mole</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2</div>
            <img class="img-curve" src="<?php URLROOT; ?>public/images/slides/guessNumber.png" a width="600px" height="400px" alt="" style="width:100%">
            <div class="text">Guess Number</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3</div>
            <img class="img-curve" src="<?php URLROOT; ?>public/images/slides/snake.png" width="600px" height="400px" alt="" style="width:100%">
            <div class="text">Snake</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4</div>
            <img class="img-curve" src="<?php URLROOT; ?>public/images/slides/spaceInvaderPoster.jpg" width="600px" height="400px" alt="" style="width:100%">
            <div class="text">Space Invaders</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>
    </div>
</div>