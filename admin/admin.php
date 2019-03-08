<?php
session_start();
if (!isset($_SESSION['type']) && $_SESSION['type'] != 'admin') {
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
                    <div class="col-md-8">
                        <div>Inning -</div>
                        <span id="inning"></span>
                        <div>Team(Batting) -</div>
                        <span id="team"></span>
                        <div class="card mb-4 py-3 border-left-primary">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Current Batsmans</h6>
                            </div>
                            <div class="card-body">
                                <div class="user">
                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user "
                                                   placeholder="Batsman1 id" id="txt-batsman-1">
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0 text-center">
                                            <--
                                            <label class="switch">

                                                <input type="checkbox" id="chk-is-second">
                                                <span class="slider round"></span>

                                            </label>
                                            -->
                                        </div>

                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="number" class="form-control form-control-user"
                                                   placeholder="Batsman2 id" id="txt-batsman-2">
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control form-control-user"
                                                   placeholder="Bowler id" id="txt-bowler">

                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-right">
                                                <button class="btn btn-warning" onclick="updatePlayers()">
                                                    Update
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card mb-4 py-3 border-left-primary">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Current Over</h6>
                            </div>
                            <div class="card-body">
                                <form class="user">
                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user disabled"
                                                   placeholder="Over" id="txt-over">
                                        </div>

                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-user"
                                                   placeholder="Ball" id="txt-balls">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card mb-4 py-3 border-left-primary">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Add Scores</h6>
                            </div>
                            <div class="card-body text-center">

                                <button href="#" class="btn btn-dark btn-circle">
                                    0
                                </button>
                                <button href="#" class="btn btn-secondary btn-circle">
                                    1
                                </button>
                                <button href="#" class="btn btn-info btn-circle">
                                    2
                                </button>
                                <button href="#" class="btn btn-primary btn-circle">
                                    3
                                </button>
                                <button href="#" class="btn btn-warning btn-circle">
                                    4
                                </button>
                                <button href="#" class="btn btn-success btn-circle">
                                    6
                                </button>
                                <button href="#" class="btn btn-danger btn-circle" data-toggle="modal"
                                        data-target="#myModal">
                                    W
                                </button>
                                <div class="dropdown-divider"></div>
                                <div class="text-center">
                                    <button href="#" class="btn btn-lg btn-danger">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 py-3 border-left-primary">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Extras</h6>
                            </div>
                            <div class="card-body">
                                <form class="user">
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="usr">Score:</label>
                                            <input type="number" class="form-control" id="txt-extra-score">
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="sel1">Type:</label>
                                                <select class="form-control" id="select-extra-score-type">
                                                    <option>wd</option>
                                                    <option>nb</option>
                                                    <option>b</option>
                                                    <option>lb</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="text-center">
                                    <button href="#" class="btn btn-warning" onclick="addExtras()">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4 py-3 border-left-primary">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Player Extras</h6>
                            </div>
                            <div class="card-body">
                                <form class="user">
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="usr">Player Id:</label>
                                            <input type="number" class="form-control" id="txt-player-extra-id">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="usr">Score:</label>
                                            <input type="number" class="form-control" id="txt-player-extra-score">
                                        </div>
                                    </div>
                                </form>
                                <div class="text-center">
                                    <button href="#" class="btn btn-warning" onclick="addPlayerExtras()">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </div>

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

                <h4 class="modal-title" id="modelTitle">Dissmissed Player</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="dropdown mb-4">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dismissed batsman"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Choose the Batsman
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Batsman 1</a>
                        <a class="dropdown-item" href="#">Batsman 2</a>
                    </div>
                </div>
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

<script>
    var team_id = null;
    var inning = null;
    var over = null;
    var balls = null;
    var batsman_1 = null;
    var batsman_2 = null;
    var bowler = null;
    $(function () {
        over = $('#txt-over')
        balls = $('#txt-balls')
        batsman_1 = $('#txt-batsman-1')
        batsman_2 = $('#txt-batsman-2')
        bowler = $('#txt-bowler')

        $.ajax({
            url: "../api/v1/current-details",
            type: "get",
            dataType: "json",
            success: function (data) {
                team_id = data.team_id;
                inning = data.inning;

                $("#inning").text(inning);
                $("#team").text(team_id)
            }

        })

    })

    function addExtras() {
        let score = $('#txt-extra-score').val()
        let type = $('#select-extra-score-type').val()
        $.ajax({
            url: "../api/v1/extra-team-score",
            type: "post",
            data: 'team_id='+team_id+'&inning='+inning+'&score='+score+'&type='+type+'&over='+over.val(),
            success: function (data) {
                alert("saved");
            },
            error: function (data) {
                alert("error")
                console.log(data)
            }
        })
    }

    function addPlayerExtras() {
        let score = $('#txt-player-extra-score').val()
        let player = $('#txt-player-extra-id').val()
        $.ajax({
            url: "../api/v1/extra-batsman-score",
            type: "post",
            data: 'team_id='+team_id+'&inning='+inning+'&score='+score+'&type='+type+'&over='+over.val(),
            success: function (data) {
                alert("saved");
            },
            error: function (data) {
                alert("error")
                console.log(data)
            }
        })
    }

    function updatePlayers() {
        let batsman_1_id = batsman_1.val()
        let batsman_2_id = batsman_2.val()
        let bowler_id = bowler.val()
        let striker = batsman_1_id
        let nonStriker= batsman_2_id

        if($('#chk-is-second').prop( "checked" )){
            striker = batsman_2_id
            nonStriker = batsman_1_id
        }

        console.log($('#chk-is-second').prop( "checked" ))

        $.ajax({
            url: "../api/v1/update-player",
            type: "post",
            data: 'bowler_player_id='+bowler_id+'&striker_player_id='+striker+'&non_striker_player_id='+nonStriker,
            success: function (data) {
                alert("saved");
                console.log(data);
            },
            error: function (data) {
                alert("error")
                console.log(data)
            }
        })
    }



</script>
</body>

</html>
