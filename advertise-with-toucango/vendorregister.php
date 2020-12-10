<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Toucango - advertise with us</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
 <link href="css/style-signup.css" rel="stylesheet" />

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="/advertise-with-toucango/#page-top">
			<img src="assets/img/logos/logo.png" alt="" />
		</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/advertise-with-toucango/#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/advertise-with-toucango/#portfolio">Categories</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/advertise-with-toucango/#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/advertise-with-toucango/#team">Business</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/advertise-with-toucango/#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead head-master">
            <div class="container">
                <div class="masthead-subheading"></div>
                <div class="masthead-heading text-uppercase">Sign up to toucango</div>
            </div>
        </header>
        <section class="form-section-signup">
		<form id="regForm" action="vendorregister.php" class="form-box" method="post">
    <div class="tab">
        <h1 class="section-header">Business Type:</h1>
        <div class="form-check mt-2">
            <label class="form-check-label">
              <input required type="radio" class="w-auto form-check-input" value="experience_operator" name="business_type" checked required>Experience operator
            </label>
        </div>
        <div class="form-check mt-2">
            <label class="form-check-label">
                <input required type="radio" class="w-auto form-check-input" value="service_provider" name="business_type" required>Service provider
            </label>
        </div>
        <div class="form-check mt-2">
            <label class="form-check-label">
                <input required type="radio" class="w-auto form-check-input" value="product__gift" name="business_type" required>Products and gift merchant
            </label>
        </div>
    </div>
  <div class="tab">
    <h1 class="section-header">Contact Info:</h1>
    <p class="next-sec"><strong>First name</strong></p>
    <p><input required placeholder="First name" oninput="this.className = ''" name="fname"></p>
    <p class="next-sec"><strong>Last name</strong></p>
    <p><input required placeholder="Last name" oninput="this.className = ''" name="lname"></p>
    <p class="next-sec"><strong>Job Title</strong></p>
    <p><input required placeholder="Job Title" oninput="this.className = ''" name="jtitle"></p>
    <p class="next-sec"><strong>E-mail</strong></p>
    <p><input required placeholder="E-mail" oninput="this.className = ''" name="email"></p>
    <p class="next-sec"><strong>Phone</strong></p>
    <p><input required placeholder="Phone" oninput="this.className = ''" name="phone"></p>
    <p class="next-sec"><strong>City</strong></p>
    <p><input required placeholder="City" oninput="this.className = ''" name="city"></p>
  </div>
  <div class="tab">
    <h1 class="section-header">Business Info:</h1>
    <p class="next-sec"><strong>Trading Name</strong></p>
    <p><input placeholder="Trading Name" oninput="this.className = ''" name="trading_name"></p>
    <p class="next-sec"><strong>Registered Business Name</strong></p>
    <p><input placeholder="Registered Business Name" oninput="this.className = ''" name="registered_business_name"></p>
    <p class="next-sec"><strong>ABN/ACN</strong></p>
    <p><input placeholder="ABN/ACN" oninput="this.className = ''" name="abn_acn"></p>
    <p class="next-sec"><strong>Business Address</strong></p>
    <p><input placeholder="Business Address" oninput="this.className = ''" name="business_address"></p>
    <p class="next-sec"><strong>State</strong></p>
    <p><input placeholder="State" oninput="this.className = ''" name="state"></p>
    <p class="next-sec"><strong>Zip/ Postal Code</strong></p>
    <p><input placeholder="Zip/ Postal Code" oninput="this.className = ''" name="zip_postal_code"></p>
    <p>My business is registered for GST purposes</p>
    <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="w-auto form-check-input" value="true" name="gst_registered">Yes
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="w-auto form-check-input" value="false" name="gst_registered" checked>No
        </label>
    </div>
    <p>Are you compliant with all state and local statutory regulations to operate</p>
    <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="w-auto form-check-input" value="true" name="compliant">Yes
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="w-auto form-check-input" value="false" name="compliant" checked>No
        </label>
    </div>
    <p class="next-sec"><strong>Policy Number</strong></p>
    <p><input placeholder="Policy Number" oninput="this.className = ''" name="policy_number"></p>
    <p class="next-sec"><strong>Insured Amount</strong></p>
    <p><input placeholder="Insured Amount" oninput="this.className = ''" name="insured_amount"></p>
    <p class="next-sec"><strong>Policy Expiry Date</strong></p>
    <p><input placeholder="Policy Expiry Date" oninput="this.className = ''" name="policy_expiry_date"></p>
    <p>Please Upload Certificate of policy</p>
    <p><input type="file" oninput="this.className = ''" name="certificate_file"></p>
  </div>
  <div class="tab">
    <h1 class="section-header">Product Information</h1>
    <p class="next-sec"><strong>Website</strong></p>
    <p><input placeholder="Website" oninput="this.className = ''" name="website"></p>
    <p>
        <p class="next-sec"><strong>Product Category</strong></p>
        <select placeholder="-- select an item --" oninput="this.className = ''" name="product_category">
            <option value="">--select an item--</option>
            <option value="Wine and Dine">Wine and Dine</option>
            <option value="Cruises">Cruises</option>
            <option value="Flying Experiences">Flying Experiences</option>
            <option value="Driving Experiences">Driving Experiences</option>
            <option value="Health and Wellness">Health and Wellness</option>
            <option value="Learning Experiences">Learning Experiences</option>
            <option value="Getaways">Getaways</option>
            <option value="Entertainment and Culture">Entertainment and Culture</option>
            <option value="Adventure/Sports">Adventure/Sports</option>
            <option value="Water Sports">Water Sports</option>
            <option value="Outdoor Activities">Outdoor Activities</option>
            <option value="Animal Experiences">Animal Experiences</option>
            <option value="Gift Products">Gift Products</option>
        </select>
    </p>
    <p>
        <p class="next-sec"><strong>Product Location</strong></p>
        <select placeholder="-- select an item --" oninput="this.className = ''" name="product_location">
            <option value="">--select an item--</option>
            <option value="Melbourne">Melbourne</option>
            <option value="Victoria">Victoria</option>
            <option value="Yarra Valley">Yarra Valley</option>
            <option value="Dandenong">Dandenong</option>
            <option value="Daylesford and Macedon Ranges">Daylesford and Macedon Ranges</option>
            <option value="Gippsland">Gippsland</option>
            <option value="Mornington Peninsula">Mornington Peninsula</option>
            <option value="Phillip Island">Phillip Island</option>
            <option value="Great Ocean Road">Great Ocean Road</option>
            <option value="The Murray">The Murray</option>
            <option value="Geelong and the Bellarine">Geelong and the Bellarine</option>
            <option value="Goldfields">Goldfields</option>
            <option value="Grampians">Grampians</option>
            <option value="Gold Coast">Gold Coast</option>
            <option value="Brisbane">Brisbane</option>
            <option value="Sunshine Coast">Sunshine Coast</option>
            <option value="Whitsundays">Whitsundays</option>
            <option value="Queensland">Queensland</option>
            <option value="Coral Coast">Coral Coast</option>
            <option value="Perth">Perth</option>
            <option value="Adelaide">Adelaide</option>
            <option value="Sydney">Sydney</option>
            <option value="Canberra">Canberra</option>
            <option value="Darwin">Darwin</option>
            <option value="Hobart">Hobart</option>
            <option value="Barossa">Barossa</option>
            <option value="Murray River">Murray River</option>
            <option value="Flinders Island">Flinders Island</option>
            <option value="King Island">King Island</option>
            <option value="Other">Other</option>
            <option value="Nationwide">Nationwide</option>
        </select>
    </p>
    <p>
        <p class="next-sec"><strong>Exclusitivity</strong></p>
        <select placeholder="Exclusitivity" oninput="this.className = ''" name="exclusitivity">
            <option value="">--select an item--</option>
            <option value="I am listing one or more experiences exclusive to Toucango BUT I work with other booking agents ">I am listing one or more experiences exclusive to Toucango BUT I work with other booking agents </option>
            <option value="I want to work with Toucango but not on an exclusive basis ">I want to work with Toucango but not on an exclusive basis </option>
            <option value="I want to work exclusively with Toucango and do not work with any other agents">I want to work exclusively with Toucango and do not work with any other agents</option>
        </select>
    </p>
    <p class="next-sec"><strong>Additional Information</strong></p>
    <p class="next-sec"><strong>Tell us about the experience you would like to list with the Toucango. Please include the name, price and a short descriptio</strong></p>
    <p><input placeholder="Additional Information" oninput="this.className = ''" name="additional_information"></p>
    <p class="next-sec"><strong>What Live Booking System are you currently using?</strong></p>
    <select>
        <option value="" selected="selected">--select an item--</option>
        <option value="Bookeo">Bookeo </option>
        <option value="Booking Boss">Booking Boss </option>
        <option value="Respax">Respax </option>
        <option value="Rezdy">Rezdy </option>
        <option value="Fareharbour">Fareharbour </option>
        <option value="RTBS">RTBS </option>
        <option value="Netbookings">Netbookings </option>
        <option value="Takeflite">Takeflite </option>
        <option value="Checkfront">Checkfront </option>
        <option value="Rezgo">Rezgo </option>
        <option value="Other">Other </option>
        <option value="None">None </option>
    </select>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
        </section>
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © 2020 ToucanGo , Inc. All Rights Reserved. TOUCANGO is a registered trademark of ToucanGo, Inc</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="https://www.toucango.com.au/privacy-policy">Privacy Policy</a>
                        <a href="https://www.toucango.com.au/terms-and-conditions">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
	<script src="js/script-signup.js"></script>

    </body>
