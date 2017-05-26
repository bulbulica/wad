<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\PhpRenderer;

require '../vendor/autoload.php';
require 'connection/dbconnection.php';

$app = new \Slim\App;
$container = $app->getContainer();
$container['renderer'] = new PhpRenderer("../view");

session_start();

$app->get('/', function (Request $request, Response $response)
{
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/index.html");
        $this->renderer->render($response, "/html/footer.html");
    }
    else
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/index2.html");
        $this->renderer->render($response, "/html/footer.html");
    }
});

$app->get('/index', function (Request $request, Response $response)
{
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/index.html");
        $this->renderer->render($response, "/html/footer.html");
    }
    else
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/index2.html");
        $this->renderer->render($response, "/html/footer.html");
    }
});

$app->get('/about', function (Request $request, Response $response)
{
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/about.html");
        $this->renderer->render($response, "/html/footer.html");
    }
    else
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/about2.html");
        $this->renderer->render($response, "/html/footer.html");
    }
});

$app->get('/cart', function (Request $request, Response $response)
{
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/cart.html");
        $this->renderer->render($response, "/html/footer.html");
    }
    else
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/cart2.html");
        $this->renderer->render($response, "/html/footer.html");
    }
});

$app->get('/contact', function (Request $request, Response $response)
{
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/contact.html");
        $this->renderer->render($response, "/html/footer.html");
    }
    else
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/contact2.html");
        $this->renderer->render($response, "/html/footer.html");
    }
});

$app->get('/packages', function (Request $request, Response $response)
{
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/index.html");
        $this->renderer->render($response, "/html/footer.html");
    }
    else
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/packages2.html");
        $this->renderer->render($response, "/html/footer.html");
    }
});

$app->get('/bighouses', function (Request $request, Response $response)
{
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/bighouses.html");
        $this->renderer->render($response, "/html/footer.html");
    }
    else
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/bighouses2.html");
        $this->renderer->render($response, "/html/footer.html");
    }
});

$app->get('/smallhouses', function (Request $request, Response $response)
{
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/smallhouses.html");
        $this->renderer->render($response, "/html/footer.html");
    }
    else
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/smallhouses2.html");
        $this->renderer->render($response, "/html/footer.html");
    }
});

$app->get('/threerooms', function (Request $request, Response $response)
{
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/threerooms.html");
        $this->renderer->render($response, "/html/footer.html");
    }
    else
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/threerooms2.html");
        $this->renderer->render($response, "/html/footer.html");
    }
});

$app->get('/tworooms', function (Request $request, Response $response)
{
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/tworooms.html");
        $this->renderer->render($response, "/html/footer.html");
    }
    else
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/tworooms2.html");
        $this->renderer->render($response, "/html/footer.html");
    }
});

$app->get('/studios', function (Request $request, Response $response)
{
    if(!isset($_SESSION["user"]))
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/studios.html");
        $this->renderer->render($response, "/html/footer.html");
    }
    else
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/studios2.html");
        $this->renderer->render($response, "/html/footer.html");
    }
});

$app->get('/login', function (Request $request, Response $response)
{
    $this->renderer->render($response, "/html/header.html");
    $this->renderer->render($response, "/html/login.html");
    $this->renderer->render($response, "/html/footer.html");
});

$app->get('/logout', function (Request $request, Response $response)
{
    $this->renderer->render($response, "/html/header.html");
    $this->renderer->render($response, "/html/logout.html");
    $this->renderer->render($response, "/html/footer.html");
    session_unset();
});

$app->get('/account', function (Request $request, Response $response)
{
    $this->renderer->render($response, "/html/header.html");
    $this->renderer->render($response, "/html/account.php");
    $this->renderer->render($response, "/html/footer.html");
});

$app->get('/account_information', function (Request $request, Response $response)
{
    $this->renderer->render($response, "/html/header.html");
    $this->renderer->render($response, "/html/account_information.php");
    $this->renderer->render($response, "/html/footer.html");
});

