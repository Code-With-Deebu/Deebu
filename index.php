
<?php
// include the database configuration
include './connection/conc.php';

// Get a database connection
$conn = getDB();


// Close the connection
$conn->close();

include('./include/header.php');


?>



    <section id="header">
        <a href="#"><img src="./assets/Images/logo/logo.png" alt=""></a>
            <div>
                <ul id="navbar">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>               
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                    <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
                </ul>
            </div>
            <div id="mobile">
                <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
                <i id="bar" class="fa-solid fa-bars"></i>
            </div>
    </section>
    
    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2> 
        <h1>On all products</h1>
        <p1>Sav more with coupon &  up to 70% off! </p1>
        <button>Shop Now</button>
    </section>

    <?php
         include('./include/categories.php');
    ?>
    
    <section id="product1" class="section-p1">
        <h2>Feature Products</h2>
        <p>Summer Collection New Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="./assets/Images/girls/img2.jpeg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Tail-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div> 
                <a href="cart.php"><i class="fa-solid fa-bag-shopping cart"></i></a>
            </div>

            <div class="pro">
                <img src="./assets/Images//mans/img12.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Tail-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-bag-shopping cart"></i></a>
            </div>

            <div class="pro">
                <img src="./assets/Images/acessories/img6.jpeg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Tail-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div> 
                <a href="#"><i class="fa fa-shopping-bag cart"></i></a>
            </div>

            <div class="pro">
                <img src="./assets/Images/girls/img14.jpeg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Tail-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div> 
                <a href="#"><i class="fa fa-shopping-bag cart"></i></a>
            </div>

            <div class="pro">
                <img src="./assets/Images//mans/img23.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Tail-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div> 
                <a href="#"><i class="fa fa-shopping-bag cart"></i></a>
            </div>

            <div class="pro">
                <img src="./assets/Images/shoes/shoes 1.jpeg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Tail-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div> 
                <a href="#"><i class="fa fa-shopping-bag cart"></i></a>
            </div>

            <div class="pro">
                <img src="./assets/Images/Shirts/shirt1.png" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Tail-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div> 
                <a href="#"><i class="fa fa-shopping-bag cart"></i></a>
            </div>

            <div class="pro">
                <img src="./assets/Images/mans/img19.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Tail-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div> 
                <a href="#"><i class="fa fa-shopping-bag cart"></i></a>
            </div>

        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% Off </span>- All t-Shirts & Accessories</h2>
        <button class="normal">Explore More </button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New arrivals</h2>
        <p>Summer Collection New Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="./assets/Images/Shirts/shirt1.png" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Tail-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div> 
                <a href="#"><i class="fa fa-shopping-bag cart"></i></a>
            </div>

            <div class="pro">
                <img src="./assets/Images/Shirts/shirt2.png" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Tail-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div> 
                <a href="#"><i class="fa fa-shopping-bag cart"></i></a>
            </div>

            <div class="pro">
                <img src="./assets/Images/Shirts/shirt3.jpeg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Tail-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div> 
                <a href="#"><i class="fa fa-shopping-bag cart"></i></a>
            </div>

            <div class="pro">
                <img src="./assets/Images/Shirts/shirt4.jpeg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Tail-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div> 
                <a href="#"><i class="fa fa-shopping-bag cart"></i></a>
            </div>

            <div class="pro">
                <img src="./assets/Images/Shirts/shirt5.jpeg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Tail-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div> 
                <a href="#"><i class="fa fa-shopping-bag cart"></i></a>
            </div>

            <div class="pro">
                <img src="./assets/Images/dress/images 7.jpeg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Tail-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div> 
                <a href="#"><i class="fa fa-shopping-bag cart"></i></a>
            </div>

            <div class="pro">
                <img src="./assets/Images/dress/images 8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Tail-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div> 
                <a href="#"><i class="fa fa-shopping-bag cart"></i></a>
            </div>

            <div class="pro">
                <img src="./assets/Images/dress/images 9.jpeg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Tail-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div> 
                <a href="#"><i class="fa fa-shopping-bag cart"></i></a>
            </div>

        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at care</span>
            <button class="white">Learn More</button>
        </div>

        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>upcoming season</h2>
            <span>The best classic dress is on sale at care</span>
            <button class="white">Learn More</button>
        </div>
    </section>
    
    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>spring / Summer 2022</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
        </div>
    </section>

    <section id="newsletter"  class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <?php  include('./include/footer.php');?>