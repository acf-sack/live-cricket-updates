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
    <title>xml</title>
</head>
<body>
    Team bat :<input type="text" id="A"><br><br>
    Batscore  :<input type="text" id="B"><br><br>
    Wickets :<input type="text" id="C"><br><br>
    RunRate :<input type="text" id="D"><br><br>
    Overs :<input type="text" id="E"><br><br>
    Bat1Name :<input type="text" id="F"><br><br>
    Bat1score :<input type="text" id="G"><br><br>
    Bat2Name:<input type="text" id="H"><br><br>
    Bat2score :<input type="text" id="I"><br><br>
    Trail by:<input type="text" id="J"><br><br>
    Bowler :<input type="text" id="K"><br><br>
    Runs :<input type="text" id="L"><br><br>
    This over :<input type="text" id="M"><br><br>
    Marks :<input type="text" id="N"><br><br>

    <button id="btn">submit</button>

</body>
<script src="vendor/jquery/jquery.min.js"></script>

<script>

    $('#btn').click(function () {
        let A = $('#A').val()
        let B = $('#B').val()
        let C = $('#C').val()
        let D = $('#D').val()
        let E = $('#E').val()
        let F = $('#F').val()
        let G = $('#G').val()
        let H = $('#H').val()
        let I = $('#I').val()
        let J = $('#J').val()
        let K = $('#K').val()
        let L = $('#L').val()
        let M = $('#M').val()
        let N = $('#N').val()
        $.ajax({
            url:'../api/v1/plain',
            type: 'post',
            dataType: 'json',
            data: 'A='+A+'&B='+B+'&C='+C+'&D='+D+'&E='+E+'&F='+F+'&G='+G+'&H='+H+'&I='+I+'&J='+J+'&K='+K+'&L='+L+'&M='+M+'&N='+N,
            success: function (data) {
                alert('saved!')
            },error: function (data) {
                alert('error')
            }
        })
    })

</script>
</html>