
<div class="main_container">
    <section class="first_page_scroll">
    <header>
        <?php require 'views/includes/header.php';?>
    </header>
        <div id="first_line_page">
        <section class="dashboard-container">
  <div class="main-nav">
    <div class="logo">
      <p>BB</p>
    </div>
  </div>
  <div class="dashboard-sidebar">
    <div class="btn dashboard-btn active">
      <a href="">
        <!-- <img src="./favicon-32x32.png" alt="" /> -->
        <span class="material-symbols-outlined"> dashboard </span>
      </a>
    </div>
    <div class="btn">
      <a href="#">
        <span class="material-symbols-outlined"> monitoring </span>
      </a>
    </div>
    <div class="btn">
      <a href="">
        <!-- <img src="./favicon-32x32.png" alt="" /> -->
        <span class="material-symbols-outlined"> person </span>
      </a>
    </div>
    <div class="btn">
      <a href="#">
        <span class="material-symbols-outlined"> settings </span>
      </a>
    </div>
  </div>
  <div class="dashboard-main">
    <div class="dashboard-main-top">Progress Dashboard</div>
    <div class="dashboard-main-upper-middle">
      <div class="dashboard-statistics">
        statistics<br>
        <img class="dashboard-statistics-chart" src="<?php URLROOT; ?>public/images/dashboard/line-graph.png" alt="">
      </div>
      <div class="dashboard-extra-statistics">
        More Statistics<br>
        <img class="dashboard-statistics-chart" src="<?php URLROOT; ?>public/images/dashboard/pie-chart.png" alt="">
      </div>
    </div>
    <div class="dashboard-main-lower-middle">
      <p>Item Management</p>
      <img class="dashboard-main-lower-middle-picture" src="<?php URLROOT; ?>public/images/dashboard/crud_list.png" alt="">
    </div>
    <p>This is DASHBOARD Login Users Only</p>
    <p>This page is under constructions</p>

    <form action="" method="post">
      <input type="text" name="text">
      <input type="submit">
    </form>
    <div id="listInsert"></div>
    <?php require "views/users/edit.php" ?>
    <div class="dashboard-main-bottom">
      Summary: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam laudantium modi libero saepe dolore eum ullam exercitationem praesentium blanditiis suscipit ipsam, sed distinctio debitis a nobis, corrupti sequi sint qui.
    </div>
  </div>
  <div class="dashboard-profile">
    <div>
      <img class="dashboard-profile-picture" src="<?php URLROOT; ?>public/images/dashboard/images/memoji-profile-picture.jpeg" alt="" />
    </div>
    <div class="dashboard-profile-full-name">Bader Binsunbil</div>
    <div class="dashboard-profile-last-login">12-Aug-2022</div>
    <div class="dashboard-profile-last-login">progress</div>
  </div>
  <div class="dashboard-footer">
    <span class="material-symbols-outlined"> copyright </span>
    <span> 2022 All rights reserved. Bader Binsunbil </span>
  </div>
</section>
        </div>
    </section>
</div>

    <!-- <section id="section-one" class="first_page_scroll"> -->
        <!-- <div id="first_line_page"></div> -->