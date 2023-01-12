<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>AJ. THRIFT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h3 {
    font-size: 24px;
    text-transform: uppercase;
    color: #da0037;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .btn-danger {
    background-color: #000000;
    border-color: #FFFFFF;
  }
  .jumbotron {
    background-image: url('image/shoes.png');
    background-repeat: no-repeat;
    background-size: 96%;
    background-color: #FFFFFF;
    background-position: top center;
    margin-bottom: 0px;
    width: 1519px;
    height: 220px;
    color: #fff;
    padding: 185px 100px;
    font-family: Montserrat, sans-serif;
  }
  .bg-red {
    background-color: #DB252B;
  }
  .bg-black {
    background-color: #171717;
  }
  .col-sm-6 {
    position: center;
  }
  .search {
    background-color: #171717;
    color: #171717;
    position: center;
    padding: 75px 192px 25px 192px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 0px 50px;
    margin-bottom: 0px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .col-sm-1 {
    width: 206px;
  }
  .col-sm-6 {
    position: center;
  }
  .thumbnail {
    letter-spacing: 1px;
    font-size: 12px;
    position: center;
    padding: 0 0 75px 0;
    border: 5;
    border-radius: 0;
  }
  .thumbnail img {
    width: 90%;
    height: 100%;
    margin-bottom: 20px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #DB252B;
  }
  .carousel-indicators li {
    border-color: #DB252B;
  }
  .carousel-indicators li.active {
    background-color: #DB252B;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #DB252B; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #DB252B;
    background-color: #fff !important;
    color: #DB252B;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #DB252B !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #DB252B;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #444444;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    font-weight: bold;
    line-height: 1.42857143 !important;
    letter-spacing: 3px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar {
    color: #FFFFFF !important;
  }
  .navbar-brand {
    background-image: url('image/aje.png');
    background-position: center;
    background-size: 50px;
    background-repeat: no-repeat;
    width: 80px;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #000000 !important;
    background-color: #EDEDED== !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #EDEDED !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin: 30px;
    color: #171717;
  }
  .slideanim {
    visibility:hidden;
    margin-bottom: 50px;
}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  .cekot {
    margin: 0px 624.7px 0px 0px; 
    width: 810px; 
    height: 109px;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href=""></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="menu.php">SHOES</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <?php
            if(!isset($_SESSION["user"]))
                echo '<li><a href="login.php">LOGIN</a></li>';
        ?>
        <?php
            if(isset($_SESSION["user"]))
                echo '<li><a href="logout.php">LOGOUT</a></li>';
        ?>
      </ul>
    </div>
  </div>
</nav>

<div class="search">
<form>
    <div class="input-group">
      <input type="cari" class="form-control" size="50" placeholder="Cari Sepatu" required>
      <div class="input-group-btn">
        <button onclick="window.location.href='menu.php'" type="button" class="btn btn-danger">CARI</button>
      </div>
    </div>
  </form>
</div>

<div class="jumbotron text-center">
  <h1></h1> 
  <p></p> 
</div>