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
    <meta charset="UTF-8">
    <title>fullscorecard</title>
    <meta http-equiv="X-UA-Compatible" content="IEedge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <title>inning</title>

</head>
<body>
<div class="container">
    <div class="row">
    <div class="col-5">
        <div class="card">
<!--            <div class="card bg-info">-->
<!--                <h3 class="text-center" style="color: black">INNING</h3>-->
<!--            </div>-->
<!--            <div class="card-body text-center">-->
<!--                <input type="radio" name="inning" value="1st-inn">1st Inning<br>-->
<!--                <input type="radio" name="inning" value="2nd-inn">2nd Inning<br>-->
<!--                <input type="radio" name="inning" value="3rd-inn">3rd Inning<br>-->
<!--                <input type="radio" name="inning" value="4th-inn">4th Inning-->
<!---->
<!--            </div>-->

            <span>Inning</span>
            <input type="text" name="inning" id="inning" placeholder="inning"><br><br>

            <span>Team id</span>
            <input type="text" name="team" id="team" placeholder="team"><br><br>

            <input id="btnAddInning" type="submit">

        </div>
    </div>
    <div class="col-2">
    </div>
<!--    <div class="col-5">-->
<!--        <div class="card">-->
<!--            <div class="card bg-info">-->
<!--                <h3 class="text-center" style="color: black">Team</h3>-->
<!--            </div>-->
<!--            <div class="card-body text-center">-->
<!--                <input type="radio" name="team" value="sack">SACK<br>-->
<!--                <input type="radio" name="team" value="tck">TCK-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    </div>
    <br>
<!--    <button class="btn btn-secondary ">save</button>-->
</div>

</body>
<script src="vendor/jquery/jquery.min.js"></script>

<script>
    $(function () {

        $("#btnAddInning").click(function () {
            let inning= $("#inning").val();
            let team = $("#team").val();


            $.ajax({
                url : "http://localhost/live-cricket-updates/api/v1/current-details",
                type : "post",
                // dataType : "json",
                data : 'inning='+inning+'&team_id='+team,
                success : function () {
                    console.log("success")
                },
                error : function (data) {
                    console.log("error")
                    console.log(data)
                }

            })
        })



    })
</script>

</html>