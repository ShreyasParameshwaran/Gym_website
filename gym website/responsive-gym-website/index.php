<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--=============== FAVICON ===============-->
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />

  <!--=============== REMIXICON ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="assets/css/styles.css" />

  <title>Responsive gym website - Bedimcode</title>
</head>

<body>
  <?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "gym";

  $conn = new mysqli($server, $username, $password, $database);

  if ($conn->connect_error) {
    die("Connection to this database failed due to " . $conn->connect_error);
  }

  $sql1 = "SELECT * FROM programs";
  $result1 = $conn->query($sql1);

  $sql2 = "SELECT * FROM prices";
  $result2 = $conn->query($sql2);
  ?>
  <!--==================== HEADER ====================-->
  <header class="header" id="header">
    <nav class="nav container">
      <a href="#" class="nav__logo">
        <img src="assets/img/logo-nav.png" alt="logo" />BEROTOT
      </a>

      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#home" class="nav__link active-link">Home</a>
          </li>
          <li class="nav__item">
            <a href="#program" class="nav__link">Program</a>
          </li>
          <li class="nav__item">
            <a href="#choose" class="nav__link">Choose Us</a>
          </li>
          <li class="nav__item">
            <a href="#pricing" class="nav__link">Pricing</a>
          </li>
          <div class="nav__link">
            <a href="footer" class="button nav__button">Register now</a>
          </div>
        </ul>

        <div class="nav__close" id="nav-close">
          <i class="ri-close-line"></i>
        </div>
      </div>

      <!--TOGGLE button-->
      <div class="nav__toggle" id="nav-toggle">
        <i class="ri-menu-line"></i>
      </div>
    </nav>
  </header>

  <!--==================== MAIN ====================-->
  <main class="main">
    <!--==================== HOME ====================-->
    <section class="home section" id="home">
      <div class="home__container container grid">
        <div class="home__data">
          <h2 class="home__subtitle">MAKE YOUR</h2>
          <h1 class="home__title">BODY SHAPE</h1>
          <p class="home__description">
            In here we will help you to shape and build your ideal body and
            live your life to the fullest.
          </p>
          <a href="#" class="button button__flex">
            Get Started <i class="ri-arrow-right-fill"></i>
          </a>
        </div>
        <div class="home__images">
          <img src="assets/img/home-img.png" alt="home image" class="home__img" />

          <div class="home__triangle home__triangle-3"></div>
          <div class="home__triangle home__triangle-2"></div>
          <div class="home__triangle home__triangle-1"></div>
        </div>
      </div>
    </section>

    <!--==================== LOGOS ====================-->
    <section class="logos section">
      <div class="logos__container container grid">
        <img src="assets/img/logo1.png" alt="logo image" class="logos__img" />
        <img src="assets/img/logo2.png" alt="logo image" class="logos__img" />
        <img src="assets/img/logo3.png" alt="logo image" class="logos__img" />
        <img src="assets/img/logo4.png" alt="logo image" class="logos__img" />
      </div>
    </section>

    <!--==================== PROGRAM ====================-->
    <section class="program section" id="program">
      <div class="container">
        <div class="section__data">
          <h2 class="section__subtitle">Our Program</h2>
          <div class="section__titles">
            <h1 class="section__title-border">BUILD YOUR</h1>
            <h1 class="section__title">BEST BODY</h1>
          </div>
        </div>
        <div class="program__container grid">
          <?php
          while ($row = $result1->fetch_assoc()) {
            $imageSrc = "assets/img/" . $row["image"];
            echo '<article class="program__card">
              <div class="program__shape">
                <img src="' . $imageSrc . '" alt="program image" class="program__img" />
              </div>
  
              <h3 class="program__title">' . $row["title"] . '</h3>
  
              <p class="program__description">
              ' . $row["description"] . '
              </p>
  
              <a href="#" class="program__button">
                <i class="ri-arrow-right-fill"></i>
              </a>
            </article>';
          }
          ?>
        </div>
      </div>
    </section>

    <!--==================== CHOOSE US ====================-->
    <section class="choose section" id="choose">
      <div class="choose__overflow">
        <div class="choose__container container grid">
          <div class="choose__content">
            <h2 class="section__subtitle">Best Reason</h2>
            <div class="section__titles">
              <h1 class="section__title-border">WHY</h1>
              <h1 class="section__title">CHOOSE US?</h1>
            </div>

            <p class="choose__description">
              Choose your favorite class and start now. Remember the only bad
              workout is the one you didn't do.
            </p>

            <div class="choose__data">
              <div class="choose__gorup">
                <h3 class="choose__number">200+</h3>
                <p class="choose__subtitle">total members</p>
              </div>
              <div class="choose__gorup">
                <h3 class="choose__number">50+</h3>
                <p class="choose__subtitle">best trainers</p>
              </div>
              <div class="choose__gorup">
                <h3 class="choose__number">25+</h3>
                <p class="choose__subtitle">programs</p>
              </div>
              <div class="choose__gorup">
                <h3 class="choose__number">100+</h3>
                <p class="choose__subtitle">awards</p>
              </div>
            </div>
          </div>

          <div class="choose__images">
            <img src="assets/img/choose-img.png" alt="choose image" class="choose__img" />
            <div class="choose__triangle choose__triangle-1"></div>
            <div class="choose__triangle choose__triangle-2"></div>
            <div class="choose__triangle choose__triangle-3"></div>
          </div>
        </div>
      </div>
    </section>

    <!--==================== PRICING ====================-->
    <section class="pricing section" id="pricing">
      <div class="container">
        <div class="section__data">
          <h2 class="section__subtitle">Pricing</h2>
          <div class="section__titles">
            <h1 class="section__title-border">OUR</h1>
            <h1 class="setion__title">SPECIAL PLAN</h1>
          </div>
        </div>

        <div class="pricing__container grid">
          <?php
          while ($row = $result2->fetch_assoc()) {
            $imageSrc = "assets/img/" . $row["image"];
            echo '<article class="pricing__card">
            <header class="pricing__header">
              <div class="pricing__shape">
                <img src="' . $imageSrc . '" alt="pricing image" class="pricing__img" />
              </div>

              <h1 class="pricing__title">' . $row["name"] . '</h1>
              <h2 class="pricing__number">' . $row["price"] . '</h2>
            </header>

            <ul class="pricing__list">
              <li class="pricing__item">
              <i class="ri-checkbox-circle-line" style="' . ($row["opacity1"] == 0 ? 'opacity: 0.3' : 'opacity: 1') . '"></i> 5 Days In A Week
              </li>
              <li class="pricing__item">
                <i class="ri-checkbox-circle-line" style="' . ($row["opacity2"] == 0 ? 'opacity: 0.3' : 'opacity: 1') . '"></i> 1 Sweatshirt
              </li>
              <li class="pricing__item">
                <i class="ri-checkbox-circle-line" style="' . ($row["opacity3"] == 0 ? 'opacity: 0.3' : 'opacity: 1') . '"></i> 1
                Bottle of Protein
              </li>
              <li class="pricing__item">
                <i class="ri-checkbox-circle-line" style="' . ($row["opacity4"] == 0 ? 'opacity: 0.3' : 'opacity: 1') . '"></i>
                Access to Videos
              </li>
              <li class="pricing__item">
                <i class="ri-checkbox-circle-line" style="' . ($row["opacity5"] == 0 ? 'opacity: 0.3' : 'opacity: 1') . '"></i>
                Muscle Stretching
              </li>
            </ul>

            <a href="#" class="button button__flex pricing__button">
              Purchase now <i class="ri-arrow-right-line"></i>
            </a>
          </article>';
          }
          ?>
        </div>
      </div>
    </section>

    <!--==================== CALCULATE ====================-->
    <section class="calculate section">
      <div class="calculate__conrainer conatainer grid">
        <div class="calculate__content">
          <div class="section__titles">
            <h1 class="section__title-border">CALCULATE</h1>
            <h1 class="section__title">YOUR BMI</h1>
          </div>

          <p class="calculate__description">
            The body mass index (BMI) calculator calculates body mass index
            from your weight and height.
          </p>

          <div class="calculate__form" id="calculate-form">
            <div class="calculate__box">
              <input type="number" placeholder="Height" class="calculate__input" id="calculate-cm" />
              <label for="" class="calculate__label">cm</label>
            </div>

            <div class="calculate__box">
              <input type="number" placeholder="Weight" class="calculate__input" id="calculate-kg" />
              <label for="" class="calculate__label">kg</label>
            </div>

            <button onclick="calculateBmi()" class="button button__flex">
              calculate now <i class="ri-arrow-right-line"></i>
            </button>
          </div>

          <p class="calculate__message" id="calculate-message"></p>
        </div>

        <img src="assets/img/calculate-img.png" alt="calculate image" class="calculate__img" />
      </div>
    </section>
  </main>

  <!--==================== FOOTER ====================-->
  <footer class="footer section" id="footer">
    <div class="footer__container container grid">
      <div>
        <a href="#" class="footer__logo">
          <img src="assets/img/logo-nav.png" alt="" />BEROTOT
        </a>
        <p class="footer__description">
          Subscribe for company <br />
          updates below.
        </p>

        <form action="" class="footer__form" id="contact-form">
          <input type="email" name="user_email" placeholder="your email" class="footer__input" id="contact-user" />
          <button type="submit" class="button">Subscribe</button>
        </form>

        <p class="footer__message" id="contact-message"></p>
      </div>

      <div class="footer__content">
        <div>
          <h3 class="footer__title">SERVICES</h3>
          <ul class="footer__links">
            <li>
              <a href="#" class="footer__link">Flex Muscle</a>
            </li>
            <li>
              <a href="#" class="footer__link">Cardio Exercise</a>
            </li>
            <li>
              <a href="#" class="footer__link">Basic Yoga</a>
            </li>
            <li>
              <a href="#" class="footer__link">Weight Lifting</a>
            </li>
          </ul>
        </div>
      </div>

      <div>
        <h3 class="footer__title">PRICING</h3>
        <ul class="footer__links">
          <li>
            <a href="#" class="footer__link">Basic</a>
          </li>
          <li>
            <a href="#" class="footer__link">Premium</a>
          </li>
          <li>
            <a href="#" class="footer__link">Diamond</a>
          </li>
        </ul>
      </div>

      <div>
        <h3 class="footer__title">COMPANY</h3>
        <ul class="footer__links">
          <li>
            <a href="#" class="footer__link">About Us</a>
          </li>
          <li>
            <a href="#" class="footer__link">Careers</a>
          </li>
          <li>
            <a href="#" class="footer__link">Customers</a>
          </li>
          <li>
            <a href="#" class="footer__link">Partners</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="container">
      <div class="footer__group">
        <ul class="footer__social">
          <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
            <i class="ri-facebook-circle-fill"></i>
          </a>
          <a href="https://twitter.com/" target="_blank" class="footer__social-link">
            <i class="ri-twitter-fill"></i>
          </a>
          <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
            <i class="ri-instagram-line"></i>
          </a>
        </ul>

        <span class="footer__copy"> all rights reserved </span>
      </div>
    </div>
  </footer>

  <!--========== SCROLL UP ==========-->

  <a href="#" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-fill"></i>
  </a>
  <!--=============== SCROLLREVEAL ===============-->
  <script src="assets/js/scrollreveal.min.js"></script>

  <!--=============== EMAIL JS ===============-->

  <!--=============== MAIN JS ===============-->
  <script src="assets/js/main.js"></script>
</body>

</html>