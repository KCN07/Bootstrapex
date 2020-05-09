<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  .affix {
      top: 0;
      width: 100%;
      z-index: 9999 !important;
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }
  .navbar { border-radius: 0px; }
  </style>
</head>
<body>

<div class="container-fluid" style="background-color:#F44336;color:#fff;height:200px;">
  <h1>Bootstrap Affix Example</h1>
  <h3>Fixed/Sticky Navbar on Scroll</h3>
  <p>Scroll this page to see how the navbar behaves with data-spy="affix".</p>
  <p>The navbar is attached to the top of the page after you have scrolled a specified amount of pixels.</p>
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="200">
  <ul class="nav navbar-nav">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Service</a></li>
    <li><a href="#">Products</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>

<div class="container-fluid" style="height:1000px">
  <h1>Some text to enable scrolling. Some text to enable scrolling. Some text to enable scrolling. </h1>
  <h1>Some text to enable scrolling. Some text to enable scrolling. Some text to enable scrolling. </h1>
  <h1>Some text to enable scrolling. Some text to enable scrolling. Some text to enable scrolling. </h1>
  <h1>Some text to enable scrolling. Some text to enable scrolling. Some text to enable scrolling. </h1>
  <h1>Some text to enable scrolling. Some text to enable scrolling. Some text to enable scrolling. </h1>
  <h1>Some text to enable scrolling. Some text to enable scrolling. Some text to enable scrolling. </h1>
  <h1>Some text to enable scrolling. Some text to enable scrolling. Some text to enable scrolling. </h1>
  <h1>Some text to enable scrolling. Some text to enable scrolling. Some text to enable scrolling. </h1>
  <h1>Some text to enable scrolling. Some text to enable scrolling. Some text to enable scrolling. </h1>
  <h1>Some text to enable scrolling. Some text to enable scrolling. Some text to enable scrolling. </h1>
  <h1>Some text to enable scrolling. Some text to enable scrolling. Some text to enable scrolling. </h1>
  <h1>Some text to enable scrolling. Some text to enable scrolling. Some text to enable scrolling. </h1>
  <h1>Some text to enable scrolling. Some text to enable scrolling. Some text to enable scrolling. </h1>
  <h1>Some text to enable scrolling. Some text to enable scrolling. Some text to enable scrolling. </h1>
  <h1>Some text to enable scrolling. Some text to enable scrolling. Some text to enable scrolling. </h1>
  <h1>Some text to enable scrolling. Some text to enable scrolling. Some text to enable scrolling. </h1>
  <h1>Some text to enable scrolling. Some text to enable scrolling. Some text to enable scrolling. </h1>
</div>

</body>
</html>
