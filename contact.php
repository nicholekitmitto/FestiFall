<?php
require_once( './dbconnect.php');
$db = connectToDatabase();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>FestiFall</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="css/normalize.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

  <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
  <?php var_dump($_POST);?>
  <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

  <div class="header-container">
    <header class="wrapper clearfix">
      <h1 class="title"><a href="index.html">FestiFall</a></h1>
      <nav>
        <ul>
          <li><a href="index.html">Home</a>
          </li>
          <li><a href="lineup.html">The Line-up</a>
          </li>
          <li><a href="info.html">Info</a>
          </li>
          <li><a href="news.html">News</a>
          </li>
          <li><a href="gallery.html">Gallery</a>
          </li>
          <li><a href="tickets.html">Tickets</a>
          </li>
          <li class="current"><a href="contact.php">Contact Us</a>
          </li>
        </ul>
      </nav>
    </header>
  </div>

  <div class="main-container">
    <div class="main wrapper clearfix">
      <article>
        <header>
          <?php

          ?>
          <form id="contact_form" method="POST">
            <p>Thank you for you interest in FestiFall Music Festival! Please fill out the form and an event organiser will be in touch with you shortly.</p>
            <p>Fields marked with * are required.</p>
            <div>
              <div>
                <label for="name">Name*</label>
                <span id="name_error" class="error"></span>
                <div class="clearfix"></div>
                <input type="text" class="form-control" name="name" value="" id="name">
              </div>
            </div>
            <div>
              <div>
                <label for="email">Email*</label>
                <span id="email_error" class="error"></span>
                <div class="clearfix"></div>
                <input type="text" class="form-control" name="email" value="" id="email">
              </div>
            </div>
            <div>
              <div>
                <label for="topic">Topic*</label>
                <span id="topic_error" class="error"></span>
                <div class="clearfix"></div>
                <select id="topic" class="col-md-12" name="general_topic">
                  <option>Change Shipping Address</option>
                  <option>Payment Issue</option>
                  <option>General Festival Question</option>
                  <option>Talent, Vendor, or Sponsorship Inquiry</option>
                  <option>Festival Ticket or Upgrade</option>
                  <option>Other</option>
                </select>
              </div>
            </div>
            <div>
              <div>
                <label for="question">Message</label>
                <span id="question_error" class="error"></span>
                <div class="clearfix"></div>
                <textarea name="question" class="form-control" rows="6"></textarea>
              </div>
            </div>
            <br/>
            <button type="submit" class="submit">Submit</button>
          </form>
        </header>


    </div>
    <!-- #main -->
  </div>
  <!-- #main-container -->

  <div class="footer-container">
    <footer class="wrapper">
      <h3>footer</h3>
    </footer>
  </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')
  </script>

  <script src="js/main.js"></script>

  <script>
    var _gaq = [
      ['_setAccount', 'UA-XXXXX-X'],
      ['_trackPageview']
    ];
    (function(d, t) {
      var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
      g.src = '//www.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g, s)
    }(document, 'script'));
  </script>
</body>

</html>
