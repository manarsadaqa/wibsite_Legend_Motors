<?php
//session_start();
//$x=$_SESSION['flag'];
//    if($x){
//        echo "
//                <script> alert('errroorrr')</script>
//                ";
//
//}
//
//?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.css" />


    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- Link Style CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Car Website | Easy Coding</title>
</head>

<body>
<!--<script src="index.js" ></script>-->
<!-- Header/Navbar Start -->
<header>
<!--    <a href="user.html"> go to user </a>-->
<!--    <a href="admin.html"> go to admin </a>-->

    <div id="MenuBtn" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>L</span>egend Motors</a>

    <nav class="navbar">
        <a href="#Home">Home</a>
        <a href="#Vehicle">Vehicle</a>
        <a href="#About">About</a>
<!--        <a href="#Services">Services</a>-->
        <a href="#Review">Review</a>
        <a href="#Contact">Contact</a>
    </nav>

<!--    <div class="dropdown">-->
<!--        <div class="select">-->
<!--            <span class="selected">Login </span>-->
<!--            <div class="caret"> </div>-->
<!--        </div>-->
<!--        <ul class="menu">-->
<!--            <li class="active">Admin </li>-->
<!--            <li>User </li>-->
<!--        </ul>-->
<!--    </div>-->

    <div id="LoginBtn">
        <button class="btn">User Login</button>
        <i class="fas fa-user"></i>
    </div>


    <div id="LoginBtnAdmin">
        <button class="btn">Admin Login</button>
        <i class="fas fa-user"></i>
    </div>

</header>
<!-- Header/Navbar End -->


<!-- admin Login Form Container/Popup -->
<div class="loginFormContainerAdmin">
    <span id="CloseLoginFormAdmin" class="fas fa-times"></span>

    <form action="loginAdmin.php" method="post">
        <h3>Admin Login</h3>
        <input type="email" name="txtAdminEmail" placeholder="Email" required class="box">
        <input type="password" name="txtAdminPassword" placeholder="Password" required class="box">
        <!--        <p>Forget Your Password : <a href="#">Click Here</a></p>-->
        <button class="btn">login </button>
        <!--        <input type="submit" value="login">-->
        <p>or Sign up, click below</p>
        <div class="buttons" id="SignUpBtnAdmin">
            <button class="btn">Sign up </button>
        </div>
    </form>
</div>
<!-- Admin Login Form Container/Popup -->

<!--  Admin sign up Form Container/Popup -->
<div class="SignUpFormContainerAdmin">
    <span id="CloseSignupFormAdmin" class="fas fa-times"></span>
    <form action="signAdmin.php" method="post">
        <h3>User Sign Up</h3>
        <input type="text" id="txtNewAdmin_id" name="txtNewAdmin_id" placeholder="Admin ID" required class="box" >
        <input type="text"  id="txtNewAdmin_name" name="txtNewAdmin_name" placeholder="Admin Name" required class="box">
        <input type="email"  id="txtNewAdmin_email"  name="txtNewAdmin_email" placeholder="Email" required class="box">
        <input type="password" id="txtNewAdmin_password" name="txtNewAdmin_password" placeholder="Password" required class="box">
        <div >
            <button class="btn" id="SignuppAdmin">Sign Up  </button>
        </div>
    </form>
</div>
<!-- Admin sign up Form Container/Popup -->

<!-- User Login Form Container/Popup -->
<div class="loginFormContainer">
    <span id="CloseLoginForm" class="fas fa-times"></span>

    <form action="login.php" method="post">
        <h3>User Login</h3>
        <input type="email" name="txtUserEmail" placeholder="Email" required class="box">
        <input type="password" name="txtUserPassword" placeholder="Password" required class="box">
<!--        <p>Forget Your Password : <a href="#">Click Here</a></p>-->
        <button class="btn">login </button>
<!--        <input type="submit" value="login">-->
        <p>or Sign up, click below</p>
        <div class="buttons" id="SignUpBtn">
            <button class="btn">Sign up </button>
        </div>
    </form>
</div>
<!-- User Login Form Container/Popup -->

