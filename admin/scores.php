<?php
session_start();
if(!isset($_SESSION['type']) && $_SESSION['type']!='admin'){
header('Location: login.php');
die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>102nd Battle of Blues</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/switch.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow text-white">


                <a class="navbar-brand" href="https://www.sack.lk">102nd Battle of Blues</a>


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">


                    <!-- Nav Item - Alerts -->

                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link" href="#" role="button">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Live Scores</span>

                        </a>

                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container container-fluid">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card mb-4">
                            <div class="container">
                                <div class="card-header-md">
                                    <div class="text-dark text-sm-left"><b>Previous records</b></div>
                                </div>
                            </div><br>
                            <div class="card-body-sm">
                                <div class="container table ">
                                    <table class="table">
                                        <thead>
                                        <tr class="row-md">
                                            <th>over</th>
                                            <th> ball</th>
                                            <th>batsman</th>
                                            <th>bowler</th>
                                            <th>score</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><input type="text" class="form-control form-control-user" placeholder="0" readonly></td>
                                            <td><input type="text" class="form-control form-control-user" placeholder="1" readonly></td>
                                            <td><input type="text" class="form-control form-control-user" placeholder="Batsman1" readonly></td>
                                            <td><input type="text" class="form-control form-control-user"
                                                       placeholder="Bowler1" readonly></td>
                                            <td><input type="text" class="form-control form-control-user" placeholder="4" readonly></td>
                                            <td> <button class="btn btn-warning">edit</button></td>
                                            <td> <button class="btn btn-danger">delete</button></td>
                                        </tr>

                                        <tr>
                                            <td><input type="text" class="form-control form-control-user" value="0"></td>
                                            <td><input type="text" class="form-control form-control-user" value="1"></td>
                                            <td>
                                                <div class="dropdown mb-4">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="bowler"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Batsman
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Batsman 1</a>
                                                        <a class="dropdown-item" href="#">Batsman 2</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown mb-4">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                                            id="bowler3"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        Bowler
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Bowler 1</a>
                                                        <a class="dropdown-item" href="#">Bowler 2</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><input type="text" class="form-control form-control-user" value="4"></td>
                                            <td> <button class="btn btn-success">submit</button></td>
                                            <td> <button class="btn btn-primary">cancel</button></td>
                                        </tr>


                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="container">
                                <div class="card-header-md">
                                    <div class="text-dark text-sm-left"><b>Wickets</b></div>
                                </div>
                            </div><br>
                            <div class="card-body-sm">
                                <div class="container table ">
                                    <table class="table">
                                        <thead>
                                        <tr class="row-md">
                                            <th>over</th>
                                            <th> ball</th>
                                            <th>dis. batsman</th>
                                            <th>bowler</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><input type="text" class="form-control form-control-user" placeholder="0" readonly></td>
                                            <td><input type="text" class="form-control form-control-user" placeholder="1" readonly></td>
                                            <td><input type="text" class="form-control form-control-user" placeholder="Batsman1" readonly></td>
                                            <td><input type="text" class="form-control form-control-user" placeholder="Bowler2" readonly></td>
                                            <td> <button class="btn btn-warning">edit</button></td>
                                            <td> <button class="btn btn-danger">delete</button></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" class="form-control form-control-user" placeholder="0"></td>
                                            <td><input type="text" class="form-control form-control-user" placeholder="1"></td>
                                            <td>
                                                <div class="dropdown mb-4">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                                            id="bowlersf"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        Batsman
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">batsman</a>
                                                        <a class="dropdown-item" href="#">Batsman 2</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown mb-4">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                                            id="bowlersf"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                       bowler
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">bowler 1</a>
                                                        <a class="dropdown-item" href="#">bowler 2</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <button class="btn btn-success">submit</button></td>
                                            <td> <button class="btn btn-primary">cancel</button></td>
                                        </tr>


                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-2">

                    </div>

                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; St. Anthony's College Kandy</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="modelTitle">Edit Score</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                    <tr class="row-md">
                        <th>over</th>
                        <th> ball</th>
                        <th>batsman</th>
                        <th>bowler</th>
                        <th>score</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="text" class="form-control form-control-user" placeholder="0" readonly></td>
                        <td><input type="text" class="form-control form-control-user" placeholder="1" readonly></td>
                        <td><input type="text" class="form-control form-control-user" placeholder="Batsman1" readonly></td>
                        <td><input type="text" class="form-control form-control-user"
                                   placeholder="Bowler1" readonly></td>
                        <td><input type="text" class="form-control form-control-user" placeholder="4" readonly></td>
                        <td> <button class="btn btn-warning">edit</button></td>
                        <td> <button class="btn btn-danger">delete</button></td>
                    </tr>

                    <tr>
                        <td><input type="text" class="form-control form-control-user" value="0"></td>
                        <td><input type="text" class="form-control form-control-user" value="1"></td>
                        <td>
                            <div class="dropdown mb-4">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="bowler"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Batsman
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Batsman 1</a>
                                    <a class="dropdown-item" href="#">Batsman 2</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="dropdown mb-4">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="bowler3"
                                        data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    Bowler
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Bowler 1</a>
                                    <a class="dropdown-item" href="#">Bowler 2</a>
                                </div>
                            </div>
                        </td>
                        <td><input type="text" class="form-control form-control-user" value="4"></td>
                        <td> <button class="btn btn-success">submit</button></td>
                        <td> <button class="btn btn-primary">cancel</button></td>
                    </tr>


                    </tbody>
                </table>
            </div>
            <div class="modal-footer">

                <div class="right-side">
                    <button type="button" class="btn btn-danger btn-simple">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--    end modal -->




<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>
