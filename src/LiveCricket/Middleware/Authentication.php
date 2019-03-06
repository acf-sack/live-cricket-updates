<?php
namespace LiveCricket\Middleware;
class Authentication
{
    public function __invoke($request, $response, $next)
    {
        $logged = false;
        $type = "anonymous";
        if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
            $logged = true;
            $type = $_SESSION['type'];
            if(isset($_SESSION['displayName'])) $request = $request->withAttribute('displayName', $_SESSION['displayName']);
            $request = $request->withAttribute('id', $_SESSION['id']);
        }
        $request = $request->withAttribute('logged', $logged);
        $request = $request->withAttribute('type', $type);
        $response = $next($request, $response);
        return $response;
    }
}