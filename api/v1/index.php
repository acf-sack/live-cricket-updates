<?php

require '../../vendor/autoload.php';
include "conf/connection.php";

use LiveCricket\Middleware\Authentication as LiveAuth;

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);

$app->add(new LiveAuth());

$app->get('/teams', function ($request, $response, $args) {
//    echo $request->getAttribute('type');

    global $con;
    $_teams = $con->query("SELECT id,name FROM team WHERE status=1");


    $teams = [];

    while ($team= $_teams->fetch_assoc()){
        $teams[] = $team;
    }



    return $response->withStatus(201)->withJson($teams);

});


$app->get('/piumal', function ($request, $response, $args) {

    return $response->withStatus(201)->withJson(["score" =>23, "overs"=>13]);

});


try {
    $app->run();
} catch (\Slim\Exception\MethodNotAllowedException $e) {
} catch (\Slim\Exception\NotFoundException $e) {
} catch (Exception $e) {
    echo 'error';
}