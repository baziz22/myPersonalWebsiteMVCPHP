<script src="<?php URLROOT; ?>public/js/router.js" defer></script>
<div class="main_container">
    <section class="first_page_scroll">
        <header>
            <?php require 'views/includes/header.php';?>
        </header>
        <div id="first_line_page">
        <section class="dashboard-container">
  
            <div class="dashboard-sidebar">
                <div class="logo">
                <p>BB</p>
                </div>
                <div class="btn dashboard-btn active">
                <a href="<?php URLROOT;?>dashboard">
                    <!-- <img src="./favicon-32x32.png" alt="" /> -->
                    <span class="material-symbols-outlined"> dashboard </span>
                </a>
                
                </div>
                <div class="btn dashboard-btn">
                    <span class="material-symbols-outlined"> monitoring </span>
                </div>
                <div class="btn dashboard-btn">
                <a href="#">
                    <!-- <img src="./favicon-32x32.png" alt="" /> -->
                    <span class="material-symbols-outlined"> person </span>
                </a>
                </div>
                <div class="btn dashboard-btn">
                <a href="#">
                    <span class="material-symbols-outlined"> settings </span>
                </a>
                </div>
            </div>
            <div class="dashboard-main">
                <div class="dashboard-main-top">Progress Dashboard</div>
                <div class="dashboard-main-upper-middle">
                <div class="dashboard-statistics">
                    <!-- Search for a user -->
                    <div>
                        <h1>Search User</h1>
                        <form action="" method="post">
                            <input type="text" name="text">
                            <button class="btn">Search</button>
                        </form>
                        <div id="listInsert"></div>
                    </div>
                </div>
                <div class="dashboard-extra-statistics">
                    More Statistics<br>
                    <img class="dashboard-statistics-chart" src="<?php URLROOT; ?>public/images/dashboard/pie-chart.png" alt="">
                </div>
                </div>
                <!-- User Management -->
                <div class="dashboard-main-lower-middle">
                <p>User Management</p>
                <div class="main_container">
    <section class="first_page_scroll">
    <div id="first_line_page">
        
        <!-- Add User -->
        <form action="<?php URLROOT; ?>user/create" method="POST">
            <h1>Add User</h1>
            <label for="">Username: </label><input type="text" name="username"><br />
            <label for="">Email: </label><input type="text" name="email"><br />
            <label for="">Password: </label><input type="text" name="password"><br />
            <label for="">Role: </label>
            <select name="role" id="">
                <option value="default">Default</option>
                <option value="user">User</option>
                <option value="super">Super Visor</option>
                <option value="admin">Admin</option>
            </select><br />
            <label for="">&nbsp;</label><input type="submit" name="submit"><br />
        </form>
        <!-- Edit User -->
        
        <!-- Users Table -->
        <div class="user-list-table">
            <table>
            <?php
                //pre_r($this->userList);
                echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>Username</th>';
                echo '<th>Role</th>';
                echo '<th>Action</th>';
                echo '</tr>';
                foreach ($this->userList as $key => $value) {
                    
                    echo '<tr>';
                    echo '<td>' . $value['user_id'] . '. </td>';
                    echo '<td>' . $value['user_name'] . '</td>';
                    echo '<td>' . $value['user_role'] . '</td>';
                    /* echo '<td> <a href="#"><button class="btn btn-view">View</button></a></td>';
                    echo '<td> <a href="' . URLROOT .'user/edit/'. $value['user_id'] . '"><button class="btn">Edit</button></a> </td>';
                    echo '<td> <a href="' . URLROOT .'user/delete/'. $value['user_id'] . '"><button class="btn btn-delete">Delete</button></a> </td>';
                    echo '</tr>'; */
                    echo '<td> <a href="#"><button class="btn btn-view"><i class="fa-solid fa-magnifying-glass"></i> View</button></a>
                    <a href="' . URLROOT .'user/edit/'. $value['user_id'] . '"><button class="btn btn-edit"><i class="fa-solid fa-pencil"></i> Edit</button></a>
                    <a href="' . URLROOT .'user/delete/'. $value['user_id'] . '"><button class="btn btn-delete"><i class="fa-solid fa-trash-can"></i> Delete</button></a>
                    </td>';
                    echo '</tr>';
                }
            ?>
            </table>
        </div> <!-- End of user-list-table -->

        
<!--     </div>
</section> -->
</div>
                </div> <!-- End of User Management -->
                    
                <div class="dashboard-main-bottom">
                Summary: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam laudantium modi libero saepe dolore eum ullam exercitationem praesentium blanditiis suscipit ipsam, sed distinctio debitis a nobis, corrupti sequi sint qui.
                </div>
            </div>
            <div class="dashboard-profile">
                <div>
                <img class="dashboard-profile-picture" src="<?php URLROOT; ?>public/images/dashboard/memoji-profile-picture.jpeg" alt="" />
                </div>
                <div class="dashboard-profile-full-name">Bader Binsunbil</div>
                <div class="dashboard-profile-last-login">12-Aug-2022</div>
                <div class="dashboard-profile-last-login">progress</div>
            </div>
            <div class="dashboard-footer">
                <span class="material-symbols-outlined"> copyright </span>
                <span> 2022 All rights reserved. Bader Binsunbil </span>
            </div>
            </section> <!-- End of dashboard-container -->
        </div>
    </section>
</div>

    <!-- <section id="section-one" class="first_page_scroll"> -->
        <!-- <div id="first_line_page"></div> -->