$app->get('/account_orders', function (Request $request, Response $response)
{
    $this->renderer->render($response, "/html/header.html");
    //$this->renderer->render($response, "/html/account_information.php");
    $this->renderer->render($response, "/html/footer.html");
});

$app->get('/account_offers', function (Request $request, Response $response)
{
    $this->renderer->render($response, "/html/header.html");
    //$this->renderer->render($response, "/html/account_information.php");
    $this->renderer->render($response, "/html/footer.html");
});

$app->get('/admin', function (Request $request, Response $response)
{
    if(!isset($_SESSION['admin']))
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/admin_login.html");
        $this->renderer->render($response, "/html/footer.html");
    }
    else
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/admin.html");
        $this->renderer->render($response, "/html/footer.html");
    }
});

$app->get('/alluserinformation', function (Request $request, Response $response)
{
    if(isset($_SESSION['admin']))
    {
        $this->renderer->render($response, "/html/header.html");
        $this->renderer->render($response, "/html/alluserinformation.html");
        $this->renderer->render($response, "/html/footer.html");
    }
});

$app->get('/admin_logout', function (Request $request, Response $response)
{
    $this->renderer->render($response, "/html/header.html");
    $this->renderer->render($response, "/html/logout.html");
    $this->renderer->render($response, "/html/footer.html");
    session_unset();
});

$app->post('/admin_login', function (Request $request, Response $response) use ($mysqli)
{
    $submit = $request->getParsedBody()['submit'];
    $user = $request->getParsedBody()['username'];
    $pass = $request->getParsedBody()['password'];
    if(isset($submit))
    {
        $user = mysqli_real_escape_string($mysqli,$user);
        $pass = mysqli_real_escape_string($mysqli,$pass);

        $sel_user = "select * from admin where username='$user' AND password='$pass'";
        $run_user = mysqli_query($mysqli, $sel_user);
        $check_user = mysqli_num_rows($run_user);

        if($check_user>0)
        {
            $_SESSION["admin"] = "$user";
            header("Location: admin");
            die();
        }
        else
        {
            $this->renderer->render($response, "/html/header.html");
            $this->renderer->render($response, "/html/loginerror.html");
            $this->renderer->render($response, "/html/footer.html");
        }
    }
});

$app->get('/users', function (Request $request, Response $response) use ($mysqli)
{
    $query = "select * from users order by id";
    $result = $mysqli -> query($query);
    $data = array();

    while($row = $result -> fetch_assoc())
    {
        $data[] = $row;
    }
    if (isset($data))
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
});

$app->get('/users/{username}', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getAttribute('username');

    $query = "select * from users where username = '$username'";
    $result = $mysqli->query($query);

    $data = $result -> fetch_assoc();

    if (isset($data))
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
});

$app->post('/users', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getParsedBody()['username'];
    $password = $request->getParsedBody()['password'];
    $name = $request->getParsedBody()['name'];
    $surname = $request->getParsedBody()['surname'];
    $adress = $request->getParsedBody()['adress'];
    $account_type = $request->getParsedBody()['account_type'];

    $query = "insert into users (username, password, name, surname, adress, account_type) values ('$username', '$password', '$name', '$surname', '$adress', '$account_type')";

    $mysqli->query($query);
});

$app->put('/users/all', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getParsedBody()['username'];
    $password = $request->getParsedBody()['password'];
    $email = $request->getParsedBody()['email'];
    $name = $request->getParsedBody()['name'];
    $surname = $request->getParsedBody()['surname'];
    $adress = $request->getParsedBody()['adress'];

    $query = "update users set password = '$password', email='$email', name='$name', surname='$surname', adress='$adress' WHERE username = '$username'";

    $mysqli->query($query);
});

$app->put('/users/password', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getParsedBody()['username'];
    $password = $request->getParsedBody()['password'];

    $query = "update users set password = '$password' WHERE username like '$username'";

    $mysqli->query($query);
});

$app->put('/users/email', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getParsedBody()['username'];
    $email = $request->getParsedBody()['email'];

    $query = "update users set email = '$email' WHERE username = '$username'";

    $mysqli->query($query);
});

