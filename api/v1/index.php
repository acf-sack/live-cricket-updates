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

$app->get('/hello', function ($request, $response, $args) {
//    echo $request->getAttribute('type');
    $array = [];

    $array[] = "hi";
    $array[] = "hooi";
    $array[] = "babi";

    return $response->withStatus(201)->withJson($array);

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