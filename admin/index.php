<?php include "../dbconfig.php"; ?>
<?php
//require_once 'dbconfig.php';
session_start();
?>
<?php include "../header.php"; ?>
<?php include "../includes/admin_header.php"; ?>

<div id="wrapper">



    <!-- Navigation -->




    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">


                    <h1 class="page-header">
                        Welcome to admin


                        <small> <?php

                                if (isset($_SESSION['username'])) {

                                    echo $_SESSION['username'];
                                }


                                // if(is_admin($_SESSION['username'])){

                                //     echo " -- is admin too";

                                // } else {

                                //     echo " ---is not";

                                // }





                                ?></small>
                    </h1>



                </div>
            </div>

            <!-- /.row -->

            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">

                                <?php

                                $query = "SELECT * FROM users";
                                $select_all_users = mysqli_query($db, $query);
                                $user_count = mysqli_num_rows($select_all_users);

                                echo  "<div class='huge'>{$user_count}</div>"

                                ?>


                                <div> Users</div>
                            </div>
                        </div>
                    </div>
                    <a href="users.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-comments fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">

                                <?php

                                $query = "SELECT * FROM week_2";
                                $select_all_comments = mysqli_query($db, $query);
                                $comment_count = mysqli_num_rows($select_all_comments);

                                echo  "<div class='huge'>{$comment_count}</div>"

                                ?>


                                <div>Players</div>
                            </div>
                        </div>
                    </div>
                    <a href="comments.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>