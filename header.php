
<?php include_once("DbConnection.php"); ?>
<!-- start header -->
            <header>
                <!-- start navigation -->
                <nav class="navbar navbar-default bootsnav background-white header-light navbar-scroll-top navbar-expand-lg">
            
                    <div class="container nav-header-container">

                        <!-- start logo -->
                        <div class="col-auto pl-lg-0" style="margin-top: 10px; margin-bottom: -10px;">
                            <font color="black" style="font-family:red;"><h4>EaseWork</h4></font>
                        </div>
                        <!-- end logo -->

                        <div class="col accordion-menu pr-0 pr-md-3">
                            <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">

                                <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">

                                    <?php
                                        if(isset($_SESSION['UserID']))
                                        {

                                            $sel_User="select * from tbluser where Uid='".$_SESSION['UserID']."'";
                                            $Execute_sel_User=mysqli_query($con,$sel_User) or die(mysqli_error($con));
                                            $fetch=mysqli_fetch_array($Execute_sel_User);
                                    ?>

                                    <!-- start menu item -->
                                    <li class="dropdown megamenu-fw">
                                        <a href="Index_home.php?Uid=<?php echo $_SESSION['UserID'];?>">Home</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    </li>
                                    <li class="dropdown simple-dropdown">
                                        <a href="TemplateIntro.php?Uid=<?php echo $_SESSION['UserID'];?>">Templates</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    </li>
                                    <li class="dropdown megamenu-fw">
                                        <a href="About.php?Uid=<?php echo $_SESSION['UserID'];?>">About Us</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    </li>
                                    <li class="dropdown simple-dropdown">
                                        <a href="Contact.php?Uid=<?php echo $_SESSION['UserID'];?>" >Contact Us</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#" class="dropbtn"><span style="color: #ff214f;">Hi,&nbsp;<?php echo $fetch['Fname']." ".$fetch['Lname']; ?></span></a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                        <div class="dropdown-content" >
                                            <a href="index.php">&nbsp;&nbsp;Dashboard</a>
                                            <a href="profile.php">&nbsp;&nbsp;Profile</a>
                                            <a href="logout.php">&nbsp;&nbsp;Logout</a>
                                        </div>
                                    </li>

                                    <?php
                                        }
                                        else
                                        {
                                    ?>
                                    <li class="dropdown megamenu-fw">
                                        <a href="Index_home.php">Home</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    </li>
                                    <li class="dropdown simple-dropdown">
                                        <a href="TemplateIntro.php">Templates</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    </li>
                                    <li class="dropdown megamenu-fw">
                                        <a href="About.php">About Us</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    </li>
                                    <li class="dropdown simple-dropdown">
                                        <a href="Contact.php" >Contact Us</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    </li>
                                    <li class="dropdown megamenu-fw">
                                        <a href="login.php">Login</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    </li>
                                    <li class="dropdown megamenu-fw">
                                        <a href="register.php">SignUp</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>   
                                    </li>
                                    <?php
                                        }
                                    ?>
                                </ul>

                            </div>
                        </div>

                    </div>

                </nav>
                <!-- end navigation --> 
            </header>
            <!-- end header -->