<!--  User sign up Form Container/Popup -->
<div class="SignUpFormContainer">
    <span id="CloseSignupForm" class="fas fa-times"></span>
    <form action="sign.php" method="post">
        <h3>User Sign Up</h3>
        <input type="text" id="txtNewUser_id" name="txtNewUser_id" placeholder="User ID" required class="box" >
        <input type="text"  id="txtNewUser_name" name="txtNewUser_name" placeholder="User Name" required class="box">
        <input type="email"  id="txtNewUser_email"  name="txtNewUser_email" placeholder="Email" required class="box">
        <input type="password" id="txtNewUser_password" name="txtNewUser_password" placeholder="Password" required class="box">
        <div >
            <button class="btn" id="Signupp">Sign Up  </button>
        </div>
    </form>
</div>
<!-- User sign up Form Container/Popup -->


<!-- Home Section Start -->
<section id="Home" class="home">
    <h3 data-speed="-2" class="homeParallexEffect">Find Vehicle</h3>
    <img data-speed="5" class="homeParallexEffect" src="image/home.png" alt="">
<!--    <a href="#" class="btn">View Cars</a>-->
</section>
<!-- Home Section End -->

<!-- Vehicle Section Start -->
<section id="Vehicle" class="vehicle">
    <h1 class="heading">Popular Vehicles</h1>

    <div class="swiper VehiclesSlider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/vehicle1111.png" alt="">
                <div class="content">
                    <h3>New Model</h3>
                    <div class="price"><span>Price : </span>$102,000</div>
                    <p>
                        <span class="fas fa-circle"></span>2022
                        <span class="fas fa-circle"></span>Automatic
                        <span class="fas fa-circle"></span>Electric
                        <span class="fas fa-circle"></span>200mph
                    </p>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle222.png" alt="">
                <div class="content">
                    <h3>New Model</h3>
                    <div class="price"><span>Price : </span>$102,000</div>
                    <p>
                        <span class="fas fa-circle"></span>2022
                        <span class="fas fa-circle"></span>Automatic
                        <span class="fas fa-circle"></span>Electric
                        <span class="fas fa-circle"></span>200mph
                    </p>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle333.png" alt="">
                <div class="content">
                    <h3>New Model</h3>
                    <div class="price"><span>Price : </span>$102,000</div>
                    <p>
                        <span class="fas fa-circle"></span>2022
                        <span class="fas fa-circle"></span>Automatic
                        <span class="fas fa-circle"></span>Electric
                        <span class="fas fa-circle"></span>200mph
                    </p>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle44.png" alt="">
                <div class="content">
                    <h3>New Model</h3>
                    <div class="price"><span>Price : </span>$102,000</div>
                    <p>
                        <span class="fas fa-circle"></span>2022
                        <span class="fas fa-circle"></span>Automatic
                        <span class="fas fa-circle"></span>Electric
                        <span class="fas fa-circle"></span>200mph
                    </p>
                </div>
            </div>


            <div class="swiper-slide box">
                <img src="image/vehicle55.png" alt="">
                <div class="content">
                    <h3>New Model</h3>
                    <div class="price"><span>Price : </span>$102,000</div>
                    <p>
                        <span class="fas fa-circle"></span>2022
                        <span class="fas fa-circle"></span>Automatic
                        <span class="fas fa-circle"></span>Electric
                        <span class="fas fa-circle"></span>200mph
                    </p>
                </div>
            </div>


            <div class="swiper-slide box">
                <img src="image/vehicle66.png" alt="">
                <div class="content">
                    <h3>New Model</h3>
                    <div class="price"><span>Price : </span>$102,000</div>
                    <p>
                        <span class="fas fa-circle"></span>2022
                        <span class="fas fa-circle"></span>Automatic
                        <span class="fas fa-circle"></span>Electric
                        <span class="fas fa-circle"></span>200mph
                    </p>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- Vehicle Section End -->


<!-- Featured Section Start -->
<section id="About" class="aboutt">
    <h1 class="heading">About</h1>

    <div class="row">
        <div class="mmm">
            <img src="image/about111.png"  width="100" height="300" alt="">
        </div>

        <form action="">
            <div class="nnnn"> Welcome to Our Legend Motors  </div>
            <div class="nnn">Buying with Legend Motors <br> Convenience guaranteed <br> From your home or office, shopping for a car on Legend Motors saves you time and money and helps you choose your future car with up to 98% accuracy</div>
        </form>

    </div>

</section>
<!--<section id="Featured" class="feature">-->

<!--  <h1 class="heading">Featured Cars</h1>-->

<!--  <div class="swiper FeatureSlider">-->

<!--    <div class="swiper-wrapper">-->

<!--      <div class="swiper-slide box">-->
<!--        <img src="image/car11.png" alt="">-->

