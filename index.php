<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php require "common_files/links.php"; ?>

    <link rel="Stylesheet" href="assets/css/index.css">

    <script src = https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js></script>
    <script src = "assets/js/counter.js"></script>

    <title>Home Page</title>
  </head>
  <body>
    
    <?php require "common_files/header.php"; ?>

  <!-- Main Banner Section -->
  <section id="banner" class="d-flex align-items-center">
    <div class="container position-relative">
      <h1>Welcome To SparkNGO!</h1>
      <h2>We are a group of individuals who believe in empowering the weaker sections of the society.</h2>
      <h2>Donations, Small or Big are still valuable. You can change the tomorrow of someone less fortunate.</h2>
      <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_GdmClqicJXOpOI" async> </script> </form>
    </div>
  </section>
  
  <div class="container">
    <!-- About Section -->
    <section id="about" class="about mt-5">
      <div class="container">

        <div class="section-title mb-5">
          <h2>About</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              We are a Non-Profit Organization Established in 2009. 
              Initially, we were just a small team, but over the years, the support and manpower for SparkNGO has been ever increasing and we are extremely thankful for that.
              <br> 
              <br>
              We believe in helping all the backward and economically weaker sections of the society, by providing them with the basic amenities of proper food and education.
            </p>
            <br>

          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              We aim at Helping People On a Mass scale. A Lot of Corporates have been helping us in raising funds and you too can be a part of it.
              <br>
              <br>
              If you want to know more about our initiatives, the programs we conduct or any other general information, you can follow the link below to contact us.
            </p>
            <a href="contact.php" class="btn-learn-more">Contact Us</a>
          </div>
        </div>
      </div>
      </section>
    </div>     <!-- 'container' ends here -->
    
    <!-- Counter Section -->
    <section id="counter" class="counter">
        <div class="container">
            <div class="row">
                <div class="col-md-3 title">
                    <div class="single_counter"><i class="far fa-smile fa-2x"></i>
                        <h2 class="statistic-counter mt-2">400</h2>
                        <p>Students Helped</p>
                    </div>
                </div>
                <div class="col-md-3 title">
                    <div class="single_counter"> <i class="fa fa-stethoscope fa-2x"></i>
                        <h2 class="statistic-counter mt-2">23</h2>
                        <p>Medical Camps Conducted</p>
                    </div>
                </div>
                <div class="col-md-3 title">
                    <div class="single_counter"> <i class="fas fa-book-reader fa-2x"></i>
                        <h2 class="statistic-counter mt-2">55</h2> <span></span>
                        <p>Education Initiatives Undertaken</p>
                    </div>
                </div>
                <div class="col-md-3 title">
                    <div class="single_counter"> <i class="fa fa-user fa-2x"></i>
                        <h2 class="statistic-counter mt-2">350</h2>
                        <p>Volunteers associated with us</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="faq p-5">
      <div class="container">

        <div class="section-title mb-5">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="row faq-item pb-3">
          <div class="col-lg-5">
            <p><i class="far fa-question-circle"></i> &nbsp; Is the Online Payment Procedure Safe?</p>
          </div>
          <div class="col-lg-7">
            <p>Yes, the Donation Procedure is extremely safe as it is secured by RazorPay.</p>
          </div>
        </div>

        <div class="row faq-item">
          <div class="col-lg-5">
            <p><i class="far fa-question-circle"></i> &nbsp; Who are all the target beneficiaries?</p>
          </div>
          <div class="col-lg-7">
            <p>Children, their families and communities would be the main beneficiaries with the children at the centre stage.</p>
          </div>
        </div>

        <div class="row faq-item">
          <div class="col-lg-5">
            <p><i class="far fa-question-circle"></i></i>  &nbsp; Does SparkNGO have any Merch?</p>
          </div>
          <div class="col-lg-7">
            <p>Currently, we dont have any merch as such, but we may roll out our merch very soon. Stay Tuned :)</p>
          </div>
        </div>

       </div>
    </section>

    <?php require 'common_files/footer.php' ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>