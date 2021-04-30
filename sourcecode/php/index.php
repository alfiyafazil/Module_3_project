<!DOCTYPE html>
<html>
    <body>
    <?php include 'header.php';?>
        <!-- Slideshow container -->
        <main>
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <div class="numbertext">1 / 5</div>
                <img class="slide" src="images/slide1.jpg" style="width:100%">
                <div class="centered">LET'S EXPLORE THE WORLD</div>
                <div class="centered2">DISCOVER OUR PACKAGES</div>
                </div>
            
                <div class="mySlides fade">
                <div class="numbertext">2 / 5</div>
                <img class="slide" src="images/slide2.jpg" style="width:100%">
                <div class="centered">LET'S EXPLORE THE WORLD</div>
                <div class="centered2">DISCOVER OUR PACKAGES</div>
                </div>
            
                <div class="mySlides fade">
                <div class="numbertext">3 / 5</div>
                <img class="slide" src="images/slide3.jpg" style="width:100%">
                <div class="centered">LET'S EXPLORE THE WORLD</div>
                <div class="centered2">DISCOVER OUR PACKAGES</div>
                </div>
                <div class="mySlides fade">
                <div class="numbertext">4 / 5</div>
                <img class="slide" src="images/slide4.jpg" style="width:100%">
                <div class="centered">LET'S EXPLORE THE WORLD</div>
                <div class="centered2">DISCOVER OUR PACKAGES</div>
                </div>
                <div class="mySlides fade">
                <div class="numbertext">5 / 5</div>
                <img class="slide" src="images/slide5.jpg" style="width:100%">
                <div class="centered">LET'S EXPLORE THE WORLD</div>
                <div class="centered2">DISCOVER OUR PACKAGES</div>
                </div>
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            
            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
            </div>
        </main>
        <script src="js/script.js"></script>
        <?php include 'footer.php';?>
    </body>
</html>