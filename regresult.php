<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>УІЕСР - Події - Реєстрація</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/favicon.ico" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- ======= Header ======= -->
  <?php include("include/header2.php"); ?>

  <main id="main" class="main-page">
    <!-- ======= Speaker Details Sectionn ======= -->
    <section id="speakers-details">
      <div class="container">
        <div class="section-header">
          <h2>Результати реєстрації</h2>
        </div>

        <?php
          if (isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["email"])) {
            include("forms/appsettings.php");
            // include("forms/appsettings-development.php");
            $fname = htmlentities($_POST["fname"]);
            $lname = htmlentities($_POST["lname"]);
            $subject = htmlentities($_POST["subject"]);
            $email = htmlentities($_POST["email"]);
            $customer = htmlentities($_POST["customer"]);
            $message = htmlentities($_POST["message"]);
            $sql = "INSERT INTO events_registration (lname, fname, subject, email, customer, message) 
            VALUES ('$fname', '$lname', '$subject', '$email', '$customer', '$message');";
            // $sql = "INSERT INTO registration (lname, fname, subject, email, customer, message) 
            // VALUES ('$fname', '$lname', '$subject', '$email', '$customer', '$message');";
            $conn->exec($sql);
            echo "<div class=\"alert alert-success\">$fname $lname, дякуємо за реєстацію!</div>";
          }
          else {
            echo "<div class=\"alert alert-danger\">Введено некоректні дані!</div>";
          }
        ?>

        <div class="row">
          <div class="col-md-6">
            <img src="assets/img/logo2.jpg" alt="Logo" class="img-fluid">
          </div>
          <div class="col-md-6">
            <div class="details">
              <h2>Про подію</h2>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
              <p>Науково-практична конференція «Шляхи підвищення ефективності науково-технічної експертизи сортів рослин». Проведення: дистанційно в режимі онлайн. Організатори: Міністерство аграрної політики та продовольства України, Український інститут експертизи сортів рослин.</p>
              <a href="index.php" class="about-btn scrollto"><b>Повернутися на головну</b></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- ======= Footer ======= -->
  <?php include("include/footer.php"); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- <script src="assets/vendor/php-form/validate.js"></script> -->
  <script src="assets/js/main.js"></script>
</body>

</html>
