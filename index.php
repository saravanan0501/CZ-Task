
<!DOCTYPE html>
<html class="is-smooth-scroll-compatible is-loading" lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TEST</title>
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.css"> -->

    <link rel="stylesheet" type="text/css" href="assets/css/base.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/app.css" />

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

</head>
<body>

<header class="header ease4">
    <div class="container">
        <div class="heade-widget">
<nav>
  <div class="logo">
    <img src="assets/img/logo.png">
  </div>

  <div class="navbar">
    <ul class="nav-menu">
      <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link">About</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
    </ul>
  </div>

  <div class="hamburger">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
  </div>
</nav>

        </div>
    </div>
</header>

<article class="banner_widget">
    <div class="banner">
        <img src="assets/img/banner.jpg">
    </div>
    <div class="banner-caption">
        <div class="container">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
        </div>
    </div>
</article>
<main id="main-widget">
    <div class="service-widget">
        <div class="container">
            <h2 class="title">SERVICES</h2>
            <div class="service-list">
                <div class="item ease4 radius-6">
                    <i class="_icon icon-Shakehand"></i>
                    <h3>BUSINESS SETUP</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's</p>
                    <a class="more ease4 radius-6" href="#">LEARN MORE</a>
                </div>
                <div class="item ease4 radius-6">
                    <i class="_icon icon-Cash"></i>
                    <h3>BANKING</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's</p>
                    <a class="more ease4 radius-6" href="#">LEARN MORE</a>
                </div>
                <div class="item ease4 radius-6">
                    <i class="_icon icon-News"></i>
                    <h3>INSURANCE</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's</p>
                    <a class="more ease4 radius-6" href="#">LEARN MORE</a>
                </div>
            </div>
        </div>
    </div>

 <div class="contact-form">
     <div class="container">
        <aside class="left-img">
             <figure class="form-img">
                 <img src="assets/img/form-img.jpg">
             </figure>
         </aside>
         <aside class="form-area">
            <form action="#" method="post" class="contact-form">
              <h2 class="title">Contact us</h2>
              <div class="item">
                <label>Full Name</label>
                <input type="text" class="form-control ease4  form-input" id="name" placeholder="Name" required>
              </div>
              <div class="item">
                <label>Mobile</label>
                <input type="text" class="form-control ease4 form-input" id="phone" placeholder="Phone" required>
              </div>
              <div class="item">
                <label>Email</label>
                <input type="email" class="form-control ease4 form-input" placeholder="Email" required>
              </div>
              <div class="submit-button-wrapper">
                <input class="ease4 radius-6" type="submit" name="submit" value="Send">
              </div>
            </form>
         </aside>
     </div>
 </div>
  
</main>

<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript">
    
</script>


</body>
</html>

<?php

 if(isset($_POST['submit'])){
    $curl = curl_init();
    $name = $_POST['name']; 
    $mobile = $_POST['mobile']; 
    $email = $_POST['email']; 
    
    echo $email;exit;
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.sendgrid.com/v3/mail/send",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "{\n  \"personalizations\": [\n    {\n      \"to\": [\n        {\n          \"Email\": \"saravananitbtech@gmail.com\"\n        }\n      ],\n      \"Mobile\": \"New Contact\"\n    }\n  ],\n  \"from\": {\n    \"email\": \"$email\"\n  },\n  \"content\": [\n    {\n      \"type\": \"text/html\",\n      \"value\": \"$name<br>$mobile<br>$email\"\n    }\n  ]\n}",
      CURLOPT_HTTPHEADER => array(
        "authorization: Bearer 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",
        "cache-control: no-cache",
        "content-type: application/json"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    //header('Location: index.php');
    
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }
}

?>