<!--        <div class="content">-->
<!--          <h3>New Model</h3>-->
<!--          <div class="stars">-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--          </div>-->
<!--          <div class="price">$85,000/-</div>-->
<!--          <a href="#" class="btn">Buy Now</a>-->

<!--        </div>-->

<!--      </div>-->

<!--      <div class="swiper-slide box">-->
<!--        <img src="image/car22.png" alt="">-->

<!--        <div class="content">-->
<!--          <h3>New Model</h3>-->
<!--          <div class="stars">-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--          </div>-->
<!--          <div class="price">$85,000/-</div>-->
<!--          <a href="#" class="btn">Buy Now</a>-->

<!--        </div>-->

<!--      </div>-->



<!--      <div class="swiper-slide box">-->
<!--        <img src="image/car33.png" alt="">-->

<!--        <div class="content">-->
<!--          <h3>New Model</h3>-->
<!--          <div class="stars">-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--          </div>-->
<!--          <div class="price">$85,000/-</div>-->
<!--          <a href="#" class="btn">Buy Now</a>-->

<!--        </div>-->

<!--      </div>-->


<!--      <div class="swiper-slide box">-->
<!--        <img src="image/car44.png" alt="">-->

<!--        <div class="content">-->
<!--          <h3>New Model</h3>-->
<!--          <div class="stars">-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--          </div>-->
<!--          <div class="price">$85,000/-</div>-->
<!--          <a href="#" class="btn">Buy Now</a>-->

<!--        </div>-->

<!--      </div>-->




<!--    </div>-->

<!--  </div>-->

<!--  &lt;!&ndash; For Second &ndash;&gt;-->
<!--  <div class="swiper FeatureSlider">-->

<!--    <div class="swiper-wrapper">-->

<!--      <div class="swiper-slide box">-->
<!--        <img src="image/car55.png" alt="">-->

<!--        <div class="content">-->
<!--          <h3>New Model</h3>-->
<!--          <div class="stars">-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--          </div>-->
<!--          <div class="price">$85,000/-</div>-->
<!--          <a href="#" class="btn">Buy Now</a>-->

<!--        </div>-->

<!--      </div>-->

<!--      <div class="swiper-slide box">-->
<!--        <img src="image/car44.png" alt="">-->

<!--        <div class="content">-->
<!--          <h3>New Model</h3>-->
<!--          <div class="stars">-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--          </div>-->
<!--          <div class="price">$85,000/-</div>-->
<!--          <a href="#" class="btn">Buy Now</a>-->

<!--        </div>-->

<!--      </div>-->



<!--      <div class="swiper-slide box">-->
<!--        <img src="image/car22.png" alt="">-->

<!--        <div class="content">-->
<!--          <h3>New Model</h3>-->
<!--          <div class="stars">-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--          </div>-->
<!--          <div class="price">$85,000/-</div>-->
<!--          <a href="#" class="btn">Buy Now</a>-->

<!--        </div>-->

<!--      </div>-->


<!--      <div class="swiper-slide box">-->
<!--        <img src="image/car33.png" alt="">-->

<!--        <div class="content">-->
<!--          <h3>New Model</h3>-->
<!--          <div class="stars">-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--            <i class="fas fa-star"></i>-->
<!--          </div>-->
<!--          <div class="price">$85,000/-</div>-->
<!--          <a href="#" class="btn">Buy Now</a>-->

<!--        </div>-->

<!--      </div>-->




<!--    </div>-->

<!--  </div>-->

<!--</section>-->
<!-- Featured Section End -->

<!-- Service Section Start -->
<!--<section id="Services" class="services">-->
<!--  <h1 class="heading">Our Services</h1>-->

<!--  <div class="boxContainer">-->

<!--    <div class="box">-->
<!--      <i class="fas fa-car"></i>-->
<!--      <h3>Car Selling</h3>-->
<!--      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus facilis sapiente suscipit-->
<!--        explicabo natus ducimus?</p>-->
<!--      <button class="btn">Read More</button>-->
<!--    </div>-->

<!--    <div class="box">-->
<!--      <i class="fas fa-tools"></i>-->
<!--      <h3>Parts Repair</h3>-->
<!--      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus facilis sapiente suscipit-->
<!--        explicabo natus ducimus?</p>-->
<!--      <button class="btn">Read More</button>-->
<!--    </div>-->


<!--    <div class="box">-->
<!--      <i class="fas fa-car-crash"></i>-->
<!--      <h3>Car Insurance</h3>-->
<!--      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus facilis sapiente suscipit-->
<!--        explicabo natus ducimus?</p>-->
<!--      <button class="btn">Read More</button>-->
<!--    </div>-->

<!--    <div class="box">-->
<!--      <i class="fas fa-car-battery"></i>-->
<!--      <h3>Battery Replacement</h3>-->
<!--      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus facilis sapiente suscipit-->
<!--        explicabo natus ducimus?</p>-->
<!--      <button class="btn">Read More</button>-->
<!--    </div>-->


<!--    <div class="box">-->
<!--      <i class="fas fa-gas-pump"></i>-->
<!--      <h3>Oil Change</h3>-->
<!--      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus facilis sapiente suscipit-->
<!--        explicabo natus ducimus?</p>-->
<!--      <button class="btn">Read More</button>-->
<!--    </div>-->

<!--    <div class="box">-->
<!--      <i class="fas fa-headset"></i>-->
<!--      <h3>24*7 Support</h3>-->
<!--      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus facilis sapiente suscipit-->
<!--        explicabo natus ducimus?</p>-->
<!--      <button class="btn">Read More</button>-->
<!--    </div>-->






<!--  </div>-->

<!--</section>-->
<!-- Service Section End -->

<!-- Review Section Start -->
<section id="Review" class="review">
    <h1 class="heading">Client's Review</h1>

    <div class="swiper ReviewSlider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/user11.png" alt="">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem ratione
                        voluptates aspernatur, eum sed.</p>
                    <h3>Easy Coding</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/user22.png" alt="">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem ratione
                        voluptates aspernatur, eum sed.</p>
                    <h3>Easy Coding</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/user33.png" alt="">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem ratione
                        voluptates aspernatur, eum sed.</p>
                    <h3>Easy Coding</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/user44.png" alt="">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem ratione
                        voluptates aspernatur, eum sed.</p>
                    <h3>Easy Coding</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>



        </div>

    </div>

</section>
<!-- Review Section End -->


<!-- Contact Form Start -->
<section id="Contact" class="contact">
    <h1 class="heading">Contact Us</h1>

    <div class="row">
        <div class="mm">
            <img src="image/cont1.png" alt="">
        </div>

        <form action="">
            <div class="nn"> location <br> Sufian street - Nablus </div>
            <div class="nn">phone <br> +072 397158114</div>
            <div class="nn"> Email <br> car@gmail.com </div>

            <div class="bb">
<!--                <a   href="https://www.facebook.com/profile.php?id=100007641068989"> <abbr title=" go to facebook"> <img src="image/face.png"height="45" width="45" > </abbr>   </a>-->
                <a   href="https://www.facebook.com/sama.shawa.1"> <abbr title=" go to facebook"> <img src="image/face.png"height="45" width="45" > </abbr>   </a>

                <a   href="https://instagram.com/manarsadaqa02?igshid=YmMyMTA2M2Y="> <abbr title=" go to instagram"> <img src="image/insta.png"height="45" width="45"  > </abbr>   </a>
                <a   href="https://twitter.com/BesanJadallah2?t=y6tzZLKCVIEtXGH9E4fP1Q&s=09"> <abbr title=" go to face twitter"> <img src="image/tewter.png"height="45" width="45"  > </abbr>   </a>

            </div>
        </form>

    </div>

</section>
<!-- Contact Form End -->

<!-- Footer Start -->
<footer>
    <a href="#">&copy; Legend Motors</a>
</footer>
<!-- Footer end -->

<!-- Theme Toggle  -->
<div class="themeToggle">

    <div class="ToggleBtn">
        <i class="fas fa-cog"></i>
    </div>

    <h3>Choose Color</h3>
    <div class="buttons">

        <div class="themeBtn" style="background: #0011ff;"></div>
        <div class="themeBtn" style="background: #ffb404;"></div>
        <div class="themeBtn" style="background: #2bff00;"></div>
        <div class="themeBtn" style="background: #fc00dbe6;"></div>
        <div class="themeBtn" style="background: #cb5805;"></div>
        <div class="themeBtn" style="background: #ff041d;"></div>

    </div>

</div>
<!-- Theme Toggle  -->

<!-- Swiper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js"></script>
<!-- Script For JS -->
<script src="index.js"></script>

</body>

</html>