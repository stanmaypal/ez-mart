<!-- Footer -->
<?php
// Start session

// Check if 'account' key is set in $_SESSION
if(isset($_SESSION['account'])) {
    $username = $_SESSION['account'];
} else {
    $username = "Guest"; // Default value if 'account' is not set
}
?>

<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Welcome to ez-Mart: <?php echo $username; ?></span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-facebook-f">Facebook</i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-twitter">Twitter</i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-google">Google</i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-instagram">Instagram</i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-linkedin">Linkedin</i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fa fa-github">GutHub</i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>ez-Mart
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Computer</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Glossary</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Gifts</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Card</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fa fa-home me-3"></i> Civil Lines Golggar Gorakhpur</p>
          <p>
            <i class="fa fa-envelope me-3"></i>
            easyMart@example.com
          </p>
          <p><i class="fa fa-phone me-3"></i> +91 98765 54321</p>
          <p><i class="fa fa-print me-3"></i> +91 97865 12345</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © <?php echo date("Y");?> Copyright:
    <a class="text-reset fw-bold" href="https://sarvesh.epizy.com/">sarveshpal.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->