</html>
<?php

    function display()
    {
        // echo "hello ".$_POST["studentname"];
        $business_type = $_POST["business_type"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $jtitle = $_POST["jtitle"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $city = $_POST["city"];
        $trading_name = $_POST["trading_name"];
        $registered_business_name = $_POST["registered_business_name"];
        $abn_acn = $_POST["abn_acn"];
        $business_address = $_POST["business_address"];
        $state = $_POST["state"];
        $zip_postal_code = $_POST["zip_postal_code"];
        $compliant = $_POST["compliant"];
        $gst_registered = $_POST["gst_registered"];
        $policy_number = $_POST["policy_number"];
        $insured_amount = $_POST["insured_amount"];
        $policy_expiry_date = $_POST["policy_expiry_date"];
        $certificate_file = $_POST["certificate_file"];
        $website = $_POST["website"];
        $product_category = $_POST["product_category"];
        $product_location = $_POST["product_location"];
        $exclusitivity = $_POST["exclusitivity"];
        $additional_information = $_POST["additional_information"];
        
        $filename = "newfile.txt";
        $current = file_get_contents($filename);
        $current .= "\n" . "\n" . "NEW REGISTRATION" .
        "@@@@@" .
        ", business_type :" . $business_type . "\n" . 
        ", fname :" . $fname . "\n" . 
        ", lname :" . $lname . "\n" . 
        ", jtitle :" . $jtitle . "\n" . 
        ", email :" . $email . "\n" . 
        ", phone :" . $phone . "\n" . 
        ", city :" . $city . "\n" . 
        ", trading_name :" . $trading_name . "\n" . 
        ", registered_business_name :" . $registered_business_name . "\n" . 
        ", abn_acn :" . $abn_acn . "\n" . 
        ", business_address :" . $business_address . "\n" . 
        ", state :" . $state . "\n" . 
        ", zip_postal_code :" . $zip_postal_code . "\n" . 
        ", compliant :" . $compliant . "\n" . 
        ", gst_registered :" . $gst_registered . "\n" . 
        ", policy_number :" . $policy_number . "\n" . 
        ", insured_amount :" . $insured_amount . "\n" . 
        ", policy_expiry_date :" . $policy_expiry_date . "\n" . 
        ", certificate_file :" . $certificate_file . "\n" . 
        ", website :" . $website . "\n" . 
        ", product_category :" . $product_category . "\n" . 
        ", product_location :" . $product_location . "\n" . 
        ", exclusitivity :" . $exclusitivity . "\n" . 
        ", additional_information :" . $additional_information . "\n";

        // $myfile = fopen("./newfile.txt", "w") or die("Unable to open file!");
        // $txt = "asd";
        file_put_contents($filename, $current);
    }
    if(isset($_POST['submit']))
    {
        echo("submit");
        var_dump($_POST);
        display();
    } 

?>

 