$app->put('/users/name', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getParsedBody()['username'];
    $name = $request->getParsedBody()['name'];

    $query = "update users set name = '$name' WHERE username = '$username'";

    $mysqli->query($query);
});

$app->put('/users/surname', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getParsedBody()['username'];
    $surname = $request->getParsedBody()['surname'];

    $query = "update users set surname = '$surname' WHERE username = '$username'";

    $mysqli->query($query);
});

$app->put('/users/adress', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getParsedBody()['username'];
    $adress = $request->getParsedBody()['adress'];

    $query = "update users set adress = '$adress' WHERE username = '$username'";

    $mysqli->query($query);
});

$app->put('/users/account_type', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getParsedBody()['username'];
    $account_type = $request->getParsedBody()['account_type'];

    $query = "update users set account_type = '$account_type' WHERE username = '$username'";

    $mysqli->query($query);
});

$app->delete('/users/{username}', function (Request $request, Response $response) use ($mysqli)
{
    $username = $request->getAttribute('username');

    $query = "delete from users where username = '$username'";

    $mysqli->query($query);
});

$app->post('/login', function (Request $request, Response $response) use ($mysqli)
{
    $submit = $request->getParsedBody()['submit'];
    $user = $request->getParsedBody()['username'];
    $pass = $request->getParsedBody()['password'];
    if(isset($submit))
    {
        $user = mysqli_real_escape_string($mysqli,$user);
        $pass = mysqli_real_escape_string($mysqli,$pass);

        $sel_user = "select * from users where username='$user' AND password='$pass'";
        $run_user = mysqli_query($mysqli, $sel_user);
        $check_user = mysqli_num_rows($run_user);

        if($check_user>0)
        {
            $_SESSION["user"] = "$user";
            return $response->withStatus(302)->withHeader('Location', 'account');
        }
        else
        {
            $this->renderer->render($response, "/html/header.html");
            $this->renderer->render($response, "/html/loginerror.html");
            $this->renderer->render($response, "/html/footer.html");
        }
    }
});

$app->get('/products/bighouses', function (Request $request, Response $response) use ($mysqli)
{
    $query = "select * from products where category='bighouses'";
    $result = $mysqli -> query($query);
    $data = array();

    while($row = $result -> fetch_assoc())
    {
        $data[] = $row;
    }
    if (isset($data))
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
});

$app->get('/products/smallhouses', function (Request $request, Response $response) use ($mysqli)
{
    $query = "select * from products where category='smallhouses'";
    $result = $mysqli -> query($query);
    $data = array();

    while($row = $result -> fetch_assoc())
    {
        $data[] = $row;
    }
    if (isset($data))
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
});

$app->get('/products/tworooms', function (Request $request, Response $response) use ($mysqli)
{
    $query = "select * from products where category='tworooms'";
    $result = $mysqli -> query($query);
    $data = array();

    while($row = $result -> fetch_assoc())
    {
        $data[] = $row;
    }
    if (isset($data))
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
});

$app->get('/products/threerooms', function (Request $request, Response $response) use ($mysqli)
{
    $query = "select * from products where category='threerooms'";
    $result = $mysqli -> query($query);
    $data = array();

    while($row = $result -> fetch_assoc())
    {
        $data[] = $row;
    }
    if (isset($data))
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
});

$app->get('/products/studios', function (Request $request, Response $response) use ($mysqli)
{
    $query = "select * from products where category='studios'";
    $result = $mysqli -> query($query);
    $data = array();

    while($row = $result -> fetch_assoc())
    {
        $data[] = $row;
    }
    if (isset($data))
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
});

$app->get('/chart', function (Request $request, Response $response) use ($mysqli)
{
    $query = "select * from chart order by title";
    $result = $mysqli -> query($query);
    $data = array();

    while($row = $result -> fetch_assoc())
    {
        $data[] = $row;
    }
    if (isset($data))
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
});

$app->run();