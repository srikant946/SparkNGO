<?php require "common_files/_dbconnect.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php require "common_files/links.php"; ?>
   
    <link rel="Stylesheet" href="assets/css/contact.css">

    <title>Contact Page</title>
  </head>

  <body>
    
    <?php require "common_files/header.php"; ?>

    <section id="sect">
    <div>
        <p class="text-center text-uppercase">Get In Touch</p>
        <h5 class="text-center">Want to get in Touch? Drop us a Message Below!</h5>
    </div>
    </section>

    <?php
    // Sweetalert CDN
    echo '<script type = "text/JavaScript" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';

    // Data insertion into our Database from the credentials entered in the Contact Form
    $dataInsert = false;
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $desc = $_POST['desc'];
        $sql = "INSERT INTO `contact_tbl` (`name`, `email`, `contact_no`, `query`) VALUES ('$name', '$email', '$contact', '$desc')";
        $result = $conn->query($sql);
        $dataInsert = true;
        if($dataInsert)
        {
            echo '<script>
                    swal("Your Query Has been Sent Successfully!!", "", "success");
                    </script>' ;
        }
        else
        {
            echo '<script>
                    swal("Oops!!", "Something Went Wrong", "error");
                    </script>' ;
        }
    }
    ?>

    <section class="first pt-1 mb-5">
        <h2 class="text-center mt-3 mb-4">Direct Contact</h2>
        <div class="container pt-2">
            <div class="row mb-5">
                <!-- 4 Column Space Assigned For One Part of Data -->
                <div class="col-lg-4 address-grid-w3l">
                    <div class="row address-info">
                    <!-- 3 Column Space for Inserting Font Awesome Icon -->
                    <div class="col-3 address-left text-center">
                        <i class="far fa-map fa-2x"></i>
                    </div>
                    <!-- 9 Column Space For Text beside the Icon -->
                    <div class="col-9 address-right text-left">
                        <h6 class="ad-info text-uppercase mb-2">Address</h6>
                        <p>Churchgate, Mumbai</p>
                    </div>
                    </div>
                </div>
                <!-- 4 Column Space Assigned For One Part of Data -->
                <div class="col-lg-4 address-grid-w3l">
                    <div class="row address-info">
                    <div class="col-3 address-left text-center">
                        <!-- 3 Column Space for Inserting Font Awesome Icon -->
                        <i class="far fa-envelope fa-2x"></i>
                    </div>
                    <!-- 9 Column Space For Text beside the Icon -->
                    <div class="col-9 address-right text-left">
                        <h6 class="ad-info text-uppercase mb-2">Email</h6>
                        <p> info@sparkngo.com </p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 address-grid-w3l">
                    <div class="row address-info">
                    <div class="col-3 address-left text-center">
                        <!-- 3 Column Space for Inserting Font Awesome Icon -->
                        <i class="fas fa-mobile-alt fa-2x"></i>
                    </div>
                    <!-- 9 Column Space For Text beside the Icon -->
                    <div class="col-9 address-right text-left">
                        <h6 class="ad-info text-uppercase mb-2">Phone</h6>
                        <p>+91 00000 00000</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <!-- Encapsulating the Container within a Section -->
      <div class="container mb-5">
        <div class="row">
            <div class="col-md-6">
                <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Churchgate,%20Mumbai+(SparkNGO)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>            
            </div>

          <div class="col-md-5 offset-md-1 text-center" id="ctc">                  <!-- For acquiring Half of the Page -->
            <div class="contact-text">
              <!-- Address Book Icon -->
              <i class="far fa-address-book fa-2x" aria-hidden="true"></i>
              <h3>Contact Us</h3>
              <!-- Method is 'post' and 'action' Specified would be Verified In the Backend Via Mongoose -->
              <form method="post">
                
              <!-- Contact Form -->
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" required="True" placeholder="Enter Your Name Here" />
                </div>

                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email" class="form-control" id="email" name="email" required="True" aria-describedby="email-subtext" placeholder="Enter your Email Here"/>
                  <small id="email-subtext" class="form-text"><strong>Email Won't be Shared with Anyone Else!!</strong></small>
                </div>

                <div class="form-group">
                    <label for="phone">Contact Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required="True" placeholder="Enter your Contact Number Here"/>
                </div>

                <div class="form-group">
                  <label for="desc">How May We Help You?</label>
                  <textarea class="form-control t-area" id="desc" name="desc" rows="5" placeholder="Please Enter your Doubts/Queries here" required="True"></textarea>
                </div>

                <hr>

                <!-- Button -->
                <button type="submit" name="submit" class="btn btn-warning">Submit</button>
              </form>
            </div>                  <!-- 'contact-text' end -->
          </div>
        </div>
      </div>
    </section>

    <?php require 'common_files/footer.php' ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>