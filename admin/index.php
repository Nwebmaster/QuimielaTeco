<?php include "../dbconfig.php";
//Set MySQL Error Reporting Mode
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>
<?php
//require_once 'dbconfig.php';
session_start();
?>
<?php //include "../header.php"; 
?>
<?php include "../includes/admin_header.php"; ?>
<script type="text/javascript" src="../adminUsers.js" async></script>
<div id="wrapper">


    <?php include "../admin/admin_navigation.php"; ?>
    <!-- Navigation -->




    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">


                    <h1 class="page-header">
                        Bienvenido Administrador


                        <small> <?php

                                if (isset($_SESSION['username'])) {

                                    echo $_SESSION['username'];
                                }


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


                                <div> Usuarios</div>
                            </div>
                        </div>
                    </div>
                    <a>
                        <div class="panel-footer" style="cursor:pointer;">
                            <span class="pull-left" onclick="myFunction()">Administrar</span>
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

                                $query = "SELECT * FROM week2_results";
                                $select_all_comments = mysqli_query($db, $query);
                                $comment_count = mysqli_num_rows($select_all_comments);

                                echo  "<div class='huge'>{$comment_count}</div>"

                                ?>


                                <div>Actualizar Resultados</div>
                            </div>
                        </div>
                    </div>
                    <a>
                        <div class="panel-footer" style="cursor:pointer;">
                            <span class="pull-left" onclick="myFunction2()">Actualizar Resultados</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-file-text fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">

                                <?php

                                $query = "SELECT * FROM week2_results";
                                $select_all_post = mysqli_query($db, $query);
                                $post_count = mysqli_num_rows($select_all_post);

                                echo  "<div class='huge'>{$post_count}</div>"

                                ?>


                                <div>Quiniela</div>
                            </div>
                        </div>
                    </div>
                    <a href="posts.php">
                        <div class="panel-footer">
                            <span class="pull-left">Crear Nueva Quiniela</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-list fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">

                                <?php

                                $query = "SELECT * FROM week_2";
                                $select_all_categories = mysqli_query($db, $query);
                                $category_count = mysqli_num_rows($select_all_categories);

                                echo  "<div class='huge'>{$category_count}</div>"

                                ?>

                                <div>Pagos</div>
                            </div>
                        </div>
                    </div>
                    <a href="categories.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="container-md">
                <div id="admin-users" style="display:none;">
                    <h1>Adminstrar Usuarios</h1>
                    <table class="table table-bordered" style="width:80%">
                        <thead class="thead-dark ">
                            <tr class>

                                <th style="width:15%">Nombre de Usuario</th>

                                <th>Nombre</th>

                                <th>Apellido</th>

                                <th>No. Telefono</th>

                                <th style="width:5%">Tipo de Usuario</th>

                                <th class="text-center">Reestablecer Contrasena</th>

                                <th class="text-center">Borrar Usuario</th>



                            </tr>
                            <tr id="">
                                <?php

                                //Create query

                                $query = "SELECT * FROM users";
                                $result = mysqli_query($db, $query);

                                if ($result) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['first_name']; ?></td>
                                        <td><?php echo $row['last_name']; ?></td>
                                        <td><?php echo $row['cellphone']; ?></td>
                                        <td><?php echo $row['user_role']; ?></td>
                                        <td class="text-center" id="total-points"><button type="button" class="btn btn-success">Re-establecer</button></td>
                                        <td class="text-center" id="total-points"><button type="button" class="btn btn-danger">Borrar</button></td>

                            </tr>
                    <?php
                                    }
                                }
                    ?>
                    </table>
                </div>
                <div id="admin-results" style="display:none;">
                    <h1>Actualizar Resultados</h1>
                    <table class="table table-bordered" style="width:50%">
                        <thead class="thead-dark ">
                            <tr class>

                                <th scope="col" style="width:10%">No. Pardido</th>

                                <th scope="col" style="width:20%" class="text-center">Local</th>

                                <th scope="col" style="width:1%">V.S</th>

                                <th scope="col" style="width:20%" class="text-center">Vicita</th>

                                <th scope="col" style="width:10%" class="text-center">Resultado</th>

                                <th scope="col" style="width:10%" class="text-center">Editar</th>

                                <th scope="col" style="width:10%" class="text-center">Guardar Cambios</th>





                            </tr>
                            <tr id="">
                                <?php

                                //Create query

                                $query = "SELECT * FROM week2_results";
                                $result = mysqli_query($db, $query);

                                if ($result) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <td><?php echo $row['game_id']; ?></td>
                                        <td class="text-center"><?php echo $row['local']; ?></td>
                                        <td class="text-center"><?php echo 'v.s'; ?></td>
                                        <td class="text-center"><?php echo $row['visitor']; ?></td>
                                        <td class="text-center"><?php echo $row['game_result']; ?></td>
                                        <td class="text-center" id="editar"><button type="button" class="btn btn-success">Editar</button></td>
                                        <td class="text-center" id="guardar"><button type="button" class="btn btn-primary">OK</button></td>




                            </tr>
                    <?php
                                    }
                                }
                    ?>
                    </table>
                </div>
            </div> <!--End of container-->