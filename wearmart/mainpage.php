<?php

$conn = mysqli_connect('localhost','root','','wearmart') or die('connection failed');
$email  = $_POST['email'];
$password = $_POST['password'];
$conformPassword = $_POST['conformPassword'];




if ( !empty($email) || !empty($password) || !empty($conformPassword) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "wearmart";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From register Where email = ? Limit 1";
  $INSERT = "INSERT Into register ( email , password , conformPassword )values(?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $email,$password,$conformPassword);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Fashion Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bottstrap/4.5.2/css/bootstrap.min.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style1.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <img src="images/photo_2022-10-29_23-05-52.jpg" class="img"></img> WEARMART</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="products.php">products</a>
        <a href="#featured">featured</a>
        <a href="#contact">contact</a>
        <a href="#blogs">blogs</a>
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <a href="cart.php" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-heart"></a>
    </div>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(image/banner1.jpg) no-repeat">
                <div class="content">
                    <span>upto 50% off</span>
                    <h3>women's Fashion</h3>
                    <a href="products.php" class="btn">shop now</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(image/banner2.jpg) no-repeat">
                <div class="content">
                    <span>upto 50% off</span>
                    <h3>men's Fashion</h3>
                    <a href="products.php" class="btn">shop now</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(image/banner3.jpg) no-repeat">
                <div class="content">
                    <span>upto 50% off</span>
                    <h3>kid's Fashion</h3>
                    <a href="products.php" class="btn">shop now</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner-container">

    <div class="banner">
        <img src="image/shop_banner_img1.jpg" alt="">
        <div class="content">
            <span>special offer</span>
            <h3>upto 50% off</h3>
            <a href="products.php" class="btn">shop now</a>
        </div>
    </div>
    
    <div class="banner">
        <img src="image/shop_banner_img2.jpg" alt="">
        <div class="content">
            <span>special offer</span>
            <h3>upto 50% off</h3>
            <a href="products.php" class="btn">shop now</a>
        </div>
    </div>

</section>

<!-- banner section ends -->

<!-- products section starts  -->


<!-- deal section ends -->

<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured</span> products </h1>

    <div class="swiper featured-slider">
        
        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/product_img1.jpg" alt="">
                </div>
             
                </div>
            

            <div class="swiper-slide slide">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/product_img2.jpg" alt="">
                </div>
                
                    </div>
                
            

            <div class="swiper-slide slide">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/product_img3.jpg" alt="">
                </div>
              
                </div>
          

            <div class="swiper-slide slide">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/product_img4.jpg" alt="">
                </div>
             
            </div>

            <div class="swiper-slide slide">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/product_img5.jpg" alt="">
                </div>
               
            </div>

            <div class="swiper-slide slide">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/product_img6.jpg" alt="">
                </div>
                
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- featured section ends -->




<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>address</h3>
            <p>No.102,kandy road,colombo-12</p>
        </div>

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>wearmart@gmail.com</p>
            <p>wearshopping@gmail.com</p>
        </div>

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <p>011-5436987</p>
            <p>077-7123123</p>
        </div>

    </div>

    <div class="row">

        <form action="fasris123@gmail.com" method="post">
            <h3>get in touch</h3>
            <div class="inputBox">
                <input type="text" placeholder="your name">
                <input type="email" placeholder="your email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="your number">
                <input type="text" placeholder="your subject">
            </div>
            <textarea placeholder="your message" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn" align="center">
        </form>

        

    </div>

</section>

<!-- contact section ends -->

<!-- blogs  section starts  -->

<section class="blogs" id="blogs">
    
    <h1 class="heading"> our <span>blogs</span></h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="image/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Sparkle Wears</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore.</p>
                   
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="image/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Blush with Style</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore.</p>
                  
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="image/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Fashion by Choice</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore.</p>
                   
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="image/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Aiming Affordable Fashion</h3>
                    <p> Make any outfit modest with Fares Half Tees and more layering essentials</p>
                    
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="image/blog-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Fashion in 4K</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore.</p>
                   
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- blogs  section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3 align="center">about us</h3>
            <p align="center"> we are proud to be your Online Clothing Shop that you can rely on for our expert service and care!</p>
        </div>

    </div>

    <div class="share">
        <a href="https://m.facebook.com/story.php?story_fbid=817783315974408&substory_index=817783315974408&id=100088517136808&mibextid=Nif5oz" class="fab fa-facebook-f"></a>
        <a href="https://mobile.twitter.com/account/switch" class="fab fa-twitter"></a>
       
        <a href="https://www.instagram.com/invites/contact/?i=19o2p8cqso3lp&utm_content=q3idmo9" class="fab fa-instagram"></a>
    </div>

  
    
</section>

<!-- footer section ends -->

















<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>