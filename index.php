<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


  <!-- Cover -->
  <main>
    <div class="hero">
      <a href="shop.php" class="btn1">View all services
</a>
    </div>
    <!-- Main -->
    <div class="wrapper">
            <h1>Featured Vendors<h1>
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">


          <div class="footer-nav__col footer-nav__col--contacts">
            <div class="footer-nav__heading">Contact details</div>
            <address class="address">
            Kompleks PT. Semen Indonesia (Persero) Tbk, Jl. Veteran,<br>
            Kb. Dalem, Sidomoro, Kebomas, Gresik Regency, East Java 61122
          </address>
            <div class="phone">
              Telephone:
              <a class="phone__number" href="tel:081231660928">0812-3166-0928</a>
            </div>
            <div class="email">
					Instagram:
					<a href="weddingwishes.indonesia@gmail.com" class="email__addr">@weddingwishes.indonesia</a>
				</div>
            <div class="email">
              Email:
              <a href="weddingwishes.indonesia@gmail.com" class="email__addr">weddingwishes.indonesia@gmail.com</a>
            </div>
          </div>

        </div>
      </div>

      <div class="page-footer__subline">
        <div class="container clearfix">

          <div class="copyright">
            &copy; <?php echo date("Y");?> Wedding Wishes&trade;
          </div>
        </div>
      </div>
    </footer>
</body>

</html>
