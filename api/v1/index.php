<?php

require '../../vendor/autoload.php';


$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);


$app->get('/hello', function ($request, $response, $args) {

    return $response->withStatus(201)->withJson(["hello" =>"world"]);

});


try {
    $app->run();
} catch (\Slim\Exception\MethodNotAllowedException $e) {
} catch (\Slim\Exception\NotFoundException $e) {
} catch (Exception $e) {
    echo 'error';
}