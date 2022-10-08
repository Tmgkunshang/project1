<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tag
  -->
  <title>Pettalks</title>
  <meta name="title" content="Kitter - Hight Quality Pet Food">
  <meta name="description" content="This is an eCommerce html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.jpg">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <button class="nav-toggle-btn" aria-label="toggle manu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" aria-label="true" class="close-icon"></ion-icon>
      </button>

      <a href="#" class="logo"><img src="./assets/images/logo.png" alt="" srcset=""></a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="#shop" class="navbar-link" data-nav-link>Shop</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>Collections</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>Blogs</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>Contact</a>
          </li>

          <li class="navbar-item">
           <?php  if (isset($_SESSION['username'])) : ?>
    	
            <p> <a style="color:red;" class="navbar-link" data-nav-link href="index.php?logout='1'" >logout</a> </p>
             <?php endif ?></a>
          </li>
          

        </ul>

        <a href="#" class="navbar-action-btn">Log In</a>
      </nav>

      <div class="header-actions">

        <button class="action-btn" aria-label="Search">
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
        </button>

        <button class="action-btn user" aria-label="User">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
        </button>

        <button class="action-btn" aria-label="cart">
          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

          <span class="btn-badge">0</span>
        </button>

      </div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('https://images.pexels.com/photos/485294/pexels-photo-485294.jpeg?auto=compress&cs=tinysrgb&w=1600')">
        <div class="container">

          <h1 class="h1 hero-title">
            <span class="span">We care about your</span> PETS
          </h1>

          <p class="hero-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi tempore aliquid, 
            aperiam quidem quisquam sed magnam sit laborum. D
            icta nam perferendis doloribus eaque est at assumenda illo nemo possimus alias.</p>

          <a href="#shop" class="btn">Shop Now</a>

        </div>
      </section>





      <!-- 
        - #CATEGORY
      -->

      <section class="section category" aria-label="category">
        <div class="container">

          <h2 class="h2 section-title">
            <span class="span">Top</span> categories
          </h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcR77euRIH3YcRYXVkA1igx-kqOGIbveq8PVDzRn2GOIT2W1P18UdELM6_i3jARe4A-0sSA50mjVKyRpAg8WERuU1b8LiL2EJaBL4LcJJmq8_Ub1A4YHZmysIw&usqp=CAE" width="330" height="300" loading="lazy" alt="Cat Food"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Cat Food</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcT1siGh0qG97GBMF8J_Qj2rAoFrD2b07_F6b9FgIPhgG635j8rDzHzOp834YXIIgj1tXdiI4Fv9DhE5w9rOkz0x3nL8SFLm6IYc4VFD1p1XvjkoQqYVg8Rx7g&usqp=CAE" width="330" height="300" loading="lazy" alt="Cat Toys"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Cat Toys</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="https://cdn0.woolworths.media/content/wowproductimages/large/065367.jpg" width="330" height="300" loading="lazy" alt="Dog Food"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Dog Food</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="https://cdn-images.vetstreet.com/66/76/7a71c5e8413fa0ce1dea24d19fc7/puppy-with-chew-toy-thinkstockphotos-476792666-335.jpg" width="330" height="300" loading="lazy" alt="Dog Toys"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Dog Toys</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="https://topdogtips.com/wp-content/uploads/2021/03/Nature-Vet-Dog-Supplement.jpg" width="330" height="300" loading="lazy"
                    alt="Dog Sumpplements" class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Dog Supplements</a>
                </h3>

              </div>
            </li>

          </ul>

        </div>
      </section>





     



      <!-- 
        - #PRODUCT
      -->

      <section class="section product" id="shop" aria-label="product">
        <div class="container">

          <h2 class="h2 section-title">
            <span class="span">Products</span> 
          </h2>

          <ul class="grid-list">

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/product-1.jpg" width="360" height="360" loading="lazy"
                    alt="Commodo leo sed porta" class="img-cover default">
                  <img src="./assets/images/product-1_0.jpg" width="360" height="360" loading="lazy"
                    alt="Commodo leo sed porta" class="img-cover hover">
                  <a href="shoppingCart.php"><button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button></a>
                  
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(1)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse commodi ratione nisi, velit architecto itaque asperiores ut laudantium illo dolorem nostrum culpa voluptas labore earum eius voluptatem impedit placeat magnam?</a>
                  </h3>

                  <data class="card-price" value="15">$0</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/product-2.jpg" width="360" height="360" loading="lazy"
                    alt="Purus consequat congue sit" class="img-cover default">
                  <img src="./assets/images/product-2_0.jpg" width="360" height="360" loading="lazy"
                    alt="Purus consequat congue sit" class="img-cover hover">
                  <a href="shoppingCart.php"><button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button></a>
                  
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, cum quas illo eaque nulla est non provident reiciendis odit incidunt quia asperiores doloribus commodi ducimus delectus, accusamus aut! Quidem, quae.</a>
                  </h3>

                  <data class="card-price" value="45">$0</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/product-3.jpg" width="360" height="360" loading="lazy"
                    alt="Morbi vel arcu scelerisque" class="img-cover default">
                  <img src="./assets/images/product-3_0.jpg" width="360" height="360" loading="lazy"
                    alt="Morbi vel arcu scelerisque" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, eaque quos fugiat natus tempora perspiciatis, dolorum nemo quas nisi magni odio laudantium fugit, maiores obcaecati porro voluptatum temporibus numquam molestiae.</a>
                  </h3>

                  <data class="card-price" value="45">$0</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/product-4.jpg" width="360" height="360" loading="lazy"
                    alt="Morbi vel arcu scelerisque" class="img-cover default">
                  <img src="./assets/images/product-4_0.jpg" width="360" height="360" loading="lazy"
                    alt="Morbi vel arcu scelerisque" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit expedita adipisci nostrum facilis aperiam. Quasi dolore fuga cum quidem soluta. Facilis, neque numquam debitis possimus suscipit voluptates dolorum perferendis nesciunt.</a>
                  </h3>

                  <data class="card-price" value="49">$0</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/product-5.jpg" width="360" height="360" loading="lazy"
                    alt="Morbi vel arcu scelerisque" class="img-cover default">
                  <img src="./assets/images/product-5_0.jpg" width="360" height="360" loading="lazy"
                    alt="Morbi vel arcu scelerisque" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure autem totam debitis quaerat. Qui eveniet consectetur amet quia voluptas aspernatur, impedit enim ipsum! Placeat repudiandae quaerat autem, atque quisquam hic?</a>
                  </h3>

                  <data class="card-price" value="85">$0</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/product-6.jpg" width="360" height="360" loading="lazy"
                    alt="Nam justo libero porta ege" class="img-cover default">
                  <img src="./assets/images/product-6_0.jpg" width="360" height="360" loading="lazy"
                    alt="Nam justo libero porta ege" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum architecto culpa voluptate magnam, harum labore cupiditate. Error temporibus ipsam, nisi quo sint mollitia eum facilis eius laborum commodi fugit quia.</a>
                  </h3>

                  <data class="card-price" value="85">$0</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/product-7.jpg" width="360" height="360" loading="lazy"
                    alt="Nam justo libero porta ege" class="img-cover default">
                  <img src="./assets/images/product-7_0.jpg" width="360" height="360" loading="lazy"
                    alt="Nam justo libero porta ege" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla nemo labore illum repellat doloribus. Itaque sed provident consectetur aspernatur labore doloremque tenetur odit, assumenda dolore, quisquam harum ipsum eum eligendi.</a>
                  </h3>

                  <data class="card-price" value="85">$0</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/product-8.jpg" width="360" height="360" loading="lazy"
                    alt="Etiam commodo leo sed" class="img-cover default">
                  <img src="./assets/images/product-8_0.jpg" width="360" height="360" loading="lazy"
                    alt="Etiam commodo leo sed" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto, labore. Sint aspernatur cumque architecto dolores at eum doloribus provident a deleniti, culpa nisi totam eos maxime necessitatibus non, quisquam praesentium!</a>
                  </h3>

                  <data class="card-price" value="55">$0</data>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>
















  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.jpg')">

   

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

          </ul>

        </div>


      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">


        <img src="./assets/images/payment.png" width="397" height="32" loading="lazy" alt="payment method" class="img">

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>