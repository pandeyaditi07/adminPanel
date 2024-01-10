<?php
$Dir = "";
include $Dir . "config.php";  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>

  <?php include $Dir . "assets/headerfiles.php"; ?>
</head>

<body>

  <?php

  include $Dir . "include/extra/Header.php";
  include $Dir . "include/extra/Sidebar.php";
  ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">


      <div class="row p-5">

        <div class="col-md-3 ">
          <div class="card p-4" style="background-color: rgb(23,162,184);">
            <div class="card-body">
              <h6>Total Project</h6>
            </div>
          </div>

        </div>
        <div class="col-md-3">
          <div class="card p-4" style="background-color: rgb(214,240,255);">
            <div class="card-body">
              <h6>Total Services</h6>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-4" style="background-color: rgb(40,167,69);">
            <div class="card-body">
              <h6>Total Enquiries</h6>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-4" style="background-color: rgb(220,53,69);">
            <div class="card-body">
              <h6>Total Slider</h6>
            </div>
          </div>
        </div>
        <div class="col-md-3 mt-3">
          <div class="card p-4" style="background-color: rgb(23,162,184);">
            <div class="card-body">
              <h6>Total Social Links</h6>
            </div>
          </div>
        </div>

      </div>

      <?php include $Dir . "assets/FooterFiles.php"; ?>
</body>

